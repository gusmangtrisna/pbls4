from fastapi import FastAPI, HTTPException
from fastapi.responses import StreamingResponse
from fastapi.middleware.cors import CORSMiddleware
from pydantic import BaseModel
from groq import Groq
from dotenv import load_dotenv
import os
import asyncio
from typing import List, Dict, Any, Optional

load_dotenv()

app = FastAPI(title="Taman Edelweis API", version="1.0.0")

app.add_middleware(
    CORSMiddleware,
    allow_origins=["*"],
    allow_credentials=True,
    allow_methods=["*"],
    allow_headers=["*"],
)

# Ambil API key dari environment variable
GROQ_API_KEY = os.getenv("GROQ_API_KEY")
if not GROQ_API_KEY:
    raise ValueError("GROQ_API_KEY environment variable is not set")

client = Groq(api_key=GROQ_API_KEY)

SYSTEM_MESSAGE = {
    "role": "system",
    "content": "Kamu adalah chatbot yang hanya boleh memberikan informasi tentang Taman Edelweis Besakih Bali sesuai dengan daftar FAQ yang tersedia. Janga menjawab pertanyaan di luar topik tersebut, termasuk tentang lokasi lain, sejarah, transportasi, rekomendasi hotel, atau hal-hal yang tidak tercantum dalam FAQ resmi. Jika pertanyaan tidak sesuai, jawab dengan: 'Maaf, saya hanya dapat membantu pertanyaan seputar Taman Edelweis Besakih Bali.' Untuk harga tiket masuk ke taman edelweis bali adalah 15k weekdays dan 20k untuk weekend."
}

LLM_MODEL = "llama3-70b-8192"
MAX_TOKENS = 1024

class Message(BaseModel):
    role: str
    content: str

class ChatRequest(BaseModel):
    history: List[Message] = []
    message: str

class ChatResponse(BaseModel):
    reply: str

@app.get("/")
async def root():
    return {"status": "online", "service": "Taman Edelweis Besakih Bali Chatbot"}

@app.post("/chat", response_model=ChatResponse)
async def chat(chat_request: ChatRequest):
    try:
        messages = [SYSTEM_MESSAGE] + chat_request.history + [{
            "role": "user",
            "content": chat_request.message
        }]

        chat_completion = client.chat.completions.create(
            messages=messages,
            max_completion_tokens=MAX_TOKENS,
            model=LLM_MODEL,
            stream=False,
        )

        reply_content = chat_completion.choices[0].message.content
        return ChatResponse(reply=reply_content)

    except Exception as e:
        raise HTTPException(status_code=500, detail=f"Error dari LLM API: {str(e)}")

async def stream_generator(messages: List[Dict[str, Any]]):
    try:
        chat_completion = client.chat.completions.create(
            messages=messages,
            max_completion_tokens=MAX_TOKENS,
            model=LLM_MODEL,
            stream=True,
        )

        for chunk in chat_completion:
            if chunk.choices and chunk.choices[0].delta and chunk.choices[0].delta.content:
                content = chunk.choices[0].delta.content
                yield content
    except Exception as e:
        yield f"Error: {str(e)}"

@app.post("/chat-stream")
async def chat_stream(chat_request: ChatRequest):
    try:
        messages = [SYSTEM_MESSAGE] + chat_request.history + [{
            "role": "user",
            "content": chat_request.message
        }]

        return StreamingResponse(
            stream_generator(messages),
            media_type="text/plain"
        )

    except Exception as e:
        raise HTTPException(status_code=500, detail=f"Error streaming: {str(e)}")

if __name__ == "__main__":
    import uvicorn
    uvicorn.run("main:app", host="0.0.0.0", port=8888, reload=True)

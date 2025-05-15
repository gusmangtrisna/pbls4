from fastapi import FastAPI, Request, HTTPException
from fastapi.responses import StreamingResponse
from pydantic import BaseModel
from groq import Groq
import os
import asyncio

app = FastAPI()

# Inisialisasi Groq Client
client = Groq(
    api_key=os.environ.get("GROQ_API_KEY") or "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",
)

# System message tetap
system_message = {
    "role": "system",
    "content": "Kamu adalah chatbot yang hanya boleh memberikan informasi tentang Taman Edelweis Besakih Bali sesuai dengan daftar FAQ yang tersedia. Janga menjawab pertanyaan di luar topik tersebut, termasuk tentang lokasi lain, sejarah, transportasi, rekomendasi hotel, atau hal-hal yang tidak tercantum dalam FAQ resmi. Jika pertanyaan tidak sesuai, jawab dengan: 'Maaf, saya hanya dapat membantu pertanyaan seputar Taman Edelweis Besakih Bali.' Untuk harga tiket masuk ke taman edelweis bali adalah 15k weekdays dan 20k untuk weekend."
}

# Model inputan
class ChatRequest(BaseModel):
    history: list  # [{"role": "user/assistant", "content": "xxx"}]
    message: str
    
# Endpoint 1: Non-streaming (langsung)
@app.post("/chat")
async def chat(chat_request: ChatRequest):
    try:
        # Gabungkan semua messages
        messages = [system_message] + chat_request.history + [{
            "role": "user",
            "content": chat_request.message
        }]

        # Panggil Groq tanpa streaming
        chat_completion = client.chat.completions.create(
            messages=messages,
            max_completion_tokens=1024,
            model="llama3-70b-8192",
            stream=False,
        )

        reply_content = chat_completion.choices[0].message.content
        return {"reply": reply_content}
    
    except Exception as e:
        raise HTTPException(status_code=500, detail=str(e))

# Helper untuk streaming
async def wrap_sync_gen(sync_gen):
    for item in sync_gen:
        yield item
        await asyncio.sleep(0)  # supaya tidak blocking

async def generate_response(messages):
    chat_completion = client.chat.completions.create(
        messages=messages,
        max_completion_tokens=1024,
        model="llama3-70b-8192",
        stream=True,
    )

    async for chunk in wrap_sync_gen(chat_completion):
        if chunk.choices and chunk.choices[0].delta and chunk.choices[0].delta.content:
            content = chunk.choices[0].delta.content
            yield content

# Endpoint 2: Streaming
@app.post("/chat-stream")
async def chat_stream(chat_request: ChatRequest):
    try:
        messages = [system_message] + chat_request.history + [{
            "role": "user",
            "content": chat_request.message
        }]

        return StreamingResponse(generate_response(messages), media_type="text/plain")
    
    except Exception as e:
        raise HTTPException(status_code=500, detail=str(e))
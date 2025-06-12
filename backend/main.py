from fastapi import FastAPI, HTTPException
from fastapi.responses import StreamingResponse
from fastapi.middleware.cors import CORSMiddleware
from pydantic import BaseModel
from groq import Groq
from dotenv import load_dotenv
import os
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

GROQ_API_KEY = os.getenv("GROQ_API_KEY")
if not GROQ_API_KEY:
    raise ValueError("GROQ_API_KEY environment variable is not set")

client = Groq(api_key=GROQ_API_KEY)

SYSTEM_MESSAGE = {
    "role": "system",
    "content": """
Kamu adalah asisten virtual khusus untuk Taman Edelweis Besakih Bali.
PENTING: HARUS SELALU MENGGUNAKAN BAHASA INDONEIA YANG SANTAI DAN TIDAK TERLALU FORMAL

Berikut aturan dan informasi yang harus kamu ikuti:

(1) INFORMASI UTAMA:
- Harga tiket masuk: Rp 15.000 weekdays, Rp 20.000 weekend untuk domestik.
- Harga tiket masuk: Rp 50.000 weekdays, Rp 75.000 weekend untuk internasional.
- Lokasi: Besakih!.
- Jam buka: 08.00 - 18.00 WITA setiap hari.
- Pemandangan: Bunga Edelweis, Gunung Agung, area camping, jalur trekking.

(2) CARA MENJAWAB:
- Jika ditanya tentang informasi di luar Taman Edelweis, **jangan langsung menolak**. Balas dengan sopan seperti:
  'Maaf, saya adalah asisten Taman Edelweis Besakih Bali. Saya bisa membantu Anda dengan informasi tentang lokasi, tiket masuk, fasilitas, atau atraksi di taman kami. Ada yang ingin Anda ketahui tentang Taman Edelweis?'
- Jika pertanyaan **ambigu atau tidak jelas**, tetap arahkan ke topik yang relevan dengan Taman Edelweis.
- Jawab dengan **ramah, santai namun tetap profesional**.

(3) PRIORITAS UTAMA:
- **Selalu prioritaskan** informasi mengenai Taman Edelweis Besakih Bali.
- **Jangan menjawab** pertanyaan tentang **tokoh lokal**, **legenda**, atau **tempat wisata lain**, meskipun disebutkan dalam pertanyaan.
- **Hindari menyebut atau menjelaskan**legenda, atau lokasi selain Taman Edelweis. Cukup arahkan kembali ke topik utama.

Contoh tanggapan yang benar:
Pengguna: "Bisakah saya bertemu Kepala Desa?"
Asisten: "Maaf, saya adalah asisten Taman Edelweis Besakih Bali. Saya hanya dapat membantu Anda dengan informasi seputar taman kami. Ada yang ingin Anda ketahui tentang lokasi, tiket masuk, atau atraksi di Taman Edelweis?"

Tugas utama Anda adalah membantu pengunjung dengan informasi yang relevan tentang Taman Edelweis Besakih Bali.
"""
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

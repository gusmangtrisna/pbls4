# Taman Edelweis Besakih Bali Chatbot API

Backend API untuk chatbot Taman Edelweis Besakih Bali menggunakan FastAPI dan Groq LLM.

## Instalasi

1. Clone repository
2. Install dependencies:

```bash
pip install -r requirements.txt
```

3. Setup environment variables:

```bash
cp .env.example .env
# Edit .env dan masukkan GROQ_API_KEY kamu
```

## Menjalankan API

Development mode dengan auto-reload:

```bash
uvicorn main:app --reload --port 7000
```

Atau gunakan script yang sudah disediakan:

```bash
python main.py
```

## Endpoints

- `GET /` - Health check dan info API
- `POST /chat` - Endpoint non-streaming untuk chat
- `POST /chat-stream` - Endpoint streaming untuk chat

## Dokumentasi API

Setelah menjalankan server, kamu bisa mengakses dokumentasi interaktif di:

- Swagger UI: http://localhost:8000/docs
- ReDoc: http://localhost:8000/redoc

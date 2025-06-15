<button id="chatbot-toggle-btn"
    class="fixed bottom-4 right-6 bg-[#2C3930] hover:bg-[#364c3d] text-white p-3 rounded-full shadow-lg transition duration-300 ease-in-out z-[9999]"
    aria-label="Chatbot">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
        class="w-10 h-10">
        <path stroke-linecap="round" stroke-linejoin="round"
            d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z" />
    </svg>
</button>

<div id="chatbot-popup"
    class="fixed bottom-[calc(4rem+1.5rem)] right-0 mr-6 bg-white p-6 rounded-lg border border-gray-200 w-[500px] h-[450px] z-40 transition-all duration-300 ease-in-out transform scale-95 opacity-0 invisible pointer-events-none md:flex flex-col shadow-lg"
    style="box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.1);">

    <div class="flex flex-col space-y-1.5 pb-4 border-b">
        <h2 class="font-semibold text-lg tracking-tight">Chatbot</h2>
        <p class="text-sm text-[#6b7280] leading-3">Silahkan Tanyakan Seputar Taman Edelweis Bali</p>
    </div>

    <div id="chat-messages" class="pr-4 flex-1 overflow-y-auto flex flex-col space-y-4 py-4" style="scrollbar-width: thin; min-width: 100%;">
        <div class="flex gap-3 mb-2 text-gray-600 text-sm">
            <span class="relative flex shrink-0 overflow-hidden rounded-full w-8 h-8">
                <div class="rounded-full bg-gray-100 border p-1 flex items-center justify-center">
                    <svg stroke="none" fill="black" stroke-width="1.5" viewBox="0 0 24 24" aria-hidden="true"
                        height="16" width="16" class="transform -translate-y-[2px]" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z">
                        </path>
                    </svg>
                </div>
            </span>
            <div class="bg-gray-50 rounded-lg px-4 py-2 max-w-[calc(100%-3rem)]">
                <span class="block font-bold text-gray-700 mb-1">AI</span>
                <div class="prose prose-sm">Halo! Ada yang bisa saya bantu tentang Taman Edelweis Besakih Bali?</div>
            </div>
        </div>
    </div>

    <div class="bg-white border-t border-gray-100 pt-3 mt-auto">
        <form id="chat-form" class="flex items-center justify-center w-full space-x-2">
            <input id="chat-input"
                class="flex h-10 w-full rounded-md border border-[#e5e7eb] bg-white px-3 py-2 text-sm placeholder-[#6b7280] focus:outline-none focus:ring-2 focus:ring-[#9ca3af] text-[#030712] focus-visible:ring-offset-2"
                placeholder="Ketik pesan Anda..." value="">
            <button id="send-button" type="submit"
                class="inline-flex items-center justify-center rounded-md text-sm font-medium text-white bg-[#2C3930] hover:bg-[#364c3d] h-10 px-4 py-2 transition-colors duration-200">
                <span id="send-text">Kirim</span>
                <span id="loading-spinner" class="hidden">
                    <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                            stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor"
                            d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                        </path>
                    </svg>
                </span>
            </button>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/dompurify@3.0.5/dist/purify.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        let chatHistory = [];
        const API_URL = 'http://localhost:7000';

        marked.setOptions({
            breaks: true,
            gfm: true,
            headerIds: false,
            mangle: false
        });

        setTimeout(function() {
            const toggleBtn = document.getElementById("chatbot-toggle-btn");
            const popup = document.getElementById("chatbot-popup");
            const chatForm = document.getElementById("chat-form");
            const chatInput = document.getElementById("chat-input");
            const chatMessages = document.getElementById("chat-messages");
            const sendButton = document.getElementById("send-button");
            const sendText = document.getElementById("send-text");
            const loadingSpinner = document.getElementById("loading-spinner");

            const style = document.createElement('style');
            style.textContent = `
                #chat-messages::-webkit-scrollbar {
                    width: 6px;
                }
                #chat-messages::-webkit-scrollbar-track {
                    background: #f1f1f1;
                    border-radius: 10px;
                }
                #chat-messages::-webkit-scrollbar-thumb {
                    background: #c1c1c1;
                    border-radius: 10px;
                }
                #chat-messages::-webkit-scrollbar-thumb:hover {
                    background: #a1a1a1;
                }

                .user-message {
                    background-color: #f3f8ff;
                }
                .ai-message {
                    background-color: #f9f9f9;
                }

                .typing-indicator {
                    display: inline-flex;
                    align-items: center;
                    margin-top: 10px;
                    margin-bottom: 12px;
                    height: 10px;
                }
                .typing-indicator span {
                    width: 5px;
                    height: 5px;
                    margin: 0 2px;
                    background-color: #888;
                    border-radius: 50%;
                    display: inline-block;
                    animation: bounce 1.2s infinite ease-in-out both;
                }
                .typing-indicator span:nth-child(1) {
                    animation-delay: -0.32s;
                }
                .typing-indicator span:nth-child(2) {
                    animation-delay: -0.16s;
                }
                @keyframes bounce {
                    0%, 80%, 100% {
                        transform: translateY(0);
                    }
                    40% {
                        transform: translateY(-8px);
                    }
                }

                .prose p {
                    margin-top: 0.5em;
                    margin-bottom: 0.5em;
                }
                .prose ul {
                    margin-top: 0.5em;
                    margin-bottom: 0.5em;
                    padding-left: 1.5em;
                    list-style-type: disc;
                }
                .prose ol {
                    margin-top: 0.5em;
                    margin-bottom: 0.5em;
                    padding-left: 1.5em;
                    list-style-type: decimal;
                }
                .prose li {
                    margin-top: 0.25em;
                    margin-bottom: 0.25em;
                    display: list-item;
                }
                .prose a {
                    color: #3b82f6;
                    text-decoration: underline;
                }
                .prose strong {
                    font-weight: 600;
                }
                .prose em {
                    font-style: italic;
                }
                .prose code {
                    font-family: monospace;
                    background-color: #f3f4f6;
                    padding: 0.1em 0.3em;
                    border-radius: 0.2em;
                    font-size: 0.9em;
                }
                .prose pre {
                    background-color: #f3f4f6;
                    padding: 0.5em;
                    border-radius: 0.375em;
                    overflow-x: auto;
                    margin: 0.5em 0;
                }
                .prose pre code {
                    background-color: transparent;
                    padding: 0;
                }
                .prose blockquote {
                    border-left: 3px solid #d1d5db;
                    padding-left: 0.75em;
                    font-style: italic;
                    margin: 0.5em 0;
                }
            `;
            document.head.appendChild(style);

            if (toggleBtn && popup) {
                toggleBtn.addEventListener("click", () => {
                    if (popup.classList.contains("invisible")) {
                        popup.classList.remove("invisible", "pointer-events-none");
                        popup.classList.remove("scale-95", "opacity-0");
                        popup.classList.add("scale-100", "opacity-100");
                        chatInput.focus();
                    } else {
                        popup.classList.remove("scale-100", "opacity-100");
                        popup.classList.add("scale-95", "opacity-0");
                        popup.classList.add("invisible", "pointer-events-none");
                    }
                });
            }

            const createAvatar = (isUser) => {
                const avatar = document.createElement('span');
                avatar.className = 'relative flex shrink-0 overflow-hidden rounded-full w-8 h-8';

                const avatarInner = document.createElement('div');
                avatarInner.className = 'rounded-full bg-gray-100 border p-1 flex items-center justify-center';

                const svg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');

                if (isUser) {
                    svg.setAttribute('fill', 'black');
                    svg.setAttribute('viewBox', '0 0 16 16');
                    svg.setAttribute('height', '16');
                    svg.setAttribute('width', '16');
                    svg.className = 'transform translate-y-0';

                    const path = document.createElementNS('http://www.w3.org/2000/svg', 'path');
                    path.setAttribute('d', 'M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z');
                    svg.appendChild(path);
                } else {
                    svg.setAttribute('stroke', 'none');
                    svg.setAttribute('fill', 'black');
                    svg.setAttribute('stroke-width', '1.5');
                    svg.setAttribute('viewBox', '0 0 24 24');
                    svg.setAttribute('height', '16');
                    svg.setAttribute('width', '16');
                    svg.className = 'transform -translate-y-[2px]';

                    const path = document.createElementNS('http://www.w3.org/2000/svg', 'path');
                    path.setAttribute('d', 'M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z');
                    svg.appendChild(path);
                }

                avatarInner.appendChild(svg);
                avatar.appendChild(avatarInner);

                return avatar;
            };

            function addMessage(content, isUser = false) {
                const messageDiv = document.createElement('div');
                messageDiv.className = 'flex gap-3 text-gray-600 text-sm';

                const avatar = createAvatar(isUser);

                const messageContainer = document.createElement('div');
                messageContainer.className = isUser ?
                    'user-message rounded-lg px-4 py-2 max-w-[calc(100%-3rem)]' :
                    'ai-message rounded-lg px-4 py-3 max-w-[calc(100%-3rem)]';

                const nameSpan = document.createElement('span');
                nameSpan.className = 'block font-bold text-gray-700 mb-1';
                nameSpan.textContent = isUser ? 'Anda' : 'AI';

                const textContainer = document.createElement('div');
                textContainer.className = 'prose prose-sm';

                if (isUser) {
                    textContainer.textContent = content;
                } else {
                    const cleanHtml = DOMPurify.sanitize(marked.parse(content));
                    textContainer.innerHTML = cleanHtml;
                }

                messageContainer.appendChild(nameSpan);

                if (!isUser) {
                    const typingIndicator = document.createElement('div');
                    typingIndicator.className = 'typing-indicator mb-2';
                    typingIndicator.innerHTML = '<span></span><span></span><span></span>';
                    messageContainer.appendChild(typingIndicator);
                }

                messageContainer.appendChild(textContainer);

                messageDiv.appendChild(avatar);
                messageDiv.appendChild(messageContainer);

                chatMessages.appendChild(messageDiv);
                chatMessages.scrollTop = chatMessages.scrollHeight;

                chatHistory.push({
                    role: isUser ? "user" : "assistant",
                    content: content
                });
            }

            async function sleep(ms) {
                return new Promise(resolve => setTimeout(resolve, ms));
            }

            async function sendMessage(message) {
                try {
                    sendText.classList.add('hidden');
                    loadingSpinner.classList.remove('hidden');
                    sendButton.disabled = true;
                    chatInput.disabled = true;

                    addMessage(message, true);

                    const messageDiv = document.createElement('div');
                    messageDiv.className = 'flex gap-3 text-gray-600 text-sm';

                    const avatar = createAvatar(false);

                    const messageContainer = document.createElement('div');
                    messageContainer.className = 'ai-message rounded-lg px-4 py-3 max-w-[calc(100%-3rem)]';

                    const nameSpan = document.createElement('span');
                    nameSpan.className = 'block font-bold text-gray-700 mb-1';
                    nameSpan.textContent = 'AI';

                    const typingIndicator = document.createElement('div');
                    typingIndicator.className = 'typing-indicator mb-2';
                    typingIndicator.innerHTML = '<span></span><span></span><span></span>';

                    const responseContainer = document.createElement('div');
                    responseContainer.className = 'prose prose-sm';
                    responseContainer.id = 'streaming-response';

                    messageContainer.appendChild(nameSpan);
                    messageContainer.appendChild(typingIndicator);
                    messageContainer.appendChild(responseContainer);

                    messageDiv.appendChild(avatar);
                    messageDiv.appendChild(messageContainer);

                    chatMessages.appendChild(messageDiv);
                    chatMessages.scrollTop = chatMessages.scrollHeight;

                    const response = await fetch(`${API_URL}/chat-stream`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({
                            history: chatHistory.filter(msg => msg.role !== "system"),
                            message: message
                        })
                    });

                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }

                    const reader = response.body.getReader();
                    const decoder = new TextDecoder();
                    let responseContent = '';

                    while (true) {
                        const { done, value } = await reader.read();

                        if (done) {
                            break;
                        }

                        const chunk = decoder.decode(value, { stream: true });

                        for (let i = 0; i < chunk.length; i++) {
                            responseContent += chunk[i];
                            const cleanHtml = DOMPurify.sanitize(marked.parse(responseContent));
                            responseContainer.innerHTML = cleanHtml;
                            chatMessages.scrollTop = chatMessages.scrollHeight;
                            await sleep(15);
                        }
                    }

                    typingIndicator.style.display = 'none';

                    chatHistory.push({
                        role: "assistant",
                        content: responseContent
                    });

                    sendText.classList.remove('hidden');
                    loadingSpinner.classList.add('hidden');
                    sendButton.disabled = false;
                    chatInput.disabled = false;
                    chatInput.focus();

                } catch (error) {
                    console.error('Error:', error);
                    const streamingResponse = document.getElementById('streaming-response');
                    if (streamingResponse) {
                        streamingResponse.innerHTML = "Maaf, saya mengalami kesalahan teknis. Silakan coba lagi nanti.";
                    }

                    sendText.classList.remove('hidden');
                    loadingSpinner.classList.add('hidden');
                    sendButton.disabled = false;
                    chatInput.disabled = false;
                }
            }

            if (chatForm) {
                chatForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    const message = chatInput.value.trim();

                    if (message) {
                        chatInput.value = '';
                        sendMessage(message);
                    }
                });

                chatInput.addEventListener('keydown', function(e) {
                    if (e.key === 'Enter' && !e.shiftKey) {
                        e.preventDefault();
                        chatForm.dispatchEvent(new Event('submit'));
                    }
                });
            }

            document.addEventListener('click', function(e) {
                if (popup && !popup.contains(e.target) && !toggleBtn.contains(e.target) && !popup.classList.contains('hidden')) {
                    popup.classList.remove("scale-100", "opacity-100");
                    popup.classList.add("scale-95", "opacity-0");
                    setTimeout(() => {
                        popup.classList.add("invisible", "pointer-events-none");
                    }, 300);
                }
            });
        }, 300);
    });
</script>

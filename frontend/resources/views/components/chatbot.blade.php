<!-- Tombol Chatbot -->
<button id="chatbot-toggle-btn"
    class="fixed bottom-4 right-6 bg-[#2C3930] hover:bg-[#364c3d] text-white p-3 rounded-full shadow-lg transition duration-300 ease-in-out z-[9999]"
    aria-label="Chatbot" style="position: fixed !important;">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
        class="w-10 h-10">
        <path stroke-linecap="round" stroke-linejoin="round"
            d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z" />
    </svg>
</button>

<!-- Chatbot Popup -->
<div id="chatbot-popup"
    class="hidden fixed bottom-[calc(4rem+1.5rem)] right-0 mr-6 bg-white p-6 rounded-lg border border-[#e5e7eb] w-[500px] h-[610px] z-[9998] transition-all duration-300 ease-in-out transform scale-95 opacity-0"
    style="position: fixed !important; box-shadow: 0 0 #0000, 0 0 #0000, 0 1px 2px 0 rgb(0 0 0 / 0.05);">

    <div class="flex flex-col space-y-1.5 pb-6">
        <h2 class="font-semibold text-lg tracking-tight">Chatbot</h2>
        <p class="text-sm text-[#6b7280] leading-3">Silahkan Tanyakan Seputar Taman Edelweis Bali</p>
    </div>

    <!-- Chat Container -->
    <div id="chat-messages" class="pr-4 h-[450px] overflow-y-auto" style="min-width: 100%; display: table;">
        <!-- Chat AI nya -->
        <div class="flex gap-3 my-4 text-gray-600 text-sm flex-1">
            <span class="relative flex shrink-0 overflow-hidden rounded-full w-8 h-8">
                <div class="rounded-full bg-gray-100 border p-1">
                    <svg stroke="none" fill="black" stroke-width="1.5" viewBox="0 0 24 24" aria-hidden="true"
                        height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z">
                        </path>
                    </svg>
                </div>
            </span>
            <p class="leading-relaxed"><span class="block font-bold text-gray-700">AI </span>Halo! Ada yang bisa saya
                bantu tentang Taman Edelweis Besakih Bali?</p>
        </div>
    </div>

    <!-- Input Form -->
    <div class="flex items-center pt-0">
        <form id="chat-form" class="flex items-center justify-center w-full space-x-2">
            <input id="chat-input"
                class="flex h-10 w-full rounded-md border border-[#e5e7eb] px-3 py-2 text-sm placeholder-[#6b7280] focus:outline-none focus:ring-2 focus:ring-[#9ca3af] text-[#030712] focus-visible:ring-offset-2"
                placeholder="Ketik pesan Anda..." value="">
            <button id="send-button" type="submit"
                class="inline-flex items-center justify-center rounded-md text-sm font-medium text-white bg-[#2C3930] hover:bg-[#364c3d] h-10 px-4 py-2">
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

<!-- Pop up Chatbot & Animasi Pop up -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Inisialisasi chat history
        let chatHistory = [];
        const API_URL = 'http://localhost:8888'; // Ganti dengan URL backend Anda

        // Fungsi untuk toggle popup
        setTimeout(function() {
            const toggleBtn = document.getElementById("chatbot-toggle-btn");
            const popup = document.getElementById("chatbot-popup");
            const chatForm = document.getElementById("chat-form");
            const chatInput = document.getElementById("chat-input");
            const chatMessages = document.getElementById("chat-messages");
            const sendButton = document.getElementById("send-button");
            const sendText = document.getElementById("send-text");
            const loadingSpinner = document.getElementById("loading-spinner");

            if (toggleBtn && popup) {
                toggleBtn.addEventListener("click", () => {
                    if (popup.classList.contains("hidden")) {
                        popup.classList.remove("hidden");
                        setTimeout(() => {
                            popup.classList.remove("scale-95", "opacity-0");
                            popup.classList.add("scale-100", "opacity-100");
                            chatInput.focus();
                        }, 10);
                    } else {
                        popup.classList.remove("scale-100", "opacity-100");
                        popup.classList.add("scale-95", "opacity-0");
                        setTimeout(() => {
                            popup.classList.add("hidden");
                        }, 300);
                    }
                });
            }

            // Fungsi untuk menambahkan pesan ke chat container
            function addMessage(content, isUser = false) {
                const messageDiv = document.createElement('div');
                messageDiv.className = 'flex gap-3 my-4 text-gray-600 text-sm flex-1';

                const avatar = document.createElement('span');
                avatar.className = 'relative flex shrink-0 overflow-hidden rounded-full w-8 h-8';

                const avatarInner = document.createElement('div');
                avatarInner.className = 'rounded-full bg-gray-100 border p-1';

                const svg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');

                if (isUser) {
                    svg.setAttribute('fill', 'black');
                    svg.setAttribute('viewBox', '0 0 16 16');
                    svg.setAttribute('height', '20');
                    svg.setAttribute('width', '20');

                    const path = document.createElementNS('http://www.w3.org/2000/svg', 'path');
                    path.setAttribute('d',
                        'M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z'
                    );
                    svg.appendChild(path);
                } else {
                    svg.setAttribute('stroke', 'none');
                    svg.setAttribute('fill', 'black');
                    svg.setAttribute('stroke-width', '1.5');
                    svg.setAttribute('viewBox', '0 0 24 24');
                    svg.setAttribute('height', '20');
                    svg.setAttribute('width', '20');

                    const path = document.createElementNS('http://www.w3.org/2000/svg', 'path');
                    path.setAttribute('d',
                        'M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z'
                    );
                    svg.appendChild(path);
                }

                avatarInner.appendChild(svg);
                avatar.appendChild(avatarInner);

                const textContainer = document.createElement('p');
                textContainer.className = 'leading-relaxed';

                const nameSpan = document.createElement('span');
                nameSpan.className = 'block font-bold text-gray-700';
                nameSpan.textContent = isUser ? 'Anda ' : 'AI ';

                textContainer.appendChild(nameSpan);
                textContainer.appendChild(document.createTextNode(content));

                messageDiv.appendChild(avatar);
                messageDiv.appendChild(textContainer);

                chatMessages.appendChild(messageDiv);

                // Auto-scroll ke pesan terbaru
                chatMessages.scrollTop = chatMessages.scrollHeight;

                // Update chat history untuk API
                if (isUser) {
                    chatHistory.push({
                        role: "user",
                        content: content
                    });
                } else {
                    chatHistory.push({
                        role: "assistant",
                        content: content
                    });
                }
            }

            // Fungsi untuk mengirim pesan ke API
            async function sendMessage(message) {
                try {
                    sendText.classList.add('hidden');
                    loadingSpinner.classList.remove('hidden');
                    sendButton.disabled = true;
                    chatInput.disabled = true;

                    const response = await fetch(`${API_URL}/chat`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({
                            history: chatHistory.filter(msg => msg.role !==
                                "system"),
                            message: message
                        })
                    });

                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }

                    const data = await response.json();
                    addMessage(data.reply, false);

                    // Re-enable form
                    sendText.classList.remove('hidden');
                    loadingSpinner.classList.add('hidden');
                    sendButton.disabled = false;
                    chatInput.disabled = false;
                    chatInput.focus();

                } catch (error) {
                    console.error('Error:', error);
                    addMessage("Maaf, saya mengalami kesalahan teknis. Silakan coba lagi nanti.",
                        false);

                    // Re-enable form pada error
                    sendText.classList.remove('hidden');
                    loadingSpinner.classList.add('hidden');
                    sendButton.disabled = false;
                    chatInput.disabled = false;
                }
            }

            // Event listener untuk form
            if (chatForm) {
                chatForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    const message = chatInput.value.trim();

                    if (message) {
                        addMessage(message, true);
                        chatInput.value = '';
                        sendMessage(message);
                    }
                });
            }
        }, 300);
    });
</script>

<head>
    <title>Tiket Wisatawan Lokal</title>
    @vite(['resources/css/app.css'])
    @include('components.header')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
</head>

<body class="overflow-hidden">
    <div class="absolute inset-0 bg-cover bg-center opacity-15"
        style="background-image: url('{{ asset('/images/background.svg') }}');">
    </div>

    <div class="w-full min-h-screen flex items-center justify-center px-4">
        <div class="relative w-full max-w-md sm:max-w-lg md:max-w-xl lg:max-w-2xl xl:max-w-3xl">
            <!-- Card lebih kecil, turun sedikit, dan tidak menempel atas/bawah -->
            <div class="bg-white border rounded-[12px] px-3 sm:px-5 md:px-8 shadow-lg pt-7 pb-7 mt-28 mb-10">
                <div class="text-center mb-6">
                    <h1 class="text-[24px] md:text-[28px] font-extrabold">TAMAN EDELWEIS BALI</h1>
                </div>

                <!-- Sub Judul -->
                <div class="mb-3 font-bold text-[16px] text-center md:text-left">Pilih Tiket</div>

                <form action="/tiket" method="POST" onsubmit="return validateForm()">
                    @csrf
                    <div class="flex flex-col gap-5">
                        <!-- Tiket Container -->
                        <div class="flex flex-col md:flex-row gap-3">
                            <!-- Adult -->
                            <div class="flex-1 bg-white border rounded-xl p-3 shadow flex flex-col gap-2">
                                <div class="flex items-center gap-3">
                                    <svg class="w-8 h-8 text-[#2C3930]" fill="none" stroke="currentColor"
                                        stroke-width="2" viewBox="0 0 24 24">
                                        <circle cx="12" cy="8" r="4" />
                                        <path d="M4 20c0-2.21 3.582-4 8-4s8 1.79 8 4" />
                                    </svg>
                                    <div>
                                        <div class="font-semibold text-[15px]">Dewasa</div>
                                    </div>
                                </div>
                                <div class="flex justify-between items-center mt-2">
                                    <span class="text-[14px] font-semibold text-gray-700">Rp 100.000</span>
                                    <div class="flex items-center gap-2">
                                        <button type="button" onclick="changeQty('adult', -1)"
                                            class="bg-[#DDDDDD] rounded w-7 h-7 flex items-center justify-center">
                                            <svg width="18" height="18" viewBox="0 0 25 25" fill="none">
                                                <path d="M19.79 13.54H5.21v-2.08H19.79v2.08Z" fill="black" />
                                            </svg>
                                        </button>
                                        <input type="text" id="adult" name="adult" value="0"
                                            pattern="[0-9]*" inputmode="numeric"
                                            class="w-8 h-7 text-center font-bold border rounded" />
                                        <button type="button" onclick="changeQty('adult', 1)"
                                            class="bg-[#DDDDDD] rounded w-7 h-7 flex items-center justify-center">
                                            <svg width="18" height="18" viewBox="0 0 25 25" fill="none">
                                                <path
                                                    d="M19.79 13.54H13.54V19.79H11.46V13.54H5.21v-2.08h6.25V5.21h2.08v6.25H19.79v2.08Z"
                                                    fill="black" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="text-[12px] text-gray-500 border-t pt-2 mt-2">
                                    Dapatkan 1 E-Tiket untuk pengunjung dewasa pada tanggal yang dipilih
                                </div>
                            </div>

                            <!-- Kids -->
                            <div class="flex-1 bg-white border rounded-xl p-3 shadow flex flex-col gap-2">
                                <div class="flex items-center gap-3">
                                    <svg class="w-8 h-8 text-[#2C3930]" fill="none" stroke="currentColor"
                                        stroke-width="2" viewBox="0 0 24 24">
                                        <circle cx="9" cy="8" r="3" />
                                        <circle cx="17" cy="8" r="3" />
                                        <path d="M2 20c0-2 3-4 7-4" />
                                        <path d="M22 20c0-2-3-4-7-4" />
                                    </svg>
                                    <div>
                                        <div class="font-semibold text-[15px]">Anak-anak</div>
                                    </div>
                                </div>
                                <div class="flex justify-between items-center mt-2">
                                    <span class="text-[14px] font-semibold text-gray-700">Rp 50.000</span>
                                    <div class="flex items-center gap-2">
                                        <button type="button" onclick="changeQty('kids', -1)"
                                            class="bg-[#DDDDDD] rounded w-7 h-7 flex items-center justify-center">
                                            <svg width="18" height="18" viewBox="0 0 25 25" fill="none">
                                                <path d="M19.79 13.54H5.21v-2.08H19.79v2.08Z" fill="black" />
                                            </svg>
                                        </button>
                                        <input type="text" id="kids" name="kids" value="0"
                                            pattern="[0-9]*" inputmode="numeric"
                                            class="w-8 h-7 text-center font-bold border rounded" />
                                        <button type="button" onclick="changeQty('kids', 1)"
                                            class="bg-[#DDDDDD] rounded w-7 h-7 flex items-center justify-center">
                                            <svg width="18" height="18" viewBox="0 0 25 25" fill="none">
                                                <path
                                                    d="M19.79 13.54H13.54V19.79H11.46V13.54H5.21v-2.08h6.25V5.21h2.08v6.25H19.79v2.08Z"
                                                    fill="black" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="text-[12px] text-gray-500 border-t pt-2 mt-2">
                                    Dapatkan 1 E-Tiket untuk pengunjung anak anak pada tanggal yang dipilih
                                </div>
                            </div>
                        </div>

                        <!-- Nama -->
                        <input type="text" name="nama" id="nama" placeholder="Nama"
                            class="pl-3 bg-white border w-full h-[36px] rounded" required>

                        <!-- Tanggal -->
                        <div class="relative flex items-center bg-white border w-full h-[36px] px-4 rounded">
                            <svg width="18" height="18"
                                class="absolute left-4 top-1/2 -translate-y-1/2 pointer-events-none text-gray-400"
                                fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <rect x="3" y="4" width="18" height="16" rx="2"
                                    stroke="currentColor" />
                                <path d="M16 2v4M8 2v4M3 10h18" stroke-linecap="round" />
                            </svg>
                            <input type="text" id="tanggal" name="tanggal" placeholder="dd/mm/yyyy"
                                class="w-full h-full pl-10 outline-none rounded" required>
                        </div>

                        <!-- Total -->
                        <div id="total-container"
                            class="pl-3 bg-white border w-full h-[36px] rounded flex items-center text-[15px] text-gray-700">
                            Total
                        </div>
                    </div>

                    <div class="mt-6 text-center">
                        <button type="submit"
                            class="w-[200px] h-[36px] bg-[#2C3930] text-[18px] rounded-lg font-bold text-white">Confirm</button>
                        <p class="text-[#8C8C8C] font-semibold text-[12px] mt-1">Pastikan keamanan pembayaran anda</p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function changeQty(id, delta) {
            const input = document.getElementById(id);
            let val = parseInt(input.value) || 0;
            val += delta;
            if (val < 0) val = 0;
            input.value = val;
            updateTotal();
        }

        function updateTotal() {
            const priceAdult = 100000;
            const priceKids = 50000;
            const adult = parseInt(document.getElementById('adult').value) || 0;
            const kids = parseInt(document.getElementById('kids').value) || 0;
            const total = (adult * priceAdult) + (kids * priceKids);
            const totalContainer = document.getElementById('total-container');
            if (adult > 0 || kids > 0) {
                totalContainer.textContent = 'Rp ' + total.toLocaleString('id-ID');
            } else {
                totalContainer.textContent = 'Total';
            }
        }

        document.getElementById('adult').addEventListener('input', updateTotal);
        document.getElementById('kids').addEventListener('input', updateTotal);

        flatpickr("#tanggal", {
            minDate: "today",
            dateFormat: "Y-m-d"
        });

        function validateForm() {
            const nama = document.getElementById('nama').value.trim();
            const tanggal = document.getElementById('tanggal').value.trim();
            const adult = parseInt(document.getElementById('adult').value) || 0;
            const kids = parseInt(document.getElementById('kids').value) || 0;

            if (!nama || !tanggal || (adult === 0 && kids === 0)) {
                alert("Harap lengkapi semua data: Nama, Tanggal, dan jumlah tiket minimal 1.");
                return false;
            }
            return true;
        }
    </script>
</body>

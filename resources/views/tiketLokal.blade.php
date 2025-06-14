<head>
    <title>Tiket Wisatawan Luar</title>
    @vite(['resources/css/app.css'])
    @include('components.header')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
</head>

<body >
    <div class="fixed w-full h-full bg-cover bg-center bg-no-repeat opacity-15 -z-10"
        style="background-image: url('{{ asset('/images/background.svg') }}');"></div>

    <div class="w-full min-h-screen flex items-center justify-center px-2 md:px-4">
        <!-- RESPONSIVE (MOBILE & DESKTOP): Container utama tiket lokal -->
        <div class="relative w-full px-10 lg:px-0 lg:max-w-2xl xl:max-w-3xl">
            <div class="bg-white/95 backdrop-blur border rounded-[8px] px-3 sm:px-4 md:px-8 mt-4 md:mt-20 py-6 md:py-8 shadow-md pb-8 gap-5 flex flex-col">
                <!-- RESPONSIVE: mt-4 di mobile, md:mt-20 di desktop, px-3 di mobile, backdrop-blur dan bg-white/95 agar form lebih menonjol di mobile -->
                <div class="text-center mb-4 md:mb-6">
                    <h1 class="text-[20px] md:text-[32px] font-extrabold mt-2 md:mt-0">TAMAN EDELWEIS BALI</h1>
                    <!-- RESPONSIVE: text-[20px] di mobile, md:text-[32px] di desktop -->
                </div>

                <!-- Sub Judul -->
                <div class="mb-2 md:mb-4">
                    <span class="font-bold text-[15px] md:text-[18px]">Pilih Tiket</span>
                    <!-- RESPONSIVE: text-[15px] di mobile, md:text-[18px] di desktop -->
                </div>

                <form action="/tiket" method="POST" class="mt-2 md:mt-8 flex flex-col gap-5" onsubmit="return validateForm()">
                    @csrf
                    <div class="flex flex-col gap-4 md:gap-6">
                        <!-- Tiket Container -->
                        <div class="flex flex-col lg:flex-row gap-3 md:gap-6">
                            <!-- Adult Ticket Card -->
                            <div class="flex-1 bg-white border rounded-xl p-3 md:p-4 flex flex-col gap-2 shadow min-w-0">
                                <!-- RESPONSIVE: p-3 di mobile, md:p-4 di desktop -->
                                <div class="flex items-center gap-2">
                                    <svg class="w-8 h-8 md:w-10 md:h-10 text-[#2C3930]" fill="none" stroke="currentColor"
                                        stroke-width="2" viewBox="0 0 24 24">
                                        <circle cx="12" cy="8" r="4" stroke="currentColor" />
                                        <path stroke="currentColor" d="M4 20c0-2.21 3.582-4 8-4s8 1.79 8 4" />
                                    </svg>
                                    <div>
                                        <div class="font-semibold text-[13px] md:text-[16px]">Adult</div>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between mt-1 md:mt-2">
                                    <span class="text-[12px] md:text-[15px] font-semibold text-gray-700">Rp 100.000</span>
                                    <div class="flex items-center gap-2 md:gap-2">
                                        <button type="button" onclick="changeQty('adult', -1)"
                                            class="bg-[#DDDDDD] rounded w-8 h-8 md:w-8 md:h-8 flex items-center justify-center">
                                            <svg width="16" height="16" viewBox="0 0 25 25" fill="none">
                                                <path d="M19.79 13.54H5.21v-2.08H19.79v2.08Z" fill="black" />
                                            </svg>
                                        </button>
                                        <input type="text" min="0" pattern="[0-9]*" inputmode="numeric"
                                            id="adult" name="adult" value="0"
                                            class="w-10 h-8 md:w-10 md:h-8 text-center font-bold border rounded text-[14px] md:text-[14px]" />
                                        <button type="button" onclick="changeQty('adult', 1)"
                                            class="bg-[#DDDDDD] rounded w-8 h-8 md:w-8 md:h-8 flex items-center justify-center">
                                            <svg width="16" height="16" viewBox="0 0 25 25" fill="none">
                                                <path
                                                    d="M19.79 13.54H13.54V19.79H11.46V13.54H5.21v-2.08h6.25V5.21h2.08v6.25H19.79v2.08Z"
                                                    fill="black" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="text-[11px] md:text-[11px] text-gray-500 border-t pt-1 mt-1">
                                    Get 1 E-Ticket for adult visitor on selected date
                                </div>
                            </div>

                            <!-- Kids Ticket Card -->
                            <div class="flex-1 bg-white border rounded-xl p-3 md:p-4 flex flex-col gap-2 shadow min-w-0 mt-2 md:mt-0">
                                <!-- RESPONSIVE: p-3 di mobile, md:p-4 di desktop -->
                                <div class="flex items-center gap-2">
                                    <svg class="w-8 h-8 md:w-10 md:h-10 text-[#2C3930]" fill="none" stroke="currentColor"
                                        stroke-width="2" viewBox="0 0 24 24">
                                        <circle cx="12" cy="8" r="3" stroke="currentColor" />
                                        <path stroke="currentColor" d="M5 21v-2a4 4 0 0 1 8 0v2" />
                                        <path stroke="currentColor" d="M19 21v-2a4 4 0 0 0-4-4" />
                                    </svg>
                                    <div>
                                        <div class="font-semibold text-[13px] md:text-[16px]">Kids</div>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between mt-1 md:mt-2">
                                    <span class="text-[12px] md:text-[15px] font-semibold text-gray-700">Rp 50.000</span>
                                    <div class="flex items-center gap-2 md:gap-2">
                                        <button type="button" onclick="changeQty('kids', -1)"
                                            class="bg-[#DDDDDD] rounded w-8 h-8 md:w-8 md:h-8 flex items-center justify-center">
                                            <svg width="16" height="16" viewBox="0 0 25 25" fill="none">
                                                <path d="M19.79 13.54H5.21v-2.08H19.79v2.08Z" fill="black" />
                                            </svg>
                                        </button>
                                        <input type="text" min="0" pattern="[0-9]*" inputmode="numeric"
                                            id="kids" name="kids" value="0"
                                            class="w-10 h-8 md:w-10 md:h-8 text-center font-bold border rounded text-[14px] md:text-[14px]" />
                                        <button type="button" onclick="changeQty('kids', 1)"
                                            class="bg-[#DDDDDD] rounded w-8 h-8 md:w-8 md:h-8 flex items-center justify-center">
                                            <svg width="16" height="16" viewBox="0 0 25 25" fill="none">
                                                <path
                                                    d="M19.79 13.54H13.54V19.79H11.46V13.54H5.21v-2.08h6.25V5.21h2.08v6.25H19.79v2.08Z"
                                                    fill="black" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="text-[11px] md:text-[11px] text-gray-500 border-t pt-1 mt-1">
                                    Get 1 E-Ticket for child visitor on selected date
                                </div>
                            </div>
                        </div>

                        <!-- Name -->
                        <input type="text" name="nama" id="nama" placeholder="Name"
                            class="pl-3 bg-white border w-full h-[44px] md:h-[40px] rounded mt-2 text-[15px] md:text-[16px]"
                            required>
                        <!-- RESPONSIVE: h-[44px] dan text-[15px] di mobile, md:h-[40px] md:text-[16px] di desktop -->

                        <!-- Date -->
                        <div class="relative flex items-center bg-white border w-full h-[44px] md:h-[40px] px-4 rounded mt-2">
                            <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                                class="absolute left-4 top-1/2 transform -translate-y-1/2 pointer-events-none text-gray-400">
                                <rect x="3" y="4" width="18" height="16" rx="2" stroke="currentColor" />
                                <path d="M16 2v4M8 2v4M3 10h18" stroke="currentColor" stroke-linecap="round" />
                            </svg>
                            <input type="text" id="tanggal" name="tanggal"
                                class="bg-white w-full h-full pl-8 outline-none rounded text-[15px] md:text-[16px]"
                                placeholder="dd/mm/yyyy" required>
                        </div>
                        <!-- RESPONSIVE: h-[44px] dan text-[15px] di mobile, md:h-[40px] md:text-[16px] di desktop -->

                        <!-- Total -->
                        <div id="total-container"
                            class="pl-3 bg-white border w-full h-[44px] md:h-[40px] rounded mt-2 flex items-center text-[15px] md:text-[16px] text-gray-700">
                            Total
                        </div>
                        <!-- RESPONSIVE: h-[44px] dan text-[15px] di mobile, md:h-[40px] md:text-[16px] di desktop -->
                    </div>

                    <div class="mt-6 md:mt-8 text-center">
                        <button type="submit"
                            class="w-full md:w-[250px] h-[44px] md:h-[40px] bg-[#2C3930] text-[16px] md:text-[20px] rounded-lg font-bold text-white">Confirm</button>
                        <!-- RESPONSIVE: w-full dan h-[44px] di mobile, md:w-[250px] md:h-[40px] di desktop -->
                        <p class="text-[#8C8C8C] font-semibold text-[12px] md:text-[13px] mt-1">Make sure your payment safety
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function changeQty(id, delta) {
            const input = document.getElementById(id);
            let val = parseInt(input.value) || 0;
            val += delta; // val = val + delta
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

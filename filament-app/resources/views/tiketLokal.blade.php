<head>
    <title>Tiket Wisatawan Lokal</title>
    @vite(['resources/css/app.css'])
    @include('components.header')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
</head>

<body class="overflow-hidden">
    <div class="absolute inset-0 bg-cover bg-center opacity-15"
        style="background-image: url('{{ asset('/images/background.svg') }}');"></div>

    <div class="w-full min-h-screen flex items-center justify-center px-4">
        <div class="relative w-full max-w-md sm:max-w-lg md:max-w-xl lg:max-w-2xl xl:max-w-3xl">
            <div class="bg-white border rounded-[8px] px-4 sm:px-6 md:px-10 mt-20 py-8 shadow-md">
                <div class="text-center mb-6">
                    <h1 class="text-[28px] md:text-[32px] font-extrabold">TAMAN EDELWEIS BALI</h1>
                </div>

                <div class="mb-3 font-bold text-[18px] text-center md:text-left">Pilih Tiket</div>

                <form id="payment-form" action="{{ route('transaksi.store') }}" method="POST">
                    @csrf
                    <div class="flex flex-col gap-6">
                        <div class="flex flex-col md:flex-row gap-4">
                            <div class="flex-1 bg-white border rounded-xl p-4 shadow flex flex-col gap-2">
                                <div class="flex items-center gap-3">
                                    <svg class="w-10 h-10 text-[#2C3930]" fill="none" stroke="currentColor"
                                        stroke-width="2" viewBox="0 0 24 24">
                                        <circle cx="12" cy="8" r="4" />
                                        <path d="M4 20c0-2.21 3.582-4 8-4s8 1.79 8 4" />
                                    </svg>
                                    <div>
                                        <div class="font-semibold text-[16px]">Dewasa</div>
                                    </div>
                                </div>
                                <div class="flex justify-between items-center mt-2">
                                    <span class="text-[15px] font-semibold text-gray-700">Rp 30.000</span>
                                    <div class="flex items-center gap-2">
                                        <button type="button" onclick="changeQty('adult', -1)"
                                            class="bg-[#DDDDDD] rounded w-8 h-8 flex items-center justify-center">
                                            <svg width="20" height="20" viewBox="0 0 25 25" fill="none">
                                                <path d="M19.79 13.54H5.21v-2.08H19.79v2.08Z" fill="black" />
                                            </svg>
                                        </button>
                                        <input type="text" id="adult" name="adult" value="0"
                                            pattern="[0-9]*" inputmode="numeric"
                                            class="w-10 h-8 text-center font-bold border rounded" readonly />
                                        <button type="button" onclick="changeQty('adult', 1)"
                                            class="bg-[#DDDDDD] rounded w-8 h-8 flex items-center justify-center">
                                            <svg width="20" height="20" viewBox="0 0 25 25" fill="none">
                                                <path
                                                    d="M19.79 13.54H13.54V19.79H11.46V13.54H5.21v-2.08h6.25V5.21h2.08v6.25H19.79v2.08Z"
                                                    fill="black" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="text-[13px] text-gray-500 border-t pt-2 mt-2">
                                    Get 1 E-Ticket for adult visitor on selected date
                                </div>
                            </div>

                            <div class="flex-1 bg-white border rounded-xl p-4 shadow flex flex-col gap-2">
                                <div class="flex items-center gap-3">
                                    <svg class="w-10 h-10 text-[#2C3930]" fill="none" stroke="currentColor"
                                        stroke-width="2" viewBox="0 0 24 24">
                                        <circle cx="9" cy="8" r="3" />
                                        <circle cx="17" cy="8" r="3" />
                                        <path d="M2 20c0-2 3-4 7-4" />
                                        <path d="M22 20c0-2-3-4-7-4" />
                                    </svg>
                                    <div>
                                        <div class="font-semibold text-[16px]">Anak-anak</div>
                                    </div>
                                </div>
                                <div class="flex justify-between items-center mt-2">
                                    <span class="text-[15px] font-semibold text-gray-700">Rp 20.000</span>
                                    <div class="flex items-center gap-2">
                                        <button type="button" onclick="changeQty('kids', -1)"
                                            class="bg-[#DDDDDD] rounded w-8 h-8 flex items-center justify-center">
                                            <svg width="20" height="20" viewBox="0 0 25 25" fill="none">
                                                <path d="M19.79 13.54H5.21v-2.08H19.79v2.08Z" fill="black" />
                                            </svg>
                                        </button>
                                        <input type="text" id="kids" name="kids" value="0"
                                            pattern="[0-9]*" inputmode="numeric"
                                            class="w-10 h-8 text-center font-bold border rounded" readonly />
                                        <button type="button" onclick="changeQty('kids', 1)"
                                            class="bg-[#DDDDDD] rounded w-8 h-8 flex items-center justify-center">
                                            <svg width="20" height="20" viewBox="0 0 25 25" fill="none">
                                                <path
                                                    d="M19.79 13.54H13.54V19.79H11.46V13.54H5.21v-2.08h6.25V5.21h2.08v6.25H19.79v2.08Z"
                                                    fill="black" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="text-[13px] text-gray-500 border-t pt-2 mt-2">
                                    Get 1 E-Ticket for child visitor on selected date
                                </div>
                            </div>
                        </div>

                        <input type="tel" name="phone_number" id="phone_number" placeholder="Nomor Telepon"
                            pattern="[0-9]{10,15}"
                            class="pl-3 bg-white border w-full h-[40px] rounded"
                            required>

                        <div class="relative flex items-center bg-white border w-full h-[40px] px-4 rounded">
                            <svg width="20" height="20"
                                class="absolute left-4 top-1/2 -translate-y-1/2 pointer-events-none text-gray-400"
                                fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <rect x="3" y="4" width="18" height="16" rx="2" stroke="currentColor" />
                                <path d="M16 2v4M8 2v4M3 10h18" stroke-linecap="round" />
                            </svg>
                            <input type="text" id="tanggal" name="tanggal" placeholder="Pilih Tanggal Kunjungan"
                                class="w-full h-full pl-10 outline-none rounded bg-transparent" required>
                        </div>

                        <div id="total-container"
                            class="pl-3 bg-gray-100 border w-full h-[40px] rounded flex items-center text-[16px] text-gray-700 font-bold">
                            Total
                        </div>

                        <input type="hidden" name="Category" id="Category" value="Lokal">
                        <input type="hidden" name="total_purchase" id="total_purchase_input" value="0">
                    </div>

                    <div class="mt-8 text-center">
                        <button type="submit" id="pay-button"
                            class="w-[250px] h-[40px] bg-[#2C3930] text-[20px] rounded-lg font-bold text-white">Bayar Sekarang</button>
                        <p class="text-[#8C8C8C] font-semibold text-[13px] mt-1">Pastikan pembayaran Anda aman</p>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <script>
        // Fungsi changeQty dan updateTotal tidak perlu diubah, sudah benar.
        function changeQty(id, delta) {
            const input = document.getElementById(id);
            let val = parseInt(input.value) || 0;
            val += delta;
            if (val < 0) val = 0;
            input.value = val;
            updateTotal();
        }

        function updateTotal() {
            const adult = parseInt(document.getElementById('adult').value) || 0;
            const kids = parseInt(document.getElementById('kids').value) || 0;
            const total = adult * 30000 + kids * 20000;

            const totalContainer = document.getElementById('total-container');
            if (total > 0) {
                totalContainer.textContent = 'Total: Rp ' + total.toLocaleString('id-ID');
            } else {
                totalContainer.textContent = 'Total';
            }

            const hiddenTotal = document.getElementById('total_purchase_input');
            hiddenTotal.value = total;
            hiddenTotal.dispatchEvent(new Event('input'));
        }

        document.getElementById('adult').addEventListener('input', updateTotal);
        document.getElementById('kids').addEventListener('input', updateTotal);

        flatpickr("#tanggal", {
            minDate: "today",
            dateFormat: "Y-m-d",
            altInput: true,
            altFormat: "d F Y",
        });


        const form = document.getElementById('payment-form');
        form.addEventListener('submit', function (event) {
            event.preventDefault(); // Mencegah form submit secara default

            // Validasi frontend sebelum mengirim ke server
            const tanggal = document.getElementById('tanggal').value.trim();
            const adult = parseInt(document.getElementById('adult').value) || 0;
            const kids = parseInt(document.getElementById('kids').value) || 0;
            const phone_number = document.getElementById('phone_number').value.trim();

            if (!phone_number) {
                 alert("Harap isi nomor telepon.");
                 return;
            }
            if (!tanggal) {
                 alert("Harap pilih tanggal kunjungan.");
                 return;
            }
            if (adult === 0 && kids === 0) {
                alert("Jumlah tiket minimal 1.");
                return;
            }

            // Kirim data ke backend untuk mendapatkan Snap Token
            fetch('{{ route("transaksi.store") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    adult: adult,
                    kids: kids,
                    phone_number: phone_number,
                    tanggal: tanggal,
                    Category: document.getElementById('Category').value,
                    total_purchase: document.getElementById('total_purchase_input').value
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.snapToken) {
                    // Jika token diterima, buka popup pembayaran Midtrans
                    window.snap.pay(data.snapToken, {
                        onSuccess: function(result){
                            /* Anda dapat menambahkan logika di sini, misalnya redirect ke halaman sukses */
                            alert("Pembayaran berhasil!"); console.log(result);
                            window.location.href = '/'; // Ganti dengan URL halaman sukses Anda
                        },
                        onPending: function(result){
                            /* Anda dapat menambahkan logika di sini, misalnya redirect ke halaman tunggu */
                            alert("Menunggu pembayaran Anda!"); console.log(result);
                            window.location.href = '/tiket-saya'; // Ganti dengan URL halaman status transaksi
                        },
                        onError: function(result){
                            /* Anda dapat menambahkan logika di sini, misalnya menampilkan pesan error */
                            alert("Pembayaran gagal!"); console.log(result);
                        },
                        onClose: function(){
                            /* Dijalankan saat pelanggan menutup popup pembayaran tanpa menyelesaikan proses */
                            alert('Anda menutup popup tanpa menyelesaikan pembayaran');
                        }
                    });
                } else if (data.error) {
                    // Jika ada error dari backend
                    alert('Error: ' + data.error);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Terjadi kesalahan. Silakan coba lagi.');
            });
        });

    </script>
</body>
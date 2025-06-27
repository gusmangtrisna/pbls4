<head>
    <title>Registrasi</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-[#2C3930] flex justify-center items-center min-h-screen">
    <div class="bg-white rounded-2xl shadow-2xl px-10 py-12 text-center">
        <h1 class="text-3xl font-semibold text-[#2C3930] mb-2">SELAMAT DATANG</h1>
        <p class="text-gray-600 text-base w-64 text-center justify-center pl-8">Silahkan Isi Data Untuk Melakukan Registrasi</p>

        <form action="{{ route('register') }}" method="POST" class="mt-6 space-y-4">
            @csrf

            <div>
                <input type="text" name="name" class="w-full px-4 py-2 rounded-md bg-[#3F4F44] text-white placeholder-white focus:outline-none focus:ring-2 focus:ring-green-600" placeholder="Nama Lengkap" required>
            </div>


            <div>
                <input type="email" name="email" class="w-full px-4 py-2 rounded-md bg-[#3F4F44] text-white placeholder-white focus:outline-none focus:ring-2 focus:ring-green-600" placeholder="Email" required>
            </div>


            <div>
                <input type="password" name="password" class="w-full px-4 py-2 rounded-md bg-[#3F4F44] text-white placeholder-white focus:outline-none focus:ring-2 focus:ring-[#2C3930]" placeholder="Password" required>
            </div>
            <div>
                <input type="password" name="password_confirmation" class="w-full px-4 py-2 rounded-md bg-[#3F4F44] text-white placeholder-white focus:outline-none focus:ring-2 focus:ring-[#2C3930]" placeholder="Konfirmasi Password" required>
            </div>

            <input type="hidden" name="role" value="user">


            <button type="submit" class="w-full mt-4 bg-[#3F4F44] text-white py-2 rounded-md font-bold hover:bg-[#2C3930] transition">
                Registrasi
            </button>

        </form>

        <div class="relative mt-5"></div>
        <p class="text-base text-[#2C3930]">Sudah Memiliki Akun? <a href="/login" class="text-base font-bold text-[#2C3930]">Login</a></p>
        <p class="text-base text-[#2C3930]">Atau</p>
        <p class="text-base text-[#2C3930]">Kembali ke <a href="/" class="text-base font-bold text-[#2C3930]">Beranda</a></p>
    </div>
</body>

</html>

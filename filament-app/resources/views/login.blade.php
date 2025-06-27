<head>
    <title>Login</title>
    @vite(['resources/css/app.css'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-[#2C3930] flex justify-center items-center min-h-screen">
    <div class="bg-white rounded-2xl shadow-2xl px-10 py-12 text-center">
        <h1 class="text-3xl font-semibold text-[#2C3930] mb-2">SELAMAT DATANG</h1>
        <p class="text-gray-600 text-base w-64 text-center justify-center pl-8">Silakan Masukan Email dan Password Anda</p>
        <script>
            @if(session('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil Registrasi!',
                    text: '{{ session('success') }}',
                    confirmButtonText: 'OK'
                });
            @endif
            @if(session('error'))
                Swal.fire({
                    icon: 'error',
                    title: 'email atau password salah',
                    text: '{{ session('console.error();') }}',
                    showConfirmButton: false
                });
            @endif
        </script>
        <form class="mt-6 space-y-4" method="POST" action="{{ route('login.custom') }}">
            @csrf
            <div>
                <input type="email" name="email" class="w-full px-4 py-2 rounded-md bg-[#364c3d] text-white placeholder-white focus:outline-none focus:ring-2 focus:ring-green-600" placeholder="Email" required>
            </div>
            <div>
                <input type="password" name="password" class="w-full px-4 py-2 rounded-md bg-[#364c3d] text-white placeholder-white focus:outline-none focus:ring-2 focus:ring-green-600" placeholder="Password" required>
            </div>
            <button type="submit" class="w-full mt-4 bg-[#364c3d] text-white py-2 rounded-md font-bold hover:bg-[#2C3930] transition">
                Login
            </button>
        </form>
        <div class="relative mt-5">
            <p class="text-base text-[#2C3930]">Belum Memiliki Akun? <a href="/register" class="text-base font-bold text-[#2C3930]">Registrasi</a></p>
            <p class="text-base text-[#2C3930]">Atau</p>
            <p class="text-base text-[#2C3930]">Kembali ke <a href="/" class="text-base font-bold text-[#2C3930]">Beranda</a></p>
        </div>
    </div>


</body>
</html>

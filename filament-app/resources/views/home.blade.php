<head>
    @vite(['resources/css/app.css'])
    @include('components.header')
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <title>
        Taman Edelweis Bali
    </title>
    <style>
        html {
            scroll-behavior: smooth;
            overflow-x: hidden;
        }

        body {
            overflow-x: hidden;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <section id="home">
        <div class="absolute inset-0 bg-cover bg-center opacity-15"
            style="background-image: url('{{ asset('/images/background.svg') }}');"></div>
        <div class="relative isolate px-6 pt-2 lg:px-8">
            <div class="mx-auto max-w-2xl py-18 sm:py-24 lg:py-48">
                <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                </div>
                <div data-aos="fade-up" data-aos-duration="1000" class="text-center">
                    <h1 class="text-balance text-5xl font-semibold tracking-tight text-[#2C3930] sm:text-7xl">Selamat
                        Datang di Taman Edelweis</h1>
                    <p class="mt-8 text-pretty text-lg font-medium text-gray-900 sm:text-xl/8">
                        Nikmati keindahan alam Taman Edelweis Bali yang mempesona.
                        Pesan tiket masukmu dengan mudah dan cepat melalui sistem ini.</p>
                    <div class="mt-10 flex items-center justify-center gap-x-6">
                        <a href="{{ url('/#ticket') }}"
                            class="rounded-md bg-[#2C3930] px-5 py-3 text-base font-semibold text-white shadow-sm hover:bg-[#364c3d] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#2C3930]">Pesan
                            Tiket Masuk</a>
                    </div>
                </div>
            </div>
            <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
                aria-hidden="true">
            </div>
        </div>
        </div>
    </section>

    <!-- Fade-out ke bawah -->
    <div class="absolute bottom-0 left-0 w-full h-32 bg-gradient-to-b from-transparent to-white"></div>

    <!-- Halaman Features -->
    <section>
        <div class="bg-white py-12 sm:py-20 z-10">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div data-aos="fade-up" data-aos-duration="1000" class="mx-auto max-w-3xl lg:text-center">
                    <p
                        class="mt-2 text-pretty text-4xl font-semibold tracking-tight text-[#2C3930] sm:text-5xl lg:text-balance">
                        Keindahan Alam yang Abadi di Pulau Dewata</p>
                    <p class="mt-6 text-lg/8 text-gray-600">Nikmati pesona bunga Edelweis yang langka dan menawan.
                        Berada di dataran tinggi yang sejuk, Taman Edelweis menghadirkan pengalaman alam yang tak
                        terlupakan, cocok untuk keluarga, pecinta alam, dan pencinta fotografi.</p>
                </div>
                <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-16 lg:max-w-4xl">
                    <dl class="grid max-w-xl grid-cols-1 gap-x-48 gap-y-16 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">
                        <div data-aos="fade-right" data-aos-duration="1000" class="relative pl-20">
                            <dt class="text-2xl font-semibold text-gray-900">
                                <div
                                    class="absolute left-0 top-0 flex size-14 items-center justify-center rounded-lg bg-[#2C3930]">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                                        viewBox="0 0 48 48" class="text-white">
                                        <g fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M36.826 13.643L34.5 6.111l-2.326 7.532l-4.5 2.143l4.52 2.152l2.306 6.59l2.306-6.59l4.52-2.152zm-3 1.428l.674-2.182l.674 2.183l1.5.714l-1.48.705l-.694 1.982l-.694-1.982l-1.48-.705z"
                                                clip-rule="evenodd" />
                                            <path d="m19 16l1-4l1 4l3 1l-3 1l-1 4l-1-4l-3-1z" />
                                            <path fill-rule="evenodd"
                                                d="M13 39.75v.246a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2V29.001a2 2 0 0 1 2-2h3a2 2 0 0 1 1.947 1.539c1.324-.477 2.871-1.045 3.344-1.261c.402-.183.866-.245 1.252-.268a9 9 0 0 1 1.195.021a15 15 0 0 1 1.328.168l.023.004l.007.001h.003l.018.004l6.69 1.5l.041.014l.011.004l.046.014l.189.054c.165.046.402.107.685.169c.575.125 1.3.242 1.975.242c.624 0 1.27.233 1.614.865c.296.542.227 1.138.117 1.55c-.139.514-.425 1.054-.788 1.513c.49-.185 1.027-.404 1.603-.64l.123-.05c1.623-.667 3.547-1.457 5.245-1.737c1.94-.321 3.351.383 3.991 1.632c.57 1.112.438 2.571-.42 3.45c-.215.221-.543.453-.872.666c-.352.229-.785.486-1.266.76a86 86 0 0 1-3.355 1.782c-2.372 1.203-4.858 2.373-5.648 2.662c-.916.335-1.9.367-2.845.318a38 38 0 0 1-1.709-.145a55 55 0 0 0-1.25-.115c-1.928-.146-3.408-.617-4.77-1.05l-.166-.053c-1.408-.446-2.718-.843-4.453-.913c-.396-.016-1.188.014-1.905.048m4.12-10.651c.065-.03.235-.073.538-.091c.284-.017.608-.006.925.018a13 13 0 0 1 1.132.143h.003l6.567 1.473l.045.014q.083.026.23.066c.194.054.468.125.793.196c.585.128 1.37.262 2.168.285a2.4 2.4 0 0 1-.284.543c-.16.232-.335.411-.479.514c-.416.298-.752.422-.956.475a1.3 1.3 0 0 1-.212.04h-.022l-5.362-.064l-.19 1.984l.178-.984l-.178.984l.053.01l.153.027l.556.098c.467.082 1.108.192 1.806.306c1.374.224 3.03.472 3.97.529c.65.04 1.406-.16 2.109-.395c.733-.245 1.562-.584 2.396-.926c1.717-.704 3.466-1.421 4.935-1.664c1.27-.21 1.723.254 1.885.571c.233.455.107.96-.072 1.142c-.043.045-.2.172-.528.385c-.306.197-.701.434-1.165.697a84 84 0 0 1-3.272 1.738c-2.392 1.213-4.772 2.326-5.432 2.568c-.534.196-1.195.243-2.054.199a29 29 0 0 1-1.515-.129a52 52 0 0 0-1.396-.128c-1.692-.128-2.978-.537-4.357-.975l-.125-.04c-1.428-.453-2.956-.924-4.977-1.005c-.455-.018-1.265.01-1.986.044v-7.101c1.406-.503 3.487-1.258 4.12-1.547m2.796-.91l.183-.983zM11 29H8v10.995h3z"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg>
                                </div>
                                Kebersihan Alam
                            </dt>
                            <dd class="mt-2 text-base/7 text-gray-600">Lingkungan yang asri dan bebas sampah membuat
                                pengalaman berwisata semakin menyenangkan.</dd>
                        </div>
                        <div data-aos="fade-left" data-aos-duration="1200" class="relative pl-20">
                            <dt class="text-2xl font-semibold text-gray-900">
                                <div
                                    class="absolute left-0 top-0 flex size-14 items-center justify-center rounded-lg bg-[#2C3930]">
                                    <svg svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-10 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6.827 6.175A2.31 2.31 0 0 1 5.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 0 0-1.134-.175 2.31 2.31 0 0 1-1.64-1.055l-.822-1.316a2.192 2.192 0 0 0-1.736-1.039 48.774 48.774 0 0 0-5.232 0 2.192 2.192 0 0 0-1.736 1.039l-.821 1.316Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.5 12.75a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0ZM18.75 10.5h.008v.008h-.008V10.5Z" />
                                    </svg>
                                </div>
                                Spot Foto Indah
                            </dt>
                            <dd class="mt-2 text-base/7 text-gray-600">Pemandangan bunga Edelweis dan tata taman yang
                                menawan siap mempercantik feed media sosial Anda.</dd>
                        </div>
                        <div data-aos="fade-right" data-aos-duration="1000" class="relative pl-20">
                            <dt class="text-2xl font-semibold text-gray-900">
                                <div
                                    class="absolute left-0 top-0 flex size-14 items-center justify-center rounded-lg bg-[#2C3930]">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                                        viewBox="0 0 256 256" class="text-white">
                                        <path fill="currentColor"
                                            d="M208 50a85.5 85.5 0 0 0-36.17 8c-14.67-25.9-40-38.79-41.15-39.37a6 6 0 0 0-5.36 0c-1.14.58-26.48 13.47-41.15 39.37A85.5 85.5 0 0 0 48 50a6 6 0 0 0-6 6v40a86.1 86.1 0 0 0 80 85.77v40.52l-39.32-19.66a6 6 0 0 0-5.36 10.74l48 24a6 6 0 0 0 5.36 0l48-24a6 6 0 1 0-5.36-10.74L134 222.29v-40.52A86.1 86.1 0 0 0 214 96V56a6 6 0 0 0-6-6m-80-19.12c6.46 3.84 23.07 15 33.33 32.94A86.5 86.5 0 0 0 128 104.5a86.5 86.5 0 0 0-33.33-40.68c10.26-17.99 26.87-29.11 33.33-32.94M54 96V62.24A74.11 74.11 0 0 1 122 136v33.76A74.1 74.1 0 0 1 54 96m148 0a74.1 74.1 0 0 1-68 73.76V136a74.11 74.11 0 0 1 68-73.76Z" />
                                    </svg>
                                </div>
                                Keindahan Bunga
                            </dt>
                            <dd class="mt-2 text-base/7 text-gray-600">Nikmati pemandangan alami dari bunga Edelweis
                                yang bermekaran indah sepanjang area taman.</dd>
                        </div>
                        <div data-aos="fade-left" data-aos-duration="1000" class="relative pl-20">
                            <dt class="text-2xl font-semibold text-gray-900">
                                <div
                                    class="absolute left-0 top-0 flex size-14 items-center justify-center rounded-lg bg-[#2C3930]">
                                    <img class="h-10 w-10" src="{{ asset('/images/robot.svg') }}" alt="">
                                </div>
                                Asisten Virtual
                            </dt>
                            <dd class="mt-2 text-base/7 text-gray-600">Tersedia asisten virtual yang sedia membantu anda
                                disaat anda ingin mengetahui mengenai Taman Edelweis Bali</dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </section>

    <!-- Halaman About -->
    <section id="about" class="bg-white py-10 relative z-10">
        <div class="container mx-auto px-4">
            <div data-aos="fade-up" data-aos-duration="1000" class="text-center mb-12">
                <h1 class="text-4xl md:text-5xl font-semibold text-[#2C3930] mb-4">
                    About Us
                </h1>
            </div>

            <div class="max-w-7xl mx-auto">
                <!-- Image dengan fallback -->
                <div data-aos="zoom-in" data-aos-duration="1000" class="mb-12">
                    <div class="w-full h-[400px] bg-gray-200 rounded-xl overflow-hidden shadow-lg">
                        <img class="w-full h-full object-cover"
                             src="{{ asset('/images/gallery/gallery8.svg') }}"
                             alt="Taman Edelweis Bali"
                             onload="this.parentElement.classList.remove('bg-gray-200')"
                             onerror="this.parentElement.innerHTML='<div class=\'flex items-center justify-center h-full text-gray-500\'>Image not found</div>'">
                    </div>
                </div>

                <!-- Content Grid -->
                <div class="grid lg:grid-cols-3 gap-8 lg:gap-12">
                    <div data-aos="fade-right" data-aos-duration="1000" class="lg:col-span-1">
                        <h3 class="font-bold text-2xl md:text-3xl text-[#2C3930] mb-4">
                            Kami Adalah Taman Edelweis Bali
                        </h3>
                        <p class="text-lg text-gray-700 text-justify leading-relaxed">
                            Kami mengundang Anda menikmati keindahan abadi. Jelajahi pesona bunga edelweis kami. Rasakan kedamaian alam yang menenangkan. Ciptakan kenangan tak terlupakan bersama kami.
                        </p>
                    </div>

                    <div class="lg:col-span-2">
                        <p data-aos="fade-left" data-aos-duration="1000" class="text-lg text-gray-700 leading-relaxed text-justify">
                            Kami terus berupaya menjaga keindahan taman ini. Setiap sudut dirawat penuh dedikasi yang tinggi. Berbagai tantangan hadir dalam pelestarian alam. Kami menghadapinya dengan semangat tak pernah menyerah. Solusi inovatif terus kami kembangkan. Demi pengalaman terbaik bagi para pengunjung. Kami berkomitmen ciptakan lingkungan asri. Lingkungan itu sangat memanjakan mata Anda. Setiap bunga edelweis memiliki kisah unik. Kami merawatnya agar terus lestari. Pengelolaan taman ini sangatlah kompleks. Namun semangat kami tak pernah padam. Kami percaya pada keajaiban alam. Keajaiban itu perlu dijaga bersama-sama. Pengunjung dapat belajar banyak dari sini.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Halaman Location -->
    <section id="location" class="relative w-full h-screen bg-white px-10 mb-12 ">
        <div data-aos="fade-up" data-aos-duration="1000" class="flex flex-col justify-center items-center mt-12 mb-10">
            <h1 class="text-4xl md:text-5xl font-semibold text-[#2C3930] mb-4">Location</h1>
            <p class="text-2xl font-medium text-[#2C3930]">Kunjungi kami pada lokasi yang telah ditentukan</p>
        </div>
        <!-- Map Container -->
        <div class="w-full h-full relative">
            <!-- Google Maps Iframe -->
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3947.328835881551!2d115.4633967!3d-8.3692776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd21db916c3b987%3A0x9edfee0513c3844!2sTaman%20Edelweis%20Bali!5e0!3m2!1sid!2sid!4v1746689104224!5m2!1sid!2sid"
                class="absolute inset-0 w-full h-full border-none rounded-lg shadow-sm" allowfullscreen loading="lazy"
                aria-hidden="false" tabindex="0" referrerpolicy="no-referrer-when-downgrade"></iframe>

            <!-- Floating Info Card - Disesuaikan agar fleksibel ke bawah -->
            <div data-aos="fade-left" data-aos-duration="1000"
                class="absolute right-10 top-24 w-96 bg-white rounded-xl shadow-2xl border border-gray-200 overflow-hidden flex flex-col">
                <!-- Card Header -->
                <div class="bg-[#2C3930] p-6 text-white">
                    <h2 class="text-2xl font-bold">Taman Edelweis Bali</h2>
                    <p class="text-white mt-1">Wisata Alam & Kebun Bunga</p>
                </div>

                <!-- Card Body -->
                <div class="p-6 divide-y divide-gray-200">
                    <!-- Alamat -->
                    <div class="flex items-start pb-6 space-x-4">
                        <svg class="w-6 h-6 text-green-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 0 1 6 0z" />
                        </svg>
                        <p class="text-gray-700">Besakih, Banjar Temukus, Kabupaten Karangasem, Bali 80863
                        </p>
                    </div>

                    <!-- Kontak -->
                    <div class="flex items-start py-6 space-x-4">
                        <svg class="w-6 h-6 text-green-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <p class="text-gray-700">+62 812-3456-7890</p>
                    </div>

                    <!-- Email -->
                    <div class="flex items-start pt-6 space-x-4">
                        <svg class="w-6 h-6 text-green-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <a href="mailto:info@tamanedelweisbali.com"
                            class="text-gray-700 hover:text-green-800 hover:underline transition-colors duration-200 ease-in-out">
                            info@tamanedelweisbali.com
                        </a>
                    </div>
                </div>

                <!-- Card Footer -->
                <div class="bg-gray-50 px-6 py-4 border-t border-gray-200">
                    <a href="https://maps.google.com/?q=Taman+Edelweis+Bali" target="_blank"
                        class="block bg-[#2C3930] hover:bg-green-700 text-white px-6 py-3 rounded-lg transition-all duration-300 ease-in-out text-lg font-semibold text-center shadow-md hover:shadow-lg">
                        Dapatkan Petunjuk Arah
                    </a>
                </div>
            </div>
    </section>
    @php
    $isLoggedIn = Auth::check();
    @endphp

<!-- Include Chatbot Component -->
@include('components.chatbot')
        <!-- Halaman Gallery -->
        <section id="gallery" class="relative mt-10 w-full h-auto">
            <div data-aos="fade-up" data-aos-duration="1000" class="text-center mt-48">
                <h1 class="text-[48px] font-semibold text-[#2C3930]">Gallery</h1>
                <p class="text-xl">Keindahan Alam yang ada pada kami dari dulu sampai saat ini</p>
            </div>
            <div data-aos="fade-up" data-aos-duration="1000" class="max-w-6xl mx-auto px-4 py-2 mb-24">
                <div class="columns-1 sm:columns-2 md:columns-3 lg:columns-4 gap-3 space-y-3">
                    @foreach ([
                        'gallery.svg',
                        'gallery1.svg',
                        'gallery2.svg',
                        'gallery3.svg',
                        'gallery10.svg',
                        'gallery4.svg',
                        'gallery5.svg',
                        'gallery6.svg',
                        'gallery8.svg',
                        'gallery9.svg',
                        'gallery11.svg',

                        ]
                    as $image)
                    <div class="break-inside-avoid overflow-hidden shadow hover:shadow-lg transition">
                        <img src="{{ asset('images/gallery/' . $image) }}" alt="Galeri"
                        class="w-full h-auto block hover:scale-105 transition-transform duration-700">
                    </div>
                    @endforeach
                </div>
            </div>
        </section>



<!--- Halaman Tiket --->
<section id="ticket" class="relative bg-white mt-24 mb-16">
    <div class="w-full h-auto max-w-6xl mx-auto flex flex-col justify-center items-center">
        <h1 data-aos="fade-up" data-aos-duration="1000" class="text-[40px] md:text-[48px] text-[#2C3930] font-semibold">Ticket</h1>
        <h2 data-aos="fade-up" data-aos-duration="1000" class="text-[16px] md:text-[20px] text-[#2C3930] font-semibold mb-8">Pesan tiket masuk Taman Edelweis Bali dengan mudah dan cepat!</h2>
        <div class="w-full grid grid-cols-1 md:grid-cols-2 gap-8">

            <!-- Tiket Domestik -->
            <div data-aos="fade-right" data-aos-duration="1000" class="w-full md:w-[500px] mx-auto h-auto p-5 border rounded-xl flex flex-col items-center justify-center gap-2 bg-white shadow">
                <h2 class="text-[20px] md:text-[24px] font-semibold text-center text-[#2C3930]">Tiket Domestik</h2>
                <p class="text-center text-[#9E9E9E] text-[16px] md:text-[18px] mb-5">Tiket untuk pengunjung domestik</p>
                <ul class="space-y-4 text-[15px] md:text-[17px] text-gray-600 pl-0 mb-9">
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                        </svg>
                        Warga Negara Indonesia (WNI)
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 text-blue-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 7a2 2 0 11-4 0 2 2 0 014 0zM17 21v-2a4 4 0 00-8 0v2"/>
                        </svg>
                        Menunjukkan identitas resmi (KTP/SIM/Pelajar)
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 text-yellow-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 1.343-3 3s1.343 3 3 3 3-1.343 3-3-1.343-3-3-3zm0 0V4m0 7v7"/>
                        </svg>
                        Pembayaran hanya melalui metode yang tersedia
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 text-red-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6l4 2"/>
                        </svg>
                        Tiket berlaku hanya untuk satu kali kunjungan
                    </li>
                </ul>
                @if($isLoggedIn)
                    <a href="{{ url('/tiketLokal') }}" class="flex justify-center items-center w-full h-[50px] bg-[#2C3930] rounded-3xl text-white font-semibold text-[16px] md:text-[18px] mt-4">Beli Tiket</a>
                @else
                    <a href="{{ url('/tiketLokal') }}" class="flex justify-center items-center w-full h-[50px] bg-[#2C3930] hover:bg-[#364c3d] rounded-3xl text-white font-semibold text-[16px] md:text-[18px] mt-4">Login untuk membeli</a>
                @endif
            </div>

            <!-- Tiket Foreigner -->
            <div data-aos="fade-left" data-aos-duration="1000" class="w-full md:w-[500px] mx-auto h-auto p-5 border rounded-xl flex flex-col items-center justify-center gap-2 bg-white shadow">
                <h2 class="text-[20px] md:text-[24px] font-semibold text-center text-[#2C3930]">Foreigner Ticket</h2>
                <p class="text-center text-[#9E9E9E] text-[16px] md:text-[18px] mb-5">Tickets for foreigner visitors</p>
                <ul class="space-y-4 text-[15px] md:text-[17px] text-gray-600 pl-0 mb-9">
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                        </svg>
                        Non-Indonesian citizens
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 text-blue-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 7a2 2 0 11-4 0 2 2 0 014 0zM17 21v-2a4 4 0 00-8 0v2"/>
                        </svg>
                        Show valid passport or ID
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 text-yellow-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 1.343-3 3s1.343 3 3 3 3-1.343 3-3-1.343-3-3-3zm0 0V4m0 7v7"/>
                        </svg>
                        Payment via available methods only
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 text-red-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6l4 2"/>
                        </svg>
                        Ticket valid for single entry only
                    </li>
                </ul>
                @if($isLoggedIn)
                    <a href="{{ url('/tiketWna') }}" class="flex justify-center items-center w-full h-[50px] bg-[#2C3930] rounded-3xl font-semibold text-white text-[16px] md:text-[18px] mt-4">Buy Ticket</a>
                @else
                    <a href="{{ url('/tiketWna') }}" class="flex justify-center items-center w-full h-[50px] bg-[#2C3930] hover:bg-[#364c3d] rounded-3xl font-semibold text-white text-[16px] md:text-[18px] mt-4">Login to buy</a>
                @endif
            </div>
        </div>
    </div>
</section>

<div id="loginModal" class="fixed inset-0 bg-black bg-opacity-40 flex items-center justify-center z-50 hidden">
    <div class="bg-white rounded-xl p-8 shadow-lg max-w-sm w-full">
        <h2 class="text-xl font-bold mb-4 text-center">Login Dulu</h2>
        <p class="mb-6 text-center text-gray-600">Anda harus login untuk membeli tiket.</p>
        <a href="{{ url('/login') }}" class="block w-full text-center bg-[#2C3930] text-white rounded-lg py-3 font-semibold hover:bg-[#364c3d] transition mb-2">Login</a>
        <button onclick="document.getElementById('loginModal').classList.add('hidden')" class="w-full py-2 rounded-lg border mt-2">Tutup</button>
    </div>
</div>

<!-- Tambahkan popup khusus tourist setelah popup login lokal -->
<div id="loginModalTourist" class="fixed inset-0 bg-black bg-opacity-40 flex items-center justify-center z-50 hidden">
    <div class="bg-white rounded-xl p-8 shadow-lg max-w-sm w-full">
        <h2 class="text-xl font-bold mb-4 text-center">Please Login</h2>
        <p class="mb-6 text-center text-gray-600">You must login to buy a ticket.</p>
        <a href="{{ url('/login') }}" class="block w-full text-center bg-[#2C3930] text-white rounded-lg py-3 font-semibold hover:bg-[#364c3d] transition mb-2">Login</a>
        <button onclick="document.getElementById('loginModalTourist').classList.add('hidden')" class="w-full py-2 rounded-lg border mt-2">Close</button>
    </div>
</div>



    <!-- Initialize AOS -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            offset: 100
        });
    </script>

</body>
<script>
    @if (session('success'))
        Swal.fire({
            icon: 'success',
            title: 'Sukses!',
            text: '{{ session('success') }}',
            timer: 2500,
            showConfirmButton: false
        });
    @endif

    @if (session('error'))
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: '{{ session('error') }}',
            timer: 2500,
            showConfirmButton: false
        });
    @endif

    </script>
@include('components.footer')

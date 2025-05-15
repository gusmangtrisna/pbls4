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
        }
    </style>
</head>

<body>
    <section id="home">
        <div class="absolute inset-0 bg-cover bg-center opacity-15"
            style="background-image: url('{{ asset('/images/background.svg') }}');"></div>
        <div class="relative isolate px-6 pt-2 lg:px-8">
            <div class="mx-auto max-w-2xl py-18 sm:py-24 lg:py-48">
                <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                </div>
                <div class="text-center">
                    <h1 class="text-balance text-5xl font-semibold tracking-tight text-[#2C3930] sm:text-7xl">Selamat
                        Datang di Taman Edelweis</h1>
                    <p class="mt-8 text-pretty text-lg font-medium text-gray-900 sm:text-xl/8">Anim aute id magna aliqua
                        ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam
                        occaecat.</p>
                    <div class="mt-10 flex items-center justify-center gap-x-6">
                        <a href="#"
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
    <div class="absolute bottom-0 left-0 w-full h-32 bg-gradient-to-b from-transparent to-white z-10"></div>

    <!-- Halaman About -->
    <section id="about">
        <div class="bg-white py-12 sm:py-20">
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

    <style>
      .custom-container-rounded {
        border-top-left-radius: 150px;
        border-bottom-right-radius: 150px;
      }

      .testimonial-wrapper {
        overflow: hidden;
        position: relative;
        height: 260px;
      }

      .testimonial-track {
        display: flex;
        transition: transform 5s ease-in-out; /* Transisi lebih lambat 10 detik */
        width: fit-content;
      }

      .testimonial-slide {
        flex: 0 0 100%;
        box-sizing: border-box;
        padding-right: 1rem;
      }

      .spot-title {
        font-size: 1.875rem;
        font-weight: 700;
        color: #f97316;
        margin-bottom: 0.5rem;
      }

      .spot-description {
        font-size: 1.125rem;
        line-height: 1.75rem;
        color: #ffffff;
      }
    </style>

    <section class="w-full py-16 bg-gray-100 px-10">
      <div class="w-full custom-container-rounded overflow-hidden shadow-lg flex flex-col lg:flex-row bg-white">

        <!-- Gambar -->
        <div class="w-full lg:w-1/2">
          <img
            src="{{ asset('images/background.svg') }}"
            alt="Client"
            class="w-full h-full object-cover"
          />
        </div>

        <!-- Carousel -->
        <div class="w-full lg:w-1/2 bg-[#2C3930] text-white px-8 py-10 flex flex-col justify-center">
          <div class="testimonial-wrapper">
            <div class="testimonial-track" id="testimonialTrack">
              <!-- Clone last -->
              <div class="testimonial-slide">
                <h3 class="spot-title">Jalur Pendakian (Trekking)</h3>
                <p class="spot-description">
                  Jalur pendakian di tempat ini menawarkan pengalaman yang sangat memuaskan bagi para petualang. Rute yang menantang ini mengarah ke Bukit Asah dan Pura Lempuyang, dua tempat yang sangat populer di kalangan pendaki. Selain itu, pemandangan sekitar selama perjalanan juga sangat memukau, memberikan kesan tersendiri bagi setiap orang yang melaluinya.
                </p>
              </div>

              <!-- Slides -->
              <div class="testimonial-slide">
                <h3 class="spot-title">Hamparan Bunga Edelweis</h3>
                <p class="spot-description">
                  Hamparan bunga edelweis yang menakjubkan menjadi daya tarik utama di tempat ini. Dengan latar belakang pegunungan yang indah, taman ini memiliki ladang bunga edelweis (Anaphalis javanica) yang tumbuh subur dan menciptakan pemandangan alam yang memukau. Keindahan pemandangan ini sering kali membuat pengunjung merasa seperti berada di dunia yang berbeda, penuh dengan kedamaian dan keheningan.
                </p>
              </div>
              <div class="testimonial-slide">
                <h3 class="spot-title">Spot Foto Estetik</h3>
                <p class="spot-description">
                  Di sekitar area ini, terdapat berbagai spot foto yang sangat estetik dan menarik. Spot-spot ini dirancang untuk memberikan pengalaman fotografi yang tak terlupakan, dengan latar belakang bunga edelweis yang mempesona. Terdapat juga ayunan, rumah pohon, jembatan, dan berbagai dekorasi unik lainnya yang dapat membuat setiap foto terlihat semakin menarik dan berkesan.
                </p>
              </div>
              <div class="testimonial-slide">
                <h3 class="spot-title">Pemandangan Gunung & Lembah</h3>
                <p class="spot-description">
                  Dari ketinggian sekitar 1.200 mdpl, tempat ini memberikan pemandangan spektakuler dari Gunung Agung serta lembah-lembah sekitarnya. Panorama alam yang begitu luas dan menakjubkan memberikan ketenangan bagi setiap orang yang datang. Keindahan alam yang alami dan tidak terjamah ini menjadi alasan banyak orang untuk datang berkunjung dan menikmati ketenangannya.
                </p>
              </div>
              <div class="testimonial-slide">
                <h3 class="spot-title">Area Camping Nyaman</h3>
                <p class="spot-description">
                  Bagi pecinta alam, area camping yang ada di tempat ini merupakan pilihan yang sempurna. Dengan lokasi yang sangat strategis, pengunjung dapat menikmati sunrise dan sunset yang sangat memukau. Tenda yang didirikan di sini memberikan kenyamanan, serta suasana tenang yang jarang ditemukan di tempat lain, menjadikan pengalaman berkemah di sini sangat berkesan.
                </p>
              </div>
              <div class="testimonial-slide">
                <h3 class="spot-title">Warung & Kafe</h3>
                <p class="spot-description">
                  Setelah menikmati keindahan alam, pengunjung dapat bersantai di warung dan kafe kecil yang ada di sekitar lokasi. Menyediakan berbagai makanan dan minuman ringan, kafe ini adalah tempat yang sempurna untuk beristirahat sambil menikmati pemandangan alam sekitar yang asri. Dengan suasana yang santai dan nyaman, kafe ini menjadi tempat yang menyenangkan untuk bercengkerama bersama teman atau keluarga.
                </p>
              </div>
              <div class="testimonial-slide">
                <h3 class="spot-title">Jalur Pendakian (Trekking)</h3>
                <p class="spot-description">
                  Jalur pendakian di tempat ini menawarkan pengalaman yang sangat memuaskan bagi para petualang. Rute yang menantang ini mengarah ke Bukit Asah dan Pura Lempuyang, dua tempat yang sangat populer di kalangan pendaki. Selain itu, pemandangan sekitar selama perjalanan juga sangat memukau, memberikan kesan tersendiri bagi setiap orang yang melaluinya.
                </p>
              </div>

              <!-- Clone first -->
              <div class="testimonial-slide">
                <h3 class="spot-title">Hamparan Bunga Edelweis</h3>
                <p class="spot-description">
                  Hamparan bunga edelweis yang menakjubkan menjadi daya tarik utama di tempat ini. Dengan latar belakang pegunungan yang indah, taman ini memiliki ladang bunga edelweis (Anaphalis javanica) yang tumbuh subur dan menciptakan pemandangan alam yang memukau. Keindahan pemandangan ini sering kali membuat pengunjung merasa seperti berada di dunia yang berbeda, penuh dengan kedamaian dan keheningan.
                </p>
              </div>
            </div>
          </div>

          <!-- Navigasi panah -->
          <div class="flex gap-4 mt-4">
            <button onclick="prevSlide()" class="w-10 h-10 bg-orange-500 rounded-full flex items-center justify-center hover:bg-orange-600 transition">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="white">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
              </svg>
            </button>
            <button onclick="nextSlide()" class="w-10 h-10 bg-orange-500 rounded-full flex items-center justify-center hover:bg-orange-600 transition">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="white">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
              </svg>
            </button>
          </div>
        </div>
      </div>
    </section>

    <script>
      const track = document.getElementById("testimonialTrack");
      const slides = document.querySelectorAll(".testimonial-slide");
      const totalSlides = slides.length;
      let index = 1;

      const updatePosition = () => {
        track.style.transform = `translateX(-${index * 100}%)`;
      };

      const nextSlide = () => {
        if (index >= totalSlides - 1) {
          index++;
          updatePosition();
          setTimeout(() => {
            track.style.transition = "none";
            index = 1;
            updatePosition();
            void track.offsetWidth; // trigger reflow
            track.style.transition = "transform 5s ease-in-out";
          }, 2000);
        } else {
          index++;
          updatePosition();
        }
      };

      const prevSlide = () => {
        if (index <= 0) {
          index--;
          updatePosition();
          setTimeout(() => {
            track.style.transition = "none";
            index = totalSlides - 2;
            updatePosition();
            void track.offsetWidth;
            track.style.transition = "transform 5s ease-in-out";
          }, 2000);
        } else {
          index--;
          updatePosition();
        }
      };

      updatePosition();
      setInterval(nextSlide, 10000); // Ganti slide tiap 15 detik
    </script>


    <!-- Halaman Location -->
    <section class="relative w-full h-screen bg-white p-10 mb-12">
        <!-- Map Container -->
        <div class="w-full h-full relative">
            <!-- Google Maps Iframe -->
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3947.328835881551!2d115.4633967!3d-8.3692776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd21db916c3b987%3A0x9edfee0513c3844!2sTaman%20Edelweis%20Bali!5e0!3m2!1sid!2sid!4v1746689104224!5m2!1sid!2sid"
                class="absolute inset-0 w-full h-full border-none rounded-lg shadow-sm" allowfullscreen loading="lazy"
                aria-hidden="false" tabindex="0" referrerpolicy="no-referrer-when-downgrade"></iframe>

            <!-- Floating Info Card - Disesuaikan agar fleksibel ke bawah -->
            <div
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
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <p class="text-gray-700">Jl. Raya Kintamani, Songan A, Kec. Kintamani, Kabupaten Bangli, Bali
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

    <!-- Halaman Harga Tiket -->
    <div class="flex justify-center">
        <h1 class="text-5xl text-[#2C3930] text-center font-semibold max-w-2xl text-pretty tracking-tight">
            Pesan Tiket Masuk Taman Edelweis Sekarang
        </h1>
    </div>

    <div class="flex justify-center mt-3">
        <p class="text-gray-600 font-sans text-xl text-center">
            Rasakan keindahan alam Bali yang belum banyak dijelajahi
        </p>
    </div>

    <div class="flex flex-col items-center justify-center px-6">
        <div class="flex justify-center items-center gap-20 mt-10 flex-wrap">
            <div class="bg-white rounded-2xl border border-[#2C3930] p-10 w-[550px]">
                <h2 class="font-bold text-2xl text-[#2C3930] mb-10">Entrance Fee Domestic</h2>
                <ul class="text-[#2C3930] text-xl space-y-3">
                    <li>• <span class="font-bold">Dewasa</span> : Rp 25.000 / Orang</li>
                    <li>• <span class="font-bold">Anak</span> : Rp 15.000 / Orang</li>
                </ul>
            </div>
            <div class="bg-white text-[#2C3930] rounded-2xl border border-[#2C3930] p-10 w-[550px]">
                <h2 class="font-bold text-2xl text-[#2C3930] mb-10">Entrance Fee International</h2>
                <ul class="text-xl space-y-3">
                    <li>• <span class="font-bold">Dewasa</span> : Rp 50.000 / Orang</li>
                    <li>• <span class="font-bold">Anak</span> : Rp 30.000 / Orang</li>
                </ul>
            </div>
        </div>
        <button
            class="bg-[#2C3930] text-white font-bold text-xl px-5 py-3 rounded-lg shadow-lg hover:bg-[#364c3d] mt-10 mb-20">
            Pesan Tiket
        </button>
    </div>

    <!-- Tombol Chatbot -->
    <button id="chatbot-toggle-btn"
        class="fixed bottom-4 right-6 bg-[#2C3930] hover:bg-[#364c3d] text-white p-3 rounded-full shadow-lg transition duration-300 ease-in-out z-50"
        aria-label="Chatbot">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="w-10 h-10">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z" />
        </svg>
    </button>

    <!-- Chatbot Popup -->
    <div id="chatbot-popup"
        class="hidden fixed bottom-[calc(4rem+1.5rem)] right-0 mr-6 bg-white p-6 rounded-lg border border-[#e5e7eb] w-[500px] h-[610px] z-50 transition-all duration-300 ease-in-out transform scale-95 opacity-0"
        style="box-shadow: 0 0 #0000, 0 0 #0000, 0 1px 2px 0 rgb(0 0 0 / 0.05);">

        <div class="flex flex-col space-y-1.5 pb-6">
            <h2 class="font-semibold text-lg tracking-tight">Chatbot</h2>
            <p class="text-sm text-[#6b7280] leading-3">Silahkan Tanyakan Seputar Taman Edelweis Bali</p>
        </div>

        <!-- Chat Container -->
        <div class="pr-4 h-[450px]" style="min-width: 100%; display: table;">

            <!-- Chat AI nya -->
            <div class="flex gap-3 my-4 text-gray-600 text-sm flex-1">
                <span class="relative flex shrink-0 overflow-hidden rounded-full w-8 h-8">
                    <div class="rounded-full bg-gray-100 border p-1">
                        <svg stroke="none" fill="black" stroke-width="1.5" viewBox="0 0 24 24"
                            aria-hidden="true" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z">
                            </path>
                        </svg>
                    </div>
                </span>
                <p class="leading-relaxed"><span class="block font-bold text-gray-700">AI </span>Hi, how can I help
                    you today?</p>
            </div>

            <!-- Chat Usernya -->
            <div class="flex gap-3 my-4 text-gray-600 text-sm flex-1">
                <span class="relative flex shrink-0 overflow-hidden rounded-full w-8 h-8">
                    <div class="rounded-full bg-gray-100 border p-1">
                        <svg stroke="none" fill="black" viewBox="0 0 16 16" height="20" width="20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z">
                            </path>
                        </svg>
                    </div>
                </span>
                <p class="leading-relaxed"><span class="block font-bold text-gray-700">You </span>fewafef</p>
            </div>

            <!-- Chat AI lagi anjay -->
            <div class="flex gap-3 my-4 text-gray-600 text-sm flex-1">
                <span class="relative flex shrink-0 overflow-hidden rounded-full w-8 h-8">
                    <div class="rounded-full bg-gray-100 border p-1">
                        <svg stroke="none" fill="black" stroke-width="1.5" viewBox="0 0 24 24" height="20"
                            width="20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z">
                            </path>
                        </svg>
                    </div>
                </span>
                <p class="leading-relaxed"><span class="block font-bold text-gray-700">AI </span>Sorry, I couldn't
                    find any
                    information...</p>
            </div>
        </div>

        <!-- Input Form -->
        <div class="flex items-center pt-0">
            <form class="flex items-center justify-center w-full space-x-2">
                <input
                    class="flex h-10 w-full rounded-md border border-[#e5e7eb] px-3 py-2 text-sm placeholder-[#6b7280] focus:outline-none focus:ring-2 focus:ring-[#9ca3af] text-[#030712] focus-visible:ring-offset-2"
                    placeholder="Type your message" value="">
                <button
                    class="inline-flex items-center justify-center rounded-md text-sm font-medium text-white bg-[#2C3930] hover:bg-[#364c3d] h-10 px-4 py-2">
                    Send</button>
            </form>
        </div>
    </div>

    <!-- Halaman Gallery -->
    <section id="" class="relative mt-10 w-full h-auto">
        <div class="text-center my-5">
            <h1 class="text-[48px] font-semibold text-[#2C3930]">Gallery</h1>
            <p class="text-xl">Keindahan Alam yang ada pada kami dari dulu sampai saat ini</p>
        </div>
        <div class="max-w-7xl mx-auto px-4 py-8 mb-24">
            <div class="columns-1 sm:columns-2 md:columns-3 lg:columns-4 gap-3 space-y-3">
                @foreach ([
                    'gallery2.svg',
                    'gallery3.svg',
                    'gallery4.svg',
                    'gallery5.svg',
                    'gallery6.svg',
                    'gallery1.svg',
                    'gallery2.svg',
                    'gallery3.svg',
                    'gallery5.svg',
                    'gallery2.svg',
                    'gallery3.svg',
                    'gallery4.svg',
                    'gallery5.svg',
                    'gallery6.svg',
                    'gallery1.svg',
                    'gallery2.svg',
                    'gallery3.svg',
                    'gallery5.svg',
                    'gallery5.svg'
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

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- Pop up Chatbot & Animasi Pop up -->
    <script>
        const toggleBtn = document.getElementById("chatbot-toggle-btn");
        const popup = document.getElementById("chatbot-popup");

        toggleBtn.addEventListener("click", () => {
            if (popup.classList.contains("hidden")) {
                popup.classList.remove("hidden");
                setTimeout(() => {
                    popup.classList.remove("scale-95", "opacity-0");
                    popup.classList.add("scale-100", "opacity-100");
                }, 10);
            } else {
                popup.classList.remove("scale-100", "opacity-100");
                popup.classList.add("scale-95", "opacity-0");
                setTimeout(() => {
                    popup.classList.add("hidden");
                }, 300);
            }
        });
    </script>

</body>

@include('components.footer')

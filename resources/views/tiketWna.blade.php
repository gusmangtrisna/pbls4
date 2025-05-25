<head>
<title>Tiket Wisatawan Luar</title>
@vite(['resources/css/app.css'])
@include('components.header')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
</head>
<body>
    <div class="absolute inset-0 bg-cover bg-center opacity-15"
        style="background-image: url('{{ asset('/images/background.svg') }}');">
    </div>

        <div class="w-full h-screen flex items-center justify-center">
            <div class="relative max-w-6xl">
                <div class="w-[700px] h-[620px] bg-white border rounded-[8px] px-16 mt-24 mb-2">
                    <div class="text-center my-12">
                        <p class="text-[#8C8C8C] font-semibold text-[16px]">Purchase your ticket</p>
                        <h1 class="text-[32px] font-extrabold">TAMAN EDELWEIS BALI</h1>
                    </div>
                   <form action="/tiket" method="POST" class="mt-8">
                        <label class="text-[14px] font-bold text-start pb-4">Chose Ticket : </label>
                        {{-- Tiket Orang Dewasa WNA --}}
                        <div class="flex justify-between items-center">
                            <div class="bg-white flex justify-between items-center w-[270px] h-[60px] border px-5">
                                {{-- CheckBox Ticket Dewasa --}}
                                <div class="flex items-start gap-3">
                                    <input type="checkbox" id="adult" name="pTicket[]" class="my-auto accent-green-600 w-5 h-5 rounded-lg">
                                    <label for="adult" class="font-bold text-[20px]">Adult</label>
                                </div>
                                <div class="flex justify-between items-center gap-2">
                                    {{-- Button - --}}
                                    <button id="plus" class="bg-[#DDDDDD] rounded-[6px]">
                                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M19.7923 13.5396H5.20898V11.4563H19.7923V13.5396Z" fill="black"/>
                                        </svg>
                                    </button>

                                    <p class="w-[30px] h-[30px] text-center font-bold text-[20px]">0</p>

                                    {{-- Button + --}}
                                    <button id="minus" class="bg-[#DDDDDD] rounded-[6px]">
                                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M19.7923 13.5396H13.5423V19.7896H11.459V13.5396H5.20898V11.4563H11.459V5.2063H13.5423V11.4563H19.7923V13.5396Z" fill="black"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            {{-- CheckBox anak-anak --}}
                            <div class="bg-white flex justify-between items-center w-[270px] h-[60px] border px-5">
                                <div class="flex items-start gap-3">
                                    <input type="checkbox" id="adult" name="pTicket[]" class="my-auto accent-green-600 w-5 h-5 rounded-lg">
                                    <label for="adult" class="font-bold text-[20px]">Kids</label>
                                </div>
                                <div class="flex justify-between items-center gap-2">
                                    {{-- Button - --}}
                                    <button class="bg-[#DDDDDD] rounded-[6px]">
                                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M19.7923 13.5396H5.20898V11.4563H19.7923V13.5396Z" fill="black"/>
                                        </svg>
                                    </button>

                                    <p class="w-[30px] h-[30px] text-center font-bold text-[20px]">0</p>

                                    {{-- Button + --}}
                                    <button class="bg-[#DDDDDD] rounded-[6px]">
                                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M19.7923 13.5396H13.5423V19.7896H11.459V13.5396H5.20898V11.4563H11.459V5.2063H13.5423V11.4563H19.7923V13.5396Z" fill="black"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        {{-- Name --}}
                        <div class="mt-5">
                        <label for="nama" class="text-[14px] font-bold text-start">Name : </label>
                        </div>
                        <input type="text" id="nama" class="pl-3 bg-white border w-[570px] h-[40px]" required>
                        {{-- Input Tanggal --}}
                        <div class="mt-5">
                            <label for="tanggal" class="text-[14px] font-bold text-start">Date : </label>
                        </div>
                        <div class="relative flex items-center bg-white border w-[570px] h-[40px] px-4">
                            <svg width="40" height="40" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute left-4 top-1/2 transform -translate-y-1/2 pointer-events-none">
                                <path d="M17.7077 29.1666C18.3984 29.1666 19.0607 28.8923 19.5491 28.4039C20.0375 27.9155 20.3118 27.2531 20.3118 26.5625C20.3118 25.8718 20.0375 25.2094 19.5491 24.7211C19.0607 24.2327 18.3984 23.9583 17.7077 23.9583C17.017 23.9583 16.3546 24.2327 15.8663 24.7211C15.3779 25.2094 15.1035 25.8718 15.1035 26.5625C15.1035 27.2531 15.3779 27.9155 15.8663 28.4039C16.3546 28.8923 17.017 29.1666 17.7077 29.1666ZM17.7077 36.4583C18.3984 36.4583 19.0607 36.1839 19.5491 35.6956C20.0375 35.2072 20.3118 34.5448 20.3118 33.8541C20.3118 33.1635 20.0375 32.5011 19.5491 32.0127C19.0607 31.5243 18.3984 31.25 17.7077 31.25C17.017 31.25 16.3546 31.5243 15.8663 32.0127C15.3779 32.5011 15.1035 33.1635 15.1035 33.8541C15.1035 34.5448 15.3779 35.2072 15.8663 35.6956C16.3546 36.1839 17.017 36.4583 17.7077 36.4583ZM27.6035 26.5625C27.6035 27.2531 27.3291 27.9155 26.8408 28.4039C26.3524 28.8923 25.69 29.1666 24.9993 29.1666C24.3087 29.1666 23.6463 28.8923 23.1579 28.4039C22.6695 27.9155 22.3952 27.2531 22.3952 26.5625C22.3952 25.8718 22.6695 25.2094 23.1579 24.7211C23.6463 24.2327 24.3087 23.9583 24.9993 23.9583C25.69 23.9583 26.3524 24.2327 26.8408 24.7211C27.3291 25.2094 27.6035 25.8718 27.6035 26.5625ZM24.9993 36.4583C25.69 36.4583 26.3524 36.1839 26.8408 35.6956C27.3291 35.2072 27.6035 34.5448 27.6035 33.8541C27.6035 33.1635 27.3291 32.5011 26.8408 32.0127C26.3524 31.5243 25.69 31.25 24.9993 31.25C24.3087 31.25 23.6463 31.5243 23.1579 32.0127C22.6695 32.5011 22.3952 33.1635 22.3952 33.8541C22.3952 34.5448 22.6695 35.2072 23.1579 35.6956C23.6463 36.1839 24.3087 36.4583 24.9993 36.4583ZM34.8952 26.5625C34.8952 27.2531 34.6208 27.9155 34.1324 28.4039C33.6441 28.8923 32.9817 29.1666 32.291 29.1666C31.6003 29.1666 30.938 28.8923 30.4496 28.4039C29.9612 27.9155 29.6868 27.2531 29.6868 26.5625C29.6868 25.8718 29.9612 25.2094 30.4496 24.7211C30.938 24.2327 31.6003 23.9583 32.291 23.9583C32.9817 23.9583 33.6441 24.2327 34.1324 24.7211C34.6208 25.2094 34.8952 25.8718 34.8952 26.5625Z" fill="black"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.666 6.77081C17.0804 6.77081 17.4778 6.93543 17.7709 7.22846C18.0639 7.52148 18.2285 7.91891 18.2285 8.33331V9.89581H31.7702V8.33331C31.7702 7.91891 31.9348 7.52148 32.2278 7.22846C32.5209 6.93543 32.9183 6.77081 33.3327 6.77081C33.7471 6.77081 34.1445 6.93543 34.4375 7.22846C34.7306 7.52148 34.8952 7.91891 34.8952 8.33331V9.91248C35.2119 9.92081 35.507 9.93609 35.7806 9.95831C36.5723 10.0208 37.3139 10.1625 38.016 10.5208C39.0943 11.0701 39.9709 11.9467 40.5202 13.025C40.8785 13.7271 41.0202 14.4687 41.0827 15.2604C41.1452 16.0208 41.1452 16.9479 41.1452 18.0625V34.0208C41.1452 35.1354 41.1452 36.0625 41.0827 36.8229C41.0202 37.6146 40.8785 38.3562 40.5202 39.0583C39.9714 40.1362 39.0956 41.0128 38.0181 41.5625C37.3139 41.9208 36.5723 42.0625 35.7806 42.125C35.0202 42.1875 34.0931 42.1875 32.9806 42.1875H17.0202C15.9056 42.1875 14.9785 42.1875 14.2181 42.125C13.4264 42.0625 12.6848 41.9208 11.9827 41.5625C10.9051 41.0143 10.0285 40.1392 9.47852 39.0625C9.12018 38.3583 8.97852 37.6166 8.91602 36.825C8.85352 36.0646 8.85352 35.1375 8.85352 34.025V18.0625C8.85352 16.9479 8.85352 16.0208 8.91602 15.2604C8.97852 14.4687 9.12018 13.7271 9.47852 13.025C10.0278 11.9467 10.9044 11.0701 11.9827 10.5208C12.6848 10.1625 13.4264 10.0208 14.2181 9.95831C14.4917 9.93609 14.7868 9.92081 15.1035 9.91248V8.33331C15.1035 8.12812 15.1439 7.92494 15.2225 7.73537C15.301 7.5458 15.4161 7.37355 15.5612 7.22846C15.7063 7.08337 15.8785 6.96827 16.0681 6.88975C16.2576 6.81123 16.4608 6.77081 16.666 6.77081ZM38.0202 21.3541H11.9785V33.9583C11.9785 35.15 11.9785 35.9521 12.0306 36.5666C12.0785 37.1666 12.166 37.4521 12.2618 37.6396C12.5118 38.1312 12.9098 38.5291 13.4014 38.7791C13.5889 38.875 13.8743 38.9625 14.4723 39.0104C15.0889 39.0604 15.8889 39.0625 17.0827 39.0625H32.916C34.1077 39.0625 34.9098 39.0625 35.5244 39.0104C36.1244 38.9625 36.4098 38.875 36.5973 38.7791C37.0881 38.5293 37.487 38.1304 37.7369 37.6396C37.8327 37.4521 37.9202 37.1666 37.9681 36.5666C38.0181 35.9521 38.0202 35.15 38.0202 33.9583V21.3541ZM21.8743 14.5833C21.4599 14.5833 21.0625 14.7479 20.7695 15.041C20.4765 15.334 20.3118 15.7314 20.3118 16.1458C20.3118 16.5602 20.4765 16.9576 20.7695 17.2507C21.0625 17.5437 21.4599 17.7083 21.8743 17.7083H28.1244C28.5388 17.7083 28.9362 17.5437 29.2292 17.2507C29.5222 16.9576 29.6869 16.5602 29.6869 16.1458C29.6869 15.7314 29.5222 15.334 29.2292 15.041C28.9362 14.7479 28.5388 14.5833 28.1244 14.5833H21.8743Z" fill="black"/>
                            </svg>
                            <input type="text" id="tanggal" class="bg-white w-full h-full pl-12 outline-none" placeholder="dd/mm/yyyy" required>
                        </div>
                        <div class="mt-5">
                        <label class="text-[14px] font-bold text-start">Total : </label>
                        </div>
                        <p type="text" class="p-3 bg-white border w-[570px] h-[40px]"></p>
                        <div class="mt-10 text-center">
                            <button type="submit" class="w-[300px] h-[40px] bg-[#2C3930] text-[24px] rounded-lg font-bold text-white">Confirm</button>
                            <p class="text-[#8C8C8C] font-semibold text-[14px]">Make sure your payment safety</p>
                        </div>
                   </form>
                </div>
            </div>
        </div>

            <script>
                flatpickr("#tanggal", {
                minDate: "today", // Tidak bisa pilih tanggal kemarin
                dateFormat: "Y-m-d"
                });
            </script>
</body>


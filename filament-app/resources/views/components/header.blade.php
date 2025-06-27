<header class="fixed inset-x-0 top-0 z-50 backdrop-blur-sm">
    <nav class="flex items-center justify-between p-6 lg:px-14" aria-label="Global">
      <div class="flex lg:flex-1">
        <a href="{{ url('/#') }}" class="-m-1.5 p-1.5">
          <span class="sr-only">d</span>
            <div class="flex">
                <img class="h-12 w-auto" src="/images/logo.svg" alt="">
                <h1 class="text-[18px] text-[#2C3930] px-4 font-bold">TAMAN <br /> EDELWEIS</h1>
            </div>
        </a>
      </div>
      <div class="flex lg:hidden">
        <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
          <span class="sr-only">Open main menu</span>
          <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
          </svg>
        </button>
      </div>
      <div class="hidden lg:flex lg:gap-x-12 text-[#2C3930]">
        <a href="{{ url('/#') }}" class="text-sb/6 font-semibold relative after:absolute after:bottom-0 after:left-0 after:h-0.5 after:w-0 after:bg-green-950 after:transition-all after:duration-300 hover:after:w-full"">Home</a>
        <a href="{{ url('/#about') }}" class="text-sb/6 font-semibold relative after:absolute after:bottom-0 after:left-0 after:h-0.5 after:w-0 after:bg-green-950 after:transition-all after:duration-300 hover:after:w-full"">About</a>
        <a href="{{ url('/#location') }}" class="text-sb/6 font-semibold relative after:absolute after:bottom-0 after:left-0 after:h-0.5 after:w-0 after:bg-green-950 after:transition-all after:duration-300 hover:after:w-full"">Location</a>
        <a href="{{ url('/#gallery') }}" class="text-sb/6 font-semibold relative after:absolute after:bottom-0 after:left-0 after:h-0.5 after:w-0 after:bg-green-950 after:transition-all after:duration-300 hover:after:w-full"">Gallery</a>
        <a href="{{ url('/#ticket') }}" class="text-sb/6 font-semibold relative after:absolute after:bottom-0 after:left-0 after:h-0.5 after:w-0 after:bg-green-950 after:transition-all after:duration-300 hover:after:w-full"">Ticket</a>
      </div>
      <div class="hidden lg:flex lg:flex-1 lg:justify-end">
        @guest
            <a href="/login" class="text-sb/6 font-semibold text-[#2C3930] relative after:absolute after:bottom-0 after:left-0 after:h-0.5 after:w-0 after:bg-green-950 after:transition-all after:duration-300 hover:after:w-full">
                Login
            </a>
            <div class="w-px h-6 bg-[#2C3930] mx-2"></div>
            <a href="/register" class="text-sb/6 font-semibold text-[#2C3930] relative after:absolute after:bottom-0 after:left-0 after:h-0.5 after:w-0 after:bg-green-950 after:transition-all after:duration-300 hover:after:w-full">
                Register
            </a>
        @endguest

        @auth
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="text-sb/6 font-semibold text-[#2C3930] relative after:absolute after:bottom-0 after:left-0 after:h-0.5 after:w-0 after:bg-green-950 after:transition-all after:duration-300 hover:after:w-full">
                    Logout
                </button>
            </form>
        @endauth
    </div>
    </nav>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div class="lg:hidden" role="dialog" aria-modal="true">
      <!-- Background backdrop, show/hide based on slide-over state. -->
      <div class="fixed inset-0 z-50"></div>
      <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
        <div class="flex items-center justify-between">
          <a href="#" class="-m-1.5 p-1.5">
            <span class="sr-only">Your Company</span>
            <img class="h-8 w-auto" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="">
          </a>
          <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
            <span class="sr-only">Close menu</span>
            <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="mt-6 flow-root">
          <div class="-my-6 divide-y divide-gray-500/10">
            <div class="space-y-2 py-6">
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Home</a>
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">About</a>
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Location</a>
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Ticket</a>
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Galery</a>
            </div>
            <div class="py-6">
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Log in</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

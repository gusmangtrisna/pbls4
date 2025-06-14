<header class="fixed inset-x-0 top-0 z-50 backdrop-blur-sm">
    <style>
        .transform {
            transition: transform 0.2s ease-out;
            transform-origin: top;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        .fade-in {
            animation: fadeIn 0.2s ease-out;
        }
    </style>
    <nav class="flex items-center justify-between p-6 lg:px-14 bg-white/95 lg:bg-transparent" aria-label="Global">
      <!-- RESPONSIVE (MOBILE & DESKTOP): bg-white/95 untuk mobile, lg:bg-transparent untuk desktop -->
      <div class="flex lg:flex-1">
        <a href="{{ url('/#') }}" class="-m-1.5 p-1.5">
          <span class="sr-only">Taman Edelweis</span>
            <div class="flex">
                <img class="h-12 w-auto" src="/images/logo.svg" alt="">
                <h1 class="text-[18px] text-[#2C3930] px-4 font-bold">TAMAN <br /> EDELWEIS</h1>
            </div>
        </a>
      </div>
      <div class="flex lg:hidden">
        <!-- MOBILE ONLY: Tombol menu hamburger -->
        <button type="button" id="mobileMenuButton" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-[#2C3930] hover:bg-gray-100">
          <span class="sr-only">Open main menu</span>
          <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
          </svg>
        </button>
      </div>
      <div class="hidden lg:flex lg:gap-x-12 text-[#2C3930]">
        <!-- DESKTOP ONLY: Menu utama -->
        <a href="{{ url('/#') }}" class="{{ request()->is('/') ? 'text-[#2C3930] after:w-full' : '' }} text-sb/6 font-semibold relative after:absolute after:bottom-0 after:left-0 after:h-0.5 after:w-0 after:bg-[#2C3930] after:transition-all after:duration-300 hover:after:w-full hover:text-[#2C3930]">Home</a>
        <a href="{{ url('/#about') }}" class="{{ request()->segment(1) === 'about' ? 'text-[#2C3930] after:w-full' : '' }} text-sb/6 font-semibold relative after:absolute after:bottom-0 after:left-0 after:h-0.5 after:w-0 after:bg-[#2C3930] after:transition-all after:duration-300 hover:after:w-full hover:text-[#2C3930]">About</a>
        <a href="{{ url('/#location') }}" class="{{ request()->segment(1) === 'location' ? 'text-[#2C3930] after:w-full' : '' }} text-sb/6 font-semibold relative after:absolute after:bottom-0 after:left-0 after:h-0.5 after:w-0 after:bg-[#2C3930] after:transition-all after:duration-300 hover:after:w-full hover:text-[#2C3930]">Location</a>
        <a href="{{ url('/#gallery') }}" class="{{ request()->segment(1) === 'gallery' ? 'text-[#2C3930] after:w-full' : '' }} text-sb/6 font-semibold relative after:absolute after:bottom-0 after:left-0 after:h-0.5 after:w-0 after:bg-[#2C3930] after:transition-all after:duration-300 hover:after:w-full hover:text-[#2C3930]">Gallery</a>
        <a href="{{ url('/#ticket') }}" class="{{ request()->segment(1) === 'ticket' ? 'text-[#2C3930] after:w-full' : '' }} text-sb/6 font-semibold relative after:absolute after:bottom-0 after:left-0 after:h-0.5 after:w-0 after:bg-[#2C3930] after:transition-all after:duration-300 hover:after:w-full hover:text-[#2C3930]">Ticket</a>
      </div>
      <div class="hidden lg:flex lg:flex-1 lg:justify-end">
        <!-- DESKTOP ONLY: Login/Register -->
        <a href="/login" class="{{ request()->is('login') ? 'text-[#2C3930] after:w-full' : '' }} text-sb/6 font-semibold text-[#2C3930] relative after:absolute after:bottom-0 after:left-0 after:h-0.5 after:w-0 after:bg-[#2C3930] after:transition-all after:duration-300 hover:after:w-full hover:text-[#2C3930]">Login</a>
        <div class="w-px h-6 bg-[#2C3930] mx-2"></div>
        <a href="/register" class="{{ request()->is('register') ? 'text-[#2C3930] after:w-full' : '' }} text-sb/6 font-semibold text-[#2C3930] relative after:absolute after:bottom-0 after:left-0 after:h-0.5 after:w-0 after:bg-[#2C3930] after:transition-all after:duration-300 hover:after:w-full hover:text-[#2C3930]">Register</a>
      </div>
    </nav>

    <!-- MOBILE ONLY: Mobile menu dropdown -->
    <div id="mobileMenu" class="lg:hidden hidden absolute top-[4.5rem] left-0 w-full z-50" role="dialog" aria-modal="true">
      <div class="fixed inset-0 bg-black/30 transition-opacity"></div>
      <div class="relative mx-4 bg-white shadow-lg rounded-lg transform transition-transform origin-top">
        <button type="button" id="closeMenuButton" class="absolute -right-2 -top-2 p-1 rounded-full bg-white shadow-md text-[#2C3930] hover:bg-gray-100">
          <span class="sr-only">Close menu</span>
          <svg class="size-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
        <div class="max-h-[calc(100vh-8rem)] overflow-y-auto px-6 py-8">
          <div class="divide-y divide-gray-500/10">
            <div class="grid gap-3">
              <a href="{{ url('/#') }}" 
                 class="{{ request()->is('/') ? 'bg-gray-100 text-[#2C3930]' : '' }} block rounded-lg px-4 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50 hover:text-[#2C3930] transition-colors">
                 <div class="flex items-center justify-between">
                     <span>Home</span>
                     @if(request()->is('/'))
                         <div class="w-1 h-6 bg-[#2C3930]"></div>
                     @endif
                 </div>
              </a>
              <a href="{{ url('/#about') }}" 
                 class="{{ request()->segment(1) === 'about' ? 'bg-gray-100 text-[#2C3930]' : '' }} block rounded-lg px-4 py-3 text-base font-semibold text-gray-900 hover:bg-gray-50 hover:text-[#2C3930] transition-colors">
                 <div class="flex items-center justify-between">
                     <span>About</span>
                     @if(request()->segment(1) === 'about')
                         <div class="w-1 h-6 bg-[#2C3930]"></div>
                     @endif
                 </div>
              </a>
              <a href="{{ url('/#location') }}" 
                 class="{{ request()->segment(1) === 'location' ? 'bg-gray-100 text-[#2C3930]' : '' }} block rounded-lg px-4 py-3 text-base font-semibold text-gray-900 hover:bg-gray-50 hover:text-[#2C3930] transition-colors">
                 <div class="flex items-center justify-between">
                     <span>Location</span>
                     @if(request()->segment(1) === 'location')
                         <div class="w-1 h-6 bg-[#2C3930]"></div>
                     @endif
                 </div>
              </a>
              <a href="{{ url('/#gallery') }}" 
                 class="{{ request()->segment(1) === 'gallery' ? 'bg-gray-100 text-[#2C3930]' : '' }} block rounded-lg px-4 py-3 text-base font-semibold text-gray-900 hover:bg-gray-50 hover:text-[#2C3930] transition-colors">
                 <div class="flex items-center justify-between">
                     <span>Gallery</span>
                     @if(request()->segment(1) === 'gallery')
                         <div class="w-1 h-6 bg-[#2C3930]"></div>
                     @endif
                 </div>
              </a>
              <a href="{{ url('/#ticket') }}" 
                 class="{{ request()->segment(1) === 'ticket' ? 'bg-gray-100 text-[#2C3930]' : '' }} block rounded-lg px-4 py-3 text-base font-semibold text-gray-900 hover:bg-gray-50 hover:text-[#2C3930] transition-colors">
                 <div class="flex items-center justify-between">
                     <span>Ticket</span>
                     @if(request()->segment(1) === 'ticket')
                         <div class="w-1 h-6 bg-[#2C3930]"></div>
                     @endif
                 </div>
              </a>
            </div>
            <div class="pt-6 pb-2 space-y-3">
              <a href="{{ url('/login') }}" 
                 class="{{ request()->is('login') ? 'bg-gray-100 text-[#2C3930]' : '' }} block rounded-lg px-4 py-3 text-base font-semibold text-gray-900 hover:bg-gray-50 hover:text-[#2C3930] transition-colors">
                 <div class="flex items-center justify-between">
                     <span>Login</span>
                     @if(request()->is('login'))
                         <div class="w-1 h-6 bg-[#2C3930]"></div>
                     @endif
                 </div>
              </a>
              <a href="{{ url('/register') }}" 
                 class="{{ request()->is('register') ? 'bg-gray-100 text-[#2C3930]' : '' }} block rounded-lg px-4 py-3 text-base font-semibold text-gray-900 hover:bg-gray-50 hover:text-[#2C3930] transition-colors">
                 <div class="flex items-center justify-between">
                     <span>Register</span>
                     @if(request()->is('register'))
                         <div class="w-1 h-6 bg-[#2C3930]"></div>
                     @endif
                 </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.getElementById('mobileMenuButton');
            const closeMenuButton = document.getElementById('closeMenuButton');
            const mobileMenu = document.getElementById('mobileMenu');
            const mobileMenuContent = mobileMenu.querySelector('.transform');
            
            function toggleMenu() {
                const isHidden = mobileMenu.classList.contains('hidden');
                
                // Toggle visibility
                if (isHidden) {
                    // Opening
                    mobileMenu.classList.remove('hidden');
                    document.body.classList.add('overflow-hidden');
                    
                    // Add fade-in animation to backdrop
                    const backdrop = mobileMenu.querySelector('.fixed');
                    backdrop.classList.add('fade-in');
                    
                    // Start with menu scaled to 0
                    mobileMenuContent.style.transform = 'scaleY(0)';
                    mobileMenuContent.style.opacity = '0';
                    // Force browser to acknowledge the previous transform
                    mobileMenuContent.offsetHeight;
                    // Animate to full scale
                    mobileMenuContent.style.transform = 'scaleY(1)';
                    mobileMenuContent.style.opacity = '1';
                } else {
                    // Closing
                    mobileMenuContent.style.transform = 'scaleY(0)';
                    mobileMenuContent.style.opacity = '0';
                    // Wait for animation to finish before hiding
                    setTimeout(() => {
                        mobileMenu.classList.add('hidden');
                        document.body.classList.remove('overflow-hidden');
                        mobileMenuContent.style.transform = '';
                        mobileMenuContent.style.opacity = '';
                    }, 200);
                }
            }
            
            mobileMenuButton.addEventListener('click', toggleMenu);
            closeMenuButton.addEventListener('click', toggleMenu);
            
            // Close menu when clicking outside
            document.addEventListener('click', function(event) {
                const isClickInsideMenu = mobileMenuContent.contains(event.target);
                const isClickOnMenuButton = mobileMenuButton.contains(event.target);
                
                if (!isClickInsideMenu && !isClickOnMenuButton && !mobileMenu.classList.contains('hidden')) {
                    toggleMenu();
                }
            });

            // Handle hash-based navigation
            function setActiveMenuItem() {
                const hash = window.location.hash || '#';
                const menuItems = document.querySelectorAll('a[href*="#"]');
                
                menuItems.forEach(item => {
                    if (item.getAttribute('href').endsWith(hash)) {
                        item.classList.add('text-[#2C3930]', 'after:w-full');
                    } else {
                        item.classList.remove('text-[#2C3930]', 'after:w-full');
                    }
                });
            }

            // Set active menu item on page load and hash change
            setActiveMenuItem();
            window.addEventListener('hashchange', setActiveMenuItem);
        });
    </script>
  </header>

@php
    $currentPath = request()->path();
    $isSolidNav = request()->is('privacy-policy') || request()->is('terms-and-conditions');

    $navLinks = [
        ['name' => 'Home', 'href' => '/'],
        ['name' => 'About', 'href' => '/about'],
        ['name' => 'Services', 'href' => '/services'],
        ['name' => 'Case Study', 'href' => '/portfolio'],
        ['name' => 'Blog', 'href' => '/blog'],
        ['name' => 'Contact', 'href' => '/contact'],
    ];
@endphp

<nav id="mainNav" class="fixed top-0 left-0 w-full flex items-center justify-between px-4 sm:px-8 py-4 z-50 transition-all duration-300 border-none {{ $isSolidNav ? 'bg-black shadow-lg' : 'bg-transparent' }}">
    <!-- Logo -->
    <a href="{{ url('/') }}" class="flex items-center">
        <img src="{{ asset('logo.png') }}" alt="Core Unity Solutions" class="w-auto h-10 object-contain" />
    </a>

    <!-- Navigation Links -->
    <div class="hidden md:flex items-center gap-6 text-sm font-medium">
        @foreach($navLinks as $link)
            @php
                $cleanHref = ltrim($link['href'], '/');
                $isActive = ($link['href'] === '/' && (request()->is('/') || request()->path() === '/')) 
                            || ($cleanHref !== '' && request()->is($cleanHref . '*'));
            @endphp
            <a href="{{ url($link['href']) }}" 
               class="px-4 py-1.5 transition-colors {{ $isActive ? 'bg-[#cc2936] text-white rounded-xl' : 'text-gray-300 hover:text-white' }}">
               {{ $link['name'] }}
            </a>
        @endforeach
    </div>

    <!-- Action Buttons -->
    <div class="flex items-center gap-3">
        <button 
            type="button"
            onclick="openExpertModal()"
            class="bg-red-600 hover:bg-red-700 text-white text-sm font-medium px-5 py-2 rounded-full transition-colors hidden sm:block cursor-pointer">
            Speak to an expert
        </button>
        <a href="https://wa.me/971505559646" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-full border border-gray-700 flex items-center justify-center text-gray-300 hover:text-white hover:border-gray-500 transition-colors" title="WhatsApp">
            <img src="{{ asset('whatsapp_logo.png') }}" alt="WhatsApp" width="18" height="18" class="w-[18px] h-[18px] object-contain" />
        </a>
        <a href="tel:+971505559646" class="w-10 h-10 rounded-full border border-gray-700 flex items-center justify-center text-gray-300 hover:text-white hover:border-gray-500 transition-colors hidden sm:flex" title="Phone">
            <img src="{{ asset('phone_logo.png') }}" alt="Phone" class="w-[18px] h-[18px] object-contain brightness-0 invert" />
        </a>
        <!-- Hamburger / Close Button -->
        <button type="button" onclick="toggleMobileMenu()" id="mobileMenuBtn" class="md:hidden w-10 h-10 rounded-full border border-gray-700 flex items-center justify-center text-gray-300 hover:text-white hover:border-gray-500 transition-colors cursor-pointer" aria-label="Toggle Menu">
            <svg id="menuIconOpen" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 transition-transform duration-300">
                <line x1="4" x2="20" y1="6" y2="6"></line>
                <line x1="4" x2="20" y1="12" y2="12"></line>
                <line x1="4" x2="20" y1="18" y2="18"></line>
            </svg>
            <svg id="menuIconClose" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 hidden transition-transform duration-300">
                <path d="M18 6L6 18M6 6l12 12"></path>
            </svg>
        </button>
    </div>
</nav>

<!-- Mobile Menu Backdrop -->
<div id="mobileMenuBackdrop" class="fixed inset-0 z-40 bg-black/75 backdrop-blur-sm opacity-0 pointer-events-none transition-opacity duration-300 ease-in-out md:hidden" onclick="closeMobileMenu()"></div>

<!-- Mobile Dropdown Menu -->
<div id="mobileMenu" class="fixed inset-x-0 top-[72px] z-40 bg-black border-b border-white/10 px-6 py-6 md:hidden transition-all duration-300 ease-in-out -translate-y-4 opacity-0 pointer-events-none invisible shadow-2xl max-w-full">
    <div class="flex flex-col space-y-3 text-base font-medium">
        @foreach($navLinks as $link)
            @php
                $cleanHref = ltrim($link['href'], '/');
                $isActive = ($link['href'] === '/' && (request()->is('/') || request()->path() === '/')) 
                            || ($cleanHref !== '' && request()->is($cleanHref . '*'));
            @endphp
            <a href="{{ url($link['href']) }}" 
               onclick="closeMobileMenu()" 
               class="py-2 {{ $isActive ? 'text-[#cc2936] font-bold' : 'text-gray-300 hover:text-white' }}">
               {{ $link['name'] }}
            </a>
        @endforeach

        <div class="pt-4 border-t border-white/10">
            <button onclick="openExpertModal(); closeMobileMenu()" 
                    class="w-full py-2.5 text-center text-sm font-semibold text-white bg-red-600 hover:bg-red-700 rounded-full cursor-pointer transition-colors shadow-lg">
                Speak to an expert
            </button>
        </div>
    </div>
</div>

<script>
    let isMobileMenuOpen = false;

    function toggleMobileMenu() {
        if (isMobileMenuOpen) {
            closeMobileMenu();
        } else {
            openMobileMenu();
        }
    }

    function openMobileMenu() {
        isMobileMenuOpen = true;
        const menu = document.getElementById('mobileMenu');
        const backdrop = document.getElementById('mobileMenuBackdrop');
        const nav = document.getElementById('mainNav');
        const iconOpen = document.getElementById('menuIconOpen');
        const iconClose = document.getElementById('menuIconClose');

        if (menu) {
            menu.classList.remove('-translate-y-4', 'opacity-0', 'pointer-events-none', 'invisible');
            menu.classList.add('translate-y-0', 'opacity-100', 'pointer-events-auto', 'visible');
        }
        if (backdrop) {
            backdrop.classList.remove('opacity-0', 'pointer-events-none');
            backdrop.classList.add('opacity-100', 'pointer-events-auto');
        }
        if (nav) {
            nav.classList.add('bg-black');
            nav.classList.remove('bg-transparent');
        }
        if (iconOpen) iconOpen.classList.add('hidden');
        if (iconClose) iconClose.classList.remove('hidden');
    }

    function closeMobileMenu() {
        isMobileMenuOpen = false;
        const menu = document.getElementById('mobileMenu');
        const backdrop = document.getElementById('mobileMenuBackdrop');
        const nav = document.getElementById('mainNav');
        const iconOpen = document.getElementById('menuIconOpen');
        const iconClose = document.getElementById('menuIconClose');

        if (menu) {
            menu.classList.remove('translate-y-0', 'opacity-100', 'pointer-events-auto', 'visible');
            menu.classList.add('-translate-y-4', 'opacity-0', 'pointer-events-none', 'invisible');
        }
        if (backdrop) {
            backdrop.classList.remove('opacity-100', 'pointer-events-auto');
            backdrop.classList.add('opacity-0', 'pointer-events-none');
        }
        if (nav) {
            const isSolidPage = {{ $isSolidNav ? 'true' : 'false' }};
            if (window.scrollY <= 20 && !isSolidPage) {
                nav.classList.remove('bg-black', 'shadow-lg');
                nav.classList.add('bg-transparent');
            }
        }
        if (iconOpen) iconOpen.classList.remove('hidden');
        if (iconClose) iconClose.classList.add('hidden');
    }

    window.addEventListener('scroll', function() {
        const nav = document.getElementById('mainNav');
        if (!nav) return;
        const isSolidPage = {{ $isSolidNav ? 'true' : 'false' }};
        if (isMobileMenuOpen) {
            nav.classList.add('bg-black');
            nav.classList.remove('bg-transparent');
        } else if (window.scrollY > 20 || isSolidPage) {
            nav.classList.add('bg-black', 'shadow-lg');
            nav.classList.remove('bg-transparent');
        } else {
            nav.classList.remove('bg-black', 'shadow-lg');
            nav.classList.add('bg-transparent');
        }
    });

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && isMobileMenuOpen) {
            closeMobileMenu();
        }
    });
</script>

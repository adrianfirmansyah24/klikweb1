<nav class="fixed top-0 left-0 right-0 z-50 flex justify-center pt-3 lg:pt-5">
    <div class="w-full max-w-7xl mx-5 lg:mx-10 bg-white border-2 border-[#2563EB] shadow-lg rounded-full flex items-center justify-between px-5 lg:px-8 h-11 lg:h-[52px]">
        <a href="/" class="flex-shrink-0">
            <img src="{{ asset('images/logo/logo-klikweb.png') }}" alt="KlikWeb" class="h-10 lg:h-12 w-auto">
        </a>
        <div class="hidden md:flex items-center gap-5 lg:gap-7">
            <a href="#home" class="text-[#0F172A] font-semibold text-xs lg:text-sm hover:text-[#2563EB] transition-all duration-300">Home</a>
            <a href="#about" class="text-[#475569] font-semibold text-xs lg:text-sm hover:text-[#2563EB] transition-all duration-300">About</a>
            <a href="#services" class="text-[#475569] font-semibold text-xs lg:text-sm hover:text-[#2563EB] transition-all duration-300">Services</a>
            <a href="#portfolio" class="text-[#475569] font-semibold text-xs lg:text-sm hover:text-[#2563EB] transition-all duration-300">Portofolio</a>
        </div>
        <button class="md:hidden p-2" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
            <svg class="w-5 h-5 text-[#0F172A]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
    </div>
    <div id="mobile-menu" class="hidden md:hidden absolute top-full left-5 right-5 mt-2 bg-white border border-[#2563EB] rounded-2xl shadow-lg">
        <div class="px-6 py-4 space-y-3">
            <a href="#home" class="block py-2 text-[#0F172A] font-semibold text-sm">Home</a>
            <a href="#about" class="block py-2 text-[#475569] font-semibold text-sm">About</a>
            <a href="#services" class="block py-2 text-[#475569] font-semibold text-sm">Services</a>
            <a href="#portfolio" class="block py-2 text-[#475569] font-semibold text-sm">Portofolio</a>
        </div>
    </div>
</nav>

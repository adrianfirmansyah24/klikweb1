<nav class="fixed top-0 left-0 right-0 z-50 flex justify-center px-0 mt-3 sm:mt-4 lg:mt-5">
    <div class="w-full max-w-7xl mx-4 sm:mx-6 lg:mx-10 bg-white border border-[#2563EB]/20 shadow-[0_8px_30px_rgba(37,99,235,0.12)] rounded-2xl flex items-center justify-between px-4 sm:px-6 lg:px-8 h-14 sm:h-16">
        <a href="#home" class="flex-shrink-0 flex items-center group" aria-label="KlikWeb Beranda">
            <img src="{{ asset('images/compro/logo.png') }}" alt="KlikWeb" class="h-7 sm:h-8 lg:h-9 w-auto transition-transform duration-300 group-hover:scale-105">
        </a>
        <div class="hidden md:flex items-center gap-6 lg:gap-8">
            <a href="#home" class="text-[#0F172A] font-semibold text-sm hover:text-[#2563EB] transition-colors duration-300">Home</a>
            <a href="#about" class="text-[#475569] font-semibold text-sm hover:text-[#2563EB] transition-colors duration-300">About</a>
            <a href="#services" class="text-[#475569] font-semibold text-sm hover:text-[#2563EB] transition-colors duration-300">Services</a>
            <a href="#portfolio" class="text-[#475569] font-semibold text-sm hover:text-[#2563EB] transition-colors duration-300">Portofolio</a>
            <a href="#contact" class="ml-2 inline-flex items-center justify-center px-5 py-2.5 bg-[#2563EB] text-white text-sm font-semibold rounded-xl shadow-md hover:bg-[#1D4ED8] transition-all duration-300">Konsultasi Gratis</a>
        </div>
        <button id="mobile-toggle" class="md:hidden p-2 rounded-lg hover:bg-[#EFF6FF] transition-colors duration-200" aria-label="Buka menu" aria-expanded="false" aria-controls="mobile-menu">
            <svg id="icon-open" class="w-6 h-6 text-[#0F172A]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
            <svg id="icon-close" class="hidden w-6 h-6 text-[#0F172A]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>
    </div>
    <div id="mobile-menu" class="hidden md:hidden absolute top-full left-4 right-4 sm:left-6 sm:right-6 mt-2 bg-white border border-[#2563EB]/20 rounded-2xl shadow-xl overflow-hidden">
        <div class="px-6 py-5 space-y-1">
            <a href="#home" class="mobile-link block py-3 text-[#0F172A] font-semibold text-sm border-b border-slate-100">Home</a>
            <a href="#about" class="mobile-link block py-3 text-[#475569] font-semibold text-sm border-b border-slate-100">About</a>
            <a href="#services" class="mobile-link block py-3 text-[#475569] font-semibold text-sm border-b border-slate-100">Services</a>
            <a href="#portfolio" class="mobile-link block py-3 text-[#475569] font-semibold text-sm border-b border-slate-100">Portofolio</a>
            <a href="#contact" class="mobile-link mt-3 flex items-center justify-center py-3 bg-[#2563EB] text-white font-semibold text-sm rounded-xl shadow-md">
                Konsultasi Gratis
            </a>
        </div>
    </div>
</nav>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var toggle = document.getElementById('mobile-toggle');
    var menu = document.getElementById('mobile-menu');
    var iconOpen = document.getElementById('icon-open');
    var iconClose = document.getElementById('icon-close');

    function closeMenu() {
        menu.classList.add('hidden');
        iconOpen.classList.remove('hidden');
        iconClose.classList.add('hidden');
        toggle.setAttribute('aria-expanded', 'false');
    }

    if (toggle) {
        toggle.addEventListener('click', function () {
            var isHidden = menu.classList.contains('hidden');
            menu.classList.toggle('hidden');
            iconOpen.classList.toggle('hidden');
            iconClose.classList.toggle('hidden');
            toggle.setAttribute('aria-expanded', isHidden ? 'true' : 'false');
        });
    }

    document.querySelectorAll('.mobile-link').forEach(function (link) {
        link.addEventListener('click', closeMenu);
    });
});
</script>

<section id="home" class="relative min-h-[640px] lg:min-h-[720px] bg-[#EFF6FF] overflow-hidden pt-24 lg:pt-28 pb-16">
    <!-- Star Glow Accent from logo_compro zip -->
    <div class="absolute top-[10%] right-[-5%] w-[450px] sm:w-[550px] lg:w-[680px] pointer-events-none opacity-80 z-0">
        <img src="{{ asset('images/compro/Union (6).png') }}" alt="" class="w-full h-auto">
    </div>
    <div class="absolute top-[-100px] left-[-100px] w-[500px] h-[500px] bg-[#2563EB]/10 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-6 sm:px-8 lg:px-10">
        <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-center">
            <!-- Left Text Content -->
            <div class="max-w-xl">
                <h1 class="text-[36px] sm:text-[44px] lg:text-[52px] font-bold text-[#2563EB] leading-[1.15] tracking-[-0.02em]">
                    Website yang Membuat<br class="hidden sm:inline">
                    Orang Percaya Sebelum Anda<br class="hidden sm:inline">
                    Menjalankan Apa-Apa
                </h1>
                <p class="mt-6 text-[15px] sm:text-base text-[#475569] leading-relaxed max-w-[480px]">
                    Keputusan untuk percaya atau ragu pada sebuah bisnis sering dibuat jauh sebelum ada percakapan langsung cukup dari kesan pertama saat website dibuka. KlikWeb membantu perusahaan, kantor hukum, konsultan, dan UMKM membangun website profesional yang modern, cepat, dan dirancang khusus untuk meyakinkan orang yang belum pernah bertemu Anda sebelumnya.
                </p>
                <div class="mt-8 flex flex-wrap items-center gap-4">
                    <a href="#contact" class="inline-flex items-center justify-center px-6 py-3.5 bg-[#BFDBFE] text-[#0F172A] font-semibold text-xs sm:text-sm rounded-2xl border border-[#93C5FD] shadow-sm hover:bg-[#93C5FD] transition-all duration-300">
                        Konsultasi Gratis, Tanpa Kewajiban
                    </a>
                    <a href="#portfolio" class="inline-flex items-center justify-center px-7 py-3.5 bg-[#2563EB] text-white font-semibold text-xs sm:text-sm rounded-2xl shadow-md hover:bg-[#1D4ED8] transition-all duration-300">
                        Lihat Portfolio
                    </a>
                </div>
            </div>

            <!-- Right Visual Mockup with home2.png and logo.png from logo_compro -->
            <div class="relative flex items-center justify-center lg:justify-end pt-6 lg:pt-0">
                <div class="relative z-10 w-full max-w-[480px] sm:max-w-[540px] drop-shadow-2xl">
                    <div class="relative transition-transform duration-500 hover:scale-[1.02]">
                        <!-- Tilted Frame Image home2.png -->
                        <img src="{{ asset('images/compro/home2.png') }}" alt="KlikWeb Browser Preview" class="w-full h-auto drop-shadow-xl">
                        <!-- Centered Logo Overlay inside the browser frame -->
                        <div class="absolute inset-0 flex items-center justify-center p-8 pt-12">
                            <img src="{{ asset('images/compro/logo.png') }}" alt="KlikWeb Logo" class="h-16 sm:h-20 lg:h-24 w-auto object-contain">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


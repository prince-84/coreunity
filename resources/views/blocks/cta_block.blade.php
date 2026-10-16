@php
    $badge = $block['badge'] ?? 'Start Your Transformation';
    $showGlow = (bool) ($block['show_glow'] ?? true);
    $headline = $block['headline'] ?? "Ready to Scale Your Business\nTo New Heights?";
    $description = $block['description'] ?? 'Get in touch with our team in Dubai today for a complimentary discovery session.';
    $primaryText = $block['primary_button_text'] ?? 'Speak to an Expert';
    $primaryUrl = $block['primary_button_url'] ?? '/contact';
    $secondaryText = $block['secondary_button_text'] ?? 'WhatsApp Us';
    $secondaryUrl = $block['secondary_button_url'] ?? 'https://wa.me/971000000000';
    $bgImage = $block['bg_image'] ?? null;

    $bgUrl = null;
    if ($bgImage) {
        if (str_starts_with($bgImage, 'http://') || str_starts_with($bgImage, 'https://') || str_starts_with($bgImage, '//')) {
            $bgUrl = $bgImage;
        } elseif (str_starts_with($bgImage, 'storage/')) {
            $bgUrl = asset($bgImage);
        } elseif (file_exists(public_path($bgImage))) {
            $bgUrl = asset($bgImage);
        } else {
            $bgUrl = asset('storage/' . ltrim($bgImage, '/'));
        }
    }
@endphp

<section class="relative bg-black text-white py-24 md:py-32 overflow-hidden border-b border-white/5">
    @if($showGlow)
        <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
            <div class="w-[700px] h-[350px] bg-[#dc2626]/20 rounded-full blur-[150px]"></div>
        </div>
    @endif

    @if($bgUrl)
        <div class="absolute inset-0 opacity-15 mix-blend-luminosity bg-cover bg-center pointer-events-none" style="background-image: url('{{ $bgUrl }}');"></div>
    @endif

    <div class="relative max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-6">
        @if($badge)
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-xs font-semibold tracking-wider uppercase bg-[#dc2626]/10 text-[#ef4444] border border-[#dc2626]/20">
                <span class="w-2 h-2 rounded-full bg-[#ef4444] animate-pulse"></span>
                {{ $badge }}
            </div>
        @endif

        <h2 class="text-3xl sm:text-5xl lg:text-6xl font-black tracking-tight text-white leading-tight">
            {!! nl2br(e($headline)) !!}
        </h2>

        @if($description)
            <p class="text-base sm:text-xl text-gray-300 max-w-2xl mx-auto font-light leading-relaxed">
                {{ $description }}
            </p>
        @endif

        <div class="flex flex-wrap items-center justify-center gap-4 pt-4">
            @if($primaryText)
                <a href="{{ $primaryUrl }}" class="px-8 py-4 rounded-full font-bold text-sm bg-gradient-to-r from-[#dc2626] to-[#b91c1c] hover:from-[#ef4444] hover:to-[#dc2626] text-white shadow-xl shadow-red-900/40 hover:shadow-red-600/60 transition-all duration-300 transform hover:-translate-y-0.5">
                    {{ $primaryText }}
                </a>
            @endif
            @if($secondaryText)
                <a href="{{ $secondaryUrl }}" target="_blank" rel="noopener" class="px-8 py-4 rounded-full font-semibold text-sm bg-white/5 hover:bg-white/10 text-white border border-white/10 hover:border-white/20 transition-all duration-300">
                    {{ $secondaryText }}
                </a>
            @endif
        </div>
    </div>
</section>

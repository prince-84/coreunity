@php
    $badge = $block['badge'] ?? null;
    $alignment = $block['alignment'] ?? 'center';
    $headline = $block['headline'] ?? '';
    $subheadline = $block['subheadline'] ?? '';
    $ctaText = $block['cta_text'] ?? null;
    $ctaUrl = $block['cta_url'] ?? '#';
    $secondaryCtaText = $block['secondary_cta_text'] ?? null;
    $secondaryCtaUrl = $block['secondary_cta_url'] ?? '#';
    $bannerImage = $block['banner_image'] ?? null;

    $imageUrl = null;
    if ($bannerImage) {
        if (str_starts_with($bannerImage, 'http://') || str_starts_with($bannerImage, 'https://') || str_starts_with($bannerImage, '//')) {
            $imageUrl = $bannerImage;
        } elseif (str_starts_with($bannerImage, 'storage/')) {
            $imageUrl = asset($bannerImage);
        } elseif (file_exists(public_path($bannerImage))) {
            $imageUrl = asset($bannerImage);
        } else {
            $imageUrl = asset('storage/' . ltrim($bannerImage, '/'));
        }
    }
@endphp

<section class="relative bg-black text-white pt-28 pb-16 md:pt-36 md:pb-24 overflow-hidden border-b border-white/5">
    {{-- Ambient Radial Glow --}}
    <div class="absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[350px] bg-[#dc2626]/20 rounded-full blur-[140px] pointer-events-none"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @if($alignment === 'left')
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-7 text-left space-y-6">
                    @if($badge)
                        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs font-semibold tracking-wider uppercase bg-[#dc2626]/10 text-[#ef4444] border border-[#dc2626]/20 shadow-sm">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#ef4444] animate-pulse"></span>
                            {{ $badge }}
                        </div>
                    @endif

                    <h1 class="text-3xl sm:text-5xl lg:text-6xl font-black tracking-tight text-white leading-tight">
                        {!! nl2br(e($headline)) !!}
                    </h1>

                    @if($subheadline)
                        <p class="text-base sm:text-lg text-gray-300 max-w-2xl font-light leading-relaxed">
                            {{ $subheadline }}
                        </p>
                    @endif

                    @if($ctaText || $secondaryCtaText)
                        <div class="flex flex-wrap items-center gap-4 pt-4">
                            @if($ctaText)
                                <a href="{{ $ctaUrl }}" class="px-7 py-3.5 rounded-full font-bold text-sm bg-gradient-to-r from-[#dc2626] to-[#b91c1c] hover:from-[#ef4444] hover:to-[#dc2626] text-white shadow-lg shadow-red-900/30 hover:shadow-red-600/50 transition-all duration-300 transform hover:-translate-y-0.5">
                                    {{ $ctaText }}
                                </a>
                            @endif
                            @if($secondaryCtaText)
                                <a href="{{ $secondaryCtaUrl }}" class="px-7 py-3.5 rounded-full font-semibold text-sm bg-white/5 hover:bg-white/10 text-white border border-white/10 hover:border-white/20 transition-all duration-300">
                                    {{ $secondaryCtaText }}
                                </a>
                            @endif
                        </div>
                    @endif
                </div>

                @if($imageUrl)
                    <div class="lg:col-span-5 relative">
                        <div class="relative rounded-2xl overflow-hidden border border-white/10 shadow-2xl bg-neutral-900/50 backdrop-blur-sm group">
                            <img src="{{ $imageUrl }}" alt="{{ strip_tags($headline) }}" class="w-full h-auto object-cover transform group-hover:scale-105 transition-transform duration-700">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent pointer-events-none"></div>
                        </div>
                    </div>
                @endif
            </div>
        @else
            <div class="text-center max-w-4xl mx-auto space-y-6">
                @if($badge)
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-xs font-semibold tracking-wider uppercase bg-[#dc2626]/10 text-[#ef4444] border border-[#dc2626]/20 shadow-sm">
                        <span class="w-2 h-2 rounded-full bg-[#ef4444] animate-pulse"></span>
                        {{ $badge }}
                    </div>
                @endif

                <h1 class="text-3xl sm:text-5xl lg:text-6xl font-black tracking-tight text-white leading-tight">
                    {!! nl2br(e($headline)) !!}
                </h1>

                @if($subheadline)
                    <p class="text-base sm:text-xl text-gray-300 max-w-2xl mx-auto font-light leading-relaxed">
                        {{ $subheadline }}
                    </p>
                @endif

                @if($ctaText || $secondaryCtaText)
                    <div class="flex flex-wrap items-center justify-center gap-4 pt-4">
                        @if($ctaText)
                            <a href="{{ $ctaUrl }}" class="px-8 py-4 rounded-full font-bold text-sm bg-gradient-to-r from-[#dc2626] to-[#b91c1c] hover:from-[#ef4444] hover:to-[#dc2626] text-white shadow-xl shadow-red-900/40 hover:shadow-red-600/60 transition-all duration-300 transform hover:-translate-y-0.5">
                                {{ $ctaText }}
                            </a>
                        @endif
                        @if($secondaryCtaText)
                            <a href="{{ $secondaryCtaUrl }}" class="px-8 py-4 rounded-full font-semibold text-sm bg-white/5 hover:bg-white/10 text-white border border-white/10 hover:border-white/20 transition-all duration-300">
                                {{ $secondaryCtaText }}
                            </a>
                        @endif
                    </div>
                @endif

                @if($imageUrl)
                    <div class="pt-10 max-w-5xl mx-auto">
                        <div class="relative rounded-2xl overflow-hidden border border-white/10 shadow-2xl bg-neutral-900/50 backdrop-blur-sm group">
                            <img src="{{ $imageUrl }}" alt="{{ strip_tags($headline) }}" class="w-full h-auto max-h-[500px] object-cover mx-auto transform group-hover:scale-105 transition-transform duration-700">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent pointer-events-none"></div>
                        </div>
                    </div>
                @endif
            </div>
        @endif
    </div>
</section>

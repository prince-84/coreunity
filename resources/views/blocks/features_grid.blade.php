@php
    $badge = $block['badge'] ?? null;
    $columns = (int) ($block['columns'] ?? 3);
    $title = $block['title'] ?? '';
    $subtitle = $block['subtitle'] ?? '';
    $cards = $block['cards'] ?? [];

    $gridCols = match($columns) {
        2 => 'grid-cols-1 md:grid-cols-2',
        4 => 'grid-cols-1 sm:grid-cols-2 lg:grid-cols-4',
        default => 'grid-cols-1 md:grid-cols-2 lg:grid-cols-3',
    };
@endphp

<section class="relative bg-black text-white py-20 border-b border-white/5 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
            @if($badge)
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs font-semibold tracking-wider uppercase bg-[#dc2626]/10 text-[#ef4444] border border-[#dc2626]/20">
                    {{ $badge }}
                </div>
            @endif

            <h2 class="text-3xl sm:text-4xl font-black tracking-tight text-white leading-tight">
                {{ $title }}
            </h2>

            @if($subtitle)
                <p class="text-base sm:text-lg text-gray-400 font-light leading-relaxed">
                    {{ $subtitle }}
                </p>
            @endif
        </div>

        @if(!empty($cards))
            <div class="grid {{ $gridCols }} gap-6 sm:gap-8">
                @foreach($cards as $card)
                    @php
                        $iconPath = $card['icon'] ?? null;
                        $iconUrl = null;
                        if ($iconPath) {
                            if (str_starts_with($iconPath, 'http://') || str_starts_with($iconPath, 'https://') || str_starts_with($iconPath, '//')) {
                                $iconUrl = $iconPath;
                            } elseif (str_starts_with($iconPath, 'storage/')) {
                                $iconUrl = asset($iconPath);
                            } elseif (file_exists(public_path($iconPath))) {
                                $iconUrl = asset($iconPath);
                            } else {
                                $iconUrl = asset('storage/' . ltrim($iconPath, '/'));
                            }
                        }
                    @endphp
                    <div class="relative group rounded-2xl bg-[#0f0f12] border border-white/10 hover:border-[#dc2626]/40 p-8 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl hover:shadow-red-950/20 flex flex-col justify-between">
                        <div>
                            @if($iconUrl)
                                <div class="w-14 h-14 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center mb-6 group-hover:bg-[#dc2626]/10 group-hover:border-[#dc2626]/30 transition-all duration-300">
                                    <img src="{{ $iconUrl }}" alt="{{ $card['title'] ?? 'Feature Icon' }}" class="w-7 h-7 object-contain">
                                </div>
                            @endif

                            <h3 class="text-xl font-bold text-white mb-3 group-hover:text-[#ef4444] transition-colors duration-300">
                                {{ $card['title'] ?? '' }}
                            </h3>

                            <p class="text-sm sm:text-base text-gray-400 font-light leading-relaxed mb-6">
                                {{ $card['description'] ?? '' }}
                            </p>
                        </div>

                        @if(!empty($card['link_url']))
                            <a href="{{ $card['link_url'] }}" class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-[#ef4444] hover:text-white transition-colors duration-200">
                                Learn More
                                <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        @endif
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</section>

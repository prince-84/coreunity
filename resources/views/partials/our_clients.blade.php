@php
    $ourClients = $ourClients ?? \App\Models\OurClientsSection::where('is_active', true)->latest('updated_at')->first() ?? \App\Models\OurClientsSection::first();
@endphp

@if(!isset($ourClients?->is_active) || $ourClients->is_active)
<section class="bg-black py-24 md:py-32 relative overflow-hidden border-t border-white/[0.05] font-sans">
    <!-- Background Dots -->
    <div class="absolute inset-0 z-0 opacity-100 pointer-events-none" style="background-image: url('{{ $ourClients?->bg_image_url ?? asset('grid_bg.png') }}'); background-size: cover; background-position: center center;"></div>
    
    <!-- Red Center Glow -->
    <div class="absolute top-[40%] left-1/2 -translate-x-1/2 -translate-y-1/2 w-[120%] max-w-5xl h-[800px] pointer-events-none z-0" style="background: radial-gradient(circle at center, rgba(160, 10, 15, 0.4) 0%, transparent 60%); filter: blur(60px);"></div>

    <div class="relative z-10 max-w-[1400px] mx-auto px-4 md:px-8">
        <!-- Header -->
        <div class="flex flex-col items-center text-center mb-16">
            <div class="flex items-center gap-3 mb-4">
                <div class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-red-600 shadow-[0_0_8px_3px_rgba(220,38,38,0.5)]"></span>
                </div>
                <span class="text-xs tracking-widest text-gray-400 ml-1 uppercase">{{ $ourClients?->mini_title ?? 'Our Clients' }}</span>
            </div>
            <h2 class="text-3xl md:text-5xl lg:text-[54px] font-bold max-w-4xl leading-tight text-white">
                {!! nl2br(e($ourClients?->main_title ?? "5-Star Rated, Works \nwith CoreUnity Solutions")) !!}
            </h2>
        </div>

        <!-- Logos Grid Container -->
        <div class="relative mt-20">
            @php
                $logosList = $ourClients?->resolved_client_logos ?? [];
                $totalGridItems = max(12, count($logosList) + 1);
            @endphp

            <!-- Grid Lines Layer with fading mask -->
            <div class="absolute inset-0 pointer-events-none grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 z-0" style="-webkit-mask-image: radial-gradient(ellipse at center, black 20%, transparent 80%); mask-image: radial-gradient(ellipse at center, black 20%, transparent 80%);">
                @for($i = 0; $i < $totalGridItems; $i++)
                    <div class="border-white/40 border-r border-b {{ ($i + 1) % 2 === 0 ? 'border-r-0' : '' }} {{ ($i + 1) % 3 === 0 ? 'md:border-r-0' : 'md:border-r' }} {{ ($i + 1) % 6 === 0 ? 'lg:border-r-0' : 'lg:border-r' }} {{ $i >= ($totalGridItems - 2) ? 'border-b-0' : '' }} {{ $i >= ($totalGridItems - 3) ? 'md:border-b-0' : 'md:border-b' }} {{ $i >= ($totalGridItems - 6) ? 'lg:border-b-0' : 'lg:border-b' }}"></div>
                @endfor
            </div>

            <!-- Content Layer (Logos) -->
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 relative z-10">
                @foreach($logosList as $i => $clogo)
                    <div class="aspect-[3/2] flex flex-col items-center justify-center p-6 transition-colors hover:bg-white/5 cursor-pointer text-center group">
                        @if(!empty($clogo['redirect_url']))
                            <a href="{{ $clogo['redirect_url'] }}" target="_blank" rel="noopener" title="{{ $clogo['name'] ?? $clogo['alt'] ?? 'Client Logo' }}" class="relative w-full h-full max-h-[80px] flex items-center justify-center">
                                <img src="{{ $clogo['image_url'] ?? $clogo['url'] }}" alt="{{ $clogo['alt'] ?? $clogo['name'] ?? ('Client logo ' . ($i + 1)) }}" class="w-full h-full object-contain transition-transform duration-300 group-hover:scale-105" />
                            </a>
                        @else
                            <div class="relative w-full h-full max-h-[80px] flex items-center justify-center">
                                <img src="{{ $clogo['image_url'] ?? $clogo['url'] }}" alt="{{ $clogo['alt'] ?? $clogo['name'] ?? ('Client logo ' . ($i + 1)) }}" title="{{ $clogo['name'] ?? $clogo['alt'] ?? 'Client Logo' }}" class="w-full h-full object-contain transition-transform duration-300 group-hover:scale-105" />
                            </div>
                        @endif
                    </div>
                @endforeach

                <!-- Globe Item -->
                <div class="aspect-[3/2] flex flex-col items-center justify-center p-6 transition-colors hover:bg-white/5 cursor-pointer">
                    <div class="relative w-12 h-12 rounded-full mb-3 flex items-center justify-center overflow-hidden">
                        <img src="{{ $ourClients?->globe_image_url ?? asset('World.png') }}" alt="Globe" class="absolute inset-0 w-full h-full object-contain" />
                    </div>
                    <p class="text-[11px] text-center text-gray-400 leading-snug">
                        {!! nl2br(e($ourClients?->globe_text ?? "500+ Clients \nworldwide")) !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

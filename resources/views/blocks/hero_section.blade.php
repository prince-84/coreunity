@php
    $useGlobal = (bool) ($block['use_global'] ?? true);
@endphp

@if($useGlobal)
    @php
        $heroModel = $hero ?? \App\Models\HeroSection::latest('updated_at')->first() ?? \App\Models\HeroSection::first();
    @endphp
    @include('partials.hero', ['hero' => $heroModel])
@else
    @php
        $badge = $block['badge'] ?? null;
        $headline = $block['headline'] ?? 'We are a bold and innovative digital agency based in the UAE.';
        $subheadline = $block['subheadline'] ?? null;
        $btnText = $block['button_text'] ?? 'Schedule a call';
        $btnLink = $block['button_link'] ?? '#contact';
        $globeImg = $block['globe_image'] ?? 'earth_globe.png';
        $globeImgUrl = str_starts_with($globeImg, 'http') ? $globeImg : (file_exists(public_path($globeImg)) ? asset($globeImg) : asset('storage/' . $globeImg));
        $presence = $block['global_presence'] ?? [['country' => 'USA'], ['country' => 'UAE'], ['country' => 'Saudi Arabia'], ['country' => 'Pakistan']];
        $pressLogos = $block['press_logos'] ?? [];
    @endphp

    <div class="flex-1 flex flex-col relative z-10 w-full pt-16 bg-black text-white">
        <!-- Subtle Starry background -->
        <div class="absolute inset-0 pointer-events-none opacity-20 z-0"
             style="background-image: radial-gradient(1px 1px at 25% 10%, rgba(255,255,255,0.8), transparent), radial-gradient(1px 1px at 50% 25%, white, transparent); background-size: 180px 180px;"></div>

        <!-- Headline & CTA -->
        <div class="flex flex-col items-center justify-center text-center mt-12 max-w-5xl mx-auto px-4 z-20 relative">
            <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full max-w-4xl h-[250px] bg-red-600/20 blur-[120px] pointer-events-none rounded-[100%]"></div>
            
            @if(!empty($badge))
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/5 border border-white/10 mb-6 backdrop-blur-md z-10 relative">
                    <span class="w-2 h-2 rounded-full bg-[#cc2936] animate-pulse"></span>
                    <span class="text-xs font-semibold tracking-wider uppercase text-gray-300">{{ $badge }}</span>
                </div>
            @endif

            <h1 class="text-3xl md:text-[42px] font-bold text-white leading-[1.3] md:leading-[1.2] mb-4 z-10 relative">
                {!! $headline !!}
            </h1>

            @if(!empty($subheadline))
                <p class="text-base md:text-lg text-gray-300 font-medium mb-6 z-10 relative max-w-2xl">
                    {{ $subheadline }}
                </p>
            @endif

            <div class="relative flex items-center justify-center w-full max-w-sm mx-auto mt-2">
                <button type="button" onclick="openScheduleModal()"
                        class="relative z-10 bg-[#b71c1c] hover:bg-red-700 text-white pl-5 pr-3 py-2 rounded-full font-medium text-xs md:text-sm flex items-center gap-3 transition-colors shadow-[0_0_15px_rgba(220,38,38,0.5)] cursor-pointer">
                    <span>{{ $btnText }}</span>
                    <div class="w-6 h-6 md:w-8 md:h-8 rounded-full bg-white flex items-center justify-center p-0.5 shadow-md overflow-hidden flex-shrink-0">
                        <img src="{{ asset('Core Unity Logo-05.svg') }}" alt="Icon" class="w-full h-full object-contain scale-110" />
                    </div>
                </button>
            </div>
        </div>

        <!-- Globe Visual -->
        <div class="relative flex justify-center mt-8 overflow-hidden w-full h-[220px]">
            <div class="absolute top-20 left-1/2 -translate-x-1/2 w-[300px] h-[300px] bg-red-600/30 blur-[100px] rounded-full pointer-events-none"></div>
            <div class="absolute -top-12 left-1/2 pointer-events-none z-10" style="transform: translateX(-50%);">
                <div class="animate-globe-float flex justify-center">
                    <img src="{{ $globeImgUrl }}" alt="Earth Globe" style="width: 600px; height: 600px; min-width: 600px; min-height: 600px;"
                         class="rounded-full max-w-none opacity-100 brightness-110 contrast-105 [clip-path:circle(36%_at_50%_50%)] mask-image-gradient" />
                </div>
            </div>
            <div class="absolute bottom-0 w-full h-32 bg-gradient-to-t from-black via-black/80 to-transparent pointer-events-none z-20"></div>
        </div>

        <!-- Global Presence -->
        @if(!empty($presence) && is_array($presence))
            <div class="flex flex-col md:flex-row items-center justify-center gap-4 md:gap-8 mt-12 mb-8 z-20 relative w-full px-4 text-center">
                <span class="text-gray-400 text-sm">Our Global Presence</span>
                <div class="hidden md:block w-[1px] h-6 bg-gray-700"></div>
                <div class="flex flex-wrap items-center justify-center gap-4 md:gap-6">
                    @foreach($presence as $item)
                        @php $country = is_array($item) ? ($item['country'] ?? '') : $item; @endphp
                        @if(trim($country))
                            <div class="flex items-center gap-2">
                                <span class="w-1.5 h-1.5 rounded-full bg-red-600 shadow-[0_0_8px_rgba(220,38,38,0.8)]"></span>
                                <span class="text-gray-300 text-sm">{{ $country }}</span>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        @endif

        <!-- Press Logos Ticker -->
        @if(!empty($pressLogos) && is_array($pressLogos))
            <div class="w-full max-w-[1525.53px] mx-auto h-[50px] border-t border-gray-800 overflow-hidden py-2 z-20 relative bg-black flex items-center">
                <div class="flex whitespace-nowrap animate-scroll-x items-center w-full">
                    @foreach(array_merge($pressLogos, $pressLogos, $pressLogos) as $plogo)
                        @php
                            $img = $plogo['image'] ?? null;
                            $pImgUrl = $img ? (str_starts_with($img, 'http') ? $img : (file_exists(public_path($img)) ? asset($img) : asset('storage/' . $img))) : null;
                        @endphp
                        @if($pImgUrl)
                            <div class="flex items-center justify-center min-w-[200px] mx-8 grayscale opacity-70 hover:grayscale-0 hover:opacity-100 transition-all cursor-pointer">
                                @if(!empty($plogo['url']))
                                    <a href="{{ $plogo['url'] }}" target="_blank" rel="noopener">
                                        <img src="{{ $pImgUrl }}" alt="{{ $plogo['title'] ?? 'Press Logo' }}" class="object-contain max-h-[40px] max-w-[120px]" />
                                    </a>
                                @else
                                    <img src="{{ $pImgUrl }}" alt="{{ $plogo['title'] ?? 'Press Logo' }}" class="object-contain max-h-[40px] max-w-[120px]" />
                                @endif
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        @endif
    </div>
@endif

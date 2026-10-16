@php
    $heroModel = $hero ?? \App\Models\HeroSection::latest('updated_at')->first() ?? \App\Models\HeroSection::first();

    $locations = [];
    if (!empty($heroModel?->global_presence) && is_array($heroModel->global_presence)) {
        foreach ($heroModel->global_presence as $item) {
            $locations[] = is_array($item) ? ($item['country'] ?? '') : (string)$item;
        }
    }
    if (empty(array_filter($locations))) {
        $locations = ['USA', 'UAE', 'Saudi Arabia', 'Pakistan'];
    }

    $rawLogos = $heroModel?->media_logos_list ?? [];
    if (empty($rawLogos)) {
        $rawLogos = [
            ['image_url' => asset('al-jazeera.png'), 'title' => 'Al Jazeera', 'url' => null],
            ['image_url' => asset('zaaya.png'), 'title' => 'Zaaya', 'url' => null],
            ['image_url' => asset('gulf_logo.png'), 'title' => 'Gulf News', 'url' => null],
            ['image_url' => asset('khaleej_logo.png'), 'title' => 'Khaleej Times', 'url' => null],
            ['image_url' => asset('arabian_logo.png'), 'title' => 'Arabian Business', 'url' => null],
        ];
    }
    $displayTickerLogos = array_merge($rawLogos, $rawLogos, $rawLogos);
@endphp

<div class="flex-1 flex flex-col relative z-10 w-full pt-16">
    <!-- Subtle Starry background for the entire hero section -->
    <div 
        class="absolute inset-0 pointer-events-none opacity-20 z-0"
        style="background-image: 
            radial-gradient(1px 1px at 25% 10%, rgba(255,255,255,0.8), transparent),
            radial-gradient(1px 1px at 50% 25%, white, transparent),
            radial-gradient(1.5px 1.5px at 75% 15%, rgba(255,255,255,0.6), transparent),
            radial-gradient(1.5px 1.5px at 10% 60%, rgba(255,255,255,0.7), transparent),
            radial-gradient(1px 1px at 85% 55%, white, transparent),
            radial-gradient(2px 2px at 30% 85%, rgba(255,255,255,0.5), transparent),
            radial-gradient(1px 1px at 70% 80%, rgba(255,255,255,0.9), transparent);
            background-size: 180px 180px;"
    ></div>

    <!-- Hero Section -->
    <div class="flex flex-col items-center justify-center text-center mt-12 max-w-5xl mx-auto px-4 z-20 relative">
        <!-- Red shading behind text -->
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full max-w-4xl h-[250px] bg-red-600/20 blur-[120px] pointer-events-none rounded-[100%]"></div>
        
        <h1 class="text-3xl md:text-[42px] font-bold text-white leading-[1.3] md:leading-[1.2] {{ !empty($heroModel?->subtitle) || !empty($heroModel?->description) ? 'mb-4' : 'mb-8' }} z-10 relative">
            {!! $heroModel?->title ?? 'We are a bold and innovative digital<br />agency based in the UAE.' !!}
        </h1>

        @if(!empty($heroModel?->subtitle))
            <p class="text-base md:text-lg text-gray-300 font-medium mb-2 z-10 relative max-w-2xl">
                {{ $heroModel->subtitle }}
            </p>
        @endif

        @if(!empty($heroModel?->description))
            <p class="text-xs md:text-sm text-gray-400 mb-6 z-10 relative max-w-2xl leading-relaxed">
                {{ $heroModel->description }}
            </p>
        @endif
        
        <div class="relative flex items-center justify-center w-full max-w-sm mx-auto mt-2">
            <div class="absolute inset-x-0 top-1/2 -translate-y-1/2 h-0 border-t border-dashed border-gray-500/40 pointer-events-none" style="mask-image: linear-gradient(to right, transparent, black 15%, black 85%, transparent); -webkit-mask-image: linear-gradient(to right, transparent, black 15%, black 85%, transparent);"></div>
            
            <button 
                type="button"
                onclick="openScheduleModal()"
                class="relative z-10 bg-[#b71c1c] hover:bg-red-700 text-white pl-4 pr-1.5 py-1.5 rounded-full font-medium text-xs md:text-sm flex items-center gap-3 transition-colors shadow-[0_0_15px_rgba(220,38,38,0.5)] cursor-pointer"
            >
                <span>{{ $heroModel?->button_text ?? 'Schedule a call' }}</span>
                <div class="w-6 h-6 md:w-8 md:h-8 rounded-full bg-white flex items-center justify-center p-0.5 shadow-md overflow-hidden flex-shrink-0">
                    <img src="{{ $heroModel?->button_icon_url ?? asset('Core Unity Logo-05.svg') }}" alt="CoreUnity Icon" class="w-full h-full object-contain scale-110" />
                </div>
            </button>
        </div>
    </div>

    <!-- Earth Globe -->
    <div class="relative flex justify-center mt-8 overflow-hidden w-full h-[220px]">
        <div class="absolute top-20 left-1/2 -translate-x-1/2 w-[300px] h-[300px] bg-red-600/30 blur-[100px] rounded-full pointer-events-none"></div>
        
        <div class="absolute -top-12 left-1/2 pointer-events-none z-10" style="transform: translateX(-50%);">
            <div class="animate-globe-float flex justify-center">
                <img 
                    src="{{ $heroModel?->globe_image_url ?? asset('earth_globe.png') }}" 
                    alt="Earth Globe" 
                    width="600" 
                    height="600" 
                    style="width: 600px; height: 600px; min-width: 600px; min-height: 600px;"
                    class="rounded-full max-w-none opacity-100 brightness-110 contrast-105 [clip-path:circle(36%_at_50%_50%)] mask-image-gradient"
                />
            </div>
        </div>
        
        <div class="absolute bottom-0 w-full h-32 bg-gradient-to-t from-black via-black/80 to-transparent pointer-events-none z-20"></div>
    </div>

    <!-- Global Presence -->
    <div class="flex flex-col md:flex-row items-center justify-center gap-4 md:gap-8 mt-12 mb-8 z-20 relative w-full px-4 text-center">
        <span class="text-gray-400 text-sm">Our Global Presence</span>
        <div class="hidden md:block w-[1px] h-6 bg-gray-700"></div>
        <div class="flex flex-wrap items-center justify-center gap-4 md:gap-6">
            @foreach($locations as $country)
                @if(trim($country))
                    <div class="flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-red-600 shadow-[0_0_8px_rgba(220,38,38,0.8)]"></span>
                        <span class="text-gray-300 text-sm">{{ $country }}</span>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

    <!-- Media / Press Logos Ticker -->
    <div class="w-full max-w-[1525.53px] mx-auto h-[50px] border-t border-gray-800 overflow-hidden py-2 z-20 relative bg-black flex items-center">
        <div class="flex whitespace-nowrap animate-scroll-x items-center w-full">
            @foreach($displayTickerLogos as $logo)
                <div class="flex items-center justify-center min-w-[200px] mx-8 grayscale opacity-70 hover:grayscale-0 hover:opacity-100 transition-all cursor-pointer">
                    @if(!empty($logo['url']))
                        <a href="{{ $logo['url'] }}" target="_blank" rel="noopener" title="{{ $logo['title'] ?? 'Media Logo' }}" class="inline-flex items-center justify-center">
                            <img src="{{ $logo['image_url'] }}" alt="{{ $logo['title'] ?? 'Client Logo' }}" class="object-contain max-h-[40px] max-w-[120px]" />
                        </a>
                    @else
                        <img src="{{ $logo['image_url'] }}" alt="{{ $logo['title'] ?? 'Client Logo' }}" title="{{ $logo['title'] ?? 'Client Logo' }}" class="object-contain max-h-[40px] max-w-[120px]" />
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</div>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Marketing Agency in Dubai, UAE | CoreUnity Solutions</title>
    <meta name="description" content="CoreUnity Solutions is a Dubai-based digital marketing agency offering web development, SEO, branding & PPC. Trusted by 500+ clients. Get a free quote.">
    
    <!-- Global SEO Indexing Control -->
    @php
        $siteIndexingEnabled = \App\Models\GlobalSeoSetting::isIndexingEnabled();
    @endphp
    @if($siteIndexingEnabled)
        <meta name="robots" content="index, follow">
    @else
        <meta name="robots" content="noindex, nofollow">
    @endif
    
    <link rel="icon" type="image/svg+xml" href="{{ asset('Core Unity Logo-05.svg') }}">
    <link rel="alternate icon" href="{{ asset('favicon.ico') }}">

    <!-- Geist Font matching Next.js frontend -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Geist:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Geist', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            red: '#cc2936',
                        }
                    }
                }
            }
        }
    </script>
    
    <style>
        @font-face {
            font-family: 'Geist';
            font-style: normal;
            font-weight: 100 900;
            font-display: swap;
            src: url("{{ asset('fonts/geist/geist-latin.woff2') }}") format("woff2"),
                 url("{{ asset('fonts/geist/geist-latin-ext.woff2') }}") format("woff2");
        }
        body {
            background-color: #000000;
            color: #ffffff;
            overflow-x: hidden;
            font-family: 'Geist', sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        /* Ensure Tailwind leading classes take priority over font-size defaults, matching Tailwind v4 */
        .leading-none { line-height: 1 !important; }
        .leading-tight { line-height: 1.25 !important; }
        .leading-snug { line-height: 1.375 !important; }
        .leading-normal { line-height: 1.5 !important; }
        .leading-relaxed { line-height: 1.625 !important; }
        .leading-loose { line-height: 2 !important; }

        @keyframes globe-float {
            0% {
                transform: rotate(-7deg) translateY(0px);
            }
            50% {
                transform: rotate(7deg) translateY(-6px);
            }
            100% {
                transform: rotate(-7deg) translateY(0px);
            }
        }

        .animate-globe-float {
            animation: globe-float 16s ease-in-out infinite;
        }

        @keyframes scroll-x {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-50%);
            }
        }

        .animate-scroll-x {
            display: flex;
            width: max-content;
            animation: scroll-x 25s linear infinite;
        }

        .animate-scroll-x:hover {
            animation-play-state: paused;
        }

        @keyframes marquee {
            0% { transform: translateX(0%); }
            100% { transform: translateX(-50%); }
        }

        .animate-marquee {
            display: flex;
            width: max-content;
            animation: marquee 45s linear infinite;
        }

        .animate-marquee:hover {
            animation-play-state: paused;
        }

        .mask-image-gradient {
            mask-image: linear-gradient(to bottom, black 50%, transparent 100%);
            -webkit-mask-image: linear-gradient(to bottom, black 50%, transparent 100%);
        }
    </style>
</head>
<body class="min-h-screen bg-black overflow-x-hidden relative flex flex-col font-sans">

    <!-- Top Navigation Bar -->
    @include('partials.navbar')

    <!-- Flash message -->
    @if(session('success'))
        <div class="fixed top-24 right-6 z-50 bg-emerald-600 text-white px-6 py-3 rounded-xl shadow-2xl flex items-center gap-3">
            <span>{{ session('success') }}</span>
        </div>
    @endif

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
            
            <h1 class="text-3xl md:text-[42px] font-bold text-white leading-[1.3] md:leading-[1.2] {{ !empty($hero?->subtitle) || !empty($hero?->description) ? 'mb-4' : 'mb-8' }} z-10 relative">
                {!! $hero?->title ?? 'We are a bold and innovative digital<br />agency based in the UAE.' !!}
            </h1>

            @if(!empty($hero?->subtitle))
                <p class="text-base md:text-lg text-gray-300 font-medium mb-2 z-10 relative max-w-2xl">
                    {{ $hero->subtitle }}
                </p>
            @endif

            @if(!empty($hero?->description))
                <p class="text-xs md:text-sm text-gray-400 mb-6 z-10 relative max-w-2xl leading-relaxed">
                    {{ $hero->description }}
                </p>
            @endif
            
            <div class="relative flex items-center justify-center w-full max-w-sm mx-auto mt-2">
                <!-- Dotted horizontal line matching 3000 -->
                <div class="absolute inset-x-0 top-1/2 -translate-y-1/2 h-0 border-t border-dashed border-gray-500/40 pointer-events-none" style="mask-image: linear-gradient(to right, transparent, black 15%, black 85%, transparent); -webkit-mask-image: linear-gradient(to right, transparent, black 15%, black 85%, transparent);"></div>
                
                <!-- Button -->
                <button 
                    type="button"
                    onclick="openScheduleModal()"
                    class="relative z-10 bg-[#b71c1c] hover:bg-red-700 text-white pl-4 pr-1.5 py-1.5 rounded-full font-medium text-xs md:text-sm flex items-center gap-3 transition-colors shadow-[0_0_15px_rgba(220,38,38,0.5)] cursor-pointer"
                >
                    <span>{{ $hero?->button_text ?? 'Schedule a call' }}</span>
                    <div class="w-6 h-6 md:w-8 md:h-8 rounded-full bg-white flex items-center justify-center p-0.5 shadow-md overflow-hidden flex-shrink-0">
                        <img src="{{ $hero?->button_icon_url ?? asset('Core Unity Logo-05.svg') }}" alt="CoreUnity Icon" class="w-full h-full object-contain scale-110" />
                    </div>
                </button>
            </div>
        </div>

        <!-- Earth Globe -->
        <div class="relative flex justify-center mt-8 overflow-hidden w-full h-[220px]">
            <!-- Gradient glow underneath earth -->
            <div class="absolute top-20 left-1/2 -translate-x-1/2 w-[300px] h-[300px] bg-red-600/30 blur-[100px] rounded-full pointer-events-none"></div>
            
            <!-- Centered container (isolated from animation transform) -->
            <div class="absolute -top-12 left-1/2 pointer-events-none z-10" style="transform: translateX(-50%);">
                <div class="animate-globe-float flex justify-center">
                    <img 
                        src="{{ $hero?->globe_image_url ?? asset('earth_globe.png') }}" 
                        alt="Earth Globe" 
                        width="600" 
                        height="600"
                        style="width: 600px; height: 600px; min-width: 600px; min-height: 600px;"
                        class="rounded-full max-w-none opacity-100 brightness-110 contrast-105 [clip-path:circle(36%_at_50%_50%)] mask-image-gradient"
                    />
                </div>
            </div>
            
            <!-- Dark overlay gradient to fade bottom out -->
            <div class="absolute bottom-0 w-full h-32 bg-gradient-to-t from-black via-black/80 to-transparent pointer-events-none z-20"></div>
        </div>

        <!-- Global Presence -->
        @php
            $locations = [];
            if (!empty($hero?->global_presence) && is_array($hero->global_presence)) {
                foreach ($hero->global_presence as $item) {
                    $locations[] = is_array($item) ? ($item['country'] ?? '') : (string)$item;
                }
            }
            if (empty(array_filter($locations))) {
                $locations = ['USA', 'UAE', 'Saudi Arabia', 'Pakistan'];
            }
        @endphp
        <div class="flex flex-col md:flex-row items-center justify-center gap-4 md:gap-8 mt-12 mb-8 z-20 relative w-full px-4 text-center">
            <span class="text-gray-400 text-sm">Our Global Presence</span>
            
            <!-- Divider - hidden on mobile, visible on md+ -->
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
        @php
            $rawLogos = $hero?->media_logos_list ?? [];
            if (empty($rawLogos)) {
                $rawLogos = [
                    ['image_url' => asset('al-jazeera.png'), 'title' => 'Al Jazeera', 'url' => null],
                    ['image_url' => asset('zaaya.png'), 'title' => 'Zaaya', 'url' => null],
                    ['image_url' => asset('gulf_logo.png'), 'title' => 'Gulf News', 'url' => null],
                    ['image_url' => asset('khaleej_logo.png'), 'title' => 'Khaleej Times', 'url' => null],
                    ['image_url' => asset('arabian_logo.png'), 'title' => 'Arabian Business', 'url' => null],
                ];
            }
            // Repeat to form continuous smooth ticker
            $displayTickerLogos = array_merge($rawLogos, $rawLogos, $rawLogos);
        @endphp
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

    <!-- Services Section -->
    @if(!isset($servicesSection?->is_active) || $servicesSection->is_active)
    <section class="relative w-full bg-white text-black py-16 md:py-24 px-4 sm:px-8 overflow-hidden z-20">
        <!-- Background Red Glow -->
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full max-w-4xl h-[100px] bg-red-100/50 blur-[80px] pointer-events-none rounded-full"></div>
        <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-full max-w-4xl h-[150px] bg-red-200/50 blur-[100px] pointer-events-none rounded-full"></div>

        <div class="max-w-[1200px] mx-auto flex flex-col items-center z-10 relative">
            <div class="flex flex-col items-center text-center mb-16">
                <p class="text-xs font-bold tracking-[0.2em] uppercase text-gray-500 mb-4 flex items-center gap-2">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-red-600 shadow-[0_0_10px_3px_rgba(220,38,38,0.5)]"></span>
                    </span>
                    {{ $servicesSection?->mini_title ?? 'Digital Marketing Services' }}
                </p>
                <h2 class="text-4xl md:text-5xl font-bold text-red-600 tracking-tight">
                    {{ $servicesSection?->main_title ?? 'How Our Agency Helps You Scale' }}
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 w-full items-stretch">
                <!-- Card 1: Websites & Branding -->
                <div class="flex flex-col items-center bg-white rounded-xl border border-gray-200 pt-10 pb-8 px-8 shadow-[0_4px_30px_rgba(0,0,0,0.03)] overflow-hidden text-center h-full">
                    <div class="flex flex-col items-center flex-grow w-full">
                        <div class="w-24 h-24 mb-6 relative">
                            <img src="{{ $servicesSection?->card_1_icon_url ?? asset('webnbrand_logo.png') }}" alt="Websites & Branding Icon" class="w-full h-full object-contain" />
                        </div>
                        <h3 class="text-2xl font-bold mb-4 uppercase leading-tight">
                            {!! nl2br(e($servicesSection?->card_1_title ?? "WEBSITES &\nBRANDING")) !!}
                        </h3>
                        <p class="text-gray-500 text-sm leading-relaxed mb-8">
                            {{ $servicesSection?->card_1_description ?? 'From branding to websites, every design is built to attract, engage, and convert.' }}
                        </p>
                    </div>
                    <div class="w-full relative px-2 mt-auto">
                        <img src="{{ $servicesSection?->card_1_image_url ?? asset('digital_image.png') }}" alt="Mockup" class="w-full h-auto object-contain drop-shadow-2xl" />
                    </div>
                </div>

                <!-- Card 2: Growth Strategy (Links Card) -->
                @php
                    $growthLinks = [];
                    if (!empty($servicesSection?->card_2_links) && is_array($servicesSection->card_2_links)) {
                        foreach ($servicesSection->card_2_links as $linkItem) {
                            $growthLinks[] = is_array($linkItem) ? ($linkItem['label'] ?? '') : (string)$linkItem;
                        }
                    }
                    if (empty(array_filter($growthLinks))) {
                        $growthLinks = ['Signature Growth System', 'Venture Marketing', 'Marketing Strategy', 'Marketing Advisory', 'SEO Consulting'];
                    }
                @endphp
                <div class="relative flex flex-col items-center justify-center rounded-xl overflow-hidden pt-12 pb-12 px-8 shadow-xl text-center min-h-[500px] border border-gray-800 h-full">
                    <div class="absolute inset-0 z-0">
                        <img src="{{ $servicesSection?->card_2_bg_image_url ?? asset('growth_bg.png') }}" alt="Growth Background" class="w-full h-full object-cover opacity-40 grayscale" />
                        <div class="absolute inset-0 bg-black/80"></div>
                    </div>
                    <div class="relative z-10 flex flex-col items-center w-full h-full justify-start mt-6">
                        <div class="mb-10 text-2xl font-black uppercase tracking-widest text-white leading-tight">
                            <span class="text-red-600 block">{{ $servicesSection?->card_2_title_highlight ?? 'GROWTH' }}</span>
                            <span>{{ $servicesSection?->card_2_title_main ?? 'STRATEGY' }}</span>
                        </div>
                        
                        <div class="flex flex-col gap-3 w-full max-w-[280px]">
                            @foreach($growthLinks as $link)
                                @if(trim($link))
                                    <div class="bg-gradient-to-r from-red-950/60 via-red-800/80 to-red-950/60 border border-red-500/30 text-white rounded-full py-3 px-6 text-sm font-semibold transition-transform hover:scale-105 cursor-pointer">
                                        {{ $link }}
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Card 3: Digital Marketing -->
                <div class="flex flex-col items-center bg-white rounded-xl border border-gray-200 pt-10 pb-8 px-8 shadow-[0_4px_30px_rgba(0,0,0,0.03)] overflow-hidden text-center h-full">
                    <div class="flex flex-col items-center flex-grow w-full">
                        <div class="w-24 h-24 mb-6 relative">
                            <img src="{{ $servicesSection?->card_3_icon_url ?? asset('digi_logo.png') }}" alt="Digital Marketing Icon" class="w-full h-full object-contain" />
                        </div>
                        <h3 class="text-2xl font-bold mb-4 uppercase leading-tight">
                            {!! nl2br(e($servicesSection?->card_3_title ?? 'DIGITAL MARKETING')) !!}
                        </h3>
                        <p class="text-gray-500 text-sm leading-relaxed mb-8">
                            {{ $servicesSection?->card_3_description ?? 'Intent-driven marketing across SEO, CRO, social media, and PR that attracts attention and drives results.' }}
                        </p>
                    </div>
                    <div class="w-full relative px-2 mt-auto">
                        <img src="{{ $servicesSection?->card_3_image_url ?? asset('marketing_image.png') }}" alt="Mockup" class="w-full h-auto object-contain drop-shadow-2xl" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

    <!-- Core Strengths Section -->
    @if(!isset($coreStrengths?->is_active) || $coreStrengths->is_active)
    @php
        $points = !empty($coreStrengths?->points) && is_array($coreStrengths->points) ? $coreStrengths->points : [
            ['number' => '01', 'title' => 'Results-Driven Approach', 'description' => 'We focus on strategies that deliver scalable outcomes.'],
            ['number' => '02', 'title' => 'Transparent Communication', 'description' => 'We keep everything clear, honest, and updated.'],
            ['number' => '03', 'title' => 'Customized Solutions', 'description' => 'We tailor every solution to fit your unique needs.'],
            ['number' => '04', 'title' => 'Affordable & Scalable Services', 'description' => 'We provide cost-effective solutions that grow with your business.'],
            ['number' => '05', 'title' => 'Full-Service Team', 'description' => 'We handle everything from content creation to ads to seo under one roof.'],
            ['number' => '06', 'title' => 'Client-Centric Mindset', 'description' => 'Your goals guide everything we do, we treat your brand as our own.'],
        ];
        $p1 = $points[0] ?? ['number' => '01', 'title' => 'Results-Driven Approach', 'description' => 'We focus on strategies that deliver scalable outcomes.'];
        $p2 = $points[1] ?? ['number' => '02', 'title' => 'Transparent Communication', 'description' => 'We keep everything clear, honest, and updated.'];
        $p3 = $points[2] ?? ['number' => '03', 'title' => 'Customized Solutions', 'description' => 'We tailor every solution to fit your unique needs.'];
        $p4 = $points[3] ?? ['number' => '04', 'title' => 'Affordable & Scalable Services', 'description' => 'We provide cost-effective solutions that grow with your business.'];
        $p5 = $points[4] ?? ['number' => '05', 'title' => 'Full-Service Team', 'description' => 'We handle everything from content creation to ads to seo under one roof.'];
        $p6 = $points[5] ?? ['number' => '06', 'title' => 'Client-Centric Mindset', 'description' => 'Your goals guide everything we do, we treat your brand as our own.'];
    @endphp
    <section class="relative w-full bg-[#0B0B0B] text-white py-24 px-8 overflow-hidden z-20">
        <!-- Right side background image & glow -->
        <div class="absolute -right-48 top-1/2 -translate-y-1/2 w-[800px] h-[800px] pointer-events-none mix-blend-lighten z-0">
            <img src="{{ $coreStrengths?->bg_image_url ?? asset('bg_image.png') }}" alt="Background Pattern" class="w-full h-full object-contain opacity-20" />
        </div>
        <div class="absolute top-1/2 right-0 -translate-y-1/2 w-[500px] h-[500px] bg-red-900/20 blur-[150px] rounded-full pointer-events-none mix-blend-screen z-0"></div>
        <div class="absolute bottom-0 left-0 w-1/2 h-1/2 bg-red-900/10 blur-[150px] rounded-full pointer-events-none mix-blend-screen z-0"></div>

        <div class="max-w-[1300px] mx-auto flex flex-col items-center relative z-10">
            <!-- Header Area -->
            <div class="flex flex-col items-center text-center mb-20 w-full max-w-3xl">
                <p class="text-xs font-bold tracking-[0.2em] uppercase text-gray-400 mb-4 flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-red-600 shadow-[0_0_8px_3px_rgba(220,38,38,0.7)]"></span>
                    {{ $coreStrengths?->mini_title ?? 'Our Core Strengths' }}
                </p>
                <h2 class="text-4xl md:text-5xl font-bold text-white tracking-tight leading-tight">
                    {{ $coreStrengths?->main_title ?? 'What Makes Our Digital Marketing Agency Stand Out?' }}
                </h2>
            </div>

            <!-- 3-Column Layout -->
            <div class="grid grid-cols-1 lg:grid-cols-[1fr_auto_1fr] gap-4 lg:gap-8 w-full items-stretch">
                <!-- Left Column (01, 02, 03) -->
                <div class="flex flex-col w-full px-4 lg:px-0 mt-8">
                    <!-- 01 (Even -> shift right towards images) -->
                    <div class="relative w-[90%] sm:w-[80%] lg:w-[90%] mb-12 lg:mb-16 lg:ml-auto lg:mr-0 mx-auto">
                        <div class="absolute text-8xl font-bold text-white/20 select-none pointer-events-none font-sans z-0 -top-12 right-0 lg:-right-4">{{ $p1['number'] ?? '01' }}</div>
                        <div class="relative z-10 bg-[#161616] rounded-2xl p-6 border border-white/5 flex flex-col items-start gap-4 shadow-xl backdrop-blur-sm">
                            <div class="flex items-center gap-4 w-full">
                                <div class="w-14 h-14 rounded-xl bg-red-600/90 flex items-center justify-center shrink-0 shadow-lg text-white">
                                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"/><path d="M14 2v4a2 2 0 0 0 2 2h4"/><path d="M10 9H8"/><path d="M16 13H8"/><path d="M16 17H8"/></svg>
                                </div>
                                <h3 class="text-white font-bold text-lg leading-snug w-[140px]">{{ $p1['title'] ?? 'Results-Driven Approach' }}</h3>
                            </div>
                            <p class="text-gray-400 text-[15px] leading-relaxed mt-2 w-full max-w-[260px] pr-2">{{ $p1['description'] ?? 'We focus on strategies that deliver scalable outcomes.' }}</p>
                        </div>
                    </div>

                    <!-- 02 (Odd -> shift left) -->
                    <div class="relative w-[90%] sm:w-[80%] lg:w-[90%] mb-12 lg:mb-16 lg:mr-auto lg:ml-0 mx-auto">
                        <div class="absolute text-8xl font-bold text-white/20 select-none pointer-events-none font-sans z-0 -top-12 right-0 lg:-right-4">{{ $p2['number'] ?? '02' }}</div>
                        <div class="relative z-10 bg-[#161616] rounded-2xl p-6 border border-white/5 flex flex-col items-start gap-4 shadow-xl backdrop-blur-sm">
                            <div class="flex items-center gap-4 w-full">
                                <div class="w-14 h-14 rounded-xl bg-red-600/90 flex items-center justify-center shrink-0 shadow-lg text-white">
                                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="21" x2="14" y1="4" y2="4"/><line x1="10" x2="3" y1="4" y2="4"/><line x1="21" x2="12" y1="12" y2="12"/><line x1="8" x2="3" y1="12" y2="12"/><line x1="21" x2="16" y1="20" y2="20"/><line x1="12" x2="3" y1="20" y2="20"/><line x1="14" x2="14" y1="2" y2="6"/><line x1="8" x2="8" y1="10" y2="14"/><line x1="16" x2="16" y1="18" y2="22"/></svg>
                                </div>
                                <h3 class="text-white font-bold text-lg leading-snug w-[140px]">{{ $p2['title'] ?? 'Transparent Communication' }}</h3>
                            </div>
                            <p class="text-gray-400 text-[15px] leading-relaxed mt-2 w-full max-w-[260px] pr-2">{{ $p2['description'] ?? 'We keep everything clear, honest, and updated.' }}</p>
                        </div>
                    </div>

                    <!-- 03 (Even -> shift right towards images) -->
                    <div class="relative w-[90%] sm:w-[80%] lg:w-[90%] mb-12 lg:mb-16 lg:ml-auto lg:mr-0 mx-auto">
                        <div class="absolute text-8xl font-bold text-white/20 select-none pointer-events-none font-sans z-0 -top-12 right-0 lg:-right-4">{{ $p3['number'] ?? '03' }}</div>
                        <div class="relative z-10 bg-[#161616] rounded-2xl p-6 border border-white/5 flex flex-col items-start gap-4 shadow-xl backdrop-blur-sm">
                            <div class="flex items-center gap-4 w-full">
                                <div class="w-14 h-14 rounded-xl bg-red-600/90 flex items-center justify-center shrink-0 shadow-lg text-white">
                                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                                </div>
                                <h3 class="text-white font-bold text-lg leading-snug w-[140px]">{{ $p3['title'] ?? 'Customized Solutions' }}</h3>
                            </div>
                            <p class="text-gray-400 text-[15px] leading-relaxed mt-2 w-full max-w-[260px] pr-2">{{ $p3['description'] ?? 'We tailor every solution to fit your unique needs.' }}</p>
                        </div>
                    </div>
                </div>

                <!-- Center Column (Collage) -->
                <div class="flex items-stretch justify-center w-full px-4 lg:px-2 py-8 lg:py-0 h-full">
                    <div class="grid grid-cols-2 gap-4 w-full max-w-md mx-auto h-full">
                        <!-- Left Column: 1, 2, 3 -->
                        <div class="flex flex-col gap-4 h-full">
                            <img src="{{ $coreStrengths?->collage_image_1_url ?? asset('clip_1_group.png') }}" alt="Marketing Funnels Collage" class="w-full flex-1 rounded-2xl shadow-[0_0_15px_rgba(220,38,38,0.1)] border border-white/10 object-cover hover:scale-[1.02] transition-transform" />
                            <img src="{{ $coreStrengths?->collage_image_2_url ?? asset('clip_2_group.png') }}" alt="Summer Collection Collage" class="w-full flex-1 rounded-2xl shadow-[0_0_15px_rgba(220,38,38,0.1)] border border-white/10 object-cover hover:scale-[1.02] transition-transform" />
                            <img src="{{ $coreStrengths?->collage_image_3_url ?? asset('clip_3_group.png') }}" alt="Team Banner Collage" class="w-full h-[70px] flex-none rounded-2xl shadow-[0_0_15px_rgba(220,38,38,0.1)] border border-white/10 object-cover hover:scale-[1.02] transition-transform" />
                        </div>

                        <!-- Right Column: 4, 5, 6 -->
                        <div class="flex flex-col gap-4 h-full">
                            <img src="{{ $coreStrengths?->collage_image_4_url ?? asset('clip_4_group.png') }}" alt="Business Woman Collage" class="w-full h-[70px] flex-none rounded-2xl shadow-[0_0_15px_rgba(220,38,38,0.1)] border border-white/10 object-cover hover:scale-[1.02] transition-transform" />
                            <img src="{{ $coreStrengths?->collage_image_5_url ?? asset('clip_5_group.png') }}" alt="Tech Products Collage" class="w-full flex-1 rounded-2xl shadow-[0_0_15px_rgba(220,38,38,0.1)] border border-white/10 object-cover hover:scale-[1.02] transition-transform" />
                            <img src="{{ $coreStrengths?->collage_image_6_url ?? asset('clip_6_group.png') }}" alt="Fitness Marketing Collage" class="w-full flex-1 rounded-2xl shadow-[0_0_15px_rgba(220,38,38,0.1)] border border-white/10 object-cover hover:scale-[1.02] transition-transform" />
                        </div>
                    </div>
                </div>

                <!-- Right Column (04, 05, 06) -->
                <div class="flex flex-col w-full px-4 lg:px-0 lg:pt-16">
                    <!-- 04 (Even -> shift left towards images) -->
                    <div class="relative w-[90%] sm:w-[80%] lg:w-[90%] mb-12 lg:mb-16 lg:mr-auto lg:ml-0 mx-auto">
                        <div class="absolute text-8xl font-bold text-white/20 select-none pointer-events-none font-sans z-0 -top-12 right-0 lg:-left-6 lg:right-auto">{{ $p4['number'] ?? '04' }}</div>
                        <div class="relative z-10 bg-[#161616] rounded-2xl p-6 border border-white/5 flex flex-col items-start gap-4 shadow-xl backdrop-blur-sm">
                            <div class="flex items-center gap-4 w-full">
                                <div class="w-14 h-14 rounded-xl bg-red-600/90 flex items-center justify-center shrink-0 shadow-lg text-white">
                                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                                </div>
                                <h3 class="text-white font-bold text-lg leading-snug w-[140px]">{{ $p4['title'] ?? 'Affordable & Scalable Services' }}</h3>
                            </div>
                            <p class="text-gray-400 text-[15px] leading-relaxed mt-2 w-full max-w-[260px] pr-2">{{ $p4['description'] ?? 'We provide cost-effective solutions that grow with your business.' }}</p>
                        </div>
                    </div>

                    <!-- 05 (Odd -> shift right) -->
                    <div class="relative w-[90%] sm:w-[80%] lg:w-[90%] mb-12 lg:mb-16 lg:ml-auto lg:mr-0 mx-auto">
                        <div class="absolute text-8xl font-bold text-white/20 select-none pointer-events-none font-sans z-0 -top-12 right-0 lg:-left-6 lg:right-auto">{{ $p5['number'] ?? '05' }}</div>
                        <div class="relative z-10 bg-[#161616] rounded-2xl p-6 border border-white/5 flex flex-col items-start gap-4 shadow-xl backdrop-blur-sm">
                            <div class="flex items-center gap-4 w-full">
                                <div class="w-14 h-14 rounded-xl bg-red-600/90 flex items-center justify-center shrink-0 shadow-lg text-white">
                                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/><polyline points="16 7 22 7 22 13"/></svg>
                                </div>
                                <h3 class="text-white font-bold text-lg leading-snug w-[140px]">{{ $p5['title'] ?? 'Full-Service Team' }}</h3>
                            </div>
                            <p class="text-gray-400 text-[15px] leading-relaxed mt-2 w-full max-w-[260px] pr-2">{{ $p5['description'] ?? 'We handle everything from content creation to ads to seo under one roof.' }}</p>
                        </div>
                    </div>

                    <!-- 06 (Even -> shift left towards images) -->
                    <div class="relative w-[90%] sm:w-[80%] lg:w-[90%] mb-12 lg:mb-16 lg:mr-auto lg:ml-0 mx-auto">
                        <div class="absolute text-8xl font-bold text-white/20 select-none pointer-events-none font-sans z-0 -top-12 right-0 lg:-left-6 lg:right-auto">{{ $p6['number'] ?? '06' }}</div>
                        <div class="relative z-10 bg-[#161616] rounded-2xl p-6 border border-white/5 flex flex-col items-start gap-4 shadow-xl backdrop-blur-sm">
                            <div class="flex items-center gap-4 w-full">
                                <div class="w-14 h-14 rounded-xl bg-red-600/90 flex items-center justify-center shrink-0 shadow-lg text-white">
                                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg>
                                </div>
                                <h3 class="text-white font-bold text-lg leading-snug w-[140px]">{{ $p6['title'] ?? 'Client-Centric Mindset' }}</h3>
                            </div>
                            <p class="text-gray-400 text-[15px] leading-relaxed mt-2 w-full max-w-[260px] pr-2">{{ $p6['description'] ?? 'Your goals guide everything we do, we treat your brand as our own.' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

    <!-- Our Work Section -->
    @if(!isset($ourWork?->is_active) || $ourWork->is_active)
    <section class="w-full bg-white text-black py-24">
        <div class="max-w-[1300px] mx-auto flex flex-col items-center">
            <!-- Header Area -->
            <div class="flex flex-col items-center text-center mb-12 w-full max-w-5xl px-4">
                <p class="text-xs font-bold tracking-[0.4em] uppercase text-gray-600 mb-4 flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-[#c52833] shadow-[0_0_8px_3px_rgba(220,38,38,0.7)]"></span>
                    {{ $ourWork?->mini_title ?? 'OUR WORK' }}
                </p>
                <h2 class="text-2xl md:text-3xl lg:text-[40px] font-bold text-[#1f1f1f] tracking-tight leading-tight">
                    {{ $ourWork?->main_title ?? '10+ yrs of expertise in providing innovative solutions' }}
                </h2>
            </div>
        </div>

        @php
            $workCategories = is_array($ourWork?->categories) ? $ourWork->categories : [];
        @endphp
        @if(!empty($workCategories))
        <!-- Categories Banner -->
        <div class="w-full bg-[#f4f5f6] border-y border-gray-100 py-6 mb-16 overflow-x-auto scrollbar-none">
            <div class="max-w-[1300px] mx-auto flex items-center justify-center gap-8 md:gap-12 min-w-max px-8">
                @foreach($workCategories as $category)
                    @php
                        $catUrl = $category['url'] ?? $category['link'] ?? '#';
                    @endphp
                    <a href="{{ !empty($catUrl) && $catUrl !== '#' ? (str_starts_with($catUrl, 'http') ? $catUrl : url($catUrl)) : '#' }}" class="text-sm md:text-base font-medium text-gray-700 hover:text-red-600 transition-colors">
                        {{ $category['label'] ?? '' }}
                    </a>
                @endforeach
            </div>
        </div>
        @endif

        <div class="max-w-[1100px] mx-auto px-4 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                <!-- Card 1 -->
                <div class="bg-[#f8f9fa] rounded-[24px] p-8 lg:p-10 flex flex-col sm:flex-row items-center justify-between gap-6 border border-gray-100 shadow-sm relative overflow-hidden group">
                    <div class="absolute inset-0 z-0 opacity-100 pointer-events-none" style="background-image: url('{{ $ourWork?->card_1_bg_image_url ?? asset('white_bg.png') }}'); background-size: cover; background-position: center center;"></div>
                    <div class="flex flex-col items-start z-10 w-full sm:w-1/2">
                        <h3 class="text-xl lg:text-[26px] font-bold text-gray-900 leading-tight mb-4 uppercase">
                            {!! nl2br(e($ourWork?->card_1_title ?? "Website\ndevelopment")) !!}
                        </h3>
                        <div class="mb-6">
                            <span class="text-3xl lg:text-4xl font-bold text-[#c52833] block mb-1">
                                {{ $ourWork?->card_1_stat_number ?? '145 %' }}
                            </span>
                            <p class="text-gray-500 text-xs md:text-sm max-w-[220px]">
                                {{ $ourWork?->card_1_stat_desc ?? 'An increase in online bookings during the first 90 days.' }}
                            </p>
                        </div>
                        <a href="{{ !empty($ourWork?->card_1_button_link) ? (str_starts_with($ourWork->card_1_button_link, 'http') ? $ourWork->card_1_button_link : url($ourWork->card_1_button_link)) : '#' }}" class="bg-[#cc2936] hover:bg-red-700 text-white px-6 py-2.5 rounded-full text-xs font-semibold transition-colors shadow-md">
                            {{ $ourWork?->card_1_button_text ?? 'View Case Study' }}
                        </a>
                    </div>
                    <div class="w-full sm:w-1/2 flex justify-end z-10">
                        <div class="relative w-full max-w-[160px] aspect-[3/4]">
                            <img src="{{ $ourWork?->card_1_image_url ?? asset('dpworld_image.png') }}" alt="{{ $ourWork?->card_1_title ?? 'Website Development' }}" class="absolute inset-0 w-full h-full object-contain drop-shadow-2xl rounded-xl transition-transform duration-500 group-hover:scale-105" />
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-[#f8f9fa] rounded-[24px] p-8 lg:p-10 flex flex-col sm:flex-row items-center justify-between gap-6 border border-gray-100 shadow-sm relative overflow-hidden group">
                    <div class="absolute inset-0 z-0 opacity-100 pointer-events-none" style="background-image: url('{{ $ourWork?->card_2_bg_image_url ?? asset('white_bg.png') }}'); background-size: cover; background-position: center center;"></div>
                    <div class="flex flex-col items-start z-10 w-full sm:w-1/2">
                        <h3 class="text-xl lg:text-[26px] font-bold text-gray-900 leading-tight mb-4 uppercase">
                            {!! nl2br(e($ourWork?->card_2_title ?? "Mobile\ndevelopment")) !!}
                        </h3>
                        <div class="mb-6">
                            <span class="text-3xl lg:text-4xl font-bold text-[#c52833] block mb-1">
                                {{ $ourWork?->card_2_stat_number ?? '40 %' }}
                            </span>
                            <p class="text-gray-500 text-xs md:text-sm max-w-[200px]">
                                {{ $ourWork?->card_2_stat_desc ?? 'Share of total online sales driven through the mobile app.' }}
                            </p>
                        </div>
                        <a href="{{ !empty($ourWork?->card_2_button_link) ? (str_starts_with($ourWork->card_2_button_link, 'http') ? $ourWork->card_2_button_link : url($ourWork->card_2_button_link)) : '#' }}" class="bg-[#cc2936] hover:bg-red-700 text-white px-6 py-2.5 rounded-full text-xs font-semibold transition-colors shadow-md">
                            {{ $ourWork?->card_2_button_text ?? 'View Case Study' }}
                        </a>
                    </div>
                    <div class="w-full sm:w-1/2 flex justify-end z-10">
                        <div class="relative w-full max-w-[180px] aspect-[4/3]">
                            <img src="{{ $ourWork?->card_2_image_url ?? asset('sharjahuni_image.png') }}" alt="{{ $ourWork?->card_2_title ?? 'Mobile Development' }}" class="absolute inset-0 w-full h-full object-contain drop-shadow-2xl rounded-xl transition-transform duration-500 group-hover:scale-105" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

    <!-- Our Clients Section -->
    @include('partials.our_clients')

    <!-- Passionate Team Section -->
    @include('partials.team')

    <!-- Testimonial Section -->
    @if(!isset($testimonialSection?->is_active) || $testimonialSection->is_active)
    <section class="relative w-full max-w-[1956px] mx-auto min-h-[553px] py-16 flex items-center justify-center bg-black text-white px-4 overflow-hidden font-sans border-t border-white/10">
        <div class="absolute inset-0 z-0 opacity-60 pointer-events-none" style="background: repeating-radial-gradient(ellipse at -10% 50%, #000000 0%, #000000 30px, #2a2a2a 30px, #2a2a2a 60px);"></div>
        <div class="absolute inset-0 z-0 bg-gradient-to-r from-transparent via-black/90 to-black pointer-events-none"></div>
        <div class="absolute inset-0 z-0 bg-gradient-to-b from-black via-transparent to-black pointer-events-none opacity-80"></div>

        <div class="max-w-[1000px] mx-auto flex flex-col items-center text-center relative z-10">
            <p class="text-[11px] font-medium tracking-[0.2em] uppercase text-gray-400 mb-6 flex items-center justify-center gap-2">
                <span class="relative flex h-1.5 w-1.5">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-1.5 w-1.5 bg-red-600 shadow-[0_0_8px_3px_rgba(220,38,38,0.5)]"></span>
                </span>
                {{ $testimonialSection?->mini_title ?? 'Our Clients' }}
            </p>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white tracking-tight leading-tight mb-8">
                {!! nl2br(e($testimonialSection?->main_title ?? 'Amazing Software Services')) !!}
            </h2>
            <p class="text-gray-300 text-lg md:text-xl leading-relaxed mb-12 max-w-4xl mx-auto font-light">
                {!! nl2br(e($testimonialSection?->review_text ?? "They crafted a digital experience tailored to our exact needs. From initial consultation to final deployment, their professionalism, responsiveness, and technical expertise were unmatched. The system they built has streamlined our operations, improved customer engagement, and scaled effortlessly with our growth We couldn't be happier with.")) !!}
            </p>
            <div class="flex items-center gap-4 mt-4">
                <div class="relative w-14 h-14 rounded-full overflow-hidden border-2 border-white/10 shadow-xl">
                    <img src="{{ $testimonialSection?->author_image_url ?? asset('managingpart_image.png') }}" alt="{{ $testimonialSection?->author_name ?? 'Client Spokesperson' }}" class="absolute inset-0 w-full h-full object-cover" />
                </div>
                <div class="flex flex-col items-start">
                    <span class="text-white font-bold text-lg leading-tight mb-0.5">{{ $testimonialSection?->author_name ?? 'Alex Hales' }}</span>
                    <span class="text-gray-500 text-xs font-medium">{{ $testimonialSection?->author_role ?? 'Managing Partner' }}</span>
                </div>
            </div>
        </div>
    </section>
    @endif

    <!-- Blog Section (Shared Global Component) -->
    @include('partials.blog_section', ['blogSection' => $blogSection])


    <!-- New Testimonial Continuous Marquee Section -->
    @if(($clientReviewsSection?->is_active ?? true))
    <section class="w-full bg-white text-black py-16 relative overflow-hidden font-sans border-t border-gray-100">
        <!-- Background stays pure white as requested -->
        <div class="absolute inset-0 pointer-events-none opacity-[0.03] z-0" style="background-image: url('{{ $clientReviewsSection?->bg_image_url ?? asset('white_bg.png') }}'); background-size: cover; background-position: center center;"></div>

        <div class="max-w-[1300px] mx-auto relative z-10 flex flex-col px-6 md:px-12 lg:px-24">
            <!-- Top Content: Title & Description -->
            <div class="flex flex-col md:flex-row justify-between items-start md:items-end gap-6 mb-8">
                <div class="max-w-2xl">
                    <h4 class="text-[#c52833] font-bold tracking-[0.15em] uppercase text-xs mb-3 flex items-center gap-3">
                        <span class="relative flex h-2.5 w-2.5">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-[#c52833] shadow-[0_0_8px_rgba(197,40,51,0.6)]"></span>
                        </span>
                        {{ $clientReviewsSection?->mini_title ?? 'Client Testimonials' }}
                    </h4>
                    <h2 class="text-3xl md:text-4xl lg:text-[46px] font-extrabold leading-[1.1] tracking-tight mb-4 text-[#1f1f1f]">
                        {{ $clientReviewsSection?->main_title ?? 'Loved by your best customers' }}
                    </h2>
                    <p class="text-gray-500 text-[17px] leading-relaxed max-w-xl font-light">
                        {{ $clientReviewsSection?->description ?? "We're obsessed with delivering outstanding customer experiences that are a reflection of your brand." }}
                    </p>
                </div>
            </div>

            <!-- Divider -->
            <div class="w-full h-px bg-gray-200 mb-10"></div>
        </div>

        @php
            $testimonials = $clientReviewsSection?->resolved_reviews ?? [];
            $duplicatedTestimonials = array_merge($testimonials, $testimonials);
        @endphp

        <!-- Marquee Container (Full Width) -->
        <div class="relative flex overflow-x-hidden group w-full">
            <style>
                @keyframes marqueeSlide {
                    0% { transform: translateX(0); }
                    100% { transform: translateX(-50%); }
                }
                .animate-marquee-testimonials {
                    animation: marqueeSlide 60s linear infinite;
                }
                .animate-marquee-testimonials:hover {
                    animation-play-state: paused;
                }
            </style>

            <div class="flex animate-marquee-testimonials gap-8 w-max px-6">
                @foreach($duplicatedTestimonials as $idx => $t)
                    @php
                        $isMiddleStyle = $idx % 2 !== 0;
                        $gradientClass = $isMiddleStyle 
                            ? "bg-gradient-to-b from-[#c52833] via-[#8a1c24] to-black border-[#c52833]/30 mt-6"
                            : "bg-gradient-to-br from-black via-black to-[#c52833] border-white/10 mb-6";
                        $rating = (int)($t['rating'] ?? 5);
                    @endphp
                    <div class="flex flex-col gap-5 p-7 rounded-[24px] shadow-[0_20px_40px_-15px_rgba(197,40,51,0.3)] text-white border relative overflow-hidden group/card w-[420px] shrink-0 {{ $gradientClass }}">
                        @if(!$isMiddleStyle)
                            <div class="absolute top-0 right-0 w-32 h-32 bg-white opacity-5 blur-[80px] group-hover/card:opacity-10 transition-opacity duration-500 rounded-full"></div>
                        @else
                            <div class="absolute top-0 left-0 w-full h-full bg-black opacity-0 group-hover/card:opacity-10 transition-opacity duration-500"></div>
                        @endif

                        <div class="flex items-center justify-between relative z-10">
                            <div class="flex items-center gap-1.5">
                                @for($s = 0; $s < $rating; $s++)
                                    <div class="w-7 h-7 flex items-center justify-center rounded-[6px] backdrop-blur-md {{ $isMiddleStyle ? 'bg-black/20' : 'bg-white/10' }}">
                                        <svg class="w-3.5 h-3.5 fill-[#00b67a] text-[#00b67a]" viewBox="0 0 24 24" fill="currentColor">
                                            <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                                        </svg>
                                    </div>
                                @endfor
                            </div>
                            <span class="text-[11px] font-bold uppercase tracking-wider text-white/80 bg-white/10 px-3 py-1.5 rounded-full">{{ $t['service'] }}</span>
                        </div>
                        
                        <p class="text-gray-200 text-[15px] leading-[1.7] font-light flex-1 relative z-10">
                            "{{ $t['review'] }}"
                        </p>

                        <div class="relative z-10 pt-5 border-t border-white/10 mt-auto flex items-center gap-4">
                            <div class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-white font-bold text-sm">
                                {{ substr($t['name'], 0, 1) }}
                            </div>
                            <div>
                                <h4 class="font-bold text-white text-[16px]">{{ $t['name'] }}</h4>
                                <p class="text-[12.5px] text-white/60 mt-0.5">{{ $t['role'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <!-- Footer -->
    @include('partials.footer', ['footerSection' => $footerSection])

    <!-- Schedule Call Modal (identical to Next.js ScheduleCallModal) -->
    <div id="scheduleCallModal" class="hidden fixed inset-0 z-[9999] overflow-y-auto overscroll-contain">
        <div class="fixed inset-0 bg-black/95 backdrop-blur-xl transition-opacity duration-300" onclick="closeScheduleModal()"></div>
        <div class="min-h-full flex justify-center items-center p-3 sm:p-4 py-6 sm:py-10 pointer-events-none" onclick="if(event.target === this) closeScheduleModal()">
            <div class="relative bg-white border border-zinc-200 rounded-2xl sm:rounded-3xl p-5 sm:p-8 max-w-lg w-full shadow-[0_20px_60px_rgba(0,0,0,0.3)] z-10 overflow-hidden my-auto pointer-events-auto">
                <div class="absolute top-0 left-0 right-0 h-1.5 bg-gradient-to-r from-red-500 to-rose-600"></div>
                <button onclick="closeScheduleModal()" class="absolute top-3.5 right-3.5 sm:top-4 sm:right-4 text-zinc-500 hover:text-zinc-900 hover:bg-zinc-100 border border-zinc-200 p-1.5 sm:p-2 rounded-full transition-colors cursor-pointer z-20" aria-label="Close modal">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
                <div class="mb-4 sm:mb-6 pr-8 sm:pr-0">
                    <div class="inline-flex items-center gap-1.5 px-3 py-1 bg-red-50 border border-red-200/50 rounded-full text-[11px] font-semibold text-red-600 uppercase tracking-wider mb-2 sm:mb-3">
                        Direct Consultation
                    </div>
                    <h3 class="text-xl sm:text-2xl font-bold text-zinc-900 mt-1">Schedule a Call</h3>
                    <p class="text-xs sm:text-sm text-zinc-500 mt-1">Let's talk about your project and build something amazing together.</p>
                </div>
                <form action="{{ url('/lead') }}" method="POST" class="space-y-3 sm:space-y-4">
                    @csrf
                    <input type="hidden" name="form_type" value="Schedule Call Modal">
                    <div>
                        <label class="block text-[11px] sm:text-xs font-semibold text-zinc-600 uppercase tracking-wider mb-1 sm:mb-1.5">Full Name</label>
                        <input type="text" name="name" required class="w-full bg-zinc-50 border border-zinc-200 rounded-xl px-4 py-2.5 sm:py-3 text-zinc-900 text-sm focus:outline-none focus:border-red-600/80 focus:ring-1 focus:ring-red-600/25 transition-all placeholder-zinc-400" placeholder="e.g. John Doe">
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 sm:gap-4">
                        <div>
                            <label class="block text-[11px] sm:text-xs font-semibold text-zinc-600 uppercase tracking-wider mb-1 sm:mb-1.5">Email Address</label>
                            <input type="email" name="email" required class="w-full bg-zinc-50 border border-zinc-200 rounded-xl px-4 py-2.5 sm:py-3 text-zinc-900 text-sm focus:outline-none focus:border-red-600/80 focus:ring-1 focus:ring-red-600/25 transition-all placeholder-zinc-400" placeholder="name@company.com">
                        </div>
                        <div>
                            <label class="block text-[11px] sm:text-xs font-semibold text-zinc-600 uppercase tracking-wider mb-1 sm:mb-1.5">Phone Number</label>
                            <input type="tel" name="phone" required class="w-full bg-zinc-50 border border-zinc-200 rounded-xl px-4 py-2.5 sm:py-3 text-zinc-900 text-sm focus:outline-none focus:border-red-600/80 focus:ring-1 focus:ring-red-600/25 transition-all placeholder-zinc-400" placeholder="+971 50 000 0000">
                        </div>
                    </div>
                    <div>
                        <label class="block text-[11px] sm:text-xs font-semibold text-zinc-600 uppercase tracking-wider mb-1 sm:mb-1.5">Interested Service</label>
                        <select name="service" class="w-full bg-zinc-50 border border-zinc-200 rounded-xl px-4 py-2.5 sm:py-3 text-sm focus:outline-none focus:border-red-600/80 focus:ring-1 focus:ring-red-600/25 transition-all cursor-pointer text-zinc-900">
                            <option value="Web App & Core Development">Web App & Core Development</option>
                            <option value="Mobile Applications">Mobile Applications</option>
                            <option value="UI/UX Product Design">UI/UX Product Design</option>
                            <option value="Growth & Performance Marketing">Growth & Performance Marketing</option>
                            <option value="Search Engine Optimization">Search Engine Optimization (SEO)</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-[11px] sm:text-xs font-semibold text-zinc-600 uppercase tracking-wider mb-1 sm:mb-1.5">Brief Message</label>
                        <textarea name="message" rows="2" class="w-full bg-zinc-50 border border-zinc-200 rounded-xl px-4 py-2.5 sm:py-3 text-zinc-900 text-sm focus:outline-none focus:border-red-600/80 focus:ring-1 focus:ring-red-600/25 transition-all resize-none placeholder-zinc-400 sm:rows-3" placeholder="Describe your project, timeline, or objectives..."></textarea>
                    </div>
                    <button type="submit" class="w-full flex items-center justify-center py-3 sm:py-3.5 bg-red-600 hover:bg-red-700 active:scale-95 text-white font-semibold rounded-xl transition-all shadow-lg cursor-pointer text-sm">
                        Book Call Now
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Speak to an Expert Modal (identical to Next.js SpeakExpertModal) -->
    @include('partials.speak_expert_modal')

    <script>
        function openScheduleModal() {
            const m = document.getElementById('scheduleCallModal');
            if (m) {
                m.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
                m.scrollTop = 0;
            }
        }
        function closeScheduleModal() {
            const m = document.getElementById('scheduleCallModal');
            if (m) {
                m.classList.add('hidden');
                document.body.style.overflow = 'unset';
            }
        }

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeScheduleModal();
                if (typeof closeExpertModal === 'function') closeExpertModal();
            }
        });
    </script>
</body>
</html>

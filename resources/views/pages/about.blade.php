@extends('layouts.app')

@section('title', ($page->meta_title ?? 'Digital Marketing Agency in Dubai | CoreUnity Solutions'))
@section('meta_description', $page->meta_description ?? 'CoreUnity Solutions is a results-driven digital marketing agency in Dubai, combining creativity, data, and technology to help ambitious brands grow and lead online.')

@section('content')
<div class="bg-black text-white relative flex flex-col font-sans min-h-screen overflow-hidden">
    
    <!-- Background Red Radial Glow for Hero -->
    <div 
        class="absolute top-0 left-1/2 -translate-x-1/2 w-full max-w-5xl h-[600px] pointer-events-none z-0"
        style="background: radial-gradient(circle at top center, rgba(160, 20, 25, 0.35) 0%, transparent 65%); filter: blur(50px);">
    </div>

    <!-- Hero Section -->
    @php
        $hero = $aboutHero ?? \App\Models\AboutHeroSection::where('is_active', true)->latest('updated_at')->first() ?? \App\Models\AboutHeroSection::first();
    @endphp
    @if($hero?->is_active ?? true)
    <main class="h-[600px] flex flex-col items-center justify-center relative z-10 px-6">
        
        <!-- Top Label -->
        <div class="flex items-center justify-center gap-3 mb-4 mt-12">
            <div class="relative flex h-2.5 w-2.5">
                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-[#c52833] shadow-[0_0_8px_3px_rgba(220,38,38,0.5)]"></span>
            </div>
            <h1 class="text-[24px] md:text-[28px] font-bold tracking-wide text-white">{{ $hero?->mini_title ?? 'About Us' }}</h1>
        </div>
        
        <!-- Main Heading -->
        <h2 class="text-center text-3xl md:text-[44px] font-medium leading-[1.3] text-white tracking-wide font-sans">
            {!! nl2br(e($hero?->main_title ?? "From Dubai's best minds to\na global powerhouse")) !!}
        </h2>
        
    </main>
    @endif

    <!-- Content Section: We are a Creative Bold Digital Agency -->
    @php
        $intro = $aboutIntro ?? \App\Models\AboutIntroSection::where('is_active', true)->latest('updated_at')->first() ?? \App\Models\AboutIntroSection::first();
    @endphp
    @if($intro?->is_active ?? true)
    <section class="bg-white text-black py-24 px-6 sm:px-12 md:px-20 relative z-20 -mt-10 overflow-hidden">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 xl:gap-32 items-center">
            
            <!-- Left Content -->
            <div class="flex flex-col pr-0 lg:pr-10">
                <h2 class="text-4xl md:text-5xl font-semibold leading-tight mb-8 text-[#1f1f1f] tracking-tight">
                    {{ $intro?->title_prefix ?? 'We are a' }} <span class="text-[#c52833]">{{ $intro?->title_highlight ?? 'Creative Bold' }}</span><br/>
                    {{ $intro?->title_suffix ?? 'Digital Agency based In UAE' }}
                </h2>
                
                @if($intro?->paragraph_1)
                <p class="text-gray-700 text-[17px] leading-relaxed mb-6 font-medium">
                    {!! $intro->paragraph_1 !!}
                </p>
                @endif
                
                @if($intro?->paragraph_2)
                <p class="text-gray-700 text-[17px] leading-relaxed">
                    {!! $intro->paragraph_2 !!}
                </p>
                @endif
            </div>

            <!-- Right Content (Image & Floating Logo) -->
            <div class="relative w-full h-[500px] md:h-[600px] mt-10 lg:mt-0">
                <!-- Image Wrapper to handle rounded corners without clipping the floating box -->
                <div class="absolute inset-0 rounded-[30px] shadow-2xl overflow-hidden">
                    <img 
                        src="{{ $intro?->main_image_url ?? asset('image.png') }}" 
                        alt="Core Unity Team Meeting" 
                        class="w-full h-full object-cover"
                    />
                </div>
                
                <!-- Floating Logo Box using Rectangle.png -->
                <div class="absolute bottom-8 -left-4 md:left-[-132px] w-[264px] h-[81px] shadow-xl flex items-center justify-center rounded-xl overflow-hidden z-20">
                    <img 
                        src="{{ $intro?->floating_bg_image_url ?? asset('Rectangle.png') }}" 
                        alt="Rectangle Background" 
                        class="absolute inset-0 w-full h-full object-cover z-0"
                    />
                    <img 
                        src="{{ $intro?->floating_logo_url ?? asset('logo1.png') }}" 
                        alt="Core Unity Solutions" 
                        class="w-auto h-10 md:h-12 object-contain relative z-10 px-4"
                    />
                </div>
            </div>
            
        </div>
    </section>
    @endif

    <!-- Content Section: What Drives Us Forward -->
    @php
        $values = $aboutValues ?? \App\Models\AboutValuesSection::where('is_active', true)->latest('updated_at')->first() ?? \App\Models\AboutValuesSection::first();
        $valuesItems = $values?->resolved_items ?? [];
    @endphp
    @if($values?->is_active ?? true)
    <section class="bg-black text-white py-24 md:py-32 px-6 sm:px-12 md:px-20 relative z-10 overflow-hidden font-sans border-t border-white/5">
        
        <!-- Background Image - Left Edge Center -->
        <div class="absolute top-1/2 -translate-y-1/2 left-0 -translate-x-1/2 w-[600px] md:w-[900px] h-[600px] md:h-[900px] opacity-80 pointer-events-none z-0 mix-blend-lighten">
            <img 
                src="{{ $values?->bg_image_url ?? asset('bg_image.png') }}" 
                alt="Background Pattern" 
                class="w-full h-full object-contain"
            />
        </div>

        <!-- Background Red Radial Glow - Bottom Left -->
        <div 
            class="absolute bottom-0 left-0 w-[500px] h-[500px] -translate-x-1/2 translate-y-1/4 pointer-events-none z-0 mix-blend-screen"
            style="background: radial-gradient(circle at center, rgba(220, 38, 38, 0.25) 0%, transparent 70%); filter: blur(80px);">
        </div>

        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 xl:gap-32 relative z-10">
            
            <!-- Left Content -->
            <div class="flex flex-col pt-10">
                <div class="flex items-center gap-4 mb-4">
                    <span class="w-2.5 h-2.5 rounded-full bg-red-600 shadow-[0_0_10px_3px_rgba(220,38,38,0.7)] flex-shrink-0 mt-3"></span>
                    <h2 class="text-4xl md:text-[55px] font-bold tracking-wide text-white leading-[1.15]">
                        {!! nl2br(e($values?->headline ?? "What Drives Us\nForward")) !!}
                    </h2>
                </div>
            </div>

            <!-- Right Content (Accordion) -->
            <div class="flex flex-col pt-10">
                <div class="w-full max-w-2xl">
                    @foreach($valuesItems as $idx => $item)
                        <div class="border-b border-gray-400/30">
                            <button
                                type="button"
                                onclick="toggleAccordion({{ $idx }})"
                                class="w-full py-6 flex items-center justify-between text-left focus:outline-none cursor-pointer"
                            >
                                <h3 class="text-3xl md:text-[50px] font-medium text-white tracking-wide">
                                    {{ $item['title'] ?? '' }}
                                </h3>
                                <div id="arrow-wrap-{{ $idx }}" class="flex-shrink-0 transition-transform duration-300 {{ $idx === 0 ? 'rotate-180' : 'rotate-0' }}">
                                    <img 
                                        src="{{ $values?->arrow_icon_url ?? asset('arrow.png') }}" 
                                        alt="Toggle" 
                                        class="w-6 h-6 object-contain"
                                    />
                                </div>
                            </button>
                            <div id="content-{{ $idx }}" class="overflow-hidden transition-all duration-300 {{ $idx === 0 ? 'max-h-60 pb-8 opacity-100' : 'max-h-0 opacity-0' }}">
                                <p class="text-gray-300 text-[18px] md:text-[22px] font-light leading-relaxed pr-8">
                                    {{ $item['description'] ?? '' }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            
        </div>
    </section>
    @endif

    <!-- Fourth Section: Industries We Serve -->
    @php
        $industries = $aboutIndustries ?? \App\Models\AboutIndustriesSection::where('is_active', true)->latest('updated_at')->first() ?? \App\Models\AboutIndustriesSection::first();
        $industriesList = $industries?->resolved_items ?? [];
    @endphp
    @if($industries?->is_active ?? true)
    <section class="bg-white text-black py-24 px-6 md:px-12 lg:px-24 relative overflow-hidden">
        <!-- Subtle white background -->
        <div 
            class="absolute inset-0 z-0 opacity-100" 
            style="background-image: url('{{ $industries?->bg_image_url ?? asset('white_bg.png') }}'); background-size: cover; background-position: center center;">
        </div>

        <div class="max-w-7xl mx-auto relative z-10">
            
            <!-- Header -->
            <div class="flex flex-col items-center text-center mb-16">
                <div class="flex items-center gap-3 mb-3">
                    <div class="relative">
                        <div class="absolute inset-0 bg-[#c52833] blur-[3px] rounded-full scale-[1.8] opacity-70"></div>
                        <div class="w-2 h-2 bg-[#c52833] rounded-full relative z-10"></div>
                    </div>
                    <span class="text-[13px] font-medium text-gray-700 ml-1 tracking-wide">
                        {{ $industries?->badge_text ?? 'Serving Diverse Sectors Across the UAE' }}
                    </span>
                </div>
                <h2 class="text-4xl md:text-5xl font-extrabold text-[#1f1f1f] tracking-tight">
                    {{ $industries?->main_title ?? 'Industries We Serve' }}
                </h2>
            </div>

            <!-- Grid of Industries -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-x-6 gap-y-12">
                @foreach($industriesList as $card)
                    <div class="flex flex-col gap-3">
                        <div class="flex items-center gap-4 bg-gray-50/50 p-3 rounded-lg shadow-sm border border-gray-100">
                            <div class="relative w-12 h-12 shrink-0">
                                <img src="{{ asset('redbg.png') }}" alt="red bg" class="absolute -left-1.5 -bottom-1.5 w-full h-full object-cover" />
                                <img src="{{ asset('blackbg.png') }}" alt="black bg" class="absolute inset-0 w-full h-full object-cover" />
                                <div class="absolute inset-0 flex items-center justify-center p-2.5">
                                    @if(($card['icon'] ?? '') === 'restaurant_combo')
                                        <div class="flex items-end justify-center gap-0.5 mt-0.5">
                                            <img src="{{ asset('rest_chair_img2.png') }}" alt="Chair 1" class="w-3.5 h-3.5 object-contain filter invert brightness-0 pb-[1px]" />
                                            <img src="{{ asset('res_table_img.png') }}" alt="Table" class="w-4 h-4 object-contain filter invert brightness-0" />
                                            <img src="{{ asset('rest_chair_img.png') }}" alt="Chair 2" class="w-3.5 h-3.5 object-contain filter invert brightness-0 pb-[1px]" />
                                        </div>
                                    @else
                                        <img src="{{ $card['icon_url'] }}" alt="{{ $card['title'] ?? 'Industry' }}" class="w-full h-full object-contain filter invert brightness-0" />
                                    @endif
                                </div>
                            </div>
                            <h3 class="font-bold text-[#1f1f1f] text-[17px]">{{ $card['title'] ?? '' }}</h3>
                        </div>
                        <p class="text-[12.5px] text-gray-500 leading-relaxed px-1">
                            {{ $card['description'] ?? '' }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <!-- Our Clients Section (Global Reusable Section) -->
    @include('partials.our_clients')

    <!-- Team Section (Global Reusable Section) -->
    @include('partials.team')

</div>
@endsection

@push('scripts')
<script>
    let openAccordionIndex = 0;
    function toggleAccordion(index) {
        openAccordionIndex = openAccordionIndex === index ? null : index;
        const allItems = document.querySelectorAll('[id^="content-"]');
        allItems.forEach((_, i) => {
            const content = document.getElementById('content-' + i);
            const arrowWrap = document.getElementById('arrow-wrap-' + i);
            if (!content || !arrowWrap) return;
            if (openAccordionIndex === i) {
                content.classList.remove('max-h-0', 'opacity-0');
                content.classList.add('max-h-60', 'pb-8', 'opacity-100');
                arrowWrap.classList.remove('rotate-0');
                arrowWrap.classList.add('rotate-180');
            } else {
                content.classList.remove('max-h-60', 'pb-8', 'opacity-100');
                content.classList.add('max-h-0', 'opacity-0');
                arrowWrap.classList.remove('rotate-180');
                arrowWrap.classList.add('rotate-0');
            }
        });
    }
</script>
@endpush

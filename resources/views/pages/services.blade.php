@extends('layouts.app')

@section('title', ($page->meta_title ?? 'Digital Marketing & Web Development Services Dubai | CoreUnity Solutions'))
@section('meta_description', $page->meta_description ?? 'Explore CoreUnity Solutions professional digital marketing and web development services in Dubai, including SEO, PPC, branding, and mobile apps.')

@section('content')
<div class="bg-black text-white relative flex flex-col font-sans overflow-hidden">
    
    @if(!isset($servicesHero?->is_active) || $servicesHero->is_active)
    <!-- Background Red Radial Glow for Hero -->
    <div 
        class="absolute top-0 left-1/2 -translate-x-1/2 w-full max-w-5xl h-[550px] pointer-events-none z-0"
        style="background: radial-gradient(circle at top center, rgba(153, 17, 17, 0.3) 0%, transparent 60%); filter: blur(40px);">
    </div>

    <!-- Section 1: Hero Section -->
    <main class="h-[550px] flex flex-col items-center justify-center relative z-10 px-4">
        
        <div class="flex items-center justify-center gap-3 mb-6 mt-16">
            <div class="w-2.5 h-2.5 bg-red-600 rounded-full shadow-[0_0_8px_3px_rgba(220,38,38,0.7)]"></div>
            <h1 class="text-3xl md:text-4xl font-bold tracking-wide text-white">
                {{ $servicesHero?->mini_title ?? 'Services We Offer' }}
            </h1>
        </div>
        
        <h2 class="text-center text-3xl md:text-5xl lg:text-5xl font-normal leading-snug text-gray-200">
            {!! nl2br(e($servicesHero?->main_title ?? "From Dubai's best minds to\na global powerhouse")) !!}
        </h2>
        
    </main>
    @endif

    @if(!isset($servicesList?->is_active) || $servicesList->is_active)
    <!-- Section 2: What We Offer (Services List) -->
    <section class="bg-white text-black py-24 px-6 md:px-12 lg:px-24 relative z-10">
        <div class="max-w-5xl mx-auto flex flex-col items-center">
            
            <!-- Header -->
            <div class="flex flex-col items-center text-center mb-16">
                <div class="flex items-center gap-3 mb-4">
                    <div class="relative">
                        <div class="absolute inset-0 bg-[#c52833] blur-[3px] rounded-full scale-[1.8] opacity-70"></div>
                        <div class="w-2.5 h-2.5 bg-[#c52833] rounded-full relative z-10"></div>
                    </div>
                    <span class="text-xs font-bold tracking-[0.25em] uppercase text-gray-900 ml-1">
                        {{ $servicesList?->mini_title ?? 'What We Offer' }}
                    </span>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold max-w-2xl leading-snug text-[#1f1f1f]">
                    {!! nl2br(e($servicesList?->main_title ?? "Save time and grow your business\nwith our expert solutions")) !!}
                </h2>
            </div>

            <!-- Services List -->
            @php
                $resolvedServices = $servicesList?->resolved_services ?? [
                    [
                        'num' => '01',
                        'title' => 'Branding',
                        'desc' => 'Our agency combines creativity and strategy to build powerful brand identities that communicate your vision, and grow meaningful customer connections.',
                        'href' => '/services/branding-and-creative-design'
                    ],
                    [
                        'num' => '02',
                        'title' => 'Digital Marketing',
                        'desc' => 'Our digital marketing solutions help you connect with your customers through SEO, social content marketing, and paid advertising.',
                        'href' => '/services/digital-marketing'
                    ],
                    [
                        'num' => '03',
                        'title' => 'Design & Creatives',
                        'desc' => 'We create compelling visuals that capture attention, strengthen your brand identity, and communicate your message effectively across platforms.',
                        'href' => '/services/ui-ux-design'
                    ],
                ];
            @endphp

            <div class="w-full flex flex-col" id="servicesListWrapper">
                @foreach($resolvedServices as $index => $service)
                    @php
                        $isDefaultActive = ($index === 0);
                        $serviceHref = !empty($service['href']) ? (str_starts_with($service['href'], 'http') ? $service['href'] : url($service['href'])) : '#';
                    @endphp
                    <a href="{{ $serviceHref }}" 
                       class="service-item block w-full no-underline" 
                       data-index="{{ $index }}"
                       onmouseenter="activateService({{ $index }})">
                        <div id="service-card-{{ $index }}" 
                             class="service-card flex flex-col md:flex-row md:items-center justify-between p-5 sm:p-8 md:p-10 transition-all duration-300 {{ $isDefaultActive ? 'bg-[#c52833] text-white rounded-xl shadow-lg mt-0 md:mt-2 relative z-10 scale-[1.02]' : 'bg-transparent text-gray-900 border-b border-gray-200 hover:bg-gray-50/50' }}">
                            
                            <!-- Left side: Num & Title -->
                            <div class="flex items-center gap-4 sm:gap-6 md:gap-16 md:w-[45%] mb-4 md:mb-0">
                                <span id="service-num-{{ $index }}" 
                                      class="service-num text-xl sm:text-2xl font-medium transition-colors duration-300 {{ $isDefaultActive ? 'text-white' : 'text-gray-500' }}">
                                    {{ $service['num'] ?? sprintf('%02d', $index + 1) }}
                                </span>
                                <h3 id="service-title-{{ $index }}" 
                                    class="service-title text-2xl sm:text-3xl md:text-4xl font-bold tracking-tight transition-colors duration-300 {{ $isDefaultActive ? 'text-white' : 'text-gray-900' }}">
                                    {{ $service['title'] ?? '' }}
                                </h3>
                            </div>
                            
                            <!-- Right side: Desc & Icon -->
                            <div class="md:w-[55%] flex items-center justify-between gap-6 md:gap-10">
                                <p id="service-desc-{{ $index }}" 
                                   class="service-desc text-[15px] md:text-[15.5px] leading-relaxed flex-1 transition-colors duration-300 {{ $isDefaultActive ? 'text-red-50' : 'text-gray-500' }}">
                                    {{ $service['desc'] ?? '' }}
                                </p>
                                <div id="service-icon-{{ $index }}" 
                                     class="service-icon shrink-0 w-12 h-12 md:w-14 md:h-14 rounded-full flex items-center justify-center transition-all hover:scale-110 {{ $isDefaultActive ? 'bg-white text-[#c52833]' : 'bg-[#404040] text-white' }}">
                                    <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" stroke-width="{{ $isDefaultActive ? 2.5 : 2 }}" viewBox="0 0 24 24">
                                        <line x1="7" y1="17" x2="17" y2="7"></line>
                                        <polyline points="7 7 17 7 17 17"></polyline>
                                    </svg>
                                </div>
                            </div>

                        </div>
                    </a>
                @endforeach
            </div>

            <!-- View All Button -->
            <div class="mt-14 flex justify-center w-full">
                <a href="{{ !empty($servicesList?->button_url) ? (str_starts_with($servicesList->button_url, 'http') ? $servicesList->button_url : url($servicesList->button_url)) : url('/services/all') }}" class="bg-[#cc2936] text-white px-8 py-3.5 rounded-full hover:bg-red-700 transition-colors shadow-md font-medium text-[15.5px] flex items-center gap-2">
                    {{ $servicesList?->button_text ?? 'View all services' }} <span>&rarr;</span>
                </a>
            </div>

        </div>
    </section>
    @endif

    <!-- Section 3: Our Clients (Global Reusable Section) -->
    @include('partials.our_clients')

    @if(!isset($servicesIndustries?->is_active) || $servicesIndustries->is_active)
    <!-- Section 4: Industries We Serve -->
    <section class="bg-white text-black py-24 px-6 md:px-12 lg:px-24 relative overflow-hidden">
        <!-- Subtle white background -->
        <div 
            class="absolute inset-0 z-0 opacity-100" 
            style="background-image: url('{{ asset('white_bg.png') }}'); background-size: cover; background-position: center center;">
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
                        {{ $servicesIndustries?->mini_title ?? 'Serving Diverse Sectors Across the UAE' }}
                    </span>
                </div>
                <h2 class="text-4xl md:text-5xl font-extrabold text-[#1f1f1f] tracking-tight">
                    {{ $servicesIndustries?->main_title ?? 'Industries We Serve' }}
                </h2>
            </div>

            <!-- Grid of Industries -->
            @php
                $resolvedIndustries = $servicesIndustries?->resolved_industries ?? [];
            @endphp
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-x-6 gap-y-12">
                @foreach($resolvedIndustries as $industry)
                    @php
                        $indLink = !empty($industry['link']) ? (str_starts_with($industry['link'], 'http') ? $industry['link'] : url($industry['link'])) : '#';
                        $indIcon = $industry['icon_url'] ?? asset('state_img.png');
                    @endphp
                    <div class="flex flex-col gap-3">
                        <a href="{{ $indLink }}" class="flex items-center gap-4 bg-gray-50/50 p-3 rounded-lg shadow-sm border border-gray-100 hover:bg-gray-100/60 transition-colors group">
                            <div class="relative w-12 h-12 shrink-0">
                                <img src="{{ asset('redbg.png') }}" alt="red bg" class="absolute -left-1.5 -bottom-1.5 w-full h-full object-cover" />
                                <img src="{{ asset('blackbg.png') }}" alt="black bg" class="absolute inset-0 w-full h-full object-cover" />
                                <div class="absolute inset-0 flex items-center justify-center p-2.5">
                                    <img src="{{ $indIcon }}" alt="{{ $industry['title'] ?? 'Industry' }}" class="w-full h-full object-contain filter invert brightness-0 group-hover:scale-110 transition-transform" />
                                </div>
                            </div>
                            <h3 class="font-bold text-[#1f1f1f] text-[17px]">{{ $industry['title'] ?? '' }}</h3>
                        </a>
                        <p class="text-[12.5px] text-gray-500 leading-relaxed px-1">
                            {{ $industry['desc'] ?? '' }}
                        </p>
                    </div>
                @endforeach
            </div>

            <!-- CTA Banner -->
            <div class="mt-16 md:mt-24 w-full bg-[#c52833] rounded-2xl flex flex-col md:flex-row items-center justify-between p-6 sm:p-10 md:p-14 shadow-lg overflow-hidden relative transition-transform duration-300 hover:scale-[1.02] hover:shadow-2xl">
                <div class="text-white mb-6 md:mb-0 relative z-10 text-center md:text-left">
                    <h3 class="text-2xl sm:text-3xl md:text-[34px] font-bold mb-2 md:mb-3 tracking-tight">
                        {{ $servicesIndustries?->cta_title ?? 'Ready to grow your brand?' }}
                    </h3>
                    <p class="text-red-100 text-sm md:text-[15px] font-light">
                        {{ $servicesIndustries?->cta_subtitle ?? "Let's build a strategy that delivers real results." }}
                    </p>
                </div>
                <a href="{{ !empty($servicesIndustries?->cta_button_url) ? (str_starts_with($servicesIndustries->cta_button_url, 'http') ? $servicesIndustries->cta_button_url : url($servicesIndustries->cta_button_url)) : url('/contact') }}" class="relative z-10 bg-white text-[#c52833] font-bold px-6 sm:px-8 py-3.5 sm:py-4 rounded-md hover:bg-gray-50 transition-colors flex items-center justify-center gap-2 w-full sm:w-auto text-sm sm:text-base">
                    {{ $servicesIndustries?->cta_button_text ?? 'Connect with us' }} <span class="font-normal">&rarr;</span>
                </a>
            </div>

        </div>
    </section>
    @endif

    @if(!isset($servicesSmm?->is_active) || $servicesSmm->is_active)
    <!-- Section 5: SMM Stats -->
    <section class="min-h-[428px] md:h-[428px] py-16 md:py-0 w-full bg-black relative flex items-center overflow-hidden shrink-0">
        <!-- Red Glow Background on the right -->
        <div class="absolute top-0 right-0 w-full h-full bg-[radial-gradient(circle_at_85%_50%,_rgba(150,15,25,0.65)_0%,_rgba(0,0,0,0)_60%)] pointer-events-none"></div>

        <div class="max-w-7xl w-full mx-auto px-5 sm:px-8 md:px-12 lg:px-24 relative z-10 flex flex-col md:flex-row items-center justify-between gap-10 md:gap-8">
            
            <!-- Left Text Content -->
            <div class="w-full md:flex-1 text-white text-center md:text-left pr-0 md:pr-4">
                <h2 class="text-3xl sm:text-4xl md:text-[44px] leading-tight md:leading-[1.1] font-bold mb-4 md:mb-6 tracking-tight">
                    {!! nl2br(e($servicesSmm?->main_title ?? "Experience Growth\nwith Leading SMM")) !!}
                </h2>
                <p class="text-sm sm:text-[15px] md:text-[17px] text-gray-300 font-light leading-relaxed max-w-[480px] mx-auto md:mx-0">
                    {{ $servicesSmm?->description ?? "At CoreUnity Solutions, squeeze out each platform's power and scope and utilize it for your brand success. Our team of social media marketing strategists" }}
                </p>
            </div>

            <!-- Right Cards Grid -->
            @php
                $resolvedStats = $servicesSmm?->resolved_stats ?? [];
            @endphp
            <div class="w-full md:flex-1 grid grid-cols-2 gap-3 sm:gap-4 max-w-[420px] md:max-w-[500px] mx-auto md:mx-0">
                @foreach($resolvedStats as $stat)
                    @php
                        $isHighlighted = !empty($stat['is_highlighted']);
                    @endphp
                    @if($isHighlighted)
                        <div class="bg-white rounded-xl sm:rounded-[14px] py-6 sm:py-8 md:py-9 px-3 sm:px-6 flex flex-col items-center justify-center text-center shadow-md">
                            <h3 class="text-[#c52833] text-2xl sm:text-3xl md:text-[38px] font-bold mb-1 tracking-tight">{{ $stat['stat_number'] ?? '' }}</h3>
                            <p class="text-[#1f1f1f] text-xs sm:text-[14px] leading-tight">{{ $stat['stat_label'] ?? '' }}</p>
                        </div>
                    @else
                        <div class="bg-[#171717] border border-white/80 sm:border-2 sm:border-white rounded-xl sm:rounded-[14px] py-6 sm:py-8 md:py-9 px-3 sm:px-6 flex flex-col items-center justify-center text-center shadow-lg">
                            <h3 class="text-white text-2xl sm:text-3xl md:text-[38px] font-bold mb-1 tracking-tight">{{ $stat['stat_number'] ?? '' }}</h3>
                            <p class="text-gray-200 text-xs sm:text-[14px] leading-tight">{{ $stat['stat_label'] ?? '' }}</p>
                        </div>
                    @endif
                @endforeach
            </div>

        </div>
    </section>
    @endif

    <!-- Section 6: Testimonial (Global Reusable Section) -->
    @include('partials.testimonial_light')

</div>
@endsection

@push('scripts')
<script>
    function activateService(targetIdx) {
        const totalCards = document.querySelectorAll('.service-item').length;
        for (let i = 0; i < totalCards; i++) {
            const card = document.getElementById('service-card-' + i);
            const num = document.getElementById('service-num-' + i);
            const title = document.getElementById('service-title-' + i);
            const desc = document.getElementById('service-desc-' + i);
            const icon = document.getElementById('service-icon-' + i);
            const svg = icon ? icon.querySelector('svg') : null;

            if (!card || !num || !title || !desc || !icon) continue;

            if (i === targetIdx) {
                // Active state
                card.className = 'service-card flex flex-col md:flex-row md:items-center justify-between p-5 sm:p-8 md:p-10 transition-all duration-300 bg-[#c52833] text-white rounded-xl shadow-lg mt-0 md:mt-2 relative z-10 scale-[1.02]';
                num.className = 'service-num text-xl sm:text-2xl font-medium transition-colors duration-300 text-white';
                title.className = 'service-title text-2xl sm:text-3xl md:text-4xl font-bold tracking-tight transition-colors duration-300 text-white';
                desc.className = 'service-desc text-[15px] md:text-[15.5px] leading-relaxed flex-1 transition-colors duration-300 text-red-50';
                icon.className = 'service-icon shrink-0 w-12 h-12 md:w-14 md:h-14 rounded-full flex items-center justify-center transition-all hover:scale-110 bg-white text-[#c52833]';
                if (svg) svg.setAttribute('stroke-width', '2.5');
            } else {
                // Inactive state
                card.className = 'service-card flex flex-col md:flex-row md:items-center justify-between p-5 sm:p-8 md:p-10 transition-all duration-300 bg-transparent text-gray-900 border-b border-gray-200 hover:bg-gray-50/50';
                num.className = 'service-num text-xl sm:text-2xl font-medium transition-colors duration-300 text-gray-500';
                title.className = 'service-title text-2xl sm:text-3xl md:text-4xl font-bold tracking-tight transition-colors duration-300 text-gray-900';
                desc.className = 'service-desc text-[15px] md:text-[15.5px] leading-relaxed flex-1 transition-colors duration-300 text-gray-500';
                icon.className = 'service-icon shrink-0 w-12 h-12 md:w-14 md:h-14 rounded-full flex items-center justify-center transition-all hover:scale-110 bg-[#404040] text-white';
                if (svg) svg.setAttribute('stroke-width', '2');
            }
        }
    }
</script>
@endpush

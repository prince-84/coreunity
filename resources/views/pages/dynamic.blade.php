@extends('layouts.app')

@section('title', ($page->meta_title ?? $page->title ?? $page->hero_headline) . ' | Core Unity Solutions')
@section('meta_description', $page->meta_description ?? $page->hero_subheadline ?? 'Core Unity Solutions Digital Agency')

@section('content')
<div class="relative bg-black text-white overflow-hidden min-h-screen">

    <!-- Red Radial Background Glow -->
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full max-w-5xl h-[600px] pointer-events-none z-0"
         style="background: radial-gradient(circle at top center, rgba(204, 41, 54, 0.28) 0%, transparent 70%); filter: blur(60px);">
    </div>

    @if(!empty($page->blocks) && is_array($page->blocks) && count($page->blocks) > 0)
        {{-- 100% Dynamic Drag-and-Drop Blocks Loop --}}
        @foreach($page->blocks as $block)
            @php
                $type = $block['type'] ?? null;
                $data = $block['data'] ?? [];
            @endphp
            @if($type && view()->exists("blocks.{$type}"))
                @include("blocks.{$type}", ['block' => $data, 'blockType' => $type, 'blockIndex' => $loop->index])
            @endif
        @endforeach
    @else

    <!-- Hero Section -->
    <section class="relative z-10 pt-16 pb-20 md:pt-24 md:pb-28 px-6 sm:px-12 max-w-7xl mx-auto flex flex-col items-center text-center">
        <!-- Badge -->
        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/5 border border-white/10 mb-6 backdrop-blur-md">
            <span class="w-2 h-2 rounded-full bg-[#cc2936] animate-pulse"></span>
            <span class="text-xs font-semibold tracking-wider uppercase text-gray-300">
                {{ $page->hero_badge ?? $page->title ?? 'Core Unity Solutions' }}
            </span>
        </div>

        <!-- Headline -->
        <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-display font-extrabold max-w-5xl tracking-tight leading-tight md:leading-[1.15] text-white">
            {{ $page->hero_headline }}
        </h1>

        <!-- Subheadline / Brief -->
        @if($page->hero_subheadline)
            <p class="mt-6 text-lg sm:text-xl text-gray-300 max-w-3xl font-normal leading-relaxed">
                {{ $page->hero_subheadline }}
            </p>
        @endif

        <!-- Hero CTA Button -->
        @if($page->hero_cta_text)
            <div class="mt-8 flex items-center justify-center gap-4">
                <a href="{{ $page->hero_cta_url ?: url('/contact') }}" 
                   class="inline-flex items-center gap-3 px-8 py-4 text-sm font-semibold text-white bg-[#cc2936] hover:bg-rose-700 rounded-full transition-all duration-300 shadow-xl shadow-rose-900/30 hover:scale-105">
                    <span>{{ $page->hero_cta_text }}</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
            </div>
        @endif

        <!-- Hero Banner Image (if uploaded) -->
        @if($page->hero_image)
            <div class="mt-14 w-full max-w-5xl rounded-3xl overflow-hidden border border-white/10 shadow-2xl relative">
                <img src="{{ Str::startsWith($page->hero_image, 'http') ? $page->hero_image : asset('storage/' . $page->hero_image) }}" 
                     alt="{{ $page->title }}" 
                     class="w-full h-auto object-cover max-h-[500px]" />
            </div>
        @endif

        <!-- Global Presence Bar (if configured) -->
        @if($page->global_presence && is_array($page->global_presence) && count($page->global_presence) > 0)
            <div class="mt-12 flex flex-wrap items-center justify-center gap-3 bg-white/[0.03] border border-white/10 rounded-full px-6 py-2.5 text-xs sm:text-sm text-gray-400 backdrop-blur-sm">
                <span class="font-semibold text-gray-400 uppercase tracking-wider">Global Presence:</span>
                @foreach($page->global_presence as $loc)
                    <span class="inline-flex items-center font-medium text-white">
                        <span class="w-1.5 h-1.5 rounded-full bg-[#cc2936] mr-1.5"></span>
                        {{ is_array($loc) ? ($loc['country'] ?? '') : $loc }}
                    </span>
                @endforeach
            </div>
        @endif
    </section>

    <!-- Main Rich Content (if provided) -->
    @if($page->content)
        <section class="bg-white text-black py-20 px-6 sm:px-12 md:px-20 relative z-20">
            <div class="max-w-4xl mx-auto prose prose-lg prose-red text-gray-800 leading-relaxed font-sans">
                {!! $page->content !!}
            </div>
        </section>
    @endif

    <!-- Dynamic Sections Repeater (blocks created in CMS) -->
    @if($page->sections && is_array($page->sections) && count($page->sections) > 0)
        @foreach($page->sections as $index => $section)
            @php $isEven = ($index % 2 === 0); @endphp
            <section class="{{ $isEven ? 'bg-[#0a0a0a] text-white border-t border-white/5' : 'bg-white text-black' }} py-20 px-6 sm:px-12 md:px-20 relative z-20">
                <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
                    
                    <!-- Content Column -->
                    <div class="flex flex-col {{ !$isEven ? 'lg:order-2' : '' }}">
                        @if(!empty($section['badge']))
                            <div class="inline-flex items-center gap-2 mb-3">
                                <span class="w-2 h-2 rounded-full bg-[#cc2936]"></span>
                                <span class="text-xs font-bold tracking-wider uppercase {{ $isEven ? 'text-[#cc2936]' : 'text-[#cc2936]' }}">
                                    {{ $section['badge'] }}
                                </span>
                            </div>
                        @endif

                        <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold tracking-tight mb-6 leading-tight {{ $isEven ? 'text-white' : 'text-gray-900' }}">
                            {{ $section['title'] ?? '' }}
                        </h2>

                        @if(!empty($section['description']))
                            <p class="text-base sm:text-lg leading-relaxed mb-8 {{ $isEven ? 'text-gray-300' : 'text-gray-600' }}">
                                {!! nl2br(e($section['description'])) !!}
                            </p>
                        @endif

                        @if(!empty($section['button_text']))
                            <div>
                                <a href="{{ $section['button_url'] ?? '#' }}" 
                                   class="inline-flex items-center gap-2 px-6 py-3 rounded-full text-sm font-semibold transition-all duration-200 {{ $isEven ? 'bg-[#cc2936] text-white hover:bg-rose-700 shadow-lg shadow-rose-950/40' : 'bg-black text-white hover:bg-gray-800' }}">
                                    <span>{{ $section['button_text'] }}</span>
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                </a>
                            </div>
                        @endif
                    </div>

                    <!-- Image Column -->
                    @if(!empty($section['image']))
                        <div class="relative w-full h-[360px] sm:h-[420px] rounded-3xl overflow-hidden shadow-2xl border border-white/10 {{ !$isEven ? 'lg:order-1' : '' }}">
                            <img src="{{ Str::startsWith($section['image'], 'http') ? $section['image'] : asset('storage/' . $section['image']) }}" 
                                 alt="{{ $section['title'] ?? 'Section visual' }}" 
                                 class="w-full h-full object-cover" />
                        </div>
                    @endif

                </div>
            </section>
        @endforeach
    @endif
    @endif

    <!-- Universal Bottom Consultation Banner -->
    <section class="bg-gradient-to-b from-[#111111] to-black py-20 px-6 sm:px-12 text-center relative z-20 border-t border-white/5">
        <div class="max-w-4xl mx-auto flex flex-col items-center">
            <span class="text-xs font-bold tracking-widest text-[#cc2936] uppercase mb-3">Take the next step</span>
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-white mb-6">
                Ready to transform your brand digitally?
            </h2>
            <p class="text-gray-400 text-base sm:text-lg mb-8 max-w-2xl">
                Partner with Dubai's leading digital and IT team to accelerate your business growth today.
            </p>
            <button onclick="openExpertModal()" 
                    class="px-8 py-4 bg-[#cc2936] hover:bg-rose-700 text-white font-semibold text-sm rounded-full transition-all duration-300 shadow-xl shadow-rose-950/50 hover:scale-105 cursor-pointer">
                Speak to an Expert Today
            </button>
        </div>
    </section>

</div>
@endsection

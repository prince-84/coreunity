@extends('layouts.app')

@section('title', ($page->meta_title ?? 'Digital Marketing Case Studies in Dubai | CoreUnity Solutions'))
@section('meta_description', ($page->meta_description ?? 'Explore CoreUnity Solutions case studies and discover how our digital marketing strategies help brands achieve measurable growth'))

@section('content')
<div class="bg-black text-white relative flex flex-col font-sans min-h-screen overflow-hidden">
    
    @if(!isset($caseStudyHero?->is_active) || $caseStudyHero->is_active)
    <!-- Background Red Radial Glow for Hero -->
    <div 
        class="absolute top-0 left-1/2 -translate-x-1/2 w-full max-w-5xl h-[600px] pointer-events-none z-0"
        style="background: radial-gradient(circle at top center, rgba(160, 20, 25, 0.35) 0%, transparent 65%); filter: blur(50px);">
    </div>

    <!-- Section 1: Hero Section (Unique Page Section) -->
    <main class="h-[600px] flex flex-col items-center justify-center relative z-10 px-6">
        
        <!-- Top Label -->
        <div class="flex items-center justify-center gap-3 mb-8 mt-12">
            <div class="w-2.5 h-2.5 bg-[#c52833] rounded-full shadow-[0_0_12px_2px_rgba(197,40,51,0.6)]"></div>
            <h1 class="text-[28px] md:text-[32px] font-bold tracking-wide text-white">
                {{ $caseStudyHero?->mini_title ?? 'Case Studies' }}
            </h1>
        </div>
        
        <!-- Main Heading -->
        <h2 class="text-center text-4xl md:text-[52px] font-bold leading-[1.2] text-white mb-6 tracking-tight">
            {!! nl2br(e($caseStudyHero?->main_title ?? "Stories of strategy,\ncreativity, and measurable impact.")) !!}
        </h2>

        <!-- Sub-description -->
        <p class="text-center text-gray-300 text-lg md:text-[21px] max-w-[850px] leading-[1.6] font-light">
            {!! nl2br(e($caseStudyHero?->description ?? "Real brands, real challenges, real transformations. Explore how we help\nteams grow with design, data, and intelligent marketing.")) !!}
        </p>
        
    </main>
    @endif

    <!-- Section 2: Our Work Showcase (Global Reusable Section) -->
    @include('partials.our_work', ['maxRows' => 4])

</div>
@endsection

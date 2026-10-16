@extends('layouts.app')

@section('title', 'Case Studies | CoreUnity Solutions')
@section('meta_description', 'Real brands, real challenges, real transformations. Explore how we help teams grow with design, data, and intelligent marketing.')

@section('content')
<div class="bg-black text-white relative flex flex-col font-sans min-h-screen overflow-hidden">
    
    <!-- Background Red Radial Glow for Hero -->
    <div 
        class="absolute top-0 left-1/2 -translate-x-1/2 w-full max-w-5xl h-[600px] pointer-events-none z-0"
        style="background: radial-gradient(circle at top center, rgba(160, 20, 25, 0.35) 0%, transparent 65%); filter: blur(50px);">
    </div>

    <!-- Hero Section -->
    <main class="h-[600px] flex flex-col items-center justify-center relative z-10 px-6">
        
        <!-- Top Label -->
        <div class="flex items-center justify-center gap-3 mb-8 mt-12">
            <div class="w-2.5 h-2.5 bg-[#c52833] rounded-full shadow-[0_0_12px_2px_rgba(197,40,51,0.6)]"></div>
            <h1 class="text-[28px] md:text-[32px] font-bold tracking-wide text-white">Case Studies</h1>
        </div>
        
        <!-- Main Heading -->
        <h2 class="text-center text-4xl md:text-[52px] font-bold leading-[1.2] text-white mb-6 tracking-tight">
            Stories of strategy, <br />
            creativity, and measurable impact.
        </h2>

        <!-- Sub-description -->
        <p class="text-center text-gray-300 text-lg md:text-[21px] max-w-[850px] leading-[1.6] font-light">
            Real brands, real challenges, real transformations. Explore how we help <br class="hidden md:block" />
            teams grow with design, data, and intelligent marketing.
        </p>

    </main>

    <!-- Main Content Section -->
    <section class="bg-white text-black py-16 md:py-20 px-4 sm:px-8 md:px-12 lg:px-20 relative z-20 -mt-10 overflow-hidden font-sans">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-12">
            
            <!-- Left Column: Case Study Details -->
            <div class="lg:col-span-2 space-y-12">
                
                <!-- Featured Image -->
                <div class="w-full h-[300px] md:h-[400px] rounded-2xl overflow-hidden relative shadow-lg">
                    <img 
                        src="{{ asset('cs_image.png') }}" 
                        alt="Case Study Featured Image" 
                        class="w-full h-full object-cover" 
                    />
                </div>

                <!-- Overview -->
                <div>
                    <h3 class="text-3xl font-bold mb-4">Project Overview</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        CoreUnity Solutions is a fast-growing AI-powered strategy platform helping businesses make smarter digital decisions. While the product was highly capable, the existing website failed to communicate its value clearly. The interface felt outdated, messaging lacked focus, and conversions were underperforming despite strong traffic.
                    </p>
                    <p class="text-gray-600 leading-relaxed">
                        Our goal was to create a sharp, modern web experience that instantly communicates intelligence, trust, and clarity. The result is a high-performance website designed to guide users smoothly from understanding to action.
                    </p>
                </div>

                <!-- Project Goal -->
                <div>
                    <h3 class="text-3xl font-bold mb-4">Project Goal</h3>
                    <ul class="list-disc list-inside space-y-3 text-gray-600 font-medium marker:text-gray-400">
                        <li>Clarify Product Value Within The First Scroll</li>
                        <li>Improve Conversions Through Structured Storytelling</li>
                        <li>Elevate Brand Perception With A Premium Interface</li>
                        <li>Build A Scalable UI System For Future Growth</li>
                    </ul>
                </div>

                <!-- The Challenge -->
                <div>
                    <h3 class="text-3xl font-bold mb-4">The Challenge</h3>
                    <ul class="list-disc list-inside space-y-3 text-gray-600 font-medium marker:text-gray-400">
                        <li>Clarify Product Value Within The First Scroll</li>
                        <li>Improve Conversions Through Structured Storytelling</li>
                        <li>Elevate Brand Perception With A Premium Interface</li>
                        <li>Build A Scalable UI System For Future Growth</li>
                    </ul>
                </div>

                <!-- Our Approach -->
                <div>
                    <h3 class="text-3xl font-bold mb-4">Our Approach</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        CoreUnity Solutions is a fast-growing AI-powered strategy platform helping businesses make smarter digital decisions. While the product was highly capable, the existing website failed to communicate its value clearly. The interface felt outdated, messaging lacked focus, and conversions were underperforming despite strong traffic.
                    </p>
                    <p class="text-gray-600 leading-relaxed">
                        Our goal was to create a sharp, modern web experience that instantly communicates intelligence, trust, and clarity. The result is a high-performance website designed to guide users smoothly from understanding to action.
                    </p>
                </div>

                <!-- The Outcomes -->
                <div>
                    <h3 class="text-3xl font-bold mb-4">The Outcomes</h3>
                    <ul class="list-disc list-inside space-y-3 text-gray-600 font-medium marker:text-gray-400">
                        <li>Clarify Product Value Within The First Scroll</li>
                        <li>Improve Conversions Through Structured Storytelling</li>
                        <li>Elevate Brand Perception With A Premium Interface</li>
                        <li>Build A Scalable UI System For Future Growth</li>
                    </ul>
                </div>

                @include('partials.case_study_share')

            </div>

            <!-- Right Column: Sidebar -->
            @include('partials.case_study_sidebar')

        </div>
    </section>

    @include('partials.case_study_cta_testimonial')

</div>
@endsection

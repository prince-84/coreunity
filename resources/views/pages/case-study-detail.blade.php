@extends('layouts.app')

@section('title', ($caseStudy->meta_title ?: ($caseStudy->display_title . ' | CoreUnity Case Study')))
@section('meta_description', ($caseStudy->meta_description ?: ($caseStudy->excerpt ?: 'See how CoreUnity delivered high-impact digital solutions for ' . $caseStudy->client_name)))

@section('content')
<div class="bg-black text-white relative flex flex-col font-sans min-h-screen overflow-hidden">
    
    @if(!empty($caseStudy->blocks) && is_array($caseStudy->blocks) && count($caseStudy->blocks) > 0)
        {{-- 100% Dynamic Drag-and-Drop Blocks Loop --}}
        @include('partials.blocks_renderer', ['blocks' => $caseStudy->blocks])
    @else
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
            <h1 class="text-[28px] md:text-[32px] font-bold tracking-wide text-white">
                {{ $caseStudy->badge ?: 'Case Study' }}
            </h1>
        </div>
        
        <!-- Main Heading -->
        <h2 class="text-center text-4xl md:text-[52px] font-bold leading-[1.2] text-white mb-6 tracking-tight">
            {{ $caseStudy->display_title }}
        </h2>
        
        <!-- Sub-description -->
        @if($caseStudy->excerpt)
        <p class="text-center text-gray-300 text-lg md:text-[21px] max-w-[850px] leading-[1.6] font-light">
            {{ $caseStudy->excerpt }}
        </p>
        @endif

    </main>

    <!-- Main Content Section -->
    <section class="bg-white text-black py-16 md:py-20 px-4 sm:px-8 md:px-12 lg:px-20 relative z-20 -mt-10 overflow-hidden font-sans">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-12">
            
            <!-- Left Column: Case Study Details -->
            <div class="lg:col-span-2 space-y-12">
                
                <!-- Featured Image -->
                @if($caseStudy->featured_image_url)
                <div class="w-full rounded-2xl overflow-hidden relative shadow-lg bg-[#f8f9fa] flex items-center justify-center">
                    <img 
                        src="{{ $caseStudy->featured_image_url }}" 
                        alt="{{ $caseStudy->display_title }}" 
                        class="w-full h-auto object-contain max-h-[500px]" 
                    />
                </div>
                @endif

                <!-- Overview / Main Content -->
                @if(!empty($caseStudy->content))
                <div>
                    <h3 class="text-3xl font-bold mb-4 text-[#1f1f1f]">Project Overview</h3>
                    <div class="text-gray-600 leading-relaxed space-y-4 text-[16px] leading-[1.7] prose max-w-none">
                        {!! $caseStudy->content !!}
                    </div>
                </div>
                @endif

                <!-- Business Challenge -->
                @if(!empty($caseStudy->challenge_text))
                <div>
                    <h3 class="text-3xl font-bold mb-4 text-[#1f1f1f]">Business Challenge</h3>
                    <div class="text-gray-600 leading-relaxed space-y-4 text-[16px] leading-[1.7] prose max-w-none">
                        {!! $caseStudy->challenge_text !!}
                    </div>
                </div>
                @endif

                <!-- Strategy & Solution -->
                @if(!empty($caseStudy->solution_text))
                <div>
                    <h3 class="text-3xl font-bold mb-4 text-[#1f1f1f]">Solution & Strategy</h3>
                    <div class="text-gray-600 leading-relaxed space-y-4 text-[16px] leading-[1.7] prose max-w-none">
                        {!! $caseStudy->solution_text !!}
                    </div>
                </div>
                @endif

                <!-- Highlights List -->
                @if(!empty($caseStudy->highlights) && is_array($caseStudy->highlights))
                <div class="space-y-4">
                    <h3 class="text-2xl font-bold mb-2 text-[#1f1f1f]">Key Capabilities Executed</h3>
                    @foreach($caseStudy->highlights as $h)
                    <div class="border-l-2 border-[#cc2936] pl-4 py-1">
                        <h4 class="font-bold text-lg text-gray-900">{{ $h['title'] ?? '' }}</h4>
                        @if(!empty($h['description']))
                        <p class="text-gray-600 text-sm leading-relaxed mt-1">{{ $h['description'] }}</p>
                        @endif
                    </div>
                    @endforeach
                </div>
                @endif

                <!-- Project Stats / Metrics -->
                @php
                    $statsList = $caseStudy->stats ?: [];
                    if (empty($statsList) && !empty($caseStudy->metrics) && is_array($caseStudy->metrics)) {
                        foreach ($caseStudy->metrics as $lbl => $val) {
                            $statsList[] = ['number' => $val, 'label' => $lbl];
                        }
                    }
                @endphp

                @if(!empty($statsList) && is_array($statsList))
                <div>
                    <h3 class="text-3xl font-bold mb-6 text-[#1f1f1f]">Measurable Impact & Results</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        @foreach($statsList as $st)
                        <div class="p-6 rounded-2xl bg-[#fdf2f2] border border-red-100 flex flex-col">
                            <span class="text-3xl font-extrabold text-[#cc2936] mb-1">{{ $st['number'] ?? '' }}</span>
                            <span class="text-gray-700 text-sm font-medium">{{ $st['label'] ?? '' }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif

                <!-- Accordion / FAQs -->
                @if(!empty($caseStudy->faqs) && is_array($caseStudy->faqs))
                <div>
                    <h3 class="text-2xl font-bold mb-4 text-[#1f1f1f]">Project Details & Execution</h3>
                    <div class="space-y-3">
                        @foreach($caseStudy->faqs as $f)
                        <div class="border border-gray-200 rounded-xl p-5 bg-[#fafafa]">
                            <h4 class="font-bold text-gray-900 text-base mb-2">{{ $f['question'] ?? '' }}</h4>
                            <p class="text-gray-600 text-sm leading-relaxed">{{ $f['answer'] ?? '' }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif

                <!-- Gallery Screenshots -->
                @if(!empty($caseStudy->gallery) && is_array($caseStudy->gallery))
                <div>
                    <h3 class="text-2xl font-bold mb-4 text-[#1f1f1f]">Project Visuals</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        @foreach($caseStudy->gallery as $g)
                        <div class="rounded-xl overflow-hidden border border-gray-200 shadow-sm">
                            <img src="{{ asset('storage/' . $g) }}" alt="Case study screenshot" class="w-full h-auto object-cover">
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif

            </div>

            <!-- Right Column: Sidebar -->
            <div class="space-y-8">
                @include('partials.case_study_sidebar')
                @include('partials.case_study_share')
            </div>

        </div>
    </section>

    <!-- Bottom CTA & Testimonials -->
    @include('partials.case_study_cta_testimonial')
    @endif

</div>
@endsection

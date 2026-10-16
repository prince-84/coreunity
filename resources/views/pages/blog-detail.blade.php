@extends('layouts.app')

@section('title', ($post->meta_title ?: ($post->title . ' | CoreUnity Solutions')))
@section('meta_description', ($post->meta_description ?: ($post->excerpt ?: 'Read expert insights on digital marketing and business growth by CoreUnity Solutions.')))

@section('content')
<div class="bg-black text-white relative flex flex-col font-sans min-h-screen overflow-hidden">
    
    @if(!empty($post->blocks) && is_array($post->blocks) && count($post->blocks) > 0)
        {{-- 100% Dynamic Drag-and-Drop Blocks Loop --}}
        @include('partials.blocks_renderer', ['blocks' => $post->blocks])
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
                {{ $post->badge ?: 'Our Blogs' }}
            </h1>
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

    <!-- Main Content Container (White Background) -->
    <div class="bg-white text-black relative z-20 -mt-10 font-sans">
        <section class="py-20 px-6 sm:px-12 md:px-20">
            <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-12">
            
                <!-- Left Column: Blog Content -->
                <div class="lg:col-span-2 space-y-8">
                    
                    <!-- Meta Badges -->
                    <div class="flex flex-wrap items-center gap-4 text-xs font-medium text-gray-500">
                        @if($post->category)
                        <span class="bg-red-50 text-red-600 px-3 py-1 rounded-full font-semibold">
                            {{ $post->category }}
                        </span>
                        @endif
                        <span>By {{ $post->author_name ?: 'CoreUnity Team' }}</span>
                        <span>•</span>
                        <span>{{ $post->published_at ? $post->published_at->format('F d, Y') : ($post->created_at ? $post->created_at->format('F d, Y') : 'January 10, 2022') }}</span>
                    </div>

                    <!-- Heading -->
                    <h2 class="text-3xl md:text-[38px] font-bold text-[#1f1f1f] leading-[1.25] tracking-tight">
                        {{ $post->title }}
                    </h2>

                    <!-- Excerpt / Intro -->
                    @if($post->excerpt)
                    <p class="text-lg text-gray-700 leading-relaxed font-normal bg-gray-50 p-6 rounded-2xl border border-gray-100">
                        {{ $post->excerpt }}
                    </p>
                    @endif

                    <!-- Cover Image -->
                    @if($post->featured_image_url)
                    <div class="w-full rounded-2xl overflow-hidden shadow-md">
                        <img 
                            src="{{ $post->featured_image_url }}" 
                            alt="{{ $post->title }}" 
                            class="w-full h-auto object-cover max-h-[450px]"
                        />
                    </div>
                    @endif

                    <!-- Rich Text Content -->
                    @if(!empty($post->content))
                    <div class="space-y-6 text-gray-700 text-[16px] leading-[1.8] font-normal prose max-w-none">
                        {!! $post->content !!}
                    </div>
                    @endif

                    <!-- Highlights / Key Takeaways -->
                    @if(!empty($post->highlights) && is_array($post->highlights))
                    <div class="bg-[#fcf8f8] border border-red-100 rounded-2xl p-6 md:p-8 space-y-4">
                        <h3 class="text-xl font-bold text-[#111] mb-3">Key Takeaways</h3>
                        <ul class="space-y-3 pl-0 list-none">
                            @foreach($post->highlights as $h)
                            <li class="flex items-start gap-3">
                                <span class="text-[#cc2936] font-bold text-lg leading-none mt-0.5">{{ $h['icon'] ?? '✓' }}</span>
                                <div>
                                    <strong class="text-gray-900">{{ $h['title'] ?? '' }}:</strong>
                                    <span class="text-gray-600">{{ $h['description'] ?? '' }}</span>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <!-- Stats / Data Benchmarks -->
                    @if(!empty($post->stats) && is_array($post->stats))
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 my-6">
                        @foreach($post->stats as $st)
                        <div class="p-6 bg-gray-50 rounded-xl border border-gray-100">
                            <span class="text-3xl font-extrabold text-[#cc2936] block mb-1">{{ $st['number'] ?? '' }}</span>
                            <span class="text-gray-700 text-sm font-medium">{{ $st['label'] ?? '' }}</span>
                        </div>
                        @endforeach
                    </div>
                    @endif

                    <!-- FAQs Section -->
                    @if(!empty($post->faqs) && is_array($post->faqs))
                    <div class="space-y-4 pt-6">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Frequently Asked Questions</h3>
                        @foreach($post->faqs as $f)
                        <div class="border border-gray-200 rounded-xl p-5 bg-[#fafafa]">
                            <h4 class="font-bold text-gray-900 text-base mb-2">{{ $f['question'] ?? '' }}</h4>
                            <p class="text-gray-600 text-sm leading-relaxed">{{ $f['answer'] ?? '' }}</p>
                        </div>
                        @endforeach
                    </div>
                    @endif

                    <!-- Gallery Section -->
                    @if(!empty($post->gallery) && is_array($post->gallery))
                    <div class="pt-6">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Visual Resources</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            @foreach($post->gallery as $img)
                            <div class="rounded-xl overflow-hidden border border-gray-200 shadow-sm">
                                <img src="{{ asset('storage/' . $img) }}" alt="Resource graphic" class="w-full h-auto object-cover">
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif

                    <!-- Share Section -->
                    <div class="pt-10 border-t border-gray-200">
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                            <span class="text-sm font-semibold text-gray-900 uppercase tracking-wider">Share this article</span>
                            <div class="flex items-center gap-3">
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-full bg-gray-100 hover:bg-red-50 hover:text-red-600 flex items-center justify-center transition-colors text-gray-600">
                                    <span class="text-xs font-bold">FB</span>
                                </a>
                                <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}&text={{ urlencode($post->title) }}" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-full bg-gray-100 hover:bg-red-50 hover:text-red-600 flex items-center justify-center transition-colors text-gray-600">
                                    <span class="text-xs font-bold">X</span>
                                </a>
                                <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(request()->fullUrl()) }}&title={{ urlencode($post->title) }}" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-full bg-gray-100 hover:bg-red-50 hover:text-red-600 flex items-center justify-center transition-colors text-gray-600">
                                    <span class="text-xs font-bold">IN</span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Right Column: Sidebar -->
                <div class="space-y-8">
                    @include('partials.blog_sidebar')
                </div>

            </div>
        </section>

        <!-- Related Articles Carousel / Grid -->
        @include('partials.blog_related')

    </div>
    @endif

</div>
@endsection

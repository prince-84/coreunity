@extends('layouts.app')

@section('title', ($service->meta_title ?: ($service->title . ' | CoreUnity Solutions Dubai')))
@section('meta_description', ($service->meta_description ?: ($service->excerpt ?: 'Top digital service solutions in Dubai, UAE by CoreUnity Solutions.')))

@section('content')
<div class="bg-[#050505] text-white relative flex flex-col font-sans min-h-screen">

    @if(!empty($service->blocks) && is_array($service->blocks) && count($service->blocks) > 0)
        {{-- 100% Dynamic Drag-and-Drop Blocks Loop --}}
        @include('partials.blocks_renderer', ['blocks' => $service->blocks])
    @else
    <!-- Hero Section Container -->
    <main class="flex-1 flex flex-col relative z-10 pt-32 pb-24 px-4 sm:px-6 lg:px-24 overflow-hidden">
        <!-- Deep red radial glow in center top -->
        <div 
            class="absolute top-0 left-1/2 -translate-x-1/2 w-full max-w-[800px] h-[500px] pointer-events-none z-0"
            style="background: radial-gradient(circle at top center, rgba(160, 20, 25, 0.35) 0%, transparent 65%); filter: blur(50px);">
        </div>

        <div class="max-w-[1300px] mx-auto w-full grid grid-cols-1 lg:grid-cols-2 gap-12 items-center relative z-10 mt-10">
            
            <!-- Left Content -->
            <div class="flex flex-col items-start max-w-[600px]">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-2.5 h-2.5 bg-[#c52833] rounded-full shadow-[0_0_12px_2px_rgba(197,40,51,0.6)]"></div>
                    <h1 class="text-xl md:text-[22px] font-bold tracking-wide text-white uppercase">
                        {{ $service->badge ?: 'Your Digital Partner' }}
                    </h1>
                </div>
                
                <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-[54px] font-bold leading-[1.15] text-white mb-6 tracking-tight break-words">
                    {{ $service->title }}
                </h2>
                
                @if($service->excerpt)
                <p class="text-[#cccccc] text-lg leading-relaxed font-light mb-6">
                    {{ $service->excerpt }}
                </p>
                @endif

                @if(!empty($service->highlights) && is_array($service->highlights))
                <ul class="text-[#cccccc] text-lg font-light space-y-2 list-none pl-0 mb-4">
                    @foreach($service->highlights as $h)
                        <li class="flex items-start gap-2.5">
                            <span class="text-[#c52833] font-bold shrink-0 mt-0.5">{{ $h['icon'] ?? '✓' }}</span>
                            <div>
                                <strong class="text-white font-medium">{{ $h['title'] ?? '' }}</strong>
                                @if(!empty($h['description']))
                                    <span class="text-gray-400 text-base"> - {{ $h['description'] }}</span>
                                @endif
                            </div>
                        </li>
                    @endforeach
                </ul>
                @endif
            </div>

            <!-- Right Content: Form -->
            <div class="flex justify-center lg:justify-end w-full">
                @include('partials.service_inquiry_form', ['pageName' => $service->title])
            </div>

        </div>
    </main>

    <!-- Main Content Narrative Section (If content provided) -->
    @if(!empty($service->content))
    <section class="w-full bg-[#0a0a0a] text-gray-200 py-16 px-6 lg:px-24 border-t border-white/5 relative z-10">
        <div class="max-w-[1100px] mx-auto prose prose-invert prose-lg max-w-none">
            {!! $service->content !!}
        </div>
    </section>
    @endif

    <!-- Accordion / FAQs Section -->
    @if(!empty($service->faqs) && is_array($service->faqs))
    <section class="w-full bg-white text-black relative flex flex-col pt-16 md:pt-24 pb-20 overflow-hidden font-sans">
        <!-- Wavy Background (Left half) -->
        <div 
            class="absolute inset-0 z-0 opacity-100 pointer-events-none" 
            style="background-image: url('{{ asset('white_bg.png') }}'); background-size: 50% 100%; background-position: left center; background-repeat: no-repeat;">
        </div>
        
        <div class="max-w-[1300px] mx-auto w-full px-6 lg:px-12 grid grid-cols-1 lg:grid-cols-2 gap-16 relative z-10 mb-16">
            
            <!-- Left Side: Heading -->
            <div class="flex flex-col pt-4">
                <p class="text-xs font-bold tracking-[0.2em] text-[#c52833] uppercase mb-4">Core Capabilities</p>
                <h2 class="text-3xl sm:text-[32px] md:text-[40px] font-semibold text-[#1f1f1f] leading-[1.2] tracking-tight">
                    {{ $service->category ? "Leading {$service->category}\nin Dubai" : "Exceptional Quality\n& Specialized Execution" }}
                </h2>
            </div>

            <!-- Right Side: Accordions -->
            <div class="flex flex-col gap-3">
                @foreach($service->faqs as $idx => $f)
                <div class="accordion-item bg-[#f9f9f9] rounded-xl overflow-hidden transition-all duration-300">
                    <button class="accordion-btn w-full flex items-center justify-between px-4 sm:px-6 md:px-8 py-4 sm:py-5 text-left cursor-pointer" onclick="toggleDetailAccordion({{ $idx }})">
                        <span class="text-base sm:text-lg md:text-[19px] text-gray-800 font-medium">{{ $f['question'] ?? '' }}</span>
                        <div class="accordion-icon w-7 h-7 rounded-full border border-gray-300 flex items-center justify-center flex-shrink-0 text-gray-500 font-light text-xl bg-white">{{ $idx === 0 ? '−' : '+' }}</div>
                    </button>
                    <div class="accordion-content transition-all duration-300 ease-in-out px-4 sm:px-6 md:px-8 pb-8 {{ $idx === 0 ? 'max-h-[1000px] opacity-100' : 'max-h-0 opacity-0 overflow-hidden' }}">
                        <div class="text-gray-600 text-[15px] leading-relaxed">
                            {!! nl2br(e($f['answer'] ?? '')) !!}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>

        <!-- Red CTA Banner -->
        <div class="max-w-[1300px] mx-auto w-full px-6 lg:px-12 relative z-10">
            <div class="w-full bg-[#cc2936] rounded-2xl md:rounded-3xl p-8 sm:p-10 md:p-12 flex flex-col md:flex-row items-center justify-between gap-6 shadow-2xl relative overflow-hidden">
                <div class="flex flex-col text-white text-center md:text-left z-10">
                    <h3 class="text-2xl sm:text-3xl md:text-4xl font-bold tracking-tight mb-2">
                        Ready to elevate your business with {{ $service->title }}?
                    </h3>
                    <p class="text-white/80 text-sm sm:text-base font-light">
                        Let's build a strategy that delivers measurable, sustainable growth.
                    </p>
                </div>
                <div class="z-10 shrink-0">
                    <a href="{{ url('/contact') }}" class="inline-flex items-center justify-center bg-white text-black hover:bg-gray-100 font-bold px-8 py-3.5 rounded-full text-sm transition-all transform hover:scale-105 shadow-lg">
                        Connect with us
                    </a>
                </div>
            </div>
        </div>
    </section>
    @endif

    <!-- Our Work Showcase -->
    @include('partials.our_work', ['maxRows' => 2])

    <!-- Stats Section -->
    @if(!empty($service->stats) && is_array($service->stats))
    <section class="w-full bg-[#050505] text-white py-16 md:py-24 px-6 lg:px-24 relative overflow-hidden font-sans border-t border-white/5">
        <div class="max-w-[1300px] mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 relative z-10">
            @foreach($service->stats as $s)
            <div class="bg-white/5 border border-white/10 rounded-2xl p-8 flex flex-col items-start hover:border-red-500/40 transition-colors">
                <span class="text-4xl md:text-5xl font-extrabold text-[#cc2936] mb-2 tracking-tight">{{ $s['number'] ?? '' }}</span>
                <span class="text-gray-300 text-sm md:text-base font-medium">{{ $s['label'] ?? '' }}</span>
            </div>
            @endforeach
        </div>
    </section>
    @endif

    <!-- Gallery Section (If provided) -->
    @if(!empty($service->gallery) && is_array($service->gallery))
    <section class="w-full bg-[#0a0a0a] text-white py-16 px-6 lg:px-24 relative z-10 border-t border-white/5">
        <div class="max-w-[1300px] mx-auto">
            <h3 class="text-2xl font-bold text-white mb-8">Deliverables & Visuals</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                @foreach($service->gallery as $img)
                <div class="rounded-xl overflow-hidden border border-white/10 bg-black aspect-video">
                    <img src="{{ asset('storage/' . $img) }}" alt="Gallery Asset" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <!-- Clients Logo Grid -->
    @include('partials.our_clients')

    <!-- Testimonial Section -->
    @include('partials.testimonial_light')
    @endif

</div>

<script>
    function toggleDetailAccordion(index) {
        const items = document.querySelectorAll('.accordion-item');
        items.forEach((item, i) => {
            const content = item.querySelector('.accordion-content');
            const icon = item.querySelector('.accordion-icon');
            if (i === index) {
                const isOpen = !content.classList.contains('max-h-0');
                if (isOpen) {
                    content.classList.add('max-h-0', 'opacity-0', 'overflow-hidden');
                    content.classList.remove('max-h-[1000px]', 'opacity-100');
                    if (icon) icon.textContent = '+';
                } else {
                    content.classList.remove('max-h-0', 'opacity-0', 'overflow-hidden');
                    content.classList.add('max-h-[1000px]', 'opacity-100');
                    if (icon) icon.textContent = '−';
                }
            } else {
                content.classList.add('max-h-0', 'opacity-0', 'overflow-hidden');
                content.classList.remove('max-h-[1000px]', 'opacity-100');
                if (icon) icon.textContent = '+';
            }
        });
    }
</script>
@endsection

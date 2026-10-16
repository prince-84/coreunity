@php
    $testimonial = $testimonialSection ?? \App\Models\TestimonialSection::where('is_active', true)->latest('updated_at')->first() ?? \App\Models\TestimonialSection::first();
@endphp

@if(!isset($testimonial?->is_active) || $testimonial->is_active)
<section class="relative w-full h-auto min-h-[553px] py-20 flex items-center justify-center bg-white text-black px-6 overflow-hidden font-sans border-t border-gray-100">
    <!-- Background Zebra Pattern -->
    <div 
        class="absolute inset-0 z-0 opacity-100 pointer-events-none"
        style="background-image: url('{{ asset('white_bg.png') }}'); background-size: cover; background-position: center center;">
    </div>

    <!-- Content Container -->
    <div class="max-w-[1000px] mx-auto flex flex-col items-center text-center relative z-10">
        <!-- Top Label -->
        <p class="text-[12px] font-medium tracking-[0.1em] uppercase text-gray-500 mb-6 flex items-center justify-center gap-2">
            <span class="relative flex h-2 w-2">
                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                <span class="relative inline-flex rounded-full h-2 w-2 bg-[#c52833] shadow-[0_0_8px_3px_rgba(220,38,38,0.2)]"></span>
            </span>
            {{ $testimonial?->mini_title ?? 'Our Clients' }}
        </p>

        <!-- Main Heading -->
        <h2 class="text-3xl md:text-4xl lg:text-[40px] font-bold text-[#1f1f1f] tracking-tight leading-tight mb-8">
            {!! nl2br(e($testimonial?->main_title ?? 'Amazing Software Services')) !!}
        </h2>

        <!-- Testimonial Text -->
        <p class="text-gray-600 text-lg md:text-[19px] leading-relaxed mb-12 max-w-[900px] mx-auto font-light">
            {!! nl2br(e($testimonial?->review_text ?? "They crafted a digital experience tailored to our exact needs. From initial consultation to final deployment, their professionalism, responsiveness, and technical expertise were unmatched. The system they built has streamlined our operations, improved customer engagement, and scaled effortlessly with our growth We couldn't be happier with.")) !!}
        </p>

        <!-- Profile Block -->
        <div class="flex items-center gap-4">
            <div class="relative w-14 h-14 rounded-full overflow-hidden border border-gray-200 shadow-md">
                <img 
                    src="{{ $testimonial?->author_image_url ?? asset('managingpart_image.png') }}" 
                    alt="{{ $testimonial?->author_name ?? 'Client Spokesperson' }}" 
                    class="w-full h-full object-cover" 
                />
            </div>
            <div class="flex flex-col items-start text-left">
                <span class="text-[#1f1f1f] font-bold text-lg leading-tight mb-0.5">{{ $testimonial?->author_name ?? 'Alex Hales' }}</span>
                <span class="text-gray-500 text-[11px] font-medium tracking-wide">{{ $testimonial?->author_role ?? 'Managing Partner' }}</span>
            </div>
        </div>
    </div>
</section>
@endif

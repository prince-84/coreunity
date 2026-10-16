@php
    $clientReviewsSection = $clientReviewsSection ?? \App\Models\ClientReviewsSection::where('is_active', true)->latest('updated_at')->first() ?? \App\Models\ClientReviewsSection::first();
@endphp

@if(($clientReviewsSection?->is_active ?? true))
    @if(view()->exists('partials.client_reviews'))
        @include('partials.client_reviews', ['clientReviewsSection' => $clientReviewsSection])
    @else
        <section class="w-full bg-white text-black py-16 relative overflow-hidden font-sans border-t border-gray-100">
            <div class="max-w-[1300px] mx-auto relative z-10 flex flex-col px-6 md:px-12 lg:px-24">
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
                <div class="w-full h-px bg-gray-200 mb-10"></div>
            </div>

            @php
                $testimonials = $clientReviewsSection?->resolved_reviews ?? [];
                $duplicatedTestimonials = array_merge($testimonials, $testimonials);
            @endphp

            <div class="relative flex overflow-x-hidden group w-full">
                <style>
                    @keyframes marqueeSlideBlock {
                        0% { transform: translateX(0); }
                        100% { transform: translateX(-50%); }
                    }
                    .animate-marquee-block {
                        animation: marqueeSlideBlock 60s linear infinite;
                    }
                    .animate-marquee-block:hover {
                        animation-play-state: paused;
                    }
                </style>
                <div class="flex animate-marquee-block gap-8 w-max px-6">
                    @foreach($duplicatedTestimonials as $idx => $t)
                        @php
                            $isMiddleStyle = $idx % 2 !== 0;
                            $gradientClass = $isMiddleStyle 
                                ? "bg-gradient-to-b from-[#c52833] via-[#8a1c24] to-black border-[#c52833]/30 mt-6"
                                : "bg-black border-white/10";
                            $textColor = "text-white";
                            $roleColor = $isMiddleStyle ? "text-white/80" : "text-gray-400";
                            $starColor = "text-[#ffc107]";
                        @endphp
                        <div class="w-[320px] md:w-[380px] p-8 rounded-3xl border {{ $gradientClass }} shadow-xl flex flex-col justify-between shrink-0 hover:scale-[1.02] transition-transform duration-300">
                            <div>
                                <div class="flex items-center gap-1 mb-6">
                                    @for($i = 0; $i < 5; $i++)
                                        <svg class="w-4 h-4 {{ $starColor }} fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    @endfor
                                </div>
                                <p class="{{ $textColor }} text-base md:text-[17px] leading-relaxed mb-8 font-light italic">
                                    "{{ $t['review'] ?? '' }}"
                                </p>
                            </div>
                            <div class="pt-4 border-t border-white/10">
                                <h4 class="font-bold text-white text-base leading-tight">{{ $t['name'] ?? '' }}</h4>
                                <p class="{{ $roleColor }} text-xs font-medium mt-1">{{ $t['role'] ?? '' }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
@endif

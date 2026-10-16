@php
    $useGlobal = (bool) ($block['use_global'] ?? true);
@endphp

@if($useGlobal)
    @php
        $testimonialSection = $testimonialSection ?? \App\Models\TestimonialSection::where('is_active', true)->latest('updated_at')->first() ?? \App\Models\TestimonialSection::first();
    @endphp
    @include('partials.testimonial_light', ['testimonialSection' => $testimonialSection])
@else
    @php
        $badge = $block['badge'] ?? 'Testimonials';
        $title = $block['title'] ?? 'What Our Partners Say About Us';
        $items = $block['items'] ?? [];
    @endphp

    <section class="relative w-full bg-white text-black py-20 px-4 md:px-8 overflow-hidden z-20">
        <div class="max-w-7xl mx-auto flex flex-col items-center">
            @if(!empty($badge))
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-red-100 text-red-600 mb-4">
                    <span class="w-2 h-2 rounded-full bg-red-600"></span>
                    <span class="text-xs font-semibold tracking-wider uppercase">{{ $badge }}</span>
                </div>
            @endif

            <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-gray-900 text-center leading-tight mb-14 max-w-4xl">
                {{ $title }}
            </h2>

            @if(!empty($items) && is_array($items))
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 w-full max-w-6xl">
                    @foreach($items as $item)
                        @php
                            $rating = (int) ($item['rating'] ?? 5);
                            $avatar = $item['avatar'] ?? null;
                            $avatarUrl = $avatar ? (str_starts_with($avatar, 'http') ? $avatar : (file_exists(public_path($avatar)) ? asset($avatar) : asset('storage/' . $avatar))) : null;
                        @endphp
                        <div class="bg-gray-50 border border-gray-200 rounded-3xl p-8 flex flex-col justify-between hover:shadow-xl hover:border-red-500/30 transition-all duration-300">
                            <div>
                                <!-- Star rating -->
                                <div class="flex items-center gap-1 text-amber-500 mb-6">
                                    @for($i = 0; $i < $rating; $i++)
                                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    @endfor
                                </div>

                                <blockquote class="text-base text-gray-700 italic leading-relaxed mb-8">
                                    "{{ $item['quote'] ?? '' }}"
                                </blockquote>
                            </div>

                            <div class="flex items-center gap-4 pt-4 border-t border-gray-200">
                                @if($avatarUrl)
                                    <img src="{{ $avatarUrl }}" alt="{{ $item['name'] ?? 'Client' }}" class="w-12 h-12 rounded-full object-cover border border-red-500/20" />
                                @else
                                    <div class="w-12 h-12 rounded-full bg-red-600 text-white font-bold flex items-center justify-center">
                                        {{ substr($item['name'] ?? 'C', 0, 1) }}
                                    </div>
                                @endif
                                <div>
                                    <h4 class="font-bold text-gray-900 text-sm">{{ $item['name'] ?? '' }}</h4>
                                    <p class="text-xs text-gray-500">{{ $item['company'] ?? '' }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
@endif

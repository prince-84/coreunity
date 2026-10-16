@php
    $blogSection = $blogSection ?? \App\Models\BlogSection::where('is_active', true)->latest('updated_at')->first() ?? \App\Models\BlogSection::latest('updated_at')->first() ?? \App\Models\BlogSection::first();
    $cards = $blogSection?->resolved_cards ?? [];
    if (isset($maxPosts) && $maxPosts) {
        $cards = array_slice($cards, 0, $maxPosts);
    }
@endphp

@if(!isset($blogSection?->is_active) || $blogSection->is_active)
<section class="w-full bg-[#f9f9f9] text-black py-16 md:py-24 px-4 sm:px-8 overflow-hidden font-sans">
    <div class="max-w-[1300px] mx-auto flex flex-col">
        
        <!-- Header Area (Left Aligned) -->
        <div class="flex flex-col items-start mb-12 md:mb-16 max-w-2xl">
            <p class="text-[13px] font-medium tracking-wide text-gray-600 mb-4 flex items-center gap-3">
                <span class="relative flex h-2.5 w-2.5">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-[#cc2936] shadow-[0_0_8px_3px_rgba(220,38,38,0.4)]"></span>
                </span>
                {{ $blogSection?->mini_title ?? 'Our Blog' }}
            </p>
            <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-[54px] font-extrabold text-[#111] tracking-tight leading-[1.1] break-words">
                {!! nl2br(e($blogSection?->main_title ?? "What's going on in the\nindustry?")) !!}
            </h2>
        </div>

        <!-- Blog Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
            @foreach($cards as $post)
                <a href="{{ $post['url'] ?? $post['href'] ?? '#' }}" 
                   class="bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden flex flex-col hover:shadow-md transition-shadow duration-300 group no-underline text-inherit">
                    
                    <!-- Image Container -->
                    <div class="relative w-full aspect-[4/3] sm:aspect-[16/10] overflow-hidden bg-black">
                        <img 
                            src="{{ $post['image_url'] ?? asset($post['image'] ?? 'blog_image.png') }}" 
                            alt="{{ $post['title'] ?? 'Blog Cover' }}" 
                            class="w-full h-full object-contain sm:object-cover transition-transform duration-500 group-hover:scale-105" 
                        />
                        
                        <!-- Hover Overlay -->
                        <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center z-10">
                            <div class="w-24 h-24 sm:w-28 sm:h-28 rounded-full bg-[#8c1c24]/90 flex items-center justify-center text-white text-center text-[13px] sm:text-[15px] font-medium leading-tight transform scale-75 group-hover:scale-100 transition-transform duration-300 shadow-xl">
                                {!! nl2br(e($blogSection?->overlay_text ?? "View Full\nBlog")) !!}
                            </div>
                        </div>
                    </div>

                    <!-- Content Area -->
                    <div class="p-6 md:p-8 flex flex-col flex-1">
                        <h3 class="font-bold text-gray-900 text-lg md:text-xl leading-tight mb-4 group-hover:text-red-600 transition-colors">
                            {{ $post['title'] }}
                        </h3>
                        
                        <!-- Meta Info -->
                        <div class="flex items-center gap-6 mb-4 text-xs font-medium text-gray-500">
                            <div class="flex items-center gap-2">
                                <div class="relative w-[14px] h-[14px] opacity-70 shrink-0">
                                    <img src="{{ $blogSection?->date_icon_url ?? asset('calendar_image.png') }}" alt="Date" class="w-full h-full object-contain" />
                                </div>
                                <span>{{ $post['date'] ?? 'January 10, 2022' }}</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <div class="relative w-[14px] h-[14px] opacity-70 shrink-0">
                                    <img src="{{ $blogSection?->category_icon_url ?? asset('file_image.png') }}" alt="Category" class="w-full h-full object-contain" />
                                </div>
                                <span>{{ $post['category'] ?? 'Insights' }}</span>
                            </div>
                        </div>

                        <!-- Excerpt -->
                        <p class="text-gray-400 text-sm leading-relaxed">
                            {{ $post['excerpt'] ?? '' }}
                        </p>
                    </div>

                </a>
            @endforeach
        </div>

    </div>
</section>
@endif

@php
    $badge = $block['badge'] ?? 'Frequently Asked Questions';
    $title = $block['title'] ?? 'Got Questions? We Have Answers.';
    $description = $block['description'] ?? null;
    $faqs = $block['faqs'] ?? [];
@endphp

<section class="relative w-full bg-black py-20 px-4 md:px-8 text-white overflow-hidden z-20 border-t border-gray-900" x-data="{ openItem: 0 }">
    <div class="max-w-5xl mx-auto flex flex-col items-center">
        @if(!empty($badge))
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/5 border border-white/10 mb-4 backdrop-blur-md">
                <span class="w-2 h-2 rounded-full bg-[#cc2936] animate-pulse"></span>
                <span class="text-xs font-semibold tracking-wider uppercase text-gray-300">{{ $badge }}</span>
            </div>
        @endif

        <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-white text-center leading-tight mb-4">
            {{ $title }}
        </h2>

        @if(!empty($description))
            <p class="text-base text-gray-400 text-center max-w-2xl mb-12">
                {{ $description }}
            </p>
        @else
            <div class="mb-10"></div>
        @endif

        @if(!empty($faqs) && is_array($faqs))
            <div class="w-full space-y-4">
                @foreach($faqs as $index => $faq)
                    <div class="bg-[#0e0e0e] border border-white/10 rounded-2xl overflow-hidden transition-colors duration-200 hover:border-red-600/40"
                         x-data="{ open: {{ $index === 0 ? 'true' : 'false' }} }">
                        <button type="button" 
                                @click="open = !open" 
                                class="w-full py-5 px-6 sm:px-8 flex items-center justify-between text-left gap-4 cursor-pointer select-none">
                            <span class="text-base sm:text-lg font-bold text-white transition-colors" :class="{ 'text-red-500': open }">
                                {{ $faq['question'] ?? 'FAQ Question' }}
                            </span>
                            <div class="w-8 h-8 rounded-full bg-white/5 flex items-center justify-center flex-shrink-0 transition-transform duration-300"
                                 :class="{ 'rotate-180 bg-red-600 text-white': open }">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                            </div>
                        </button>
                        <div x-show="open" 
                             x-collapse 
                             x-cloak 
                             class="px-6 sm:px-8 pb-6 text-gray-300 text-sm sm:text-base leading-relaxed border-t border-white/5 pt-4">
                            {!! nl2br(e($faq['answer'] ?? '')) !!}
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</section>

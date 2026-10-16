@php
    $badge = $block['badge'] ?? null;
    $title = $block['title'] ?? null;
    $theme = $block['theme'] ?? 'dark';
    $containerWidth = $block['container_width'] ?? 'standard';
    $content = $block['content'] ?? '';
    $customHtml = $block['custom_html'] ?? null;

    $widthClass = match($containerWidth) {
        'narrow' => 'max-w-4xl',
        'wide' => 'max-w-7xl',
        default => 'max-w-6xl',
    };

    $bgClass = match($theme) {
        'light' => 'bg-white text-gray-900',
        'glow' => 'bg-black text-white relative',
        default => 'bg-[#0a0a0a] text-white',
    };

    $proseClass = match($theme) {
        'light' => 'prose-gray text-gray-800',
        default => 'prose-invert text-gray-300',
    };
@endphp

<section class="relative w-full {{ $bgClass }} py-20 px-4 sm:px-8 md:px-12 overflow-hidden z-20 border-t border-white/5">
    @if($theme === 'glow')
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full max-w-4xl h-[250px] bg-red-600/20 blur-[120px] pointer-events-none rounded-[100%]"></div>
    @endif

    <div class="{{ $widthClass }} mx-auto relative z-10">
        @if(!empty($badge))
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full {{ $theme === 'light' ? 'bg-red-100 text-red-600' : 'bg-white/5 border border-white/10 text-gray-300' }} mb-4 backdrop-blur-md">
                <span class="w-2 h-2 rounded-full bg-[#cc2936]"></span>
                <span class="text-xs font-semibold tracking-wider uppercase">{{ $badge }}</span>
            </div>
        @endif

        @if(!empty($title))
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold {{ $theme === 'light' ? 'text-gray-900' : 'text-white' }} leading-tight mb-8">
                {{ $title }}
            </h2>
        @endif

        @if(!empty($content))
            <div class="prose prose-lg {{ $proseClass }} max-w-none font-sans leading-relaxed">
                {!! $content !!}
            </div>
        @endif

        @if(!empty($customHtml))
            <div class="mt-8 overflow-hidden rounded-xl">
                {!! $customHtml !!}
            </div>
        @endif
    </div>
</section>

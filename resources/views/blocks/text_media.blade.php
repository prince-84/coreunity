@php
    $badge = $block['badge'] ?? null;
    $layout = $block['layout'] ?? 'media_right';
    $title = $block['title'] ?? '';
    $content = $block['content'] ?? '';
    $mediaType = $block['media_type'] ?? 'image';
    $mediaImage = $block['media_image'] ?? null;
    $mediaVideoUrl = $block['media_video_url'] ?? null;

    $imageUrl = null;
    if ($mediaImage) {
        if (str_starts_with($mediaImage, 'http://') || str_starts_with($mediaImage, 'https://') || str_starts_with($mediaImage, '//')) {
            $imageUrl = $mediaImage;
        } elseif (str_starts_with($mediaImage, 'storage/')) {
            $imageUrl = asset($mediaImage);
        } elseif (file_exists(public_path($mediaImage))) {
            $imageUrl = asset($mediaImage);
        } else {
            $imageUrl = asset('storage/' . ltrim($mediaImage, '/'));
        }
    }
@endphp

<section class="relative bg-black text-white py-16 md:py-24 border-b border-white/5 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @if($layout === 'full_width')
            <div class="max-w-4xl mx-auto space-y-8">
                @if($badge)
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold tracking-wider uppercase bg-[#dc2626]/10 text-[#ef4444] border border-[#dc2626]/20">
                        {{ $badge }}
                    </div>
                @endif

                <h2 class="text-2xl sm:text-4xl font-bold tracking-tight text-white leading-tight">
                    {{ $title }}
                </h2>

                @if($imageUrl && $mediaType === 'image')
                    <div class="rounded-2xl overflow-hidden border border-white/10 shadow-xl my-6">
                        <img src="{{ $imageUrl }}" alt="{{ $title }}" class="w-full h-auto object-cover max-h-[500px]">
                    </div>
                @elseif($mediaVideoUrl && $mediaType === 'video')
                    <div class="rounded-2xl overflow-hidden border border-white/10 shadow-xl my-6 aspect-video bg-neutral-900">
                        <iframe class="w-full h-full" src="{{ $mediaVideoUrl }}" frameborder="0" allowfullscreen></iframe>
                    </div>
                @endif

                <div class="prose prose-invert max-w-none text-gray-300 leading-relaxed space-y-4">
                    {!! $content !!}
                </div>
            </div>
        @else
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-6 space-y-6 {{ $layout === 'media_left' ? 'lg:order-2' : 'lg:order-1' }}">
                    @if($badge)
                        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs font-semibold tracking-wider uppercase bg-[#dc2626]/10 text-[#ef4444] border border-[#dc2626]/20">
                            {{ $badge }}
                        </div>
                    @endif

                    <h2 class="text-2xl sm:text-4xl font-bold tracking-tight text-white leading-tight">
                        {{ $title }}
                    </h2>

                    <div class="prose prose-invert max-w-none text-gray-300 leading-relaxed space-y-4 font-light text-base sm:text-lg">
                        {!! $content !!}
                    </div>
                </div>

                <div class="lg:col-span-6 {{ $layout === 'media_left' ? 'lg:order-1' : 'lg:order-2' }}">
                    @if($imageUrl && $mediaType === 'image')
                        <div class="relative rounded-2xl overflow-hidden border border-white/10 shadow-2xl bg-neutral-900/40 backdrop-blur-sm group">
                            <img src="{{ $imageUrl }}" alt="{{ $title }}" class="w-full h-auto object-cover transform group-hover:scale-105 transition-transform duration-700">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent pointer-events-none"></div>
                        </div>
                    @elseif($mediaVideoUrl && $mediaType === 'video')
                        <div class="relative rounded-2xl overflow-hidden border border-white/10 shadow-2xl aspect-video bg-neutral-900">
                            <iframe class="w-full h-full" src="{{ $mediaVideoUrl }}" frameborder="0" allowfullscreen></iframe>
                        </div>
                    @endif
                </div>
            </div>
        @endif
    </div>
</section>

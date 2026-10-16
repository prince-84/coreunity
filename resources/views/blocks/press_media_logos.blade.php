@php
    $useGlobal = (bool) ($block['use_global'] ?? true);
@endphp

@if($useGlobal)
    @php
        $heroModel = $hero ?? \App\Models\HeroSection::latest('updated_at')->first() ?? \App\Models\HeroSection::first();
        $rawLogos = $heroModel?->media_logos_list ?? [];
        if (empty($rawLogos)) {
            $rawLogos = [
                ['image_url' => asset('al-jazeera.png'), 'title' => 'Al Jazeera', 'url' => null],
                ['image_url' => asset('zaaya.png'), 'title' => 'Zaaya', 'url' => null],
                ['image_url' => asset('gulf_logo.png'), 'title' => 'Gulf News', 'url' => null],
                ['image_url' => asset('khaleej_logo.png'), 'title' => 'Khaleej Times', 'url' => null],
                ['image_url' => asset('arabian_logo.png'), 'title' => 'Arabian Business', 'url' => null],
            ];
        }
        $displayTickerLogos = array_merge($rawLogos, $rawLogos, $rawLogos);
    @endphp

    <div class="w-full max-w-[1525.53px] mx-auto h-[60px] border-y border-gray-800 overflow-hidden py-3 z-20 relative bg-black flex items-center">
        <div class="flex whitespace-nowrap animate-scroll-x items-center w-full">
            @foreach($displayTickerLogos as $logo)
                <div class="flex items-center justify-center min-w-[200px] mx-8 grayscale opacity-70 hover:grayscale-0 hover:opacity-100 transition-all cursor-pointer">
                    @if(!empty($logo['url']))
                        <a href="{{ $logo['url'] }}" target="_blank" rel="noopener" title="{{ $logo['title'] ?? 'Media Logo' }}" class="inline-flex items-center justify-center">
                            <img src="{{ $logo['image_url'] }}" alt="{{ $logo['title'] ?? 'Media Logo' }}" class="object-contain max-h-[40px] max-w-[120px]" />
                        </a>
                    @else
                        <img src="{{ $logo['image_url'] }}" alt="{{ $logo['title'] ?? 'Media Logo' }}" title="{{ $logo['title'] ?? 'Media Logo' }}" class="object-contain max-h-[40px] max-w-[120px]" />
                    @endif
                </div>
            @endforeach
        </div>
    </div>
@else
    @php
        $stripTitle = $block['strip_title'] ?? null;
        $logos = $block['logos'] ?? [];
        $tickerLogos = array_merge($logos, $logos, $logos);
    @endphp

    <div class="w-full bg-black py-4 border-y border-gray-800 relative z-20">
        @if(!empty($stripTitle))
            <p class="text-xs uppercase tracking-widest text-center text-gray-500 mb-2 font-semibold">{{ $stripTitle }}</p>
        @endif
        @if(!empty($logos) && is_array($logos))
            <div class="w-full max-w-[1525.53px] mx-auto overflow-hidden flex items-center">
                <div class="flex whitespace-nowrap animate-scroll-x items-center w-full">
                    @foreach($tickerLogos as $item)
                        @php
                            $img = $item['image'] ?? null;
                            $imgUrl = $img ? (str_starts_with($img, 'http') ? $img : (file_exists(public_path($img)) ? asset($img) : asset('storage/' . $img))) : null;
                        @endphp
                        @if($imgUrl)
                            <div class="flex items-center justify-center min-w-[200px] mx-8 grayscale opacity-70 hover:grayscale-0 hover:opacity-100 transition-all cursor-pointer">
                                @if(!empty($item['url']))
                                    <a href="{{ $item['url'] }}" target="_blank" rel="noopener" title="{{ $item['title'] ?? 'Media Logo' }}">
                                        <img src="{{ $imgUrl }}" alt="{{ $item['title'] ?? 'Media Logo' }}" class="object-contain max-h-[40px] max-w-[120px]" />
                                    </a>
                                @else
                                    <img src="{{ $imgUrl }}" alt="{{ $item['title'] ?? 'Media Logo' }}" class="object-contain max-h-[40px] max-w-[120px]" />
                                @endif
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        @endif
    </div>
@endif

@php
    $useGlobal = (bool) ($block['use_global'] ?? true);
@endphp

@if($useGlobal)
    @php
        $ourWork = $ourWork ?? \App\Models\OurWorkSection::where('is_active', true)->latest('updated_at')->first() ?? \App\Models\OurWorkSection::first();
    @endphp
    @include('partials.our_work', ['ourWork' => $ourWork])
@else
    @php
        $miniTitle = $block['mini_title'] ?? 'Our Work';
        $mainTitle = $block['main_title'] ?? 'Transforming Ideas into Digital Realities';
        $cards = $block['cards'] ?? [];
    @endphp

    <section class="relative w-full bg-black py-20 px-4 md:px-8 text-white overflow-hidden z-20 border-t border-gray-900">
        <div class="max-w-7xl mx-auto flex flex-col items-center">
            @if(!empty($miniTitle))
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/5 border border-white/10 mb-4 backdrop-blur-md">
                    <span class="w-2 h-2 rounded-full bg-[#cc2936] animate-pulse"></span>
                    <span class="text-xs font-semibold tracking-wider uppercase text-gray-300">{{ $miniTitle }}</span>
                </div>
            @endif

            <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-white text-center leading-tight mb-14 max-w-4xl">
                {{ $mainTitle }}
            </h2>

            @if(!empty($cards) && is_array($cards))
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 w-full max-w-6xl">
                    @foreach($cards as $card)
                        @php
                            $img = $card['image'] ?? null;
                            $imgUrl = $img ? (str_starts_with($img, 'http') ? $img : (file_exists(public_path($img)) ? asset($img) : asset('storage/' . $img))) : null;
                        @endphp
                        <div class="group relative bg-[#0c0c0c] border border-white/10 rounded-3xl p-8 overflow-hidden hover:border-red-600/50 transition-all duration-500 shadow-2xl flex flex-col justify-between">
                            <div class="relative z-10">
                                @if(!empty($card['stat_number']))
                                    <span class="text-4xl md:text-5xl font-black text-red-500 block mb-2">{{ $card['stat_number'] }}</span>
                                @endif
                                @if(!empty($card['stat_desc']))
                                    <span class="text-xs uppercase tracking-wider text-gray-400 block mb-4">{{ $card['stat_desc'] }}</span>
                                @endif
                                <h3 class="text-2xl font-bold text-white mb-6 group-hover:text-red-400 transition-colors">{{ $card['title'] ?? '' }}</h3>
                            </div>

                            @if($imgUrl)
                                <div class="relative w-full h-56 rounded-2xl overflow-hidden mb-6 z-10">
                                    <img src="{{ $imgUrl }}" alt="{{ $card['title'] ?? 'Work' }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                                </div>
                            @endif

                            <div class="relative z-10 pt-4">
                                <a href="{{ $card['button_link'] ?? '/case-studies' }}" 
                                   class="inline-flex items-center gap-2 text-sm font-semibold text-white bg-red-600 hover:bg-red-700 px-6 py-2.5 rounded-full transition-colors">
                                    <span>{{ $card['button_text'] ?? 'View Case Study' }}</span>
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
@endif

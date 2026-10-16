@php
    $useGlobal = (bool) ($block['use_global'] ?? true);
@endphp

@if($useGlobal)
    @php
        $clientSection = $ourClients ?? \App\Models\OurClientsSection::where('is_active', true)->latest('updated_at')->first() ?? \App\Models\OurClientsSection::first();
    @endphp
    @include('partials.our_clients', ['clientSection' => $clientSection])
@else
    @php
        $miniTitle = $block['mini_title'] ?? 'Our Clients';
        $mainTitle = $block['main_title'] ?? "5-Star Rated, Works\nwith CoreUnity Solutions";
        $clientLogos = $block['client_logos'] ?? [];
    @endphp

    <section class="relative w-full bg-black py-20 px-4 md:px-8 overflow-hidden z-20 border-t border-gray-900">
        <div class="max-w-7xl mx-auto flex flex-col items-center text-center">
            @if(!empty($miniTitle))
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/5 border border-white/10 mb-4 backdrop-blur-md">
                    <span class="w-2 h-2 rounded-full bg-[#cc2936] animate-pulse"></span>
                    <span class="text-xs font-semibold tracking-wider uppercase text-gray-300">{{ $miniTitle }}</span>
                </div>
            @endif

            <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-white leading-tight mb-12">
                {!! nl2br(e($mainTitle)) !!}
            </h2>

            @if(!empty($clientLogos) && is_array($clientLogos))
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-6 w-full max-w-6xl items-center">
                    @foreach($clientLogos as $clogo)
                        @php
                            $img = $clogo['image'] ?? null;
                            $imgUrl = $img ? (str_starts_with($img, 'http') ? $img : (file_exists(public_path($img)) ? asset($img) : asset('storage/' . $img))) : null;
                        @endphp
                        @if($imgUrl)
                            <div class="bg-white/[0.03] border border-white/5 rounded-2xl p-6 flex items-center justify-center h-28 hover:border-red-600/40 hover:bg-white/[0.06] transition-all duration-300 group">
                                @if(!empty($clogo['url']))
                                    <a href="{{ $clogo['url'] }}" target="_blank" rel="noopener" class="w-full h-full flex items-center justify-center">
                                        <img src="{{ $imgUrl }}" alt="{{ $clogo['name'] ?? 'Client Logo' }}" title="{{ $clogo['name'] ?? 'Client' }}"
                                             class="max-h-12 max-w-full object-contain grayscale opacity-60 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-300 group-hover:scale-105" />
                                    </a>
                                @else
                                    <img src="{{ $imgUrl }}" alt="{{ $clogo['name'] ?? 'Client Logo' }}" title="{{ $clogo['name'] ?? 'Client' }}"
                                         class="max-h-12 max-w-full object-contain grayscale opacity-60 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-300 group-hover:scale-105" />
                                @endif
                            </div>
                        @endif
                    @endforeach
                </div>
            @endif
        </div>
    </section>
@endif

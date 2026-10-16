@php
    $useGlobal = (bool) ($block['use_global'] ?? true);
@endphp

@if($useGlobal)
    @php
        $services = \App\Models\Service::where('is_published', true)->orderBy('sort_order', 'asc')->get();
        $servicesSection = \App\Models\ServicesSection::where('is_active', true)->latest()->first() ?? \App\Models\ServicesSection::first();
    @endphp

    <section class="relative w-full bg-black py-20 px-4 sm:px-8 text-white overflow-hidden z-20 border-t border-gray-900">
        <div class="max-w-[1200px] mx-auto flex flex-col items-center z-10 relative">
            <div class="flex flex-col items-center text-center mb-16">
                <p class="text-xs font-bold tracking-[0.2em] uppercase text-gray-400 mb-4 flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-red-600 animate-pulse"></span>
                    {{ $servicesSection?->mini_title ?? 'Our Services' }}
                </p>
                <h2 class="text-3xl md:text-5xl font-extrabold text-white tracking-tight max-w-3xl leading-tight">
                    {{ $servicesSection?->main_title ?? 'How Our Agency Helps You Scale' }}
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 w-full">
                @foreach($services as $srv)
                    <div class="group relative bg-[#0e0e0e] border border-white/10 rounded-3xl p-8 flex flex-col justify-between hover:border-red-600/50 hover:bg-[#121212] transition-all duration-300">
                        <div>
                            @if(!empty($srv->badge))
                                <span class="text-xs uppercase font-semibold text-red-500 tracking-wider block mb-3">{{ $srv->badge }}</span>
                            @endif
                            <h3 class="text-2xl font-bold text-white mb-4 group-hover:text-red-400 transition-colors">
                                {{ $srv->title }}
                            </h3>
                            <p class="text-sm text-gray-400 leading-relaxed mb-6 font-light">
                                {{ $srv->excerpt ?? Str::limit(strip_tags($srv->content), 120) }}
                            </p>
                        </div>

                        <div>
                            <a href="{{ url('/services/' . $srv->slug) }}" 
                               class="inline-flex items-center gap-2 text-sm font-semibold text-white group-hover:text-red-400 transition-colors">
                                <span>Explore Service</span>
                                <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@else
    @php
        $badge = $block['badge'] ?? 'Our Expertise';
        $title = $block['title'] ?? 'Services That Drive Measurable Growth';
        $desc = $block['description'] ?? null;
        $customServices = $block['custom_services'] ?? [];
    @endphp

    <section class="relative w-full bg-black py-20 px-4 sm:px-8 text-white overflow-hidden z-20 border-t border-gray-900">
        <div class="max-w-[1200px] mx-auto flex flex-col items-center text-center">
            @if(!empty($badge))
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/5 border border-white/10 mb-4 backdrop-blur-md">
                    <span class="w-2 h-2 rounded-full bg-[#cc2936] animate-pulse"></span>
                    <span class="text-xs font-semibold tracking-wider uppercase text-gray-300">{{ $badge }}</span>
                </div>
            @endif

            <h2 class="text-3xl md:text-5xl font-extrabold text-white tracking-tight max-w-3xl leading-tight mb-4">
                {{ $title }}
            </h2>

            @if(!empty($desc))
                <p class="text-base text-gray-400 max-w-2xl mb-14 font-light">{{ $desc }}</p>
            @else
                <div class="mb-10"></div>
            @endif

            @if(!empty($customServices) && is_array($customServices))
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 w-full text-left">
                    @foreach($customServices as $csrv)
                        @php
                            $icon = $csrv['icon'] ?? null;
                            $iconUrl = $icon ? (str_starts_with($icon, 'http') ? $icon : (file_exists(public_path($icon)) ? asset($icon) : asset('storage/' . $icon))) : null;
                        @endphp
                        <div class="group bg-[#0e0e0e] border border-white/10 rounded-3xl p-8 flex flex-col justify-between hover:border-red-600/50 hover:bg-[#121212] transition-all duration-300">
                            <div>
                                @if($iconUrl)
                                    <div class="w-12 h-12 rounded-2xl bg-white/5 p-2.5 mb-6 border border-white/10 flex items-center justify-center">
                                        <img src="{{ $iconUrl }}" alt="{{ $csrv['title'] ?? 'Icon' }}" class="w-full h-full object-contain" />
                                    </div>
                                @endif
                                <h3 class="text-2xl font-bold text-white mb-4 group-hover:text-red-400 transition-colors">
                                    {{ $csrv['title'] ?? '' }}
                                </h3>
                                <p class="text-sm text-gray-400 leading-relaxed mb-6 font-light">
                                    {{ $csrv['description'] ?? '' }}
                                </p>
                            </div>

                            @if(!empty($csrv['link_url']))
                                <div>
                                    <a href="{{ str_starts_with($csrv['link_url'], 'http') ? $csrv['link_url'] : url($csrv['link_url']) }}" 
                                       class="inline-flex items-center gap-2 text-sm font-semibold text-white group-hover:text-red-400 transition-colors">
                                        <span>Learn More</span>
                                        <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                    </a>
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
@endif

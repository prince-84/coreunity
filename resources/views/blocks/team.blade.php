@php
    $useGlobal = (bool) ($block['use_global'] ?? true);
@endphp

@if($useGlobal)
    @php
        $teamSection = $teamSection ?? \App\Models\TeamSection::where('is_active', true)->latest('updated_at')->first() ?? \App\Models\TeamSection::first();
    @endphp
    @include('partials.team', ['teamSection' => $teamSection])
@else
    @php
        $badge = $block['badge'] ?? 'Our Team';
        $title = $block['title'] ?? 'Meet the Minds Behind the Magic';
        $members = $block['members'] ?? [];
    @endphp

    <section class="relative w-full bg-black py-20 px-4 md:px-8 text-white overflow-hidden z-20 border-t border-gray-900">
        <div class="max-w-7xl mx-auto flex flex-col items-center">
            @if(!empty($badge))
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/5 border border-white/10 mb-4 backdrop-blur-md">
                    <span class="w-2 h-2 rounded-full bg-[#cc2936] animate-pulse"></span>
                    <span class="text-xs font-semibold tracking-wider uppercase text-gray-300">{{ $badge }}</span>
                </div>
            @endif

            <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-white text-center leading-tight mb-14 max-w-4xl">
                {{ $title }}
            </h2>

            @if(!empty($members) && is_array($members))
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 w-full max-w-6xl">
                    @foreach($members as $member)
                        @php
                            $img = $member['image'] ?? null;
                            $imgUrl = $img ? (str_starts_with($img, 'http') ? $img : (file_exists(public_path($img)) ? asset($img) : asset('storage/' . $img))) : null;
                        @endphp
                        <div class="bg-[#0e0e0e] border border-white/10 rounded-2xl p-6 flex flex-col items-center text-center hover:border-red-600/40 transition-all duration-300 group">
                            <div class="w-32 h-32 rounded-full overflow-hidden mb-6 border-2 border-red-600/30 group-hover:border-red-600 transition-colors">
                                @if($imgUrl)
                                    <img src="{{ $imgUrl }}" alt="{{ $member['name'] ?? 'Member' }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform" />
                                @else
                                    <div class="w-full h-full bg-gray-800 flex items-center justify-center text-gray-500 font-bold text-2xl">
                                        {{ substr($member['name'] ?? 'U', 0, 1) }}
                                    </div>
                                @endif
                            </div>
                            <h3 class="text-lg font-bold text-white mb-1 group-hover:text-red-400 transition-colors">{{ $member['name'] ?? '' }}</h3>
                            <p class="text-xs text-gray-400 uppercase tracking-wider mb-4">{{ $member['role'] ?? '' }}</p>
                            @if(!empty($member['linkedin']))
                                <a href="{{ $member['linkedin'] }}" target="_blank" rel="noopener" class="text-xs text-red-500 hover:text-red-400 font-medium inline-flex items-center gap-1">
                                    <span>Connect on LinkedIn</span>
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                                </a>
                            @endif
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
@endif

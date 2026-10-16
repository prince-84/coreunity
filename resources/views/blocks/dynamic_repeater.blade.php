@php
    $type = $block['repeater_type'] ?? 'accordion_faqs';
    $badge = $block['badge'] ?? null;
    $title = $block['title'] ?? '';
    $description = $block['description'] ?? '';
    $items = $block['items'] ?? [];
    $repeaterId = 'repeater_' . ($blockIndex ?? uniqid());
@endphp

<section class="relative bg-black text-white py-20 border-b border-white/5 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
            @if($badge)
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs font-semibold tracking-wider uppercase bg-[#dc2626]/10 text-[#ef4444] border border-[#dc2626]/20">
                    {{ $badge }}
                </div>
            @endif

            <h2 class="text-3xl sm:text-4xl font-black tracking-tight text-white leading-tight">
                {{ $title }}
            </h2>

            @if($description)
                <p class="text-base sm:text-lg text-gray-400 font-light leading-relaxed">
                    {{ $description }}
                </p>
            @endif
        </div>

        {{-- 1. ACCORDION / FAQS PRESET --}}
        @if($type === 'accordion_faqs')
            <div class="max-w-4xl mx-auto space-y-4" x-data="{ active: null }">
                @foreach($items as $i => $item)
                    <div class="rounded-2xl border border-white/10 bg-[#0f0f12] overflow-hidden transition-all duration-300">
                        <button
                            type="button"
                            @click="active = (active === {{ $i }} ? null : {{ $i }})"
                            class="w-full flex items-center justify-between p-6 text-left text-white hover:text-[#ef4444] transition-colors focus:outline-none"
                        >
                            <span class="text-lg font-bold pr-4">{{ $item['title'] ?? '' }}</span>
                            <span class="p-2 rounded-full bg-white/5 border border-white/10 shrink-0 transform transition-transform duration-300" :class="active === {{ $i }} ? 'rotate-180 bg-[#dc2626]/20 text-[#ef4444]' : 'text-gray-400'">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </span>
                        </button>
                        <div
                            x-show="active === {{ $i }}"
                            x-collapse
                            class="px-6 pb-6 text-gray-400 font-light text-base leading-relaxed border-t border-white/5 pt-4"
                            style="display: none;"
                        >
                            {!! nl2br(e($item['description'] ?? '')) !!}
                        </div>
                    </div>
                @endforeach
            </div>

        {{-- 2. KEY STATS PRESET --}}
        @elseif($type === 'key_stats')
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                @foreach($items as $item)
                    <div class="rounded-2xl bg-[#0f0f12] border border-white/10 p-8 text-center space-y-2 hover:border-[#dc2626]/40 transition-colors">
                        <div class="text-4xl sm:text-5xl font-black bg-gradient-to-r from-white via-gray-100 to-[#ef4444] bg-clip-text text-transparent">
                            {{ $item['title'] ?? '' }}
                        </div>
                        <div class="text-sm font-semibold text-white tracking-wide uppercase">
                            {{ $item['subtitle'] ?? '' }}
                        </div>
                        @if(!empty($item['description']))
                            <div class="text-xs text-gray-400 font-light">
                                {{ $item['description'] }}
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>

        {{-- 3. TESTIMONIALS PRESET --}}
        @elseif($type === 'testimonials')
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($items as $item)
                    @php
                        $avatar = $item['image'] ?? null;
                        $avatarUrl = null;
                        if ($avatar) {
                            if (str_starts_with($avatar, 'http://') || str_starts_with($avatar, 'https://') || str_starts_with($avatar, '//')) {
                                $avatarUrl = $avatar;
                            } elseif (str_starts_with($avatar, 'storage/')) {
                                $avatarUrl = asset($avatar);
                            } elseif (file_exists(public_path($avatar))) {
                                $avatarUrl = asset($avatar);
                            } else {
                                $avatarUrl = asset('storage/' . ltrim($avatar, '/'));
                            }
                        }
                    @endphp
                    <div class="rounded-2xl bg-[#0f0f12] border border-white/10 p-8 flex flex-col justify-between hover:border-[#dc2626]/40 transition-all duration-300 hover:-translate-y-1">
                        <div class="space-y-4">
                            {{-- Star Rating --}}
                            <div class="flex text-[#ef4444] gap-1">
                                @for($s = 0; $s < 5; $s++)
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                @endfor
                            </div>
                            <p class="text-gray-300 font-light italic leading-relaxed text-sm sm:text-base">
                                "{{ $item['description'] ?? '' }}"
                            </p>
                        </div>

                        <div class="flex items-center gap-4 pt-6 mt-6 border-t border-white/5">
                            @if($avatarUrl)
                                <img src="{{ $avatarUrl }}" alt="{{ $item['title'] ?? 'Author' }}" class="w-12 h-12 rounded-full object-cover border border-white/10">
                            @else
                                <div class="w-12 h-12 rounded-full bg-white/10 flex items-center justify-center font-bold text-sm text-white">
                                    {{ substr($item['title'] ?? 'U', 0, 1) }}
                                </div>
                            @endif
                            <div>
                                <div class="font-bold text-white text-sm sm:text-base">{{ $item['title'] ?? '' }}</div>
                                <div class="text-xs text-gray-400">{{ $item['subtitle'] ?? '' }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        {{-- 4. TEAM MEMBERS PRESET --}}
        @elseif($type === 'team_members')
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach($items as $item)
                    @php
                        $avatar = $item['image'] ?? null;
                        $avatarUrl = null;
                        if ($avatar) {
                            if (str_starts_with($avatar, 'http://') || str_starts_with($avatar, 'https://') || str_starts_with($avatar, '//')) {
                                $avatarUrl = $avatar;
                            } elseif (str_starts_with($avatar, 'storage/')) {
                                $avatarUrl = asset($avatar);
                            } elseif (file_exists(public_path($avatar))) {
                                $avatarUrl = asset($avatar);
                            } else {
                                $avatarUrl = asset('storage/' . ltrim($avatar, '/'));
                            }
                        }
                    @endphp
                    <div class="group rounded-2xl bg-[#0f0f12] border border-white/10 overflow-hidden hover:border-[#dc2626]/40 transition-all duration-300 hover:-translate-y-1">
                        @if($avatarUrl)
                            <div class="aspect-square overflow-hidden bg-neutral-900">
                                <img src="{{ $avatarUrl }}" alt="{{ $item['title'] ?? 'Team Member' }}" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                            </div>
                        @endif
                        <div class="p-6 space-y-1">
                            <h3 class="font-bold text-lg text-white group-hover:text-[#ef4444] transition-colors">{{ $item['title'] ?? '' }}</h3>
                            <div class="text-xs text-[#ef4444] font-medium tracking-wide uppercase">{{ $item['subtitle'] ?? '' }}</div>
                            @if(!empty($item['description']))
                                <p class="text-xs text-gray-400 font-light pt-2">{{ $item['description'] }}</p>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</section>

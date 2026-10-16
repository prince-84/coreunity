@php
    $teamSection = $teamSection ?? \App\Models\TeamSection::where('is_active', true)->latest('updated_at')->first() ?? \App\Models\TeamSection::first();
@endphp

@if(!isset($teamSection?->is_active) || $teamSection->is_active)
<section class="w-full bg-white text-black py-16 md:py-24 px-4 sm:px-8 font-sans">
    <div class="max-w-[1300px] mx-auto flex flex-col">
        <div class="flex flex-col items-start mb-16 max-w-2xl">
            <p class="text-xs font-semibold tracking-wider uppercase text-[#cc2936] mb-4 flex items-center gap-3">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-red-600 shadow-[0_0_8px_3px_rgba(220,38,38,0.4)]"></span>
                </span>
                {{ $teamSection?->mini_title ?? 'Our Passionate Team' }}
            </p>
            <h2 class="text-4xl md:text-5xl lg:text-[54px] font-extrabold text-black tracking-tight leading-[1.1]">
                {!! nl2br(e($teamSection?->main_title ?? "The Brilliant Minds Behind\nOur Success")) !!}
            </h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @php
                $teamMembers = $teamSection?->resolved_members ?? [];
            @endphp
            @foreach($teamMembers as $m)
                <div class="bg-white rounded-2xl border border-gray-200 shadow-[0_4px_20px_rgba(0,0,0,0.04)] p-4 flex flex-col group hover:-translate-y-1 transition-transform duration-300">
                    <div class="relative w-full mb-8">
                        <div class="w-full rounded-xl overflow-hidden relative bg-[#1a1a1a] aspect-[3/4]">
                            <img src="{{ $m['image_url'] ?? (!empty($m['image']) ? asset($m['image']) : asset('farazbhai_image.png')) }}" alt="{{ $m['name'] ?? 'Team Member' }}" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500" />
                        </div>
                        <div class="absolute -bottom-5 left-4 w-10 h-10 bg-white rounded-full p-[2px] shadow-md z-10 flex items-center justify-center">
                            <div class="relative w-full h-full bg-red-600 rounded-full flex items-center justify-center overflow-hidden">
                                <img src="{{ $teamSection?->badge_logo_url ?? asset('red_logoimage.png') }}" alt="CoreUnity Logo" class="w-full h-full object-cover" />
                            </div>
                        </div>
                    </div>
                    <div class="px-2 pb-2 flex flex-col">
                        <h4 class="font-bold text-gray-900 text-[17px] mb-1 leading-tight">{{ $m['name'] ?? '' }}</h4>
                        <p class="text-gray-500 text-[13px] font-medium">{{ $m['role'] ?? '' }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif

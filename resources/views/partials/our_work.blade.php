@php
    $ourWorkCategories = [
        ['name' => 'Website', 'href' => url('/case-study/website'), 'active' => false],
        ['name' => 'Mobile App', 'href' => url('/mobile-app'), 'active' => false],
        ['name' => 'SMM', 'href' => url('/smm'), 'active' => false],
        ['name' => 'PPC', 'href' => url('/ppc'), 'active' => false],
        ['name' => 'PRINT', 'href' => url('/print'), 'active' => false],
        ['name' => 'SEO', 'href' => url('/seo'), 'active' => false],
        ['name' => 'BRANDING', 'href' => url('/branding'), 'active' => false],
    ];

    $ourWorkCards = [
        [
            'title' => "Website<br />development",
            'stat' => '145 %',
            'description' => 'An increase in online bookings during the first 90 days.',
            'href' => url('/case-study/website'),
            'image' => asset('dpworld_image.png'),
            'alt' => 'Website Development',
            'aspect' => 'aspect-[3/4]',
            'maxW' => 'max-w-[160px]',
            'maxWDesc' => 'max-w-[220px]',
        ],
        [
            'title' => "Mobile<br />development",
            'stat' => '40 %',
            'description' => 'Share of total online sales driven through the mobile app.',
            'href' => url('/mobile-app'),
            'image' => asset('sharjahuni_image.png'),
            'alt' => 'Mobile Development',
            'aspect' => 'aspect-[4/3]',
            'maxW' => 'max-w-[180px]',
            'maxWDesc' => 'max-w-[200px]',
        ],
        [
            'title' => "Social media<br />marketing",
            'stat' => '180 %',
            'description' => 'A growth in social media followers and community reach.',
            'href' => url('/smm'),
            'image' => asset('dpworld_image.png'),
            'alt' => 'Social Media Marketing',
            'aspect' => 'aspect-[3/4]',
            'maxW' => 'max-w-[160px]',
            'maxWDesc' => 'max-w-[210px]',
        ],
        [
            'title' => "Pay per click<br />advertising",
            'stat' => '400 %',
            'description' => 'Improvement in overall ad spend efficiency (ROAS).',
            'href' => url('/ppc'),
            'image' => asset('sharjahuni_image.png'),
            'alt' => 'Pay Per Click Advertising',
            'aspect' => 'aspect-[4/3]',
            'maxW' => 'max-w-[180px]',
            'maxWDesc' => 'max-w-[210px]',
        ],
        [
            'title' => "Print Media &<br />Design Strategy",
            'stat' => '200 %',
            'description' => 'A surge in foot traffic from customers outside the local area.',
            'href' => url('/print'),
            'image' => asset('dpworld_image.png'),
            'alt' => 'Print Media & Design Strategy',
            'aspect' => 'aspect-[3/4]',
            'maxW' => 'max-w-[160px]',
            'maxWDesc' => 'max-w-[210px]',
        ],
        [
            'title' => "SEO<br />strategy",
            'stat' => '250 %',
            'description' => 'A surge in Google Maps local searches and visibility.',
            'href' => url('/seo'),
            'image' => asset('sharjahuni_image.png'),
            'alt' => 'SEO strategy',
            'aspect' => 'aspect-[4/3]',
            'maxW' => 'max-w-[180px]',
            'maxWDesc' => 'max-w-[210px]',
        ],
        [
            'title' => "Branding",
            'stat' => '25 %',
            'description' => 'Increase in property inquiry conversion rates via new branding.',
            'href' => url('/branding'),
            'image' => asset('dpworld_image.png'),
            'alt' => 'Branding',
            'aspect' => 'aspect-[3/4]',
            'maxW' => 'max-w-[160px]',
            'maxWDesc' => 'max-w-[210px]',
        ],
    ];

    $ourWorkModel = $ourWork ?? \App\Models\OurWorkSection::where('is_active', true)->latest('updated_at')->first() ?? \App\Models\OurWorkSection::first();

    if ($ourWorkModel && !empty($ourWorkModel->categories) && is_array($ourWorkModel->categories)) {
        $dynamicCategories = [];
        foreach ($ourWorkModel->categories as $c) {
            $catUrl = $c['url'] ?? $c['link'] ?? '#';
            $dynamicCategories[] = [
                'name' => $c['label'] ?? '',
                'href' => !empty($catUrl) && $catUrl !== '#' ? (str_starts_with($catUrl, 'http') ? $catUrl : url($catUrl)) : '#',
                'active' => false,
            ];
        }
        if (!empty($dynamicCategories)) {
            $ourWorkCategories = $dynamicCategories;
        }
    }

    if ($ourWorkModel && !empty($ourWorkModel->cards) && is_array($ourWorkModel->cards)) {
        foreach (array_values($ourWorkModel->cards) as $idx => $cData) {
            if (isset($ourWorkCards[$idx]) && !empty($cData['title'])) {
                $ourWorkCards[$idx]['title'] = nl2br(e($cData['title']));
                if (!empty($cData['stat_number'])) {
                    $ourWorkCards[$idx]['stat'] = $cData['stat_number'];
                }
                if (!empty($cData['stat_desc'])) {
                    $ourWorkCards[$idx]['description'] = $cData['stat_desc'];
                }
                if (!empty($cData['button_link'])) {
                    $ourWorkCards[$idx]['href'] = str_starts_with($cData['button_link'], 'http') ? $cData['button_link'] : url($cData['button_link']);
                }
                if (!empty($cData['button_text'])) {
                    $ourWorkCards[$idx]['button_text'] = $cData['button_text'];
                }
                if (!empty($cData['image'])) {
                    $img = $cData['image'];
                    $ourWorkCards[$idx]['image'] = (str_starts_with($img, 'http') || str_starts_with($img, '/')) ? $img : (file_exists(public_path($img)) ? asset($img) : asset('storage/' . $img));
                }
            }
        }
    } elseif ($ourWorkModel) {
        if (!empty($ourWorkModel->card_1_title)) {
            $ourWorkCards[0]['title'] = nl2br(e($ourWorkModel->card_1_title));
            $ourWorkCards[0]['stat'] = $ourWorkModel->card_1_stat_number ?? $ourWorkCards[0]['stat'];
            $ourWorkCards[0]['description'] = $ourWorkModel->card_1_stat_desc ?? $ourWorkCards[0]['description'];
            if (!empty($ourWorkModel->card_1_button_link)) {
                $ourWorkCards[0]['href'] = str_starts_with($ourWorkModel->card_1_button_link, 'http') ? $ourWorkModel->card_1_button_link : url($ourWorkModel->card_1_button_link);
            }
            $ourWorkCards[0]['image'] = $ourWorkModel->card_1_image_url ?? $ourWorkCards[0]['image'];
        }
        if (!empty($ourWorkModel->card_2_title)) {
            $ourWorkCards[1]['title'] = nl2br(e($ourWorkModel->card_2_title));
            $ourWorkCards[1]['stat'] = $ourWorkModel->card_2_stat_number ?? $ourWorkCards[1]['stat'];
            $ourWorkCards[1]['description'] = $ourWorkModel->card_2_stat_desc ?? $ourWorkCards[1]['description'];
            if (!empty($ourWorkModel->card_2_button_link)) {
                $ourWorkCards[1]['href'] = str_starts_with($ourWorkModel->card_2_button_link, 'http') ? $ourWorkModel->card_2_button_link : url($ourWorkModel->card_2_button_link);
            }
            $ourWorkCards[1]['image'] = $ourWorkModel->card_2_image_url ?? $ourWorkCards[1]['image'];
        }
    }

    $limit = isset($maxRows) && $maxRows ? $maxRows * 2 : count($ourWorkCards);
    $cardsToDisplay = array_slice($ourWorkCards, 0, $limit);
    $displayTitle = $workTitle ?? ($ourWorkModel?->main_title ?? 'Years of Experience, Countless Innovations');
    $displayBadge = $ourWorkModel?->mini_title ?? 'OUR WORK';
@endphp

<!-- Our Work Section -->
<section class="w-full bg-white text-black py-24 overflow-hidden">
    <div class="max-w-[1300px] mx-auto flex flex-col items-center">
        <!-- Header Area -->
        <div class="flex flex-col items-center text-center mb-12 w-full max-w-5xl px-4">
            <p class="text-xs font-bold tracking-[0.4em] uppercase text-gray-600 mb-4 flex items-center gap-2">
                <span class="w-2 h-2 rounded-full bg-[#c52833] shadow-[0_0_8px_3px_rgba(220,38,38,0.7)]"></span>
                {{ $displayBadge }}
            </p>
            <h2 class="text-2xl md:text-3xl lg:text-[40px] font-bold text-[#1f1f1f] tracking-tight leading-tight">
                {{ $displayTitle }}
            </h2>
        </div>
    </div>

    <!-- Categories Banner -->
    <div class="w-full bg-[#f4f5f6] border-y border-gray-100 py-6 mb-16 overflow-x-auto scrollbar-none">
        <div class="max-w-[1300px] mx-auto flex items-center justify-start md:justify-center gap-6 md:gap-12 min-w-max px-6 sm:px-8">
            @foreach($ourWorkCategories as $cat)
                <a href="{{ $cat['href'] }}" class="text-sm md:text-base font-medium transition-colors shrink-0 {{ $cat['active'] ? 'text-red-600' : 'text-gray-700 hover:text-red-600' }}">
                    {{ $cat['name'] }}
                </a>
            @endforeach
        </div>
    </div>

    <div class="max-w-[1100px] mx-auto px-4 lg:px-8">
        <!-- Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
            @foreach($cardsToDisplay as $index => $card)
                <div class="bg-[#f8f9fa] rounded-[24px] p-8 lg:p-10 flex flex-col sm:flex-row items-center justify-between gap-6 border border-gray-100 shadow-sm relative overflow-hidden group {{ ($index === count($cardsToDisplay) - 1 && count($cardsToDisplay) % 2 !== 0) ? 'md:col-span-2 max-w-[536px] mx-auto w-full' : '' }}">
                    <!-- Background decorative zebra pattern -->
                    <div class="absolute inset-0 z-0 opacity-100 pointer-events-none" style="background-image: url('{{ asset('white_bg.png') }}'); background-size: cover; background-position: center center;"></div>

                    <div class="flex flex-col items-start z-10 w-full sm:w-1/2">
                        <h3 class="text-xl lg:text-[26px] font-bold text-gray-900 leading-tight mb-4 uppercase">
                            {!! $card['title'] !!}
                        </h3>

                        <div class="mb-6">
                            <span class="text-3xl lg:text-4xl font-bold text-[#c52833] block mb-1">{{ $card['stat'] }}</span>
                            <p class="text-gray-500 text-xs md:text-sm {{ $card['maxWDesc'] }}">
                                {{ $card['description'] }}
                            </p>
                        </div>

                        <a href="{{ $card['href'] }}" class="bg-[#cc2936] hover:bg-red-700 text-white px-6 py-2.5 rounded-full text-xs font-semibold transition-colors shadow-md">
                            View Case Study
                        </a>
                    </div>

                    <div class="w-full sm:w-1/2 flex justify-end z-10">
                        <div class="relative w-full {{ $card['maxW'] }} {{ $card['aspect'] }} flex justify-end">
                            <img src="{{ $card['image'] }}" alt="{{ $card['alt'] }}" class="w-full h-full object-contain drop-shadow-2xl rounded-xl transition-transform duration-500 group-hover:scale-105" />
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>

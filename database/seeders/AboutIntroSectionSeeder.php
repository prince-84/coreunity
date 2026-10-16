<?php

namespace Database\Seeders;

use App\Models\AboutIntroSection;
use Illuminate\Database\Seeder;

class AboutIntroSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AboutIntroSection::updateOrCreate(
            ['id' => 1],
            [
                'title_prefix' => 'We are a',
                'title_highlight' => 'Creative Bold',
                'title_suffix' => 'Digital Agency based In UAE',
                'paragraph_1' => 'With <span class="font-bold text-black">8 + years of experience</span>, 500+ prestigious clients, 50+ expert developers, and a 200+ strong team, Core Unity Solutions stands out as Dubai\'s No.1 digital transformation and marketing agency.',
                'paragraph_2' => 'We deliver efficient web, mobile, and marketing solutions powered by Innovative AI and emerging tech like AR, VR, and Blockchain. After our proven track record in Dubai, we\'re now expanding globally across the USA and MENA region — empowering global brands to evolve, scale, and lead in this digital age.',
                'main_image' => null,
                'floating_bg_image' => null,
                'floating_logo' => null,
                'is_active' => true,
            ]
        );
    }
}

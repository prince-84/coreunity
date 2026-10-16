<?php

namespace Database\Seeders;

use App\Models\ServicesSection;
use Illuminate\Database\Seeder;

class ServicesSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ServicesSection::updateOrCreate(
            ['id' => 1],
            [
                'mini_title' => 'Digital Marketing Services',
                'main_title' => 'How Our Agency Helps You Scale',
                'card_1_icon' => 'webnbrand_logo.png',
                'card_1_title' => "WEBSITES &\nBRANDING",
                'card_1_description' => 'From branding to websites, every design is built to attract, engage, and convert.',
                'card_1_image' => 'digital_image.png',
                'card_2_bg_image' => 'growth_bg.png',
                'card_2_title_highlight' => 'GROWTH',
                'card_2_title_main' => 'STRATEGY',
                'card_2_links' => [
                    ['label' => 'Signature Growth System'],
                    ['label' => 'Venture Marketing'],
                    ['label' => 'Marketing Strategy'],
                    ['label' => 'Marketing Advisory'],
                    ['label' => 'SEO Consulting'],
                ],
                'card_3_icon' => 'digi_logo.png',
                'card_3_title' => 'DIGITAL MARKETING',
                'card_3_description' => 'Intent-driven marketing across SEO, CRO, social media, and PR that attracts attention and drives results.',
                'card_3_image' => 'marketing_image.png',
                'is_active' => true,
            ]
        );
    }
}

<?php

namespace Database\Seeders;

use App\Models\OurWorkSection;
use Illuminate\Database\Seeder;

class OurWorkSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OurWorkSection::updateOrCreate(
            ['id' => 1],
            [
                'mini_title' => 'OUR WORK',
                'main_title' => '10+ yrs of expertise in providing innovative solutions',
                'categories' => [
                    ['label' => 'Website', 'url' => '/case-study/website'],
                    ['label' => 'Mobile App', 'url' => '/mobile-app'],
                    ['label' => 'SMM', 'url' => '/smm'],
                    ['label' => 'PPC', 'url' => '/ppc'],
                    ['label' => 'PRINT', 'url' => '/print'],
                    ['label' => 'SEO', 'url' => '/seo'],
                    ['label' => 'BRANDING', 'url' => '/branding'],
                ],
                'card_1_title' => "Website\ndevelopment",
                'card_1_stat_number' => '145 %',
                'card_1_stat_desc' => 'An increase in online bookings during the first 90 days.',
                'card_1_button_text' => 'View Case Study',
                'card_1_button_link' => '/case-study/website',
                'card_1_image' => 'dpworld_image.png',
                'card_1_bg_image' => 'white_bg.png',

                'card_2_title' => "Mobile\ndevelopment",
                'card_2_stat_number' => '40 %',
                'card_2_stat_desc' => 'Share of total online sales driven through the mobile app.',
                'card_2_button_text' => 'View Case Study',
                'card_2_button_link' => '/mobile-app',
                'card_2_image' => 'sharjahuni_image.png',
                'card_2_bg_image' => 'white_bg.png',

                'is_active' => true,
            ]
        );
    }
}

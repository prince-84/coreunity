<?php

namespace Database\Seeders;

use App\Models\ServicesListSection;
use Illuminate\Database\Seeder;

class ServicesListSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ServicesListSection::updateOrCreate(
            ['id' => 1],
            [
                'mini_title' => 'What We Offer',
                'main_title' => "Save time and grow your business\nwith our expert solutions",
                'services' => [
                    [
                        'num' => '01',
                        'title' => 'Branding',
                        'desc' => 'Our agency combines creativity and strategy to build powerful brand identities that communicate your vision, and grow meaningful customer connections.',
                        'href' => '/services/branding-and-creative-design',
                    ],
                    [
                        'num' => '02',
                        'title' => 'Digital Marketing',
                        'desc' => 'Our digital marketing solutions help you connect with your customers through SEO, social content marketing, and paid advertising.',
                        'href' => '/services/digital-marketing',
                    ],
                    [
                        'num' => '03',
                        'title' => 'Design & Creatives',
                        'desc' => 'We create compelling visuals that capture attention, strengthen your brand identity, and communicate your message effectively across platforms.',
                        'href' => '/services/ui-ux-design',
                    ],
                ],
                'button_text' => 'View all services',
                'button_url' => '/services/all',
                'is_active' => true,
            ]
        );
    }
}

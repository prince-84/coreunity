<?php

namespace Database\Seeders;

use App\Models\ServicesIndustriesSection;
use Illuminate\Database\Seeder;

class ServicesIndustriesSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ServicesIndustriesSection::updateOrCreate(
            ['id' => 1],
            [
                'mini_title' => 'Serving Diverse Sectors Across the UAE',
                'main_title' => 'Industries We Serve',
                'industries' => [
                    [
                        'title' => 'Real Estate',
                        'desc' => 'Leading with quality and effectively showcasing property',
                        'icon' => 'state_img.png',
                        'link' => '/industries/real-estate',
                    ],
                    [
                        'title' => 'Retail & eCommerce',
                        'desc' => 'Driving sales through optimized digital Experiences.',
                        'icon' => 'retail_img.png',
                        'link' => '/industries/retail',
                    ],
                    [
                        'title' => 'Healthcare & Wellness',
                        'desc' => 'Building trust with professional online solutions.',
                        'icon' => 'health_img.png',
                        'link' => '/industries/healthcare',
                    ],
                    [
                        'title' => 'Food & Beverage',
                        'desc' => 'Creating engaging brands that attract customers.',
                        'icon' => 'food_img.png',
                        'link' => '/industries/hospitality',
                    ],
                    [
                        'title' => 'Tech Startups',
                        'desc' => 'Supporting growth with scalable digital strategies.',
                        'icon' => 'tect_img.png',
                        'link' => '/industries/fintech',
                    ],
                    [
                        'title' => 'Education',
                        'desc' => 'optimizing learning through modern digital platforms.',
                        'icon' => 'edu_img.png',
                        'link' => '/industries/education',
                    ],
                    [
                        'title' => 'Hospitality & Tourism',
                        'desc' => 'Delivering seamless and engaging guest experiences.',
                        'icon' => 'hospitality_image.png',
                        'link' => '/industries/hospitality',
                    ],
                    [
                        'title' => 'Restaurant',
                        'desc' => 'Providing strong branding and curating digital Presence.',
                        'icon' => 'res_table_img.png',
                        'link' => '/industries/hospitality',
                    ],
                ],
                'cta_title' => 'Ready to grow your brand?',
                'cta_subtitle' => "Let's build a strategy that delivers real results.",
                'cta_button_text' => 'Connect with us',
                'cta_button_url' => '/contact',
                'is_active' => true,
            ]
        );
    }
}

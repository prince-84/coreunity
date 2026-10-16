<?php

namespace Database\Seeders;

use App\Models\AboutIndustriesSection;
use Illuminate\Database\Seeder;

class AboutIndustriesSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AboutIndustriesSection::updateOrCreate(
            ['id' => 1],
            [
                'badge_text' => 'Serving Diverse Sectors Across the UAE',
                'main_title' => 'Industries We Serve',
                'bg_image' => 'white_bg.png',
                'items' => [
                    [
                        'title' => 'Real Estate',
                        'description' => 'Leading with quality and effectively showcasing property',
                        'icon' => 'state_img.png',
                    ],
                    [
                        'title' => 'Retail & eCommerce',
                        'description' => 'Driving sales through optimized digital Experiences.',
                        'icon' => 'retail_img.png',
                    ],
                    [
                        'title' => 'Healthcare & Wellness',
                        'description' => 'Building trust with professional online solutions.',
                        'icon' => 'health_img.png',
                    ],
                    [
                        'title' => 'Food & Beverage',
                        'description' => 'Creating engaging brands that attract customers.',
                        'icon' => 'food_img.png',
                    ],
                    [
                        'title' => 'Tech Startups',
                        'description' => 'Supporting growth with scalable digital strategies.',
                        'icon' => 'tect_img.png',
                    ],
                    [
                        'title' => 'Education',
                        'description' => 'optimizing learning through modern digital platforms.',
                        'icon' => 'edu_img.png',
                    ],
                    [
                        'title' => 'Hospitality & Tourism',
                        'description' => 'Delivering seamless and engaging guest experiences.',
                        'icon' => 'hospitality_image.png',
                    ],
                    [
                        'title' => 'Restaurant',
                        'description' => 'Providing strong branding and curating digital Presence.',
                        'icon' => 'restaurant_combo',
                    ],
                ],
                'is_active' => true,
            ]
        );
    }
}

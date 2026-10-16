<?php

namespace Database\Seeders;

use App\Models\CoreStrengthsSection;
use Illuminate\Database\Seeder;

class CoreStrengthsSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CoreStrengthsSection::updateOrCreate(
            ['id' => 1],
            [
                'mini_title' => 'Our Core Strengths',
                'main_title' => 'What Makes Our Digital Marketing Agency Stand Out?',
                'bg_image' => 'bg_image.png',
                'points' => [
                    [
                        'number' => '01',
                        'title' => 'Results-Driven Approach',
                        'description' => 'We focus on strategies that deliver scalable outcomes.',
                    ],
                    [
                        'number' => '02',
                        'title' => 'Transparent Communication',
                        'description' => 'We keep everything clear, honest, and updated.',
                    ],
                    [
                        'number' => '03',
                        'title' => 'Customized Solutions',
                        'description' => 'We tailor every solution to fit your unique needs.',
                    ],
                    [
                        'number' => '04',
                        'title' => 'Affordable & Scalable Services',
                        'description' => 'We provide cost-effective solutions that grow with your business.',
                    ],
                    [
                        'number' => '05',
                        'title' => 'Full-Service Team',
                        'description' => 'We handle everything from content creation to ads to seo under one roof.',
                    ],
                    [
                        'number' => '06',
                        'title' => 'Client-Centric Mindset',
                        'description' => 'Your goals guide everything we do, we treat your brand as our own.',
                    ],
                ],
                'collage_image_1' => 'clip_1_group.png',
                'collage_image_2' => 'clip_2_group.png',
                'collage_image_3' => 'clip_3_group.png',
                'collage_image_4' => 'clip_4_group.png',
                'collage_image_5' => 'clip_5_group.png',
                'collage_image_6' => 'clip_6_group.png',
                'is_active' => true,
            ]
        );
    }
}

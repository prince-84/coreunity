<?php

namespace Database\Seeders;

use App\Models\BlogHeroSection;
use Illuminate\Database\Seeder;

class BlogHeroSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BlogHeroSection::updateOrCreate(
            ['id' => 1],
            [
                'mini_title' => 'Our Blogs',
                'main_title' => "Stories of strategy,\ncreativity, and measurable impact.",
                'description' => "Real brands, real challenges, real transformations. Explore how we help\nteams grow with design, data, and intelligent marketing.",
                'is_active' => true,
            ]
        );
    }
}

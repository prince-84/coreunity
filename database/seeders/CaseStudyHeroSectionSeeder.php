<?php

namespace Database\Seeders;

use App\Models\CaseStudyHeroSection;
use Illuminate\Database\Seeder;

class CaseStudyHeroSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CaseStudyHeroSection::updateOrCreate(
            ['id' => 1],
            [
                'mini_title' => 'Case Studies',
                'main_title' => "Stories of strategy,\ncreativity, and measurable impact.",
                'description' => "Real brands, real challenges, real transformations. Explore how we help\nteams grow with design, data, and intelligent marketing.",
                'is_active' => true,
            ]
        );
    }
}

<?php

namespace Database\Seeders;

use App\Models\AboutHeroSection;
use Illuminate\Database\Seeder;

class AboutHeroSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AboutHeroSection::updateOrCreate(
            ['id' => 1],
            [
                'mini_title' => 'About Us',
                'main_title' => "From Dubai's best minds to\na global powerhouse",
                'is_active' => true,
            ]
        );
    }
}

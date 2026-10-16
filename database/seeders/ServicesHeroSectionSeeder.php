<?php

namespace Database\Seeders;

use App\Models\ServicesHeroSection;
use Illuminate\Database\Seeder;

class ServicesHeroSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ServicesHeroSection::updateOrCreate(
            ['id' => 1],
            [
                'mini_title' => 'Services We Offer',
                'main_title' => "From Dubai's best minds to\na global powerhouse",
                'is_active' => true,
            ]
        );
    }
}

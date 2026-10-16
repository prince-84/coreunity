<?php

namespace Database\Seeders;

use App\Models\ContactHeroSection;
use Illuminate\Database\Seeder;

class ContactHeroSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ContactHeroSection::updateOrCreate(
            ['id' => 1],
            [
                'mini_title' => 'Contact Us',
                'main_title' => "Lets get in touch and build\nsomething great together",
                'is_active' => true,
            ]
        );
    }
}

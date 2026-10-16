<?php

namespace Database\Seeders;

use App\Models\TeamSection;
use Illuminate\Database\Seeder;

class TeamSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TeamSection::updateOrCreate(
            ['id' => 1],
            [
                'mini_title' => 'Our Passionate Team',
                'main_title' => "The Brilliant Minds Behind\nOur Success",
                'badge_logo' => 'red_logoimage.png',
                'members' => [
                    ['name' => 'Faraz Shafi', 'role' => 'CEO', 'image' => 'team/farazbhai_image.png'],
                    ['name' => 'Osama Rasheed', 'role' => 'Managing Partner', 'image' => 'team/osama_image.png'],
                    ['name' => 'Babar Ali Khan', 'role' => 'Sr. Developer', 'image' => 'team/babar_image.png'],
                    ['name' => 'Muhammad Jawed', 'role' => 'Marketing Manager', 'image' => 'team/jawed_image.png'],
                ],
                'is_active' => true,
            ]
        );
    }
}

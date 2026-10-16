<?php

namespace Database\Seeders;

use App\Models\ServicesSmmSection;
use Illuminate\Database\Seeder;

class ServicesSmmSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ServicesSmmSection::updateOrCreate(
            ['id' => 1],
            [
                'main_title' => "Experience Growth\nwith Leading SMM",
                'description' => "At CoreUnity Solutions, squeeze out each platform's power and scope and utilize it for your brand success. Our team of social media marketing strategists",
                'stats' => [
                    [
                        'stat_number' => '100+',
                        'stat_label' => 'Brands Transformed',
                        'is_highlighted' => false,
                    ],
                    [
                        'stat_number' => '325+',
                        'stat_label' => 'Wins Delivered',
                        'is_highlighted' => false,
                    ],
                    [
                        'stat_number' => '15+',
                        'stat_label' => 'Years of Innovation',
                        'is_highlighted' => true,
                    ],
                    [
                        'stat_number' => '98%',
                        'stat_label' => 'Satisfaction',
                        'is_highlighted' => true,
                    ],
                ],
                'is_active' => true,
            ]
        );
    }
}

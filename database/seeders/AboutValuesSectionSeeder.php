<?php

namespace Database\Seeders;

use App\Models\AboutValuesSection;
use Illuminate\Database\Seeder;

class AboutValuesSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AboutValuesSection::updateOrCreate(
            ['id' => 1],
            [
                'headline' => "What Drives Us\nForward",
                'bg_image' => 'bg_image.png',
                'arrow_icon' => 'arrow.png',
                'items' => [
                    [
                        'title' => 'Our Mission',
                        'description' => 'To help ambitious brands grow into market leaders through digital strategies that actually deliver. As a trusted digital marketing agency in Dubai, we blend creativity, data, and technology into every campaign.',
                    ],
                    [
                        'title' => 'Our Vision',
                        'description' => 'To build a future where every brand we work with has the digital edge to lead, not just compete. Our vision is to be the go-to digital marketing partner in Dubai, known for innovation, results, and setting new standards in how businesses connect with their audiences online.',
                    ],
                    [
                        'title' => 'Our Values',
                        'description' => 'To make Innovation, integrity, and excellence guide everything we do at CoreUnity Solutions. We work as an extension of your team, combining fresh thinking with honest execution to deliver real impact, because your growth is how we measure our own success.',
                    ],
                ],
                'is_active' => true,
            ]
        );
    }
}

<?php

namespace Database\Seeders;

use App\Models\HeroSection;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class HeroSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $targetDir = storage_path('app/public/hero/logos');
        if (!File::exists($targetDir)) {
            File::makeDirectory($targetDir, 0755, true);
        }

        $mediaLogos = [
            ['filename' => 'al-jazeera.png', 'title' => 'Al Jazeera', 'url' => 'https://www.aljazeera.com'],
            ['filename' => 'zaaya.png', 'title' => 'Zaaya', 'url' => ''],
            ['filename' => 'gulf_logo.png', 'title' => 'Gulf News', 'url' => 'https://gulfnews.com'],
            ['filename' => 'khaleej_logo.png', 'title' => 'Khaleej Times', 'url' => 'https://www.khaleejtimes.com'],
            ['filename' => 'arabian_logo.png', 'title' => 'Arabian Business', 'url' => 'https://www.arabianbusiness.com'],
        ];

        $seededMediaLogos = [];
        foreach ($mediaLogos as $item) {
            $src = public_path($item['filename']);
            $dest = $targetDir . DIRECTORY_SEPARATOR . $item['filename'];
            if (File::exists($src) && !File::exists($dest)) {
                File::copy($src, $dest);
            }

            $seededMediaLogos[] = [
                'image' => 'hero/logos/' . $item['filename'],
                'title' => $item['title'],
                'url' => $item['url'],
            ];
        }

        HeroSection::updateOrCreate(
            ['id' => 1],
            [
                'title' => 'We are a bold and innovative digital<br className="hidden md:block" /> agency based in the UAE.',
                'subtitle' => 'Leading Digital Marketing & Web Agency in Dubai',
                'description' => 'CoreUnity Solutions empowers brands across UAE and globally with cutting-edge web development, creative branding, and ROI-driven marketing.',
                'button_text' => 'Schedule a call',
                'button_link' => '#contact',
                'button_icon' => 'Core Unity Logo-05.svg',
                'image' => 'earth_globe.png',
                'globe_image' => 'earth_globe.png',
                'global_presence' => [
                    ['country' => 'USA'],
                    ['country' => 'UAE'],
                    ['country' => 'Saudi Arabia'],
                    ['country' => 'Pakistan'],
                ],
                'logo_ticker' => [
                    'al-jazeera.png',
                    'zaaya.png',
                    'gulf_logo.png',
                    'khaleej_logo.png',
                    'arabian_logo.png',
                ],
                'media_logos' => $seededMediaLogos,
            ]
        );
    }
}

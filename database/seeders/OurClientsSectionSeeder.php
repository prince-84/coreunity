<?php

namespace Database\Seeders;

use App\Models\OurClientsSection;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class OurClientsSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $targetDir = storage_path('app/public/clients');
        if (!File::exists($targetDir)) {
            File::makeDirectory($targetDir, 0755, true);
        }

        $clientLogos = [
            ['filename' => 'salwa.png', 'name' => 'Salwa Real Estate', 'url' => ''],
            ['filename' => 'dental.png', 'name' => 'Dental Clinic', 'url' => ''],
            ['filename' => 'SkillBridge Academy.png', 'name' => 'SkillBridge Academy', 'url' => ''],
            ['filename' => 'cajun.png', 'name' => 'Cajun', 'url' => ''],
            ['filename' => 'UAEofplan.png', 'name' => 'UAE Off Plan', 'url' => ''],
            ['filename' => 'alhilal.png', 'name' => 'Al Hilal', 'url' => ''],
            ['filename' => 'fs.png', 'name' => 'FS Group', 'url' => ''],
            ['filename' => 'handyman.png', 'name' => 'Handyman', 'url' => ''],
            ['filename' => 'soulnsoil.png', 'name' => 'Soul & Soil', 'url' => ''],
            ['filename' => 'appello.png', 'name' => 'Appello', 'url' => ''],
            ['filename' => 'sukihana.png', 'name' => 'Sukihana', 'url' => ''],
        ];

        $seededLogos = [];
        foreach ($clientLogos as $item) {
            $src = public_path($item['filename']);
            $dest = $targetDir . DIRECTORY_SEPARATOR . $item['filename'];
            if (File::exists($src) && !File::exists($dest)) {
                File::copy($src, $dest);
            }

            $seededLogos[] = [
                'image' => 'clients/' . $item['filename'],
                'name' => $item['name'],
                'url' => $item['url'],
            ];
        }

        OurClientsSection::updateOrCreate(
            ['id' => 1],
            [
                'mini_title' => 'Our Clients',
                'main_title' => "5-Star Rated, Works \nwith CoreUnity Solutions",
                'bg_image' => 'grid_bg.png',
                'client_logos' => $seededLogos,
                'globe_image' => 'World.png',
                'globe_text' => "500+ Clients \nworldwide",
                'is_active' => true,
            ]
        );
    }
}

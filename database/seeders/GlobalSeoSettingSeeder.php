<?php

namespace Database\Seeders;

use App\Models\GlobalSeoSetting;
use Illuminate\Database\Seeder;

class GlobalSeoSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Default is strictly false (OFF) to block crawlers upon fresh deployment
        GlobalSeoSetting::firstOrCreate(
            ['id' => 1],
            [
                'site_indexing_enabled' => false,
                'meta_title_default' => 'Core Unity Solutions | Digital Marketing Agency & IT Solutions Dubai',
                'meta_description_default' => 'Core Unity Solutions is a results-driven digital marketing agency in Dubai, combining creativity, data, and technology to help ambitious brands grow.',
                'canonical_base_url' => 'http://127.0.0.1:8000',
            ]
        );
    }
}

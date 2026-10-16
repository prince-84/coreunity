<?php

namespace Database\Seeders;

use App\Models\AboutPageSection;
use App\Models\Page;
use Illuminate\Database\Seeder;

class AboutPageSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $aboutPage = Page::where('slug', 'about')->first();
        $pageId = $aboutPage?->id;

        AboutPageSection::updateOrCreate(
            ['section_key' => 'about_hero'],
            [
                'page_id' => $pageId,
                'section_order' => 1,
                'name' => 'About Us Hero Section',
                'description' => 'Top badge ("About Us") with glowing ping indicator, and main heading ("From Dubai\'s best minds to a global powerhouse").',
                'edit_url' => '/admin/about-hero-sections/1/edit',
                'is_active' => true,
            ]
        );

        AboutPageSection::updateOrCreate(
            ['section_key' => 'about_intro'],
            [
                'page_id' => $pageId,
                'section_order' => 2,
                'name' => 'About Intro Section',
                'description' => 'Agency intro headline with red highlight ("Creative Bold"), 2 narrative paragraphs, team meeting image, and floating logo badge.',
                'edit_url' => '/admin/about-intro-sections/1/edit',
                'is_active' => true,
            ]
        );

        AboutPageSection::updateOrCreate(
            ['section_key' => 'about_values'],
            [
                'page_id' => $pageId,
                'section_order' => 3,
                'name' => 'What Drives Us Forward (Values & Mission)',
                'description' => 'What Drives Us Forward headline, red glowing indicator, left background texture, and interactive Accordion items (Mission, Vision, Values).',
                'edit_url' => '/admin/about-values-sections/1/edit',
                'is_active' => true,
            ]
        );

        AboutPageSection::updateOrCreate(
            ['section_key' => 'about_industries'],
            [
                'page_id' => $pageId,
                'section_order' => 4,
                'name' => 'Industries We Serve',
                'description' => 'Serving Diverse Sectors badge, Industries We Serve headline, subtle background texture, and 8-item industry cards grid (Real Estate, Retail, Healthcare, etc.).',
                'edit_url' => '/admin/about-industries-sections/1/edit',
                'is_active' => true,
            ]
        );
    }
}

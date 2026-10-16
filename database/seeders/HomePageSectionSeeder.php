<?php

namespace Database\Seeders;

use App\Models\HomePageSection;
use App\Models\Page;
use Illuminate\Database\Seeder;

class HomePageSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $homePage = Page::where('slug', 'home')->first();
        $pageId = $homePage?->id;

        HomePageSection::updateOrCreate(
            ['section_key' => 'hero_section'],
            [
                'page_id' => $pageId,
                'section_order' => 1,
                'name' => 'Hero Section',
                'description' => 'Main headline, Subtitle, Description, CTA button, Earth globe, Global presence locations, Client logo ticker.',
                'edit_url' => '/admin/hero-sections/1/edit',
                'is_active' => true,
            ]
        );

        HomePageSection::updateOrCreate(
            ['section_key' => 'services_highlights'],
            [
                'page_id' => $pageId,
                'section_order' => 2,
                'name' => 'Services Highlights',
                'description' => 'Digital Marketing Services badge, Agency scaling headline, Websites & Branding, Growth Strategy link pills, Digital Marketing card.',
                'edit_url' => '/admin/services-sections/1/edit',
                'is_active' => true,
            ]
        );

        HomePageSection::updateOrCreate(
            ['section_key' => 'core_strengths'],
            [
                'page_id' => $pageId,
                'section_order' => 3,
                'name' => 'Core Strengths',
                'description' => 'Our Core Strengths badge, Stand Out headline, 6 key strength points (01 to 06), right background pattern, and center 6-image marketing collage.',
                'edit_url' => '/admin/core-strengths-sections/1/edit',
                'is_active' => true,
            ]
        );

        // Strictly retain page-unique sections for Home Page:
        // Repeating / global sections (Our Work, Our Clients, Passionate Team, Testimonials, Blog, Client Reviews, Footer)
        // are strictly managed under 'Global / Reusable Sections'.
        HomePageSection::whereIn('section_key', [
            'our_work',
            'our_clients',
            'passionate_team',
            'testimonials',
            'our_blog',
            'client_reviews',
            'footer_section',
        ])->delete();
    }
}

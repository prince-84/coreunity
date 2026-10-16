<?php

namespace Database\Seeders;

use App\Models\Page;
use App\Models\ServicesPageSection;
use Illuminate\Database\Seeder;

class ServicesPageSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $servicesPage = Page::where('slug', 'services')->first();
        $pageId = $servicesPage?->id;

        ServicesPageSection::updateOrCreate(
            ['section_key' => 'services_hero'],
            [
                'page_id' => $pageId,
                'section_order' => 1,
                'name' => 'Services Hero Section',
                'description' => 'Top badge ("Services We Offer") with glowing red dot, and main headline ("From Dubai\'s best minds to a global powerhouse").',
                'edit_url' => '/admin/services-hero-sections/1/edit',
                'is_active' => true,
            ]
        );

        ServicesPageSection::updateOrCreate(
            ['section_key' => 'services_list'],
            [
                'page_id' => $pageId,
                'section_order' => 2,
                'name' => 'What We Offer (Services List)',
                'description' => 'What We Offer badge, main headline, 3 dynamic service cards with active state transitions, and "View all services" CTA button.',
                'edit_url' => '/admin/services-list-sections/1/edit',
                'is_active' => true,
            ]
        );

        ServicesPageSection::updateOrCreate(
            ['section_key' => 'services_industries'],
            [
                'page_id' => $pageId,
                'section_order' => 3,
                'name' => 'Industries We Serve & CTA Banner',
                'description' => 'Serving Diverse Sectors badge, Industries We Serve headline, 8 industry cards grid (Real Estate, Retail, Healthcare, etc.), and red CTA banner ("Ready to grow your brand?").',
                'edit_url' => '/admin/services-industries-sections/1/edit',
                'is_active' => true,
            ]
        );

        ServicesPageSection::updateOrCreate(
            ['section_key' => 'services_smm_stats'],
            [
                'page_id' => $pageId,
                'section_order' => 4,
                'name' => 'Experience Growth with Leading SMM (Stats)',
                'description' => 'SMM headline ("Experience Growth with Leading SMM"), narrative copy, and 4 performance stat cards with dark/light styling.',
                'edit_url' => '/admin/services-smm-sections/1/edit',
                'is_active' => true,
            ]
        );
    }
}

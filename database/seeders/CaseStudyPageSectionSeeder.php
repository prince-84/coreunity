<?php

namespace Database\Seeders;

use App\Models\CaseStudyPageSection;
use App\Models\Page;
use Illuminate\Database\Seeder;

class CaseStudyPageSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $caseStudyPage = Page::where('slug', 'case-study')->orWhere('slug', 'portfolio')->first();
        $pageId = $caseStudyPage?->id;

        CaseStudyPageSection::updateOrCreate(
            ['section_key' => 'case_study_hero'],
            [
                'page_id' => $pageId,
                'section_order' => 1,
                'name' => 'Case Studies Hero Section',
                'description' => 'Top badge ("Case Studies") with glowing red dot, headline ("Stories of strategy, creativity, and measurable impact."), narrative description, and visibility toggle.',
                'edit_url' => '/admin/case-study-hero-sections/1/edit',
                'is_active' => true,
            ]
        );
    }
}

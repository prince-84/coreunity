<?php

namespace Database\Seeders;

use App\Models\BlogPageSection;
use App\Models\Page;
use Illuminate\Database\Seeder;

class BlogPageSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $blogPage = Page::where('slug', 'blog')->first();
        $pageId = $blogPage?->id;

        BlogPageSection::updateOrCreate(
            ['section_key' => 'blog_hero'],
            [
                'page_id' => $pageId,
                'section_order' => 1,
                'name' => 'Blog Hero Section',
                'description' => 'Top badge ("Our Blogs") with glowing red dot, headline ("Stories of strategy, creativity, and measurable impact."), narrative description, and visibility toggle.',
                'edit_url' => '/admin/blog-hero-sections/1/edit',
                'is_active' => true,
            ]
        );
    }
}

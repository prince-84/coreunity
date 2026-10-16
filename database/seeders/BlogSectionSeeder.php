<?php

namespace Database\Seeders;

use App\Models\BlogSection;
use Illuminate\Database\Seeder;

class BlogSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BlogSection::updateOrCreate(
            ['id' => 1],
            [
                'mini_title' => 'Our Blog',
                'main_title' => "What's going on in the\nindustry?",
                'overlay_text' => "View Full\nBlog",
                'date_icon' => 'calendar_image.png',
                'category_icon' => 'file_image.png',
                'posts' => [
                    [
                        'title' => 'How to Get Your Local Business on Google Maps (Step-by-Step)',
                        'date' => 'January 10, 2022',
                        'category' => 'Local SEO',
                        'excerpt' => "If you run a local business and you're not showing up on Google Maps, you're handing customers straight to competitors who are...",
                        'slug' => 'local-business-on-google-maps',
                        'image' => 'blog_image.png',
                    ],
                    [
                        'title' => 'Google Ads vs. Meta Ads: Which Is Right for Your Business?',
                        'date' => 'January 10, 2022',
                        'category' => 'Paid Marketing',
                        'excerpt' => "If you've spent any time in a marketing Slack channel, a Facebook group for small business owners, or even just a late-night Google search...",
                        'slug' => 'google-ads-vs-meta-ads',
                        'image' => 'blog_image.png',
                    ],
                    [
                        'title' => 'Daily Manual Tasks Your Business Should Automate Today',
                        'date' => 'January 10, 2022',
                        'category' => 'Business Growth',
                        'excerpt' => "If you've been putting off the decision to automate manual tasks in your business, this is your sign to stop waiting...",
                        'slug' => 'daily-manual-tasks',
                        'image' => 'blog_image.png',
                    ],
                    [
                        'title' => '5 Must-Have Features Every Business Website Needs',
                        'date' => 'January 10, 2022',
                        'category' => 'Web Design',
                        'excerpt' => "Let's be honest for a second: most business owners don't think about their website until something goes wrong...",
                        'slug' => 'business-website-features',
                        'image' => 'blog_image.png',
                    ],
                ],
                'is_active' => true,
            ]
        );
    }
}

<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pages = [
            [
                'title' => 'Home',
                'slug' => 'home',
                'hero_badge' => 'DIGITAL AGENCY',
                'hero_headline' => 'We are a bold and innovative digital agency based in the UAE.',
                'hero_subheadline' => 'Transforming brands across Dubai and globally with performance-driven marketing, web design & scalable tech.',
                'hero_cta_text' => 'Schedule a call',
                'hero_cta_url' => '#contact',
                'hero_image' => 'earth_globe.png',
                'global_presence' => ['USA', 'UAE', 'Saudi Arabia', 'Pakistan'],
                'meta_title' => 'Digital Marketing Agency in Dubai, UAE | CoreUnity Solutions',
                'meta_description' => 'CoreUnity Solutions is a Dubai-based digital marketing agency offering web development, SEO, branding & PPC. Trusted by 500+ clients.',
                'show_in_navbar' => true,
                'navbar_order' => 1,
                'is_published' => true,
            ],
            [
                'title' => 'About',
                'slug' => 'about',
                'hero_badge' => 'ABOUT COREUNITY',
                'hero_headline' => "From Dubai's best minds to a global powerhouse.",
                'hero_subheadline' => 'We started in the heart of Dubai with a single goal: help ambitious companies achieve digital excellence.',
                'hero_cta_text' => 'Speak to an Expert',
                'hero_cta_url' => '#contact',
                'hero_image' => 'Zeeshan_image.png',
                'global_presence' => ['USA', 'UAE', 'Saudi Arabia', 'Pakistan'],
                'meta_title' => 'About Us | CoreUnity Solutions - Dubai Digital Agency',
                'meta_description' => 'Learn about CoreUnity Solutions, our leadership team, vision, and how we empower companies across the UAE and worldwide.',
                'show_in_navbar' => true,
                'navbar_order' => 2,
                'is_published' => true,
            ],
            [
                'title' => 'Services',
                'slug' => 'services',
                'hero_badge' => 'OUR EXPERTISE',
                'hero_headline' => 'Empowering Businesses with Full-Stack Digital Solutions.',
                'hero_subheadline' => 'Comprehensive suite of services covering Web Development, Branding, SEO, SMM, Mobile Apps, and PPC.',
                'hero_cta_text' => 'Explore Services',
                'hero_cta_url' => '#services',
                'hero_image' => 'digital_image.png',
                'global_presence' => ['USA', 'UAE', 'Saudi Arabia', 'Pakistan'],
                'meta_title' => 'Services | CoreUnity Solutions Dubai',
                'meta_description' => 'Discover our full spectrum of digital marketing, UI/UX, web development, SEO, and branding services.',
                'show_in_navbar' => true,
                'navbar_order' => 3,
                'is_published' => true,
            ],
            [
                'title' => 'Case Study',
                'slug' => 'case-study',
                'hero_badge' => 'OUR WORK & IMPACT',
                'hero_headline' => 'Transformative Case Studies & Real Results.',
                'hero_subheadline' => 'Explore how we helped premier brands achieve exponential revenue and brand dominance across the UAE.',
                'hero_cta_text' => 'View Projects',
                'hero_cta_url' => '#projects',
                'hero_image' => 'dpworld_image.png',
                'global_presence' => ['USA', 'UAE', 'Saudi Arabia', 'Pakistan'],
                'meta_title' => 'Case Studies | CoreUnity Solutions',
                'meta_description' => 'Real case studies and demonstrable results delivered for clients across real estate, fintech, retail, and hospitality.',
                'show_in_navbar' => true,
                'navbar_order' => 4,
                'is_published' => true,
            ],
            [
                'title' => 'Blog',
                'slug' => 'blog',
                'hero_badge' => 'KNOWLEDGE HUB',
                'hero_headline' => 'Insights, Strategies & Digital Marketing Trends.',
                'hero_subheadline' => 'Stay ahead of the curve with expert insights on SEO, digital transformation, branding, and conversion optimization.',
                'hero_cta_text' => 'Read Articles',
                'hero_cta_url' => '#articles',
                'hero_image' => 'blog_image.png',
                'global_presence' => ['USA', 'UAE', 'Saudi Arabia', 'Pakistan'],
                'meta_title' => 'Blog & Industry Insights | CoreUnity Solutions',
                'meta_description' => 'Actionable digital marketing strategies, SEO techniques, and growth insights from Dubai leading digital experts.',
                'show_in_navbar' => true,
                'navbar_order' => 5,
                'is_published' => true,
            ],
            [
                'title' => 'Contact',
                'slug' => 'contact',
                'hero_badge' => 'GET IN TOUCH',
                'hero_headline' => "Let's Build Something Extraordinary Together.",
                'hero_subheadline' => 'Have a project in mind or need expert digital advisory? Our Dubai team is ready to assist you.',
                'hero_cta_text' => 'Request Consultation',
                'hero_cta_url' => '#contact-form',
                'hero_image' => 'marketing_image.png',
                'global_presence' => ['USA', 'UAE', 'Saudi Arabia', 'Pakistan'],
                'meta_title' => 'Contact Us | CoreUnity Solutions Dubai',
                'meta_description' => 'Get in touch with CoreUnity Solutions in Dubai, UAE. Request a free consultation or project proposal today.',
                'show_in_navbar' => true,
                'navbar_order' => 6,
                'is_published' => true,
            ],
        ];

        foreach ($pages as $pageData) {
            Page::updateOrCreate(
                ['slug' => $pageData['slug']],
                $pageData
            );
        }
    }
}

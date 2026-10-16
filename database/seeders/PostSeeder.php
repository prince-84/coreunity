<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::first();
        $adminId = $admin ? $admin->id : null;

        $posts = [
            [
                'title' => 'How to Get Your Local Business on Google Maps (Step-by-Step)',
                'slug' => 'local-business-on-google-maps',
                'badge' => 'Local SEO Guide',
                'category' => 'Local SEO',
                'author_name' => 'Faraz & CoreUnity Team',
                'excerpt' => 'If you run a local business and you\'re not showing up on Google Maps, you\'re handing customers straight to competitors who are. Here is the step-by-step blueprint to claim, verify, and optimize your Google Business Profile.',
                'featured_image' => 'blog1_img_584x348.png',
                'hero_banner' => 'blog1_img_584x348.png',
                'content' => '<p>If you run a local business and you\'re not showing up on Google Maps, you\'re handing customers straight to competitors who are. Most people don\'t flip through a phone book anymore; they type "plumber near me" or "coffee shop open now" into Google and pick from whatever pops up on the map.</p><p>The good news is that getting listed doesn\'t cost anything, and it isn\'t complicated once you know the order of operations. This guide walks through how to create a Google Business Profile from scratch, get it verified, and set it up so it actually helps you win local customers instead of sitting there half-finished and ignored.</p><h3>Step 1: Check If Your Business Already Exists on Google Maps</h3><p>Before creating a new profile, make sure an unclaimed listing doesn\'t already exist. Google often auto-generates listings based on web directories and user reviews.</p><h3>Step 2: Sign In with a Dedicated Business Google Account</h3><p>Always use a shared corporate Google Workspace account (e.g. admin@yourbusiness.com) rather than personal Gmail addresses to ensure continuity.</p><h3>Step 3: Choose the Precise Business Category</h3><p>Your primary category carries the heaviest ranking weight in local algorithms. Be as specific as possible (e.g. "Dental Clinic" rather than generic "Health").</p>',
                'highlights' => [
                    ['icon' => '✓', 'title' => 'Mandatory Verification', 'description' => 'Complete video or postcard verification within 14 days to appear in search.'],
                    ['icon' => '✓', 'title' => 'High-Resolution Photos', 'description' => 'Listings with real storefront photos receive 42% more requests for directions.'],
                    ['icon' => '✓', 'title' => 'Consistent NAP Data', 'description' => 'Exact Name, Address, and Phone matching across all online directories.'],
                ],
                'stats' => [
                    ['number' => '42%', 'label' => 'More Direction Requests with Photos'],
                    ['number' => '250%', 'label' => 'Average Increase in Local Calls'],
                    ['number' => '10 Steps', 'label' => 'Complete Setup Checklist'],
                    ['number' => '100%', 'label' => 'Free Verification Method'],
                ],
                'faqs' => [
                    ['question' => 'How long does Google Business Profile verification take?', 'answer' => 'Phone or email verification can occur in minutes, while postal mail takes 5 to 14 business days.'],
                    ['question' => 'Can I hide my physical address if I work from home?', 'answer' => 'Yes, service-area businesses can define their operational radius while hiding their exact home address.'],
                ],
                'sort_order' => 1,
            ],
            [
                'title' => 'Google Ads vs. Meta Ads: Which Is Right for Your Business?',
                'slug' => 'google-ads-vs-meta-ads',
                'badge' => 'Paid Advertising Comparison',
                'category' => 'Paid Marketing',
                'author_name' => 'CoreUnity Paid Media Team',
                'excerpt' => 'If you\'ve spent any time in marketing channels, you\'ve heard debates about Google Ads vs. Meta Ads. Discover which platform delivers the highest ROI for your business model in the UAE.',
                'featured_image' => 'blog2_resized_584x348.png',
                'hero_banner' => 'blog2_resized_584x348.png',
                'content' => '<p>The fundamental difference comes down to intent versus attention. Google Ads captures active search intent (people looking for solutions right now), whereas Meta Ads creates demand through visual disruption (introducing products to relevant demographics as they scroll).</p><p>For emergency services, real estate investors, and high-ticket B2B software, Google Search Ads almost always captures higher-quality immediate inquiries. For lifestyle products, fashion, F&B, and brand discovery, Meta\'s visual algorithm excels at building brand affinity.</p>',
                'highlights' => [
                    ['icon' => '✓', 'title' => 'Google Ads = Demand Capture', 'description' => 'Targets users actively searching with high buying intent.'],
                    ['icon' => '✓', 'title' => 'Meta Ads = Demand Generation', 'description' => 'Targets hyper-specific lookalikes and interest demographics.'],
                ],
                'stats' => [
                    ['number' => '5.2x', 'label' => 'Average ROAS on Blended Campaigns'],
                    ['number' => '45%', 'label' => 'Lower CPL on Multi-Channel Funnels'],
                    ['number' => '60%', 'label' => 'Higher Conversion with Remarketing'],
                    ['number' => '24/7', 'label' => 'Continuous Algorithm Learning'],
                ],
                'faqs' => [
                    ['question' => 'Which platform should a small business start with?', 'answer' => 'If you offer an urgent or problem-solving service, start with Google Search. If your product is visually captivating, start with Instagram Ads.'],
                ],
                'sort_order' => 2,
            ],
            [
                'title' => 'Daily Manual Tasks Your Business Should Automate Today',
                'slug' => 'daily-manual-tasks',
                'badge' => 'Operational Efficiency Guide',
                'category' => 'Business Growth',
                'author_name' => 'CoreUnity Automation Lab',
                'excerpt' => 'Still doing repetitive paperwork and data entry by hand? Discover the three daily manual tasks every business should automate today to save 20+ hours per week.',
                'featured_image' => 'blog3_resized_584x348.png',
                'hero_banner' => 'blog3_resized_584x348.png',
                'content' => '<p>Every hour spent manually copying lead info between spreadsheets, chasing invoices, or answering repetitive customer questions is an hour stolen from strategic growth. Automation is no longer reserved for Fortune 500 companies; modern no-code workflows and AI agents allow any UAE SME to operate like a tech enterprise.</p><h3>1. Invoicing and Payment Reminders</h3><p>Manual invoice follow-ups drain cash flow. Automated accounting connections trigger scheduled payment reminders, reducing overdue invoices by up to 70%.</p><h3>2. Instant Lead Qualification & Routing</h3><p>Leads contacted within 5 minutes are 21x more likely to enter the sales cycle than those contacted after 30 minutes.</p>',
                'highlights' => [
                    ['icon' => '✓', 'title' => 'Zero-Human Data Entry', 'description' => 'Sync web inquiries directly into your CRM, Slack, and accounting software.'],
                    ['icon' => '✓', 'title' => 'Automated Review Requests', 'description' => 'Trigger automated review requests right after delivery or consultation.'],
                ],
                'stats' => [
                    ['number' => '20+ Hrs', 'label' => 'Saved Per Week on Data Entry'],
                    ['number' => '70%', 'label' => 'Reduction in Overdue Invoices'],
                    ['number' => '21x', 'label' => 'Higher Lead Qualification within 5 Min'],
                    ['number' => '99%', 'label' => 'Zero Human Typo Error Rate'],
                ],
                'faqs' => [
                    ['question' => 'Do we need a programmer to set up business automations?', 'answer' => 'No, tools like Zapier, Make, and webhook integrations allow us to connect your existing tools within days.'],
                ],
                'sort_order' => 3,
            ],
            [
                'title' => '5 Must-Have Features Every Business Website Needs',
                'slug' => 'business-website-features',
                'badge' => 'Website Conversion Checklist',
                'category' => 'Web Design',
                'author_name' => 'CoreUnity Web Engineering',
                'excerpt' => 'Most business owners don\'t think about their website until something goes wrong. Here are the 5 non-negotiable features every high-converting business website must have in 2026.',
                'featured_image' => 'blog4.png',
                'hero_banner' => 'blog4.png',
                'content' => '<p>A modern corporate website is your hardest-working 24/7 salesperson. If it is slow, confusing, or lacks clear calls to action, visitors bounce to competitors within three seconds. In this checklist, we unpack the five essential architectural pillars that separate high-converting websites from digital ghost towns.</p><h3>1. Sub-Two-Second Mobile Speed</h3><p>Over 75% of your visitors in the UAE view your website on smartphones. If it doesn\'t load in under two seconds, half your paid ad budget is wasted.</p><h3>2. Clear Value Proposition Above the Fold</h3><p>Visitors must understand what you do, who you serve, and how to take action within 5 seconds of landing on your homepage.</p>',
                'highlights' => [
                    ['icon' => '✓', 'title' => 'Direct WhatsApp & Phone Click', 'description' => 'Floating instant action buttons converting mobile browsers instantly.'],
                    ['icon' => '✓', 'title' => 'Social Proof Above the Fold', 'description' => 'Client ratings, testimonials, and verified review badges.'],
                ],
                'stats' => [
                    ['number' => '2.0s', 'label' => 'Target Maximum Load Time'],
                    ['number' => '3x', 'label' => 'Conversion Increase with WhatsApp CTA'],
                    ['number' => '85%', 'label' => 'Mobile Viewport Share in UAE'],
                    ['number' => '5 Pillars', 'label' => 'Essential Performance Audit'],
                ],
                'faqs' => [
                    ['question' => 'How can I test my website speed right now?', 'answer' => 'Use Google PageSpeed Insights to measure your Core Web Vitals on mobile and desktop.'],
                ],
                'sort_order' => 4,
            ],
        ];

        foreach ($posts as $data) {
            $data['user_id'] = $adminId;
            $data['status'] = 'published';
            $data['published_at'] = now();

            Post::updateOrCreate(
                ['slug' => $data['slug']],
                $data
            );
        }
    }
}

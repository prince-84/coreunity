<?php

namespace Database\Seeders;

use App\Models\FooterSection;
use Illuminate\Database\Seeder;

class FooterSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FooterSection::updateOrCreate(
            ['id' => 1],
            [
                'newsletter_title' => 'Join Our Newsletter',
                'newsletter_subtitle' => 'Subscribe now to stay updated on the latest market trends',
                'newsletter_button_text' => 'Subscribe',
                'newsletter_is_active' => true,
                'logo' => 'logo.png',
                'address' => 'Churchill Tower, Business Bay, Dubai, UAE',
                'email' => 'contact@coreunitysolutions.com',
                'phone' => '+971 50 555 9646',
                'facebook_url' => 'https://www.facebook.com/coreunitysolutions',
                'instagram_url' => 'https://www.instagram.com/coreunitysolutions/',
                'youtube_url' => 'https://www.youtube.com/@coreunitysolutions',
                'linkedin_url' => 'https://www.linkedin.com/company/coreunitysolutions',
                'tiktok_url' => 'https://www.tiktok.com/@coreunitysolutions?lang=en',
                'col_2_title' => 'Smart Technology Solutions',
                'col_2_links' => [
                    ['label' => 'Web Development', 'url' => '/services/web-development'],
                    ['label' => 'UI/UX Design', 'url' => '/services/ui-ux-design'],
                    ['label' => 'Ecommerce Web Development', 'url' => '/services/ecommerce-web-development'],
                    ['label' => 'Mobile App Development', 'url' => '/services/mobile-app-development'],
                    ['label' => 'Artificial Intelligence', 'url' => '/services/artificial-intelligence'],
                    ['label' => 'Chatbot Development', 'url' => '/services/chatbot-development'],
                    ['label' => 'Virtual Reality Development', 'url' => '/services/virtual-reality-development'],
                    ['label' => 'Augmented Reality Development', 'url' => '/services/augmented-reality-development'],
                ],
                'col_3_title' => 'Digital Growth & Marketing',
                'col_3_links' => [
                    ['label' => 'Digital Marketing', 'url' => '/services/digital-marketing'],
                    ['label' => 'Search Engine Optimization (SEO)', 'url' => '/services/search-engine-optimization'],
                    ['label' => 'Generative Engine Optimization (GEO)', 'url' => '/services/generative-engine-optimization'],
                    ['label' => 'Pay-Per-Click Advertising (PPC)', 'url' => '/services/pay-per-click-advertising'],
                    ['label' => 'Social Media Marketing', 'url' => '/services/social-media-marketing'],
                    ['label' => 'Influencer Marketing', 'url' => '/services/influencer-marketing'],
                    ['label' => 'Branding & Creative Design', 'url' => '/services/branding-and-creative-design'],
                    ['label' => 'AI Development Company', 'url' => '/services/ai-development-company'],
                ],
                'col_4_title' => 'Industry',
                'col_4_links' => [
                    ['label' => 'Real Estate', 'url' => '/industries/real-estate'],
                    ['label' => 'Government', 'url' => '/industries/government'],
                    ['label' => 'Healthcare', 'url' => '/industries/healthcare'],
                    ['label' => 'Education', 'url' => '/industries/education'],
                    ['label' => 'Hospitality', 'url' => '/industries/hospitality'],
                    ['label' => 'legal & law', 'url' => '/industries/legal-and-law'],
                    ['label' => 'FinTech', 'url' => '/industries/fintech'],
                ],
                'copyright_text' => '© 2026. CoreUnity Solutions',
                'privacy_policy_url' => '/privacy-policy',
                'terms_conditions_url' => '/terms-and-conditions',
                'is_active' => true,
            ]
        );
    }
}

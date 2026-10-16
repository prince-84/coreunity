<?php

namespace Database\Seeders;

use App\Models\CaseStudy;
use Illuminate\Database\Seeder;

class CaseStudySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cases = [
            [
                'project_title' => 'DentalZorg : Modern Patient-Booking Platform',
                'title' => 'DentalZorg : From a Slow, Outdated Site to a Modern Patient-Booking Platform',
                'slug' => 'website',
                'client_name' => 'DentalZorg Clinics',
                'badge' => 'Case Study (Website Development)',
                'category' => 'Healthcare & Web',
                'excerpt' => 'A complete architectural redesign transforming a slow clinic website into a high-converting patient-booking engine in Dubai.',
                'featured_image' => 'website.jpg',
                'hero_image' => 'website.jpg',
                'challenge_text' => '<p>DentalZorg clinic was struggling with an outdated, sluggish website that took over 6 seconds to load. Patients faced high friction when attempting to book consultations online, causing an estimated 60% drop-off rate on mobile viewports. The clinic was losing prospective patients to competitors who offered modern, 1-click booking experiences.</p>',
                'solution_text' => '<p>CoreUnity engineered a custom, high-speed patient portal built on Laravel and Tailwind CSS. We introduced an intuitive 3-step appointment scheduling funnel, instant WhatsApp consultation routing, automated SMS reminders, and an interactive team directory highlighting doctor credentials and clinic specialties.</p>',
                'content' => '<p>DentalZorg, a premier dental care provider in Dubai, needed to modernise its digital patient touchpoints to match the five-star service delivered in their physical clinic. Our team conducted an exhaustive user journey audit, eliminating non-essential booking fields and designing an ultra-clean mobile-first interface.</p>',
                'highlights' => [
                    ['icon' => '✓', 'title' => 'Sub-Second Page Speeds', 'description' => 'Optimized Core Web Vitals resulting in 0.8s mobile load times.'],
                    ['icon' => '✓', 'title' => '3-Step Seamless Booking', 'description' => 'Frictionless appointment scheduling with real-time calendar slot picking.'],
                    ['icon' => '✓', 'title' => 'Automated Patient Reminders', 'description' => 'Integrated WhatsApp & SMS notifications reducing no-show rates by 45%.'],
                ],
                'stats' => [
                    ['number' => '145%', 'label' => 'Increase in Online Bookings'],
                    ['number' => '68%', 'label' => 'Faster Page Load Speed'],
                    ['number' => '45%', 'label' => 'Reduction in No-Shows'],
                    ['number' => '4.9/5', 'label' => 'Patient Booking Satisfaction'],
                ],
                'metrics' => [
                    'Online Bookings' => '+145%',
                    'Load Speed' => '0.8s',
                    'Mobile Bounce' => '-52%',
                ],
                'faqs' => [
                    ['question' => 'How did the redesign improve patient acquisition?', 'answer' => 'By streamlining the booking flow into 3 simple steps and optimizing for mobile viewports, mobile appointment conversions increased by 145% in the first 60 days.'],
                ],
                'sort_order' => 1,
            ],
            [
                'project_title' => 'UrbanCart: Custom Retail Shopping App',
                'title' => 'UrbanCart: Streamlining Retail with a Custom Shopping App [UrbanCart], Dubai',
                'slug' => 'mobile-app',
                'client_name' => 'UrbanCart UAE',
                'badge' => 'Case Study (Mobile App Development)',
                'category' => 'Retail & E-Commerce',
                'excerpt' => 'Streamlining retail operations and unlocking mobile-first e-commerce growth for Dubai multi-brand retailer UrbanCart.',
                'featured_image' => 'mob-app.jpg',
                'hero_image' => 'mob-app.jpg',
                'challenge_text' => '<p>UrbanCart, a fast-growing multi-brand retail brand in Dubai, relied entirely on physical foot traffic across Deira and Business Bay. Without a dedicated mobile application, they had no direct communication channel to re-engage past shoppers, and third-party delivery aggregators were eating 25% of their net margins.</p>',
                'solution_text' => '<p>CoreUnity developed a native-performing iOS and Android shopping application using Flutter. The app featured lightning-fast category search, Apple Pay / Google Pay one-tap checkout, personalized loyalty rewards, and push notifications announcing flash sales.</p>',
                'content' => '<p>UrbanCart transitioned from brick-and-mortar retail dependency into an omnichannel powerhouse. Within four months of launch, over 50,000 active shoppers in Dubai downloaded the app, generating over 40% of the brand\'s total retail sales directly through mobile.</p>',
                'highlights' => [
                    ['icon' => '✓', 'title' => 'One-Tap Apple Pay Checkout', 'description' => 'Checkout completion time slashed from 3 minutes to under 20 seconds.'],
                    ['icon' => '✓', 'title' => 'Gamified Loyalty Rewards', 'description' => 'Points earning system driving an immediate 35% boost in repeat monthly orders.'],
                    ['icon' => '✓', 'title' => 'Smart Push Notifications', 'description' => 'Targeted re-engagement alerts achieving an average 22% open rate.'],
                ],
                'stats' => [
                    ['number' => '40%', 'label' => 'Share of Total Sales from App'],
                    ['number' => '50K+', 'label' => 'App Downloads in 90 Days'],
                    ['number' => '35%', 'label' => 'Higher Repeat Order Rate'],
                    ['number' => '4.8★', 'label' => 'Average Store Rating'],
                ],
                'metrics' => [
                    'Mobile Sales' => '+40%',
                    'Active Users' => '50,000+',
                    'Repeat Purchases' => '+35%',
                ],
                'sort_order' => 2,
            ],
            [
                'project_title' => 'The Daily Grind: Social Media Strategy',
                'title' => 'The Daily Grind: Building an Engaged Community for The Daily Grind, a Dubai-Based F&B Brand',
                'slug' => 'smm',
                'client_name' => 'The Daily Grind F&B',
                'badge' => 'Case Study (Social Media Marketing)',
                'category' => 'Food & Beverage',
                'excerpt' => 'Viral short-form storytelling and community engagement that turned a specialty café into an iconic Dubai lifestyle destination.',
                'featured_image' => 'smm.jpg',
                'hero_image' => 'smm.jpg',
                'challenge_text' => '<p>The Daily Grind café in Dubai had world-class artisanal coffee and a stunning interior aesthetic, yet their social media presence was static, generic, and failing to generate foot traffic. Posts received less than 50 likes, and customer discovery on Instagram was practically non-existent.</p>',
                'solution_text' => '<p>CoreUnity revamped their entire visual strategy with high-aesthetic Instagram Reels and TikTok videos highlighting barista craftsmanship, secret menu drinks, and cozy study aesthetics. We engaged food creators and launched the viral #DubaiCoffeeVibes challenge.</p>',
                'content' => '<p>By shifting from static promotional images to dynamic, human-centered micro-videos, The Daily Grind exploded in popularity across Dubai. Weekday morning queues formed out the door, and the brand\'s Instagram following surged by 180% within 90 days.</p>',
                'highlights' => [
                    ['icon' => '✓', 'title' => 'High-Aesthetic Short-Form Video', 'description' => '12 monthly viral Reels showcasing barista art and coffee culture.'],
                    ['icon' => '✓', 'title' => 'Creator Collaboration Nights', 'description' => 'Private tasting events generating hundreds of organic user tags.'],
                ],
                'stats' => [
                    ['number' => '180%', 'label' => 'Instagram Follower Growth'],
                    ['number' => '3.5M+', 'label' => 'Organic Video Impressions'],
                    ['number' => '65%', 'label' => 'Surge in Weekend Foot Traffic'],
                    ['number' => '4.9★', 'label' => 'Customer Google Review Score'],
                ],
                'metrics' => [
                    'Followers' => '+180%',
                    'Video Reach' => '3.5M+',
                    'Foot Traffic' => '+65%',
                ],
                'sort_order' => 3,
            ],
            [
                'project_title' => 'Dubai Prime Real Estate: Lead Generation',
                'title' => 'Dubai Prime Real Estate: Driving Qualified Leads for Dubai Prime Real Estate, a Dubai Real Estate Firm',
                'slug' => 'ppc',
                'client_name' => 'Dubai Prime Real Estate',
                'badge' => 'Case Study (Pay Per Click Advertising)',
                'category' => 'Real Estate',
                'excerpt' => 'Precision Google Ads and Meta campaigns generating high-net-worth investor inquiries and AED 25M in closed luxury property sales.',
                'featured_image' => 'ppc.jpg',
                'hero_image' => 'ppc.jpg',
                'challenge_text' => '<p>The Dubai luxury property market is fiercely competitive, with generic real estate lead costs exceeding AED 450 per lead with a 90% spam rate. Dubai Prime Real Estate was burning budget on low-intent clicks from unqualified buyers.</p>',
                'solution_text' => '<p>CoreUnity completely overhauled their campaign architecture. We built dedicated, hyper-targeted landing pages for specific luxury developments in Downtown Dubai and Palm Jumeirah, enforced strict income and geo-targeting filters, and added mandatory WhatsApp pre-qualification.</p>',
                'content' => '<p>The new campaign funnel drove ultra-qualified international investors from Europe, the GCC, and India. Cost per qualified lead plummeted by 50%, and the agency closed AED 25,000,000 in luxury off-plan transactions within a 4-month period.</p>',
                'highlights' => [
                    ['icon' => '✓', 'title' => 'Hyper-Targeted High-Net-Worth Audiences', 'description' => 'Filtering by net worth indicators and accredited investor profiles.'],
                    ['icon' => '✓', 'title' => 'Instant WhatsApp CRM Routing', 'description' => 'Connecting verified buyers with senior property brokers in under 60 seconds.'],
                ],
                'stats' => [
                    ['number' => 'AED 25M+', 'label' => 'Closed Property Deals'],
                    ['number' => '50%', 'label' => 'Reduction in Cost Per Lead'],
                    ['number' => '4.2x', 'label' => 'Return on Ad Spend (ROAS)'],
                    ['number' => '120+', 'label' => 'Verified Buyer Inquiries / Month'],
                ],
                'metrics' => [
                    'Closed Sales' => 'AED 25M+',
                    'Cost Per Lead' => '-50%',
                    'Ad ROAS' => '4.2x',
                ],
                'sort_order' => 4,
            ],
            [
                'project_title' => 'Al Hilal Restaurant (Deira): Print & Brand Media',
                'title' => 'Al Hilal Restaurant (Frij Murar): From Local Gem to Deira\'s Go-To Dining Destination',
                'slug' => 'print',
                'client_name' => 'Al Hilal Restaurant',
                'badge' => 'Case Study (Print Media & Branding)',
                'category' => 'Hospitality & Print',
                'excerpt' => 'Complete print collateral overhaul, luxury embossed menus, and neighborhood flyer campaigns that doubled dining footfall in Deira.',
                'featured_image' => 'print.jpg',
                'hero_image' => 'print.jpg',
                'challenge_text' => '<p>Al Hilal, a beloved historic dining spot in Deira, had outdated, faded menus and no modern print branding to capture corporate lunch crowds and tourists exploring the historic district.</p>',
                'solution_text' => '<p>CoreUnity designed and produced premium tactile menus featuring gold foil embossing, water-resistant textures, bilingual typography, branded takeout packaging, and promotional direct-mail inserts distributed to commercial offices across Deira.</p>',
                'content' => '<p>The sensory impact of the new print materials elevated the restaurant\'s perceived prestige, resulting in a 200% surge in dine-in foot traffic and an 80% boost in corporate catering contracts.</p>',
                'highlights' => [
                    ['icon' => '✓', 'title' => 'Luxury Gold Foil Embossed Menus', 'description' => 'Tactile, premium dining menus designed for longevity and luxury aesthetics.'],
                    ['icon' => '✓', 'title' => 'Eco-Friendly Takeout Packaging', 'description' => 'Branded kraft paper packaging reinforcing sustainability and brand identity.'],
                ],
                'stats' => [
                    ['number' => '200%', 'label' => 'Surge in Dining Footfall'],
                    ['number' => '80%', 'label' => 'Increase in Corporate Catering'],
                    ['number' => '35%', 'label' => 'Higher Average Order Value'],
                    ['number' => '10,000+', 'label' => 'Branded Takeout Kits Delivered'],
                ],
                'metrics' => [
                    'Dine-in Growth' => '+200%',
                    'Catering Deals' => '+80%',
                    'AOV Increase' => '+35%',
                ],
                'sort_order' => 5,
            ],
            [
                'project_title' => 'Kelly\'s Cajun Grill: Local SEO Dominance',
                'title' => 'Kelly\'s Cajun Grill (UAE): From Mall Footfall to Digital Dominance via SEO',
                'slug' => 'seo',
                'client_name' => 'Kelly\'s Cajun Grill',
                'badge' => 'Case Study (Search Engine Optimization)',
                'category' => 'Food & Local Search',
                'excerpt' => 'Dominating Google Maps Local Pack across Dubai Mall and Mall of the Emirates, resulting in a 250% surge in local search volume.',
                'featured_image' => 'seo.jpg',
                'hero_image' => 'seo.jpg',
                'challenge_text' => '<p>Despite holding prime food court real estate in Dubai Mall and Mall of the Emirates, Kelly\'s Cajun Grill had zero digital footprint on Google Maps and search queries like "Cajun food Dubai" or "best shrimp Dubai Mall". Competitors were dominating the Google 3-Pack.</p>',
                'solution_text' => '<p>CoreUnity executed an aggressive Local SEO campaign: verifying and optimizing Google Business Profiles with appetizing menu photography, structuring bilingual schema markup, and driving authentic verified customer reviews.</p>',
                'content' => '<p>Within 6 weeks, Kelly\'s Cajun Grill claimed the #1 spot on Google Maps for all key local queries, generating 250% more map direction requests and an immediate 40% uptick in daily delivery orders.</p>',
                'highlights' => [
                    ['icon' => '✓', 'title' => 'Google 3-Pack Local Dominance', 'description' => 'Ranked #1 for "Cajun restaurant Dubai" across high-density shopping districts.'],
                    ['icon' => '✓', 'title' => 'Review Generation Engine', 'description' => 'Accumulated over 450 five-star verified customer reviews in 90 days.'],
                ],
                'stats' => [
                    ['number' => '250%', 'label' => 'Surge in Google Maps Searches'],
                    ['number' => '40%', 'label' => 'Increase in Delivery Orders'],
                    ['number' => '#1', 'label' => 'Local Pack Rank in Dubai Mall'],
                    ['number' => '4.8★', 'label' => 'Average Rating on Google'],
                ],
                'metrics' => [
                    'Map Searches' => '+250%',
                    'Delivery Volume' => '+40%',
                    'Google Rank' => '#1 Spot',
                ],
                'sort_order' => 6,
            ],
            [
                'project_title' => 'Salwa Real Estate: Luxury Rebranding',
                'title' => 'Salwa Real Estate: From Brand Invisibility to Market Recognition',
                'slug' => 'branding',
                'client_name' => 'Salwa Real Estate',
                'badge' => 'Case Study (Brand Identity & Positioning)',
                'category' => 'Luxury & Real Estate',
                'excerpt' => 'A luxury brand identity, high-fashion stationery suite, and market positioning that established Salwa as an elite boutique agency in Dubai.',
                'featured_image' => 'branding-1.jpg',
                'hero_image' => 'branding-1.jpg',
                'challenge_text' => '<p>Salwa Real Estate operated with an outdated visual identity that failed to reflect the ultra-luxury off-plan properties they represented. High-net-worth sellers were hesitant to list their AED 20M+ villas with a brand that looked amateurish.</p>',
                'solution_text' => '<p>CoreUnity designed a bespoke corporate visual system: an elegant geometric monogram, deep emerald and champagne gold palette, ultra-premium cotton business cards, bespoke pitch decks, and a minimalist luxury website.</p>',
                'content' => '<p>The rebrand immediately unlocked relationships with premier Dubai developers (Emaar, Nakheel, Meraas) and positioned Salwa as an elite boutique real estate advisory, driving 180+ monthly high-net-worth inquiries.</p>',
                'highlights' => [
                    ['icon' => '✓', 'title' => 'Bespoke Luxury Monogram', 'description' => 'Precision geometric brandmark conveying architectural permanence and elegance.'],
                    ['icon' => '✓', 'title' => 'Developer Pitch Decks', 'description' => 'Executive presentation collateral securing master-developer exclusive listings.'],
                ],
                'stats' => [
                    ['number' => '180+', 'label' => 'Monthly HNW Buyer Leads'],
                    ['number' => 'AED 40M+', 'label' => 'Exclusive Listings Secured'],
                    ['number' => '100%', 'label' => 'Brand Consistency Score'],
                    ['number' => '15 Days', 'label' => 'Full Identity Rollout'],
                ],
                'metrics' => [
                    'HNW Inquiries' => '180+/mo',
                    'Listings Gained' => 'AED 40M+',
                    'Brand Prestige' => 'Top Tier',
                ],
                'sort_order' => 7,
            ],
        ];

        foreach ($cases as $data) {
            CaseStudy::updateOrCreate(
                ['slug' => $data['slug']],
                $data
            );
        }
    }
}

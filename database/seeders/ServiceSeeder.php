<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'title' => 'Web Development & Engineering',
                'slug' => 'web-development',
                'badge' => 'Your Web Development Partner',
                'category' => 'Engineering',
                'client_info' => 'Enterprises, Startups & Corporate Brands',
                'excerpt' => 'We build fast, secure, and fully responsive websites that turn visitors into customers. From corporate portals to complex web apps, every platform is engineered for scale and speed.',
                'featured_image' => 'website.jpg',
                'hero_banner' => 'laptop_website.png',
                'highlights' => [
                    ['icon' => '✓', 'title' => 'Clean, Scalable Architecture', 'description' => 'Modern PHP & JavaScript tech stack built for 99.9% uptime and high traffic.'],
                    ['icon' => '✓', 'title' => 'SEO-Ready from Day One', 'description' => 'Semantic HTML5 structure and Core Web Vitals optimization.'],
                    ['icon' => '✓', 'title' => 'Enterprise Security & Compliance', 'description' => 'SSL encryption, CSRF protection, and strict UAE data compliance.'],
                ],
                'stats' => [
                    ['number' => '150+', 'label' => 'Web Platforms Delivered'],
                    ['number' => '99.9%', 'label' => 'Uptime Guarantee'],
                    ['number' => '68%', 'label' => 'Average Speed Boost'],
                    ['number' => '4.9/5', 'label' => 'Client Satisfaction Rating'],
                ],
                'faqs' => [
                    ['question' => 'What technologies do you use for custom web development?', 'answer' => 'We specialize in Laravel, Next.js, React, Tailwind CSS, Node.js, and headless CMS integrations tailored to project requirements.'],
                    ['question' => 'How long does an enterprise web development project take?', 'answer' => 'Standard business sites take 3 to 5 weeks, while complex web applications with bespoke API integrations take 6 to 12 weeks.'],
                    ['question' => 'Do you provide ongoing maintenance and support after launch?', 'answer' => 'Yes, our Dubai team offers 24/7 technical monitoring, security patch management, automated backups, and continuous performance tuning.'],
                ],
                'sort_order' => 1,
            ],
            [
                'title' => 'UI/UX Product Design',
                'slug' => 'ui-ux-design',
                'badge' => 'Leading Design Agency in Dubai',
                'category' => 'Design & Creative',
                'client_info' => 'Digital Products & SaaS Platforms',
                'excerpt' => 'Human-centric UI/UX design that blends aesthetics with conversion psychology. We transform complex digital ideas into intuitive, delightful user experiences.',
                'featured_image' => 'laptop_chart.png',
                'hero_banner' => 'laptop_chart.png',
                'highlights' => [
                    ['icon' => '✓', 'title' => 'User Research & Wireframing', 'description' => 'In-depth persona mapping, user journey blueprints, and low-fidelity prototypes.'],
                    ['icon' => '✓', 'title' => 'Design System Creation', 'description' => 'Scalable Figma component libraries ensuring consistency across all devices.'],
                    ['icon' => '✓', 'title' => 'Interactive Prototyping & Testing', 'description' => 'High-fidelity clickable prototypes validated through rigorous usability testing.'],
                ],
                'stats' => [
                    ['number' => '180+', 'label' => 'Interfaces Designed'],
                    ['number' => '30M+', 'label' => 'End Users Engaged'],
                    ['number' => '45%', 'label' => 'Avg Conversion Increase'],
                    ['number' => '100%', 'label' => 'Pixel-Perfect Delivery'],
                ],
                'faqs' => [
                    ['question' => 'What deliverables do you provide in a UI/UX project?', 'answer' => 'Complete Figma source files, interactive prototypes, documented design system tokens, assets exported in all resolutions, and developer handoff specs.'],
                    ['question' => 'Can you redesign our existing application without disrupting users?', 'answer' => 'Yes, we implement phased UI/UX overhauls based on real analytics data and A/B tests to maximize user retention.'],
                ],
                'sort_order' => 2,
            ],
            [
                'title' => 'E-Commerce Web Development',
                'slug' => 'ecommerce-web-development',
                'badge' => 'High-Converting Online Stores',
                'category' => 'Engineering',
                'client_info' => 'Retailers, D2C Brands & Wholesalers',
                'excerpt' => 'Custom e-commerce platforms engineered for high conversions, lightning-fast checkout, and seamless payment gateway integrations across the UAE and GCC.',
                'featured_image' => 'retail_img.png',
                'hero_banner' => 'retail_img.png',
                'highlights' => [
                    ['icon' => '✓', 'title' => 'GCC Payment Gateways', 'description' => 'Seamless integration with Stripe, Telr, Tabby, Tamara, and Apple Pay.'],
                    ['icon' => '✓', 'title' => 'Inventory & ERP Synchronization', 'description' => 'Real-time stock management and automated order fulfillment pipelines.'],
                    ['icon' => '✓', 'title' => 'Frictionless 1-Click Checkout', 'description' => 'Optimized checkout flows reducing cart abandonment rates.'],
                ],
                'stats' => [
                    ['number' => '85+', 'label' => 'Online Stores Launched'],
                    ['number' => 'AED 50M+', 'label' => 'Annual GMV Processed'],
                    ['number' => '3.2x', 'label' => 'Average ROI Multiplier'],
                    ['number' => '99.99%', 'label' => 'Payment Gateway Uptime'],
                ],
                'faqs' => [
                    ['question' => 'Which e-commerce platforms do you build on?', 'answer' => 'We develop custom headless storefronts (Shopify Plus, WooCommerce, and bespoke Laravel e-commerce engines) based on catalog volume.'],
                ],
                'sort_order' => 3,
            ],
            [
                'title' => 'Mobile App Development',
                'slug' => 'mobile-app-development',
                'badge' => 'iOS & Android App Specialists',
                'category' => 'Engineering',
                'client_info' => 'Startups, On-Demand Services & Enterprise Brands',
                'excerpt' => 'Native and cross-platform mobile applications that users love. Intuitive interfaces, robust backend architecture, and seamless App Store & Google Play deployments.',
                'featured_image' => 'mob-app.jpg',
                'hero_banner' => 'mob-app.jpg',
                'highlights' => [
                    ['icon' => '✓', 'title' => 'Cross-Platform Flutter & React Native', 'description' => 'Single codebase delivering 60fps native performance on both iOS and Android.'],
                    ['icon' => '✓', 'title' => 'Offline-First Synchronization', 'description' => 'Local database caching ensuring flawless app performance even with unstable networks.'],
                    ['icon' => '✓', 'title' => 'Push Notification Automations', 'description' => 'Segmented real-time messaging driving high user retention and repeat orders.'],
                ],
                'stats' => [
                    ['number' => '65+', 'label' => 'Apps Published'],
                    ['number' => '5M+', 'label' => 'App Store Downloads'],
                    ['number' => '4.8', 'label' => 'Average Store Rating'],
                    ['number' => '40%', 'label' => 'Higher Retention Rate'],
                ],
                'faqs' => [
                    ['question' => 'Do you handle the App Store and Google Play submission process?', 'answer' => 'Yes, our team manages end-to-end publishing, compliance checks, developer certificates, and store review approvals.'],
                ],
                'sort_order' => 4,
            ],
            [
                'title' => 'Digital Marketing & Growth',
                'slug' => 'digital-marketing',
                'badge' => 'Full-Funnel Growth Agency',
                'category' => 'Marketing',
                'client_info' => 'B2B & B2C Companies Seeking Revenue Growth',
                'excerpt' => 'Data-driven digital marketing campaigns engineered to acquire high-value customers, lower CPA, and deliver predictable revenue across search, social, and programmatic channels.',
                'featured_image' => 'marketing_image.png',
                'hero_banner' => 'marketing_image.png',
                'highlights' => [
                    ['icon' => '✓', 'title' => 'Multi-Channel Attribution', 'description' => 'Full visibility into every customer touchpoint from initial impression to closed sale.'],
                    ['icon' => '✓', 'title' => 'High-Converting Creative Testing', 'description' => 'Continuous creative iteration with high-engagement video assets and copy angles.'],
                    ['icon' => '✓', 'title' => 'CRO Landing Page Optimization', 'description' => 'Bespoke high-converting landing pages tailored to specific audience segments.'],
                ],
                'stats' => [
                    ['number' => '200+', 'label' => 'Growth Campaigns Executed'],
                    ['number' => '4.8x', 'label' => 'Average ROAS Delivered'],
                    ['number' => '60%', 'label' => 'Lower Cost Per Acquisition'],
                    ['number' => 'AED 120M+', 'label' => 'Revenue Generated for Clients'],
                ],
                'faqs' => [
                    ['question' => 'How soon can we expect results from digital marketing campaigns?', 'answer' => 'Paid media campaigns deliver qualified leads within days, while SEO and brand positioning build compounding returns over 3 to 6 months.'],
                ],
                'sort_order' => 5,
            ],
            [
                'title' => 'Search Engine Optimization (SEO)',
                'slug' => 'search-engine-optimization',
                'badge' => 'Dubai #1 SEO Growth Agency',
                'category' => 'Marketing',
                'client_info' => 'Local UAE Businesses & Global Brands',
                'excerpt' => 'Dominate Google search results and local Maps. We combine technical SEO audits, high-authority link acquisition, and keyword optimization to generate organic buyers.',
                'featured_image' => 'seo.jpg',
                'hero_banner' => 'seo.jpg',
                'highlights' => [
                    ['icon' => '✓', 'title' => 'Local Google Maps Dominance', 'description' => 'Google Business Profile optimization capturing high-intent "near me" local queries.'],
                    ['icon' => '✓', 'title' => 'Technical Architecture Audits', 'description' => 'Fixing indexability, schema markup, core web vitals, and crawl budget bottlenecks.'],
                    ['icon' => '✓', 'title' => 'Topical Authority Content', 'description' => 'Comprehensive pillar content strategies ranking for high-volume commercial keywords.'],
                ],
                'stats' => [
                    ['number' => '250%', 'label' => 'Avg Search Traffic Surge'],
                    ['number' => '1,200+', 'label' => '#1 Page Rankings Achieved'],
                    ['number' => '90%', 'label' => 'Client Retention Rate'],
                    ['number' => '350+', 'label' => 'Audits Completed'],
                ],
                'faqs' => [
                    ['question' => 'How does CoreUnity approach local SEO in Dubai?', 'answer' => 'We optimize bilingual Arabic/English citations, Google Business Profiles, localized landing pages, and verified UAE directories.'],
                ],
                'sort_order' => 6,
            ],
            [
                'title' => 'Pay-Per-Click Advertising (PPC)',
                'slug' => 'pay-per-click-advertising',
                'badge' => 'Certified Google Premier Partner',
                'category' => 'Marketing',
                'client_info' => 'Real Estate, Clinics, B2B & Luxury Retail',
                'excerpt' => 'High-intent Google Ads and Bing search campaigns that connect you directly with customers searching for your products right now. Zero wasted ad spend.',
                'featured_image' => 'ppc.jpg',
                'hero_banner' => 'ppc.jpg',
                'highlights' => [
                    ['icon' => '✓', 'title' => 'High-Intent Search Campaigns', 'description' => 'Laser-targeted keyword bidding eliminating unqualified clicks and negative match filters.'],
                    ['icon' => '✓', 'title' => 'Dynamic Remarketing & Display', 'description' => 'Re-engaging visitors with personalized dynamic ads that close abandoned inquiries.'],
                    ['icon' => '✓', 'title' => 'Strict Budget & Bid Management', 'description' => 'Real-time smart bidding strategies maximizing conversions within strict target CPA.'],
                ],
                'stats' => [
                    ['number' => '5.2x', 'label' => 'Average ROAS Achieved'],
                    ['number' => '50%', 'label' => 'Lower Cost Per Lead'],
                    ['number' => 'AED 25M+', 'label' => 'Closed Real Estate Deals'],
                    ['number' => '24/7', 'label' => 'Live Bid Monitoring'],
                ],
                'faqs' => [
                    ['question' => 'Do you manage both Google Search and Meta Ads?', 'answer' => 'Yes, we manage Google Search, YouTube, Google Shopping, Meta (Instagram/Facebook), and LinkedIn ads under one cohesive strategy.'],
                ],
                'sort_order' => 7,
            ],
            [
                'title' => 'Social Media Marketing (SMM)',
                'slug' => 'social-media-marketing',
                'badge' => 'Viral Content & Community Growth',
                'category' => 'Marketing',
                'client_info' => 'F&B, Hospitality, Fashion & Consumer Brands',
                'excerpt' => 'Turn followers into brand evangelists. We produce scroll-stopping short-form video reels, manage vibrant online communities, and run targeted viral campaigns across the UAE.',
                'featured_image' => 'smm.jpg',
                'hero_banner' => 'smm.jpg',
                'highlights' => [
                    ['icon' => '✓', 'title' => 'Original Video & Reels Production', 'description' => 'High-aesthetic TikTok, Instagram Reels, and YouTube Shorts produced in Dubai studios.'],
                    ['icon' => '✓', 'title' => 'Active Community Management', 'description' => 'Prompt DM responses, comment moderation, and active community cultivation 7 days a week.'],
                    ['icon' => '✓', 'title' => 'Data-Driven Content Calendars', 'description' => 'Weekly scheduled content plans aligned with GCC cultural trends and peak engagement hours.'],
                ],
                'stats' => [
                    ['number' => '180%', 'label' => 'Average Follower Surge'],
                    ['number' => '10M+', 'label' => 'Monthly Video Views'],
                    ['number' => '4.2x', 'label' => 'Engagement Boost'],
                    ['number' => '50+', 'label' => 'Active Social Accounts'],
                ],
                'faqs' => [
                    ['question' => 'Do you handle photography and video shoots on location?', 'answer' => 'Yes, our in-house production crew travels across Dubai and Abu Dhabi for monthly professional photo and video shoots.'],
                ],
                'sort_order' => 8,
            ],
            [
                'title' => 'Branding & Creative Design',
                'slug' => 'branding-and-creative-design',
                'badge' => 'Your Brand Identity Partner',
                'category' => 'Design & Creative',
                'client_info' => 'Luxury Brands, Corporates & Modern Startups',
                'excerpt' => 'Build a brand that commands premium authority. From logo systems and typography to brand guidelines and packaging, we create unforgettable identities.',
                'featured_image' => 'branding-1.jpg',
                'hero_banner' => 'branding-1.jpg',
                'highlights' => [
                    ['icon' => '✓', 'title' => 'Visual Identity & Logo Systems', 'description' => 'Iconic brandmarks, wordmarks, color palettes, and typographic hierarchies.'],
                    ['icon' => '✓', 'title' => 'Comprehensive Brand Guidelines', 'description' => 'Extensive design manuals governing digital, print, and physical brand touchpoints.'],
                    ['icon' => '✓', 'title' => 'Marketing Collateral & Packaging', 'description' => 'Stationery, premium packaging, environmental signage, and digital asset packs.'],
                ],
                'stats' => [
                    ['number' => '120+', 'label' => 'Brands Created / Rebranded'],
                    ['number' => '15+', 'label' => 'Global Design Awards'],
                    ['number' => '100%', 'label' => 'Trademark Ready Assets'],
                    ['number' => '4.9/5', 'label' => 'Client Satisfaction Score'],
                ],
                'faqs' => [
                    ['question' => 'What is included in a complete branding package?', 'answer' => 'Primary logo, alternate marks, color tokens, typography licenses, stationery mockups, social media starter kits, and a comprehensive 40+ page brand style guide.'],
                ],
                'sort_order' => 9,
            ],
            [
                'title' => 'Artificial Intelligence Solutions',
                'slug' => 'artificial-intelligence',
                'badge' => 'Smart AI Automation for Enterprises',
                'category' => 'Artificial Intelligence',
                'client_info' => 'Enterprises Seeking Operational Automation',
                'excerpt' => 'Leverage cutting-edge generative AI, machine learning models, and intelligent process automations to cut operational overhead and accelerate business decision-making.',
                'featured_image' => 'tect_img.png',
                'hero_banner' => 'tect_img.png',
                'highlights' => [
                    ['icon' => '✓', 'title' => 'Custom LLM & Agent Development', 'description' => 'Fine-tuned internal AI assistants trained on proprietary enterprise knowledge bases.'],
                    ['icon' => '✓', 'title' => 'Predictive Analytics & Forecasting', 'description' => 'Machine learning models predicting customer churn, demand, and inventory needs.'],
                    ['icon' => '✓', 'title' => 'Automated Workflow Pipelines', 'description' => 'Connecting legacy databases with intelligent agents to automate repetitive tasks.'],
                ],
                'stats' => [
                    ['number' => '70%', 'label' => 'Reduced Manual Work Hours'],
                    ['number' => '99.5%', 'label' => 'Model Accuracy Rate'],
                    ['number' => '10x', 'label' => 'Faster Data Processing'],
                    ['number' => '24/7', 'label' => 'Autonomous Operation'],
                ],
                'faqs' => [
                    ['question' => 'Is our company data secure when training custom AI models?', 'answer' => 'Yes, all AI infrastructure is deployed on private, encrypted virtual private clouds (VPC) with zero data sharing to third-party public models.'],
                ],
                'sort_order' => 10,
            ],
            [
                'title' => 'AI Chatbot Development',
                'slug' => 'chatbot-development',
                'badge' => 'Intelligent Conversational Agents',
                'category' => 'Artificial Intelligence',
                'client_info' => 'E-Commerce, Healthcare, Real Estate & Customer Support',
                'excerpt' => '24/7 intelligent conversational bots integrated across WhatsApp, websites, and mobile apps that qualify leads, answer complex inquiries, and close sales autonomously.',
                'featured_image' => 'phone_logo.png',
                'hero_banner' => 'tect_img.png',
                'highlights' => [
                    ['icon' => '✓', 'title' => 'Official WhatsApp Business API', 'description' => 'Deploy verified WhatsApp conversational bots serving millions of UAE users.'],
                    ['icon' => '✓', 'title' => 'Multi-Language Support (Arabic & English)', 'description' => 'Native bilingual comprehension with natural colloquial Arabic understanding.'],
                    ['icon' => '✓', 'title' => 'CRM & Lead Routing Integration', 'description' => 'Instant synchronization with HubSpot, Salesforce, Zoho, and internal CRMs.'],
                ],
                'stats' => [
                    ['number' => '85%', 'label' => 'Routine Inquiries Resolved'],
                    ['number' => '3 Sec', 'label' => 'Average Response Time'],
                    ['number' => '3x', 'label' => 'Increase in Lead Capture'],
                    ['number' => '24/7', 'label' => 'Continuous Operation'],
                ],
                'faqs' => [
                    ['question' => 'Can the chatbot hand over conversations to human agents?', 'answer' => 'Yes, our bots feature intelligent sentiment detection and seamless live chat handoff to human support representatives.'],
                ],
                'sort_order' => 11,
            ],
            [
                'title' => 'AI Development Company in Dubai',
                'slug' => 'ai-development-company',
                'badge' => 'Enterprise AI Systems',
                'category' => 'Artificial Intelligence',
                'client_info' => 'Government & Large Corporations',
                'excerpt' => 'Full-lifecycle AI consulting, architecture, and engineering. We build secure, high-performance artificial intelligence platforms for visionary UAE organizations.',
                'featured_image' => 'tect_img.png',
                'hero_banner' => 'tect_img.png',
                'highlights' => [
                    ['icon' => '✓', 'title' => 'Computer Vision & Recognition', 'description' => 'Automated visual inspection, document scanning, and biometric verification.'],
                    ['icon' => '✓', 'title' => 'Enterprise NLP Solutions', 'description' => 'Semantic document summarization, contract analysis, and sentiment monitoring.'],
                ],
                'stats' => [
                    ['number' => '40+', 'label' => 'AI Models Deployed'],
                    ['number' => '99.8%', 'label' => 'System Reliability'],
                    ['number' => 'AED 15M+', 'label' => 'Client Cost Savings'],
                    ['number' => '100%', 'label' => 'Data Privacy Guaranteed'],
                ],
                'faqs' => [
                    ['question' => 'How do we get started with an enterprise AI evaluation?', 'answer' => 'We conduct a 2-week discovery workshop to evaluate workflows, data readiness, and high-ROI automation opportunities.'],
                ],
                'sort_order' => 12,
            ],
            [
                'title' => 'Generative Engine Optimization (GEO)',
                'slug' => 'generative-engine-optimization',
                'badge' => 'Next-Gen AI Search Visibility',
                'category' => 'Marketing',
                'client_info' => 'Forward-Thinking Brands & Tech Companies',
                'excerpt' => 'Optimize your brand to be cited and recommended by ChatGPT, Google Gemini, Perplexity, and AI Overviews. The future of organic search visibility.',
                'featured_image' => 'growth_image.png',
                'hero_banner' => 'growth_image.png',
                'highlights' => [
                    ['icon' => '✓', 'title' => 'LLM Citation Architecture', 'description' => 'Structuring information so generative search models recognize your brand as the primary authority.'],
                    ['icon' => '✓', 'title' => 'Perplexity & Gemini Optimization', 'description' => 'Direct optimization for conversational AI engines replacing traditional search.'],
                ],
                'stats' => [
                    ['number' => '320%', 'label' => 'AI Citation Surge'],
                    ['number' => '15+', 'label' => 'LLMs Monitored'],
                    ['number' => '85%', 'label' => 'Recommendation Rate'],
                    ['number' => '1st', 'label' => 'Mover Advantage'],
                ],
                'faqs' => [
                    ['question' => 'What is the difference between SEO and GEO?', 'answer' => 'Traditional SEO focuses on blue links and keywords. GEO optimizes entity authority, structured knowledge graphs, and authoritative citations for generative AI engines.'],
                ],
                'sort_order' => 13,
            ],
            [
                'title' => 'Influencer Marketing Agency',
                'slug' => 'influencer-marketing',
                'badge' => 'UAE Top Creator Network',
                'category' => 'Marketing',
                'client_info' => 'Lifestyle, Tech, Beauty & Hospitality Brands',
                'excerpt' => 'Connect your brand with the most authentic, influential creators across Dubai and the Middle East. Strategic influencer vetting, creative management, and measurable ROI.',
                'featured_image' => 'managingpart_image.png',
                'hero_banner' => 'managingpart_image.png',
                'highlights' => [
                    ['icon' => '✓', 'title' => 'Vetted UAE Creator Roster', 'description' => 'Strict verification eliminating fake followers and inflated engagement metrics.'],
                    ['icon' => '✓', 'title' => 'End-to-End Campaign Delivery', 'description' => 'Briefing, gifting, contract negotiation, content approval, and usage rights.'],
                ],
                'stats' => [
                    ['number' => '500+', 'label' => 'Vetted Creators Network'],
                    ['number' => '25M+', 'label' => 'GCC Campaign Reach'],
                    ['number' => '3.8x', 'label' => 'Average Earned Media Value'],
                    ['number' => '100%', 'label' => 'Contract Compliant'],
                ],
                'faqs' => [
                    ['question' => 'Do you handle micro-influencers as well as tier-1 celebrities?', 'answer' => 'Yes, we curate custom creator tiers based on campaign goals, from hyper-local niche micro-creators to top celebrity brand ambassadors.'],
                ],
                'sort_order' => 14,
            ],
            [
                'title' => 'Virtual Reality Development',
                'slug' => 'virtual-reality-development',
                'badge' => 'Immersive VR Experiences',
                'category' => 'Immersive Tech',
                'client_info' => 'Real Estate, Tourism, Education & Industrial Training',
                'excerpt' => 'Photorealistic virtual reality walkthroughs, interactive 3D simulations, and Metaverse environments that transport users into unforgettable digital spaces.',
                'featured_image' => 'growth_image.png',
                'hero_banner' => 'growth_image.png',
                'highlights' => [
                    ['icon' => '✓', 'title' => 'Real Estate Virtual Tours', 'description' => 'Interactive 1:1 off-plan architectural walkthroughs enabling remote international property sales.'],
                    ['icon' => '✓', 'title' => 'Unreal Engine 5 Photorealism', 'description' => 'Industry-leading real-time lighting, spatial audio, and interactive physics.'],
                ],
                'stats' => [
                    ['number' => '45+', 'label' => 'VR Experiences Built'],
                    ['number' => '60%', 'label' => 'Faster Remote Sales Closes'],
                    ['number' => '95%', 'label' => 'Immersion Satisfaction'],
                    ['number' => '4K', 'label' => 'Ultra HD Resolution'],
                ],
                'faqs' => [
                    ['question' => 'Which VR headsets are supported?', 'answer' => 'We develop for Meta Quest 3/Pro, Apple Vision Pro, HTC Vive, and WebXR browser-based interactive tours.'],
                ],
                'sort_order' => 15,
            ],
            [
                'title' => 'Augmented Reality Development',
                'slug' => 'augmented-reality-development',
                'badge' => 'Interactive AR Solutions',
                'category' => 'Immersive Tech',
                'client_info' => 'E-Commerce, Furniture, Retail & Packaging',
                'excerpt' => 'Blend digital models with physical environments. WebAR product previews, face filters, and interactive packaging that increase buyer confidence.',
                'featured_image' => 'cs_image.png',
                'hero_banner' => 'cs_image.png',
                'highlights' => [
                    ['icon' => '✓', 'title' => 'App-Free WebAR Experiences', 'description' => 'Instant AR launch directly through mobile browsers with zero app installation needed.'],
                    ['icon' => '✓', 'title' => 'Virtual Try-On Solutions', 'description' => 'True-to-scale furniture placement and beauty try-on reducing return rates.'],
                ],
                'stats' => [
                    ['number' => '80+', 'label' => 'WebAR Projects Deployed'],
                    ['number' => '40%', 'label' => 'Reduction in Product Returns'],
                    ['number' => '2.5x', 'label' => 'Average Dwell Time Boost'],
                    ['number' => '100%', 'label' => 'Mobile Browser Compatible'],
                ],
                'faqs' => [
                    ['question' => 'Do users need to install an app to view our AR products?', 'answer' => 'No, our WebAR technology works natively inside iOS Safari and Android Chrome via standard QR code or web link.'],
                ],
                'sort_order' => 16,
            ],
        ];

        foreach ($services as $data) {
            Service::updateOrCreate(
                ['slug' => $data['slug']],
                $data
            );
        }
    }
}

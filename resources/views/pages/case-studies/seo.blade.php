@extends('layouts.app')

@section('title', "Kelly's Cajun Grill SEO: From Invisible to #1 in Local Search")
@section('meta_description', "See how SEO drove 250% more Google Maps searches and 40% more delivery orders for Kelly's Cajun Grill in Dubai. Free SEO audit available.")

@section('content')
<div class="bg-black text-white relative flex flex-col font-sans min-h-screen overflow-hidden">
    
    <!-- Background Red Radial Glow for Hero -->
    <div 
        class="absolute top-0 left-1/2 -translate-x-1/2 w-full max-w-5xl h-[600px] pointer-events-none z-0"
        style="background: radial-gradient(circle at top center, rgba(160, 20, 25, 0.35) 0%, transparent 65%); filter: blur(50px);">
    </div>

    <!-- Hero Section -->
    <main class="h-[600px] flex flex-col items-center justify-center relative z-10 px-6">
        
        <!-- Top Label -->
        <div class="flex items-center justify-center gap-3 mb-8 mt-12">
            <div class="w-2.5 h-2.5 bg-[#c52833] rounded-full shadow-[0_0_12px_2px_rgba(197,40,51,0.6)]"></div>
            <h1 class="text-[28px] md:text-[32px] font-bold tracking-wide text-white">Case Study (SEO Strategy)</h1>
        </div>
        
        <!-- Main Heading -->
        <h2 class="text-center text-4xl md:text-[52px] font-bold leading-[1.2] text-white mb-6 tracking-tight">
            Kelly's Cajun Grill (UAE):
        </h2>
        
        <!-- Sub-description -->
        <p class="text-center text-gray-300 text-lg md:text-[21px] max-w-[850px] leading-[1.6] font-light">
            From Mall Footfall to Digital Dominance via SEO
        </p>

    </main>

    <!-- Main Content Section -->
    <section class="bg-white text-black py-16 md:py-20 px-4 sm:px-8 md:px-12 lg:px-20 relative z-20 -mt-10 overflow-hidden font-sans">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-12">
            
            <!-- Left Column: Case Study Details -->
            <div class="lg:col-span-2 space-y-12">
                
                <!-- Featured Image -->
                <div class="w-full rounded-2xl overflow-hidden relative shadow-lg bg-[#f8f9fa] flex items-center justify-center">
                    <img 
                        src="{{ asset('seo.jpg') }}" 
                        alt="Kelly's Cajun Grill SEO Case Study" 
                        class="w-full h-auto object-contain" 
                    />
                </div>

                <!-- Overview -->
                <div>
                    <h3 class="text-3xl font-bold mb-4">Project Overview</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Kelly's Cajun Grill is an established international brand bringing authentic Louisiana-style Cajun cuisine to the UAE. With flagship locations in Dubai Mall and Mall of the Emirates, which are two of the world's busiest shopping destinations, the restaurant serves signature dishes like spicy jambalaya, crispy po'boys, Cajun chicken, succulent shrimp, and flavorful salmon. Its warm, inviting atmosphere and bold spices capture the essence of bayou cooking.
                    </p>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        However, despite premium mall locations and a strong culinary offering, the brand suffered from a critical digital blind spot. Online search visibility was nearly nonexistent, and the restaurant failed to convert the vast digital audience searching for dining options into actual foot traffic or delivery orders. This case study details how a targeted SEO-first strategy reversed that trend.
                    </p>
                </div>

                <!-- Business Challenge -->
                <div>
                    <h3 class="text-3xl font-bold mb-4">Business Challenge</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Kelly's Cajun Grill faced four interconnected SEO and discoverability challenges:
                    </p>
                    
                    <h4 class="font-bold text-xl mb-2 text-gray-800">Over-Reliance on Walk-In Traffic</h4>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        The brand depended almost entirely on mall footfall. While Dubai Mall and Mall of the Emirates draw millions, this passive model left Kelly's vulnerable during off-peak hours, mall maintenance, or changing visitor patterns. There was no organic search funnel to bring in customers independently.
                    </p>
                    
                    <h4 class="font-bold text-xl mb-2 text-gray-800">Poor Local Search Visibility</h4>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Despite prime real estate, the restaurant was virtually invisible on Google Maps and search engines. Queries like "Cajun food Dubai," "best shrimp near Dubai Mall," or "Louisiana restaurant Mall of the Emirates" returned competitors and not Kelly's. The brand had no structured SEO strategy, no optimized Google Business Profiles, and minimal presence on review platforms.
                    </p>
                    
                    <h4 class="font-bold text-xl mb-2 text-gray-800">Underutilized Delivery Channels</h4>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Kelly's was listed on Talabat and Deliveroo, but orders were sporadic. Without SEO-driven traffic to these listings or internal menu optimization, delivery remained an afterthought rather than a revenue pillar.
                    </p>
                    
                    <h4 class="font-bold text-xl mb-2 text-gray-800">No Customer Retention or Data Capture</h4>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Walk-in customers came, ate, and left. There was no system to capture emails, phone numbers, or preferences, meaning no remarketing, no loyalty incentives, and no way to convert one-time visitors into repeat diners.
                    </p>
                </div>

                <!-- Strategy -->
                <div>
                    <h3 class="text-3xl font-bold mb-4">Strategy</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        We implemented a comprehensive SEO-centric digital growth strategy designed to dominate local search, drive organic traffic to both physical and delivery channels, and build a data-driven retention loop:
                    </p>

                    <h4 class="font-bold text-xl mb-2 text-gray-800">1. Google Business Profile & Hyperlocal SEO</h4>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        We fully optimized Google Business Profiles for both Dubai Mall and Mall of the Emirates locations. This included:
                    </p>
                    <ul class="list-disc list-inside space-y-2 text-gray-600 mb-4">
                        <li>Accurate NAP (Name, Address, Phone) data with location-specific descriptors</li>
                        <li>High-resolution, keyword-tagged photos of menu items, interior, and staff</li>
                        <li>Rich descriptions incorporating primary keywords: <em>Cajun restaurant Dubai Mall</em>, <em>best seafood Mall of the Emirates</em>, <em>Louisiana chicken near me</em></li>
                        <li>Regular posting of updates, offers, and events directly on GBP</li>
                        <li>Active review management with response templates to encourage 5-star ratings</li>
                    </ul>

                    <h4 class="font-bold text-xl mb-2 text-gray-800">2. Location-Specific Landing Pages & Content Marketing</h4>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        We developed two dedicated landing pages, one per mall location and each optimized for distinct search intents:
                    </p>
                    <ul class="list-disc list-inside space-y-2 text-gray-600 mb-4">
                        <li>"Dubai-mall-cajun-restaurant" targeting "Cajun food near Dubai Mall" and "restaurants in Dubai Mall"</li>
                        <li>"Mall-of-emirates-seafood" targeting "best shrimp Mall of the Emirates" and "Cajun grill MOE"</li>
                    </ul>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Each page included embedded Google Maps, menu highlights, opening hours, delivery partner links, and internal blog content about Cajun cuisine history and spice guides to build topical authority.
                    </p>

                    <h4 class="font-bold text-xl mb-2 text-gray-800">3. Review Generation & Reputation SEO</h4>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        We implemented a post-meal SMS/email review funnel, gently asking diners to leave feedback on Google and Zomato. Staff were trained to verbally request reviews during checkout. Positive reviews were leveraged as local SEO ranking signals, while negative ones were addressed promptly to maintain a healthy average rating.
                    </p>

                    <h4 class="font-bold text-xl mb-2 text-gray-800">4. Delivery Channel SEO & Menu Optimization</h4>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        We restructured Talabat and Deliveroo menus using keyword-rich item titles (e.g., "Spicy Cajun Chicken Box – Dubai Mall Favorite") and high-quality images. "Signature Box" bundles were created to increase average order value, and platform-specific promotions were scheduled during peak search hours.
                    </p>

                    <h4 class="font-bold text-xl mb-2 text-gray-800">5. WhatsApp Customer Engagement via QR Codes</h4>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        To capture first-party data, we placed QR codes on tabletops and receipts linking to a WhatsApp Business number. Diners who scanned received an exclusive discount and were added to an opt-in list for weekly promotions and new-menu alerts.
                    </p>
                </div>
                
                <!-- Execution -->
                <div>
                    <h3 class="text-3xl font-bold mb-4">Execution</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        The project was rolled out over ten weeks, with SEO as the central thread:
                    </p>
                    <ul class="list-none space-y-4 text-gray-600 mb-6">
                        <li><span class="font-bold text-gray-800">Weeks 1-2:</span> Google Business Profile creation and full optimization for both locations; Keyword research and competitor gap analysis; Review generation campaign launch</li>
                        <li><span class="font-bold text-gray-800">Weeks 3-4:</span> Publishing of location-specific landing pages with on-page SEO; Internal linking strategy across main website</li>
                        <li><span class="font-bold text-gray-800">Weeks 5-6:</span> Delivery platform menu restructuring with SEO-friendly item names; Backlink outreach to Dubai food bloggers and local directories</li>
                        <li><span class="font-bold text-gray-800">Weeks 7-8:</span> WhatsApp Business setup with QR code printing and placement; Automated messaging workflows for reservations and promotional alerts</li>
                        <li><span class="font-bold text-gray-800">Weeks 9-10:</span> Full integration of all channels; staff training on review requests; Performance baseline measurement and weekly SEO reporting</li>
                    </ul>
                </div>

                <!-- Results -->
                <div>
                    <h3 class="text-3xl font-bold mb-4">Results</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        After four months of execution, Kelly's Cajun Grill achieved significant SEO-driven growth:
                    </p>
                    <ul class="list-disc list-inside space-y-3 text-gray-600 mb-6">
                        <li>250% increase in Google Maps searches for both locations, appearing in the Local Pack for "Cajun restaurant Dubai" within 6 weeks</li>
                        <li>60% increase in organic website traffic to location landing pages, with average session duration of 2+ minutes</li>
                        <li>40% increase in delivery orders through Talabat and Deliveroo, directly attributed to improved platform search visibility</li>
                        <li>35% increase in repeat customers at both locations, driven by WhatsApp promotions and loyalty incentives</li>
                        <li>Average rating improved from 3.7 to 4.3 across Google and Zomato, with review volume increasing by 80%</li>
                        <li>WhatsApp opt-ins reached 180+ within the first two months, generating 50+ reservation inquiries per week</li>
                    </ul>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        The combined SEO efforts resulted in a 45% reduction in dependency on pure walk-in traffic, with a measurable share of new customers coming directly from organic search and map listings.
                    </p>
                </div>
                
                <!-- Conclusion -->
                <div>
                    <h3 class="text-3xl font-bold mb-4">Conclusion</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        For mall-based restaurants like Kelly's Cajun Grill, premium footfall is a blessing, but it's not a sustainable growth engine. By shifting from passive reliance on location to an active, SEO-led digital strategy, the brand transformed its online invisibility into a dominant local search presence.
                    </p>
                    <p class="text-gray-600 leading-relaxed font-semibold italic">
                        Is your restaurant invisible online, despite a great location? Book a free SEO restaurant audit today and learn how to dominate local search in your market.
                    </p>
                </div>

                @include('partials.case_study_share')

            </div>

            <!-- Right Column: Sidebar -->
            @include('partials.case_study_sidebar')

        </div>
    </section>

    @include('partials.case_study_cta_testimonial')

</div>
@endsection

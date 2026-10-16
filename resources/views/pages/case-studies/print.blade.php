@extends('layouts.app')

@section('title', 'Al Hilal Restaurant Print Strategy: From Local to Citywide')
@section('meta_description', 'See how print media & design drove 200% more foot traffic and 60% more delivery orders for Al Hilal Restaurant in Deira. Free consultation available.')

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
            <h1 class="text-[28px] md:text-[32px] font-bold tracking-wide text-white">Case Study (Print Media & Design Strategy)</h1>
        </div>
        
        <!-- Main Heading -->
        <h2 class="text-center text-4xl md:text-[52px] font-bold leading-[1.2] text-white mb-6 tracking-tight">
            Al Hilal Restaurant (Frij Murar):
        </h2>
        
        <!-- Sub-description -->
        <p class="text-center text-gray-300 text-lg md:text-[21px] max-w-[850px] leading-[1.6] font-light">
            From Local Gem to Deira's Go-To Dining Destination
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
                        src="{{ asset('print.jpg') }}" 
                        alt="Al Hilal Restaurant Print Strategy Case Study" 
                        class="w-full h-auto object-contain" 
                    />
                </div>

                <!-- Overview -->
                <div>
                    <h3 class="text-3xl font-bold mb-4">Project Overview</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Al Hilal Restaurant is a cherished dining landmark in Deira's Frij Murar area, renowned for authentic Desi (Pakistani) and Chinese cuisine. Its menu features biryani, karahi, handi, chow mein, fried rice, soups, and sizzling Chinese specials. It is crafted with premium ingredients and traditional spices. Known for its family-friendly ambiance, excellent service, and 100% halal certification, Al Hilal has long been a favorite among local residents.
                    </p>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Yet, despite its strong neighborhood reputation, the restaurant remained virtually unknown beyond Frij Murar. In a district bustling with African-run cafes and eateries, Al Hilal struggled to differentiate itself without a cohesive print and design strategy to communicate its identity and reach new audiences.
                    </p>
                </div>

                <!-- Business Challenge -->
                <div>
                    <h3 class="text-3xl font-bold mb-4">Business Challenge</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Al Hilal Restaurant faced critical hurdles:
                    </p>
                    
                    <h4 class="font-bold text-xl mb-2 text-gray-800">Local Fame, Citywide Obscurity</h4>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        The restaurant was a beloved secret among Frij Murar locals but had zero visibility among tourists, office workers from other Deira sub-districts, or Dubai residents from farther areas. No printed materials existed to introduce the brand outside its immediate zone.
                    </p>
                    
                    <h4 class="font-bold text-xl mb-2 text-gray-800">No Brand Collateral</h4>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        The restaurant operated without professional menus, flyers, posters, or any branded takeaway materials. Potential customers walking through Deira had no tactile, visual reminder of Al Hilal's existence or offerings.
                    </p>
                    
                    <h4 class="font-bold text-xl mb-2 text-gray-800">Underperforming Delivery Channels</h4>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        While listed on Talabat, delivery orders were erratic. There were no printed inserts in delivery bags to encourage reordering, no loyalty cards, and no visual promotions to boost average order value.
                    </p>
                    
                    <h4 class="font-bold text-xl mb-2 text-gray-800">No Customer Retention Tools</h4>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Without a physical loyalty system, comment cards, or branded giveaways, diners came and went. There was no printed medium to capture contact details, share promotional offers, or build a recurring customer base.
                    </p>
                </div>

                <!-- Strategy -->
                <div>
                    <h3 class="text-3xl font-bold mb-4">Strategy</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        We implemented a print-media and design-led growth strategy, focusing on tangible brand assets that would travel beyond the restaurant's walls:
                    </p>

                    <h4 class="font-bold text-xl mb-2 text-gray-800">1. Brand Identity & Menu Redesign</h4>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        We overhauled Al Hilal's visual identity. We incorporated a logo refresh, color palette, and typography to convey warmth, authenticity, and quality. We designed new dine-in menus with appetizing food photography, clear categorization, and highlighted best-sellers. A separate takeaway/delivery menu was created for insertion into every order.
                    </p>

                    <h4 class="font-bold text-xl mb-2 text-gray-800">2. Location-Based Print Distribution</h4>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        We produced high-quality flyers and posters tailored for Deira, Naif, and adjacent neighborhoods. These were distributed to office buildings, hotels, and community bulletin boards, featuring a scannable QR code that led to a simple landing page with menu, contact, and WhatsApp ordering details.
                    </p>

                    <h4 class="font-bold text-xl mb-2 text-gray-800">3. Delivery Insert Campaign</h4>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Every delivery order from Talabat received a branded loyalty card ("Buy 5 meals, get the 6th free") and a double-sided flyer: one side showcasing daily specials, the other inviting customers to join the WhatsApp loyalty program via QR code. This turned every delivery into a promotional touchpoint.
                    </p>

                    <h4 class="font-bold text-xl mb-2 text-gray-800">4. In-Restaurant Print Collateral</h4>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        We installed table tents, wall posters, and counter cards promoting combo deals, family bundles, and weekly specials. A "Chef's Recommendation" board was placed near the entrance to drive impulse orders. Comment cards were introduced to collect feedback and opt-ins for future promotions.
                    </p>
                </div>
                
                <!-- Execution -->
                <div>
                    <h3 class="text-3xl font-bold mb-4">Execution</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        The project unfolded over eight weeks:
                    </p>
                    <ul class="list-none space-y-4 text-gray-600 mb-6">
                        <li><span class="font-bold text-gray-800">Weeks 1-2:</span> Brand identity refresh, menu redesign, and photography session for all dishes.</li>
                        <li><span class="font-bold text-gray-800">Weeks 3-4:</span> Production of flyers, posters, loyalty cards, and table tents; initial distribution in Deira and Naif.</li>
                        <li><span class="font-bold text-gray-800">Weeks 5-6:</span> Rollout of delivery inserts and in-restaurant collateral; staff training on upselling using print materials.</li>
                        <li><span class="font-bold text-gray-800">Weeks 7-8:</span> Launch of QR-code-driven WhatsApp loyalty program via all printed pieces; installation of exterior signage and window decals to boost foot traffic.</li>
                    </ul>
                    
                    <p class="text-gray-600 leading-relaxed mb-4">
                        The technology stack was minimal: a QR code generator, WhatsApp Business API for loyalty tracking, and a basic landing page. The focus was entirely on high-quality print design and strategic placement.
                    </p>
                </div>

                <!-- Results -->
                <div>
                    <h3 class="text-3xl font-bold mb-4">Results</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        After three months, Al Hilal Restaurant achieved:
                    </p>
                    <ul class="list-disc list-inside space-y-3 text-gray-600 mb-6">
                        <li>200% increase in foot traffic from outside Frij Murar, attributed to flyers and posters in nearby office and hotel zones.</li>
                        <li>60% increase in delivery orders, driven by loyalty cards and promotional inserts in every bag.</li>
                        <li>40% increase in average order value from in-restaurant diners, thanks to table tent upsells and combo posters.</li>
                        <li>120+ new WhatsApp loyalty sign-ups via QR codes on menus, flyers, and delivery inserts within the first six weeks.</li>
                        <li>4.6 average Google rating, boosted by comment cards that gently reminded diners to leave reviews.</li>
                    </ul>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        The delivery insert campaign alone generated 25+ direct WhatsApp orders per week (bypassing platform commissions), increasing profit margins on those orders by 18%. The physical loyalty card saw a 35% redemption rate, far exceeding typical digital loyalty programs.
                    </p>
                </div>
                
                <!-- Conclusion -->
                <div>
                    <h3 class="text-3xl font-bold mb-4">Conclusion</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        For neighborhood restaurants like Al Hilal, the path to citywide recognition doesn't always require complex digital tools. Sometimes, it starts with a well-designed menu, a compelling flyer, and a loyalty card that fits in a pocket. By investing in print media and strategic design, Al Hilal transformed from a hidden local treasure into Deira's go-to destination for Desi and Chinese cuisine with tangible materials that brought the brand to life beyond its four walls.
                    </p>
                    <p class="text-gray-600 leading-relaxed font-semibold italic">
                        Is your restaurant a hidden gem waiting to be discovered? Schedule a free print-media and design consultation, and let us show you how to put your brand into people's hands, literally.
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

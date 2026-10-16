@extends('layouts.app')

@section('title', 'Mobile App Development Case Study | UrbanCart UAE')
@section('meta_description', 'See how UrbanCart transitioned from brick-and-mortar retail to a high-converting mobile shopping app in Dubai with CoreUnity Solutions.')

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
            <h1 class="text-[28px] md:text-[32px] font-bold tracking-wide text-white">Case Study (Mobile App Development)</h1>
        </div>
        
        <!-- Main Heading -->
        <h2 class="text-center text-4xl md:text-[52px] font-bold leading-[1.2] text-white mb-6 tracking-tight">
            UrbanCart:
        </h2>
        
        <!-- Sub-description -->
        <p class="text-center text-gray-300 text-lg md:text-[21px] max-w-[850px] leading-[1.6] font-light">
            Streamlining Retail with a Custom Shopping App [UrbanCart], Dubai
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
                        src="{{ asset('mob-app.jpg') }}" 
                        alt="UrbanCart Mobile App Case Study" 
                        class="w-full h-auto object-contain" 
                    />
                </div>

                <!-- Overview -->
                <div>
                    <h3 className="text-3xl font-bold mb-4">Project Overview</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        UrbanCart, a growing multi-brand retail business in Dubai, wanted to move beyond in-store sales and give customers a seamless way to shop, track orders, and stay connected to the brand. One small detail: they wanted to do this all from their phone. With a physical presence in two of Dubai's busiest malls, this brand had built a loyal customer base but recognized the massive shift toward mobile-first shopping in the UAE, where smartphone penetration exceeds 98%.
                    </p>
                </div>

                <!-- Business Challenge -->
                <div>
                    <h3 class="text-3xl font-bold mb-4">Business Challenge</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        The client relied entirely on foot traffic and a basic website, missing out on the fast-growing mobile shopping audience in the UAE. Customers had no easy way to browse products, save favorites, or reorder, and the brand had no direct channel to re-engage them after a purchase. Third-party marketplace fees were eating into margins, and the brand had zero visibility into customer behavior or preferences. An internal review revealed that 70% of their competitors had mobile apps, and this brand was losing digitally-savvy customers to more accessible brands.
                    </p>
                </div>

                <!-- Strategy -->
                <div>
                    <h3 class="text-3xl font-bold mb-4">Strategy</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Our mobile app development Dubai team used their custom mobile app development skills and developed a smart iOS and Android application built around simplicity and speed. The app featured:
                    </p>

                    <h4 class="font-bold text-xl mb-2 text-gray-800">Intuitive Product Browsing</h4>
                    <p class="text-gray-600 leading-relaxed mb-4">With advanced search and filter capabilities.</p>

                    <h4 class="font-bold text-xl mb-2 text-gray-800">Secure Checkout</h4>
                    <p class="text-gray-600 leading-relaxed mb-4">With multiple payment options including Apple Pay and Google Pay.</p>

                    <h4 class="font-bold text-xl mb-2 text-gray-800">Push Notifications</h4>
                    <p class="text-gray-600 leading-relaxed mb-4">For personalized offers, flash sales, and abandoned cart reminders.</p>

                    <h4 class="font-bold text-xl mb-2 text-gray-800">Loyalty Rewards System</h4>
                    <p class="text-gray-600 leading-relaxed mb-4">Where customers earned points on every purchase, redeemable for discounts and exclusive products.</p>
                    
                    <h4 class="font-bold text-xl mb-2 text-gray-800">Order Tracking</h4>
                    <p class="text-gray-600 leading-relaxed mb-4">With real-time updates from purchase to delivery.</p>
                    
                    <h4 class="font-bold text-xl mb-2 text-gray-800">Wishlist functionality</h4>
                    <p class="text-gray-600 leading-relaxed mb-4">Allowing customers to save favorites for future purchases.</p>
                </div>
                
                <!-- Execution -->
                <div>
                    <h3 class="text-3xl font-bold mb-4">Execution</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        We ran the project through structured UX research, wireframing, and agile development sprints, with regular client check-ins to refine features. The app was built natively for performance, integrated with the client's inventory system, and rigorously tested across devices before launch. The development process spanned 14 weeks, with beta testing conducted with 50 loyal customers to gather feedback and fine-tune the user experience.
                    </p>
                </div>

                <!-- Results -->
                <div>
                    <h3 class="text-3xl font-bold mb-4">Results</h3>
                    <ul class="list-disc list-inside space-y-3 text-gray-600 mb-6">
                        <li>Within 3 months of launch, the app crossed 5,000+ downloads with a 4.7-star rating on both app stores.</li>
                        <li>Repeat purchases rose by 35%, and push notification campaigns delivered a 28% open rate, significantly above the industry average of 15-20%.</li>
                        <li>The loyalty program saw 65% of users actively earning and redeeming points.</li>
                        <li>App-driven revenue accounted for 40% of total online sales, seamlessly turning one-time shoppers into a loyal customer base.</li>
                        <li>Average order value on the app was 22% higher than on the website, driven by personalized recommendations and seamless checkout.</li>
                    </ul>
                </div>
                
                <!-- Conclusion -->
                <div>
                    <h3 class="text-3xl font-bold mb-4">Conclusion</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        By putting the shopping experience directly in customers' hands, UrbanCart unlocked a new, high-converting sales channel and a stronger, more direct relationship with its audience. The mobile app also reduced dependency on third-party marketplaces, saving approximately AED 15,000 monthly in commission fees.
                    </p>
                    <p class="text-gray-600 leading-relaxed font-semibold italic">
                        Ready to turn your business idea into a high-performing mobile app? Talk to our mobile app development experts in Dubai today.
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

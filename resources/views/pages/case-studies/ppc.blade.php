@extends('layouts.app')

@section('title', 'Dubai Real Estate PPC: 50% Lower Cost-Per-Lead')
@section('meta_description', 'See how PPC optimization cut cost-per-lead from AED 350 to AED 175 and generated 220% more qualified inquiries. Connect with our experts.')

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
            <h1 class="text-[28px] md:text-[32px] font-bold tracking-wide text-white">Case Study (Pay-Per-Click Advertising)</h1>
        </div>
        
        <!-- Main Heading -->
        <h2 class="text-center text-4xl md:text-[52px] font-bold leading-[1.2] text-white mb-6 tracking-tight">
            Dubai Prime Real Estate:
        </h2>
        
        <!-- Sub-description -->
        <p class="text-center text-gray-300 text-lg md:text-[21px] max-w-[850px] leading-[1.6] font-light">
            Driving Qualified Leads for Dubai Prime Real Estate, a Dubai Real Estate Firm
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
                        src="{{ asset('ppc.jpg') }}" 
                        alt="Dubai Prime Real Estate PPC Case Study" 
                        class="w-full h-auto object-contain" 
                    />
                </div>

                <!-- Overview -->
                <div>
                    <h3 class="text-3xl font-bold mb-4">Project Overview</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Dubai Prime Real Estate, a well-established brokerage in Dubai with a portfolio spanning luxury villas, off-plan properties, and commercial spaces, needed a reliable stream of qualified leads for its property listings without wasting budget on unqualified clicks.
                    </p>
                </div>

                <!-- Business Challenge -->
                <div>
                    <h3 class="text-3xl font-bold mb-4">Business Challenge</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        The client's previous ad campaigns were generating traffic but few actual inquiries, with a high cost-per-lead of AED 350+ and little visibility into what was actually converting. The team was spending over AED 40,000 monthly on Google and Meta ads, but only converting 2-3% of leads into viewings. There was no conversion tracking, no A/B testing framework, and no understanding of which keywords or audiences delivered the best ROI.
                    </p>
                </div>

                <!-- Strategy -->
                <div>
                    <h3 class="text-3xl font-bold mb-4">Strategy</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Our PPC experts in Dubai employed their PPC management services and rebuilt the campaign structure from the ground up. We refined:
                    </p>

                    <h4 class="font-bold text-xl mb-2 text-gray-800">Audience Targeting</h4>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        With custom and lookalike audiences based on high-net-worth profiles.
                    </p>

                    <h4 class="font-bold text-xl mb-2 text-gray-800">High-intent Keyword Research</h4>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Focusing on transactional terms like "buy villa Dubai" and "off-plan investment 2026".
                    </p>

                    <h4 class="font-bold text-xl mb-2 text-gray-800">Compelling Ad Copy</h4>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Highlighting unique selling propositions, payment plans, and developer credentials.
                    </p>

                    <h4 class="font-bold text-xl mb-2 text-gray-800">Optimized Landing Pages</h4>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Designed specifically for lead capture with minimal friction.
                    </p>
                </div>
                
                <!-- Execution -->
                <div>
                    <h3 class="text-3xl font-bold mb-4">Execution</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Being one of the most competent Google Ads agencies in Dubai, we launched a phased Google Ads and Meta Ads strategy, continuously A/B testing ad creatives and landing pages, adjusting bids based on real-time performance data, and setting up conversion tracking to measure true ROI. We implemented a lead scoring system to differentiate between hot, warm, and cold leads, ensuring the budget was allocated to the highest-converting segments.
                    </p>
                </div>

                <!-- Results -->
                <div>
                    <h3 class="text-3xl font-bold mb-4">Results</h3>
                    <ul class="list-disc list-inside space-y-3 text-gray-600 mb-6">
                        <li>Within 3 months, cost-per-lead dropped by 50% from AED 350+ to AED 175.</li>
                        <li>Qualified inquiries increased by 220%, jumping from 45 to 145 per month.</li>
                        <li>Overall ad spend efficiency (ROAS) improved by 400%, giving the client a predictable, scalable lead pipeline.</li>
                        <li>The number of property viewings increased from 12 to 38 per month, directly attributed to the new PPC campaigns.</li>
                        <li>The client reported closing 6 deals worth over AED 25 million within the first quarter of the new strategy.</li>
                    </ul>
                </div>
                
                <!-- Conclusion -->
                <div>
                    <h3 class="text-3xl font-bold mb-4">Conclusion</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        By focusing on quality over clicks, Dubai Prime Real Estate transformed its PPC spend from a cost center into a consistent source of high-value leads and measurable business growth.
                    </p>
                    <p class="text-gray-600 leading-relaxed font-semibold italic">
                        Looking for ad campaigns that turn clicks into real customers? Connect with our PPC experts in Dubai.
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

@extends('layouts.app')

@section('title', 'The Daily Grind SMM: 180% Follower Growth in 4 Months')
@section('meta_description', 'See how a story-first social strategy grew engagement from 1.2% to 10.4% and drove 40% more foot traffic for this Dubai café. Get in touch.')

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
            <h1 class="text-[28px] md:text-[32px] font-bold tracking-wide text-white">Case Study (Social Media Marketing)</h1>
        </div>
        
        <!-- Main Heading -->
        <h2 class="text-center text-4xl md:text-[52px] font-bold leading-[1.2] text-white mb-6 tracking-tight">
            The Daily Grind:
        </h2>
        
        <!-- Sub-description -->
        <p class="text-center text-gray-300 text-lg md:text-[21px] max-w-[850px] leading-[1.6] font-light">
            Building an Engaged Community for The Daily Grind, a Dubai-Based F&B Brand
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
                        src="{{ asset('smm.jpg') }}" 
                        alt="The Daily Grind SMM Case Study" 
                        class="w-full h-auto object-contain" 
                    />
                </div>

                <!-- Overview -->
                <div>
                    <h3 class="text-3xl font-bold mb-4">Project Overview</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        The [Daily Grind] is a homegrown café brand in Dubai with three locations across JLT, Business Bay, and Dubai Marina. Known for its artisanal coffee, healthy all-day breakfast options, and Instagram-worthy interiors, the café was looking to grow beyond word-of-mouth and build a dedicated online community around its food and atmosphere.
                    </p>
                </div>

                <!-- Business Challenge -->
                <div>
                    <h3 class="text-3xl font-bold mb-4">Business Challenge</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Despite great food and a loyal in-store following, the brand's social presence was inconsistent, engagement was low, and there was no clear content strategy connecting the online audience to actual foot traffic and orders. Posts were sporadic, with no cohesive visual identity, and the brand had never run any paid social campaigns. Competitors with stronger social media presence were capturing attention and customers that should have been The Daily Grind's.
                    </p>
                </div>

                <!-- Strategy -->
                <div>
                    <h3 class="text-3xl font-bold mb-4">Strategy</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Our SMM specialists in Dubai developed a content calendar built around storytelling. Our SMM Services UAE included:
                    </p>

                    <h4 class="font-bold text-xl mb-2 text-gray-800">Behind-the-scenes Reels</h4>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Featuring baristas crafting signature drinks and chefs preparing menu items.
                    </p>

                    <h4 class="font-bold text-xl mb-2 text-gray-800">Customer Spotlights</h4>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Showcasing regulars and their favorite orders.
                    </p>

                    <h4 class="font-bold text-xl mb-2 text-gray-800">Trend-driven Posts</h4>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Leveraging viral audio and formats on Instagram and TikTok.
                    </p>

                    <h4 class="font-bold text-xl mb-2 text-gray-800">A Community Engagement Plan</h4>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        To respond, connect, and build brand personality across platforms within 60 minutes of every comment and DM.
                    </p>
                </div>
                
                <!-- Execution -->
                <div>
                    <h3 class="text-3xl font-bold mb-4">Execution</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        We produced and scheduled a consistent mix of reels, stories, and posts, ran targeted engagement campaigns, and actively managed comments and DMs to build real conversations. Performance was tracked weekly to double down on what resonated most. A monthly content shoot was arranged to ensure a steady stream of high-quality visual assets. Paid social campaigns were launched with hyperlocal targeting to drive foot traffic to each café location.
                    </p>
                </div>

                <!-- Results -->
                <div>
                    <h3 class="text-3xl font-bold mb-4">Results</h3>
                    <ul class="list-disc list-inside space-y-3 text-gray-600 mb-6">
                        <li>In 4 months, the brand's follower count grew by 180% from 2,500 to over 7,000 followers.</li>
                        <li>Engagement rate increased from a stagnant 1.2% to 10.4%, and social-driven foot traffic rose by 40% with online orders increasing by 35%.</li>
                        <li>Several posts went viral locally, with one reel showcasing a signature latte art design reaching 250,000+ views and generating over 500 new followers in a single week.</li>
                        <li>The community management approach resulted in 95% of DMs being responded to within 30 minutes, building a reputation for genuine customer care.</li>
                    </ul>
                </div>
                
                <!-- Conclusion -->
                <div>
                    <h3 class="text-3xl font-bold mb-4">Conclusion</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        A consistent, story-first social strategy turned The Daily Grind's social pages from a quiet presence into a bustling community and a real driver of business growth due to our excellent community management services.
                    </p>
                    <p class="text-gray-600 leading-relaxed font-semibold italic">
                        Want a social media presence that actually builds community and drives sales? Get in touch with our SMM experts in Dubai.
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

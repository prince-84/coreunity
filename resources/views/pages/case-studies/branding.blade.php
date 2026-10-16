@extends('layouts.app')

@section('title', 'Salwa Real Estate Branding: From Invisible to Market Leader')
@section('meta_description', 'See how Salwa Real Estate built a cohesive brand identity, website, and social presence to generate 180+ qualified leads monthly. Free digital audit available.')

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
            <h1 class="text-[28px] md:text-[32px] font-bold tracking-wide text-white">Case Study : Branding</h1>
        </div>
        
        <!-- Main Heading -->
        <h2 class="text-center text-4xl md:text-[52px] font-bold leading-[1.2] text-white mb-6 tracking-tight">
            Salwa Real Estate:
        </h2>
        
        <!-- Sub-description -->
        <p class="text-center text-gray-300 text-lg md:text-[21px] max-w-[850px] leading-[1.6] font-light">
            From Brand Invisibility to Market Recognition
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
                        src="{{ asset('branding-1.jpg') }}" 
                        alt="Salwa Real Estate Branding" 
                        class="w-full h-auto object-contain" 
                    />
                </div>

                <!-- Overview -->
                <div>
                    <h3 class="text-3xl font-bold mb-4">Project Overview</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Salwa Real Estate, is a reputable brokerage and advisory firm specializing in sales, leasing, off-plan, and property management across the UAE. With over eight years of experience in Dubai's dynamic real estate market, the firm had built a loyal client base through word-of-mouth and agent relationships.
                    </p>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        However, in an increasingly digital marketplace, they recognized that their traditional approach was no longer sufficient. Despite having knowledgeable agents and strong service capabilities, the firm had virtually no online presence and no cohesive brand identity, little to minimal social media engagement, and no systematic way to capture and nurture digital leads.
                    </p>
                </div>

                <!-- Business Challenge -->
                <div>
                    <h3 class="text-3xl font-bold mb-4">Business Challenge</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Salwa Real Estate faced several critical challenges:
                    </p>
                    
                    <h4 class="font-bold text-xl mb-2 text-gray-800">Weak Brand Identity</h4>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        The firm operated without a distinct logo or consistent branding elements, making it difficult to stand out in Dubai's crowded real estate market.
                    </p>
                    
                    <h4 class="font-bold text-xl mb-2 text-gray-800">No Website</h4>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        No website meant no central hub to showcase property listings, capture inquiries, or establish credibility with online-first buyers.
                    </p>
                    
                    <h4 class="font-bold text-xl mb-2 text-gray-800">Limited Social Media Presence</h4>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Low engagement meant they were invisible to the growing segment of buyers who discover properties through Instagram and Facebook.
                    </p>
                    
                    <h4 class="font-bold text-xl mb-2 text-gray-800">No Lead Generation Strategy</h4>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Most critically, they had no lead generation strategy, no paid advertising, no retargeting, no systematic approach to converting the significant demand visible in the market.
                    </p>
                    
                    <p class="text-gray-600 leading-relaxed mb-4">
                        An internal assessment revealed that 70% of their competitors had active digital presence while Salwa was losing potential clients to more visible agencies before they even had a chance to compete.
                    </p>
                </div>

                <!-- Strategy -->
                <div>
                    <h3 class="text-3xl font-bold mb-4">Strategy</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        We developed a comprehensive digital transformation strategy:
                    </p>

                    <h4 class="font-bold text-xl mb-2 text-gray-800">Logo Design & Branding</h4>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        We designed a sophisticated, modern logo reflecting the agency's professionalism and expertise in the Dubai real estate market. The branding included a color scheme and design elements conveying trust and luxury, which are essential attributes for attracting high-net-worth clients.
                    </p>

                    <h4 class="font-bold text-xl mb-2 text-gray-800">Website Development</h4>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        A sleek, responsive website was developed featuring a comprehensive property listing section with high-resolution images and descriptions, advanced search filters for easy property discovery, inquiry forms with WhatsApp integration for direct communication, and SEO-optimized pages to rank higher in search results.
                    </p>

                    <h4 class="font-bold text-xl mb-2 text-gray-800">Social Media Management</h4>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Social media pages were revamped with consistent branding and engaging content. Strategies included daily property showcases with high-quality visuals and videos, market insights and investment tips, community engagement through polls and Q&A sessions, and strategic content calendar planning.
                    </p>

                    <h4 class="font-bold text-xl mb-2 text-gray-800">Facebook & Instagram Advertising</h4>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Highly targeted ad campaigns were launched to attract potential buyers and investors, with custom audience segmentation based on demographics, interests, and behaviors, carousel and video ads showcasing premium properties, lead generation forms to capture inquiries directly from ads, and retargeting campaigns to re-engage previous visitors.
                    </p>
                </div>
                
                <!-- Execution -->
                <div>
                    <h3 class="text-3xl font-bold mb-4">Execution</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        The transformation rolled out over twelve weeks:
                    </p>
                    <ul class="list-none space-y-4 text-gray-600 font-medium">
                        <li><span class="font-bold text-gray-800">Weeks 1-3:</span> Brand identity development, logo creation, and brand guidelines</li>
                        <li><span class="font-bold text-gray-800">Weeks 4-6:</span> Website development with property listing integration and SEO optimization</li>
                        <li><span class="font-bold text-gray-800">Weeks 7-8:</span> Social media page revamp and content calendar creation</li>
                        <li><span class="font-bold text-gray-800">Weeks 9-10:</span> Paid advertising campaign setup and audience segmentation</li>
                        <li><span class="font-bold text-gray-800">Weeks 11-12:</span> Full launch, agent training on the new systems, and performance baseline measurement</li>
                    </ul>
                </div>

                <!-- Results -->
                <div>
                    <h3 class="text-3xl font-bold mb-4">Results</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        After four months of execution, Salwa Real Estate achieved remarkable growth:
                    </p>
                    <ul class="list-disc list-inside space-y-3 text-gray-600 font-medium marker:text-gray-400 mb-6">
                        <li>400% increase in website traffic as the SEO-optimized site began ranking for competitive Dubai real estate keywords</li>
                        <li>180+ qualified leads per month, up from virtually zero digital inquiries previously</li>
                        <li>30% growth in social media engagement and followers, establishing the brand as a trusted voice in Dubai real estate</li>
                        <li>25% increase in property inquiry conversion rates from digital ad campaigns</li>
                        <li>Enhanced brand recognition in the competitive Dubai real estate market</li>
                    </ul>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        The integrated approach created a virtuous cycle: better branding attracted more traffic, more traffic generated more leads, and more leads resulted in more closed deals.
                    </p>
                </div>
                
                <!-- Conclusion -->
                <div>
                    <h3 class="text-3xl font-bold mb-4">Conclusion</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Salwa Real Estate's transformation demonstrates that in Dubai's competitive real estate market, a strong digital presence is not optional, it's essential. By building a cohesive brand, establishing a professional web presence, and implementing systematic lead generation, the firm positioned itself for sustainable growth in an increasingly digital-first industry.
                    </p>
                    <p class="text-gray-600 leading-relaxed font-semibold italic">
                        Is your real estate agency invisible online? Schedule a free digital audit with our team and discover how we can build a brand and lead generation system that attracts premium clients.
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

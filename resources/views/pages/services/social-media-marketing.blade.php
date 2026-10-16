@extends('layouts.app')

@section('title', 'Social Media Marketing Agency in Dubai | SMM Services | CoreUnity Solutions')
@section('meta_description', 'Top social media marketing agency in Dubai. Platform-specific content strategies, active community management, and paid social campaigns built for ROI.')

@section('content')
<div class="bg-[#050505] text-white relative flex flex-col font-sans min-h-screen">

    <!-- Hero Section Container -->
    <main class="flex-1 flex flex-col relative z-10 pt-32 pb-24 px-4 sm:px-6 lg:px-24 overflow-hidden">
        <!-- Deep red radial glow in center top -->
        <div 
            class="absolute top-0 left-1/2 -translate-x-1/2 w-full max-w-[800px] h-[500px] pointer-events-none z-0"
            style="background: radial-gradient(circle at top center, rgba(160, 20, 25, 0.35) 0%, transparent 65%); filter: blur(50px);">
        </div>

        <div class="max-w-[1300px] mx-auto w-full grid grid-cols-1 lg:grid-cols-2 gap-12 items-center relative z-10 mt-10">
            
            <!-- Left Content -->
            <div class="flex flex-col items-start max-w-[600px]">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-2.5 h-2.5 bg-[#c52833] rounded-full shadow-[0_0_12px_2px_rgba(197,40,51,0.6)]"></div>
                    <h1 class="text-xl md:text-[22px] font-bold tracking-wide text-white uppercase">Your Social Growth Partner</h1>
                </div>
                
                <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-[54px] font-bold leading-[1.15] text-white mb-6 tracking-tight break-words">
                    Social Media Marketing That Builds Real Communities
                </h2>
                
                <p class="text-[#cccccc] text-lg leading-relaxed font-light mb-4">
                    We manage content creation, community engagement, and paid campaigns across Facebook, Instagram, X, and LinkedIn, building strategies that turn followers into loyal customers.
                </p>
                <ul class="text-[#cccccc] text-lg font-light space-y-2 list-none pl-0">
                    <li class="flex items-center gap-2"><span class="text-[#c52833] font-bold">✓</span> Platform-specific content strategy</li>
                    <li class="flex items-center gap-2"><span class="text-[#c52833] font-bold">✓</span> Active community management</li>
                    <li class="flex items-center gap-2"><span class="text-[#c52833] font-bold">✓</span> Paid social campaigns built for ROI</li>
                </ul>
            </div>

            <!-- Right Content: Form -->
            <div class="flex justify-center lg:justify-end w-full">
                @include('partials.service_inquiry_form', ['pageName' => 'Social Media Marketing'])
            </div>

        </div>
    </main>

    <!-- ROI Driven Section -->
    <section class="w-full bg-white text-black relative flex flex-col pt-16 md:pt-24 overflow-hidden">
        <!-- Wavy Background (Left half) -->
        <div 
            class="absolute inset-0 z-0 opacity-100 pointer-events-none" 
            style="background-image: url('{{ asset('white_bg.png') }}'); background-size: 50% 100%; background-position: left center; background-repeat: no-repeat;">
        </div>
        
        <div class="max-w-[1300px] mx-auto w-full px-6 lg:px-12 grid grid-cols-1 lg:grid-cols-2 gap-16 relative z-10 mb-24">
            
            <!-- Left Side: Heading -->
            <div class="flex flex-col pt-4">
                <h2 class="text-3xl sm:text-[32px] md:text-[40px] font-semibold text-[#1f1f1f] leading-[1.2] tracking-tight">
                    Leading Social Media<br />Agency<br />in Dubai
                </h2>
            </div>

            <!-- Right Side: Accordions -->
            <div class="flex flex-col gap-3">
                
                <!-- Item 1 -->
                <div class="accordion-item bg-[#f9f9f9] rounded-xl overflow-hidden transition-all duration-300">
                    <button class="accordion-btn w-full flex items-center justify-between px-4 sm:px-6 md:px-8 py-4 sm:py-5 text-left cursor-pointer" onclick="toggleDetailAccordion(0)">
                        <span class="text-base sm:text-lg md:text-[19px] text-gray-800 font-medium">We Build Social Strategies That Stand Out</span>
                        <div class="accordion-icon w-7 h-7 rounded-full border border-gray-300 flex items-center justify-center flex-shrink-0 text-gray-500 font-light text-xl bg-white">−</div>
                    </button>
                    <div class="accordion-content transition-all duration-300 ease-in-out px-4 sm:px-6 md:px-8 pb-8 max-h-[1000px] opacity-100">
                        <div class="text-gray-500 text-[14px] leading-relaxed mb-5 space-y-4">
                            <div>
                                <strong class="text-gray-800 block mb-1">Content Creation</strong>
                                CoreUnity produces scroll-stopping content tailored to each platform.
                            </div>
                            <div>
                                <strong class="text-gray-800 block mb-1">Community Management</strong>
                                We actively engage with your audience, building genuine connections.
                            </div>
                            <div>
                                <strong class="text-gray-800 block mb-1">Paid Social Campaigns</strong>
                                Our targeted ad campaigns extend your reach and drive conversions.
                            </div>
                        </div>
                        <a href="{{ url('/contact') }}" class="inline-block bg-[#c52833] hover:bg-red-700 text-white text-xs font-semibold px-6 py-2.5 rounded-full transition-colors">
                            Learn more
                        </a>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="accordion-item bg-[#f9f9f9] rounded-xl overflow-hidden transition-all duration-300">
                    <button class="accordion-btn w-full flex items-center justify-between px-4 sm:px-6 md:px-8 py-4 sm:py-5 text-left cursor-pointer" onclick="toggleDetailAccordion(1)">
                        <span class="text-base sm:text-lg md:text-[19px] text-gray-800 font-medium">Why Choose Us</span>
                        <div class="accordion-icon w-7 h-7 rounded-full border border-gray-300 flex items-center justify-center flex-shrink-0 text-gray-500 font-light text-xl bg-white">+</div>
                    </button>
                    <div class="accordion-content transition-all duration-300 ease-in-out px-4 sm:px-6 md:px-8 pb-0 max-h-0 opacity-0 overflow-hidden">
                        <div class="text-gray-500 text-[14px] leading-relaxed mb-5">
                            <ul class="list-disc pl-5 space-y-2">
                                <li>We guide you through every step of your social strategy</li>
                                <li>We give attention to the smallest engagement details</li>
                                <li>We help brands build real communities, not just followers</li>
                                <li>Our track record speaks for itself</li>
                            </ul>
                        </div>
                        <a href="{{ url('/contact') }}" class="inline-block bg-[#c52833] hover:bg-red-700 text-white text-xs font-semibold px-6 py-2.5 rounded-full transition-colors">
                            Learn more
                        </a>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="accordion-item bg-[#f9f9f9] rounded-xl overflow-hidden transition-all duration-300">
                    <button class="accordion-btn w-full flex items-center justify-between px-4 sm:px-6 md:px-8 py-4 sm:py-5 text-left cursor-pointer" onclick="toggleDetailAccordion(2)">
                        <span class="text-base sm:text-lg md:text-[19px] text-gray-800 font-medium">What Makes Us the Best Social Media Agency in Dubai?</span>
                        <div class="accordion-icon w-7 h-7 rounded-full border border-gray-300 flex items-center justify-center flex-shrink-0 text-gray-500 font-light text-xl bg-white">+</div>
                    </button>
                    <div class="accordion-content transition-all duration-300 ease-in-out px-4 sm:px-6 md:px-8 pb-0 max-h-0 opacity-0 overflow-hidden">
                        <div class="text-gray-500 text-[14px] leading-relaxed mb-5 space-y-4">
                            <div>
                                <strong class="text-gray-800 block mb-1">Platform Expertise</strong>
                                We understand what works differently across Facebook, Instagram, X, and LinkedIn.
                            </div>
                            <div>
                                <strong class="text-gray-800 block mb-1">Proven Track Record</strong>
                                We've grown engagement and followings for brands across industries.
                            </div>
                            <div>
                                <strong class="text-gray-800 block mb-1">Ongoing Optimization</strong>
                                We track performance weekly to double down on what resonates.
                            </div>
                        </div>
                        <a href="{{ url('/contact') }}" class="inline-block bg-[#c52833] hover:bg-red-700 text-white text-xs font-semibold px-6 py-2.5 rounded-full transition-colors">
                            Learn more
                        </a>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="accordion-item bg-[#f9f9f9] rounded-xl overflow-hidden transition-all duration-300">
                    <button class="accordion-btn w-full flex items-center justify-between px-4 sm:px-6 md:px-8 py-4 sm:py-5 text-left cursor-pointer" onclick="toggleDetailAccordion(3)">
                        <span class="text-base sm:text-lg md:text-[19px] text-gray-800 font-medium">CoreUnity Solutions Builds Social Media Strategies for Real Community Growth</span>
                        <div class="accordion-icon w-7 h-7 rounded-full border border-gray-300 flex items-center justify-center flex-shrink-0 text-gray-500 font-light text-xl bg-white">+</div>
                    </button>
                    <div class="accordion-content transition-all duration-300 ease-in-out px-4 sm:px-6 md:px-8 pb-0 max-h-0 opacity-0 overflow-hidden">
                        <div class="text-gray-500 text-[14px] leading-relaxed mb-5 space-y-4">
                            <p>
                                Growing on social media takes more than consistent posting. It takes strategy and genuine engagement. As a leading social media marketing agency in Dubai, we manage content and campaigns across every major platform.
                            </p>
                            <div>
                                <strong class="text-gray-800 block mb-1">We Build Social Media Features That Meet Front-Line Technology</strong>
                                Our mission is to help brands build real connections online — from content creation to community management, tailored to your audience.
                            </div>
                            <div>
                                <strong class="text-gray-800 block mb-1">Our Social Media Marketing Services Are Built for Engagement</strong>
                                We work closely with clients to build platform-specific strategies, manage community interactions, and track performance to keep engagement climbing.
                            </div>
                            <div>
                                <strong class="text-gray-800 block mb-1">Social Media Features That Drive Results</strong>
                                With scroll-stopping content, active engagement, and targeted ad campaigns, our social strategies help turn followers into loyal customers
                            </div>
                        </div>
                        <a href="{{ url('/contact') }}" class="inline-block bg-[#c52833] hover:bg-red-700 text-white text-xs font-semibold px-6 py-2.5 rounded-full transition-colors">
                            Learn more
                        </a>
                    </div>
                </div>

            </div>

        </div>

        <!-- Red Banner Bottom -->
        <div class="w-full bg-[#cc2936] py-14 px-6 relative z-10 transition-all duration-300 hover:opacity-95 hover:shadow-inner cursor-pointer group">
            <div class="max-w-[1300px] mx-auto w-full flex flex-col md:flex-row items-start md:items-center justify-between gap-8 transition-transform duration-300 group-hover:scale-[1.01]">
                <div class="flex flex-col">
                    <h2 class="text-3xl md:text-4xl font-bold text-white mb-2 tracking-tight">
                        Ready to build a real community?
                    </h2>
                    <p class="text-red-100 text-[17px] font-light">
                        Let's build a social strategy that turns followers into customers.
                    </p>
                </div>
                <a href="{{ url('/contact') }}" class="bg-white hover:bg-gray-100 text-[#cc2936] font-bold text-sm px-8 py-4 rounded-lg transition-colors flex items-center gap-2 shadow-lg">
                    Contact with us &rarr;
                </a>
            </div>
        </div>

    </section>

    <!-- Our Work Section -->
    @include('partials.our_work', ['maxRows' => 2])

    <!-- Stats Section -->
    <section class="min-h-[428px] md:h-[428px] py-16 md:py-0 w-full bg-black relative flex items-center overflow-hidden shrink-0">
        <!-- Red Glow Background on the right -->
        <div class="absolute top-0 right-0 w-full h-full bg-[radial-gradient(circle_at_85%_50%,_rgba(220,20,30,0.85)_0%,_rgba(0,0,0,0)_65%)] pointer-events-none"></div>

        <div class="max-w-[1300px] w-full mx-auto px-6 lg:px-12 relative z-10 flex flex-col md:flex-row items-center justify-between gap-12 md:gap-8">
            
            <!-- Left Text Content -->
            <div class="flex-1 text-white pr-0 md:pr-4 text-center md:text-left">
                <h2 class="text-[36px] md:text-[44px] leading-[1.1] font-bold mb-6 tracking-tight">
                    Social Media Strategies Built for<br class="hidden md:block" />
                    Real Impact
                </h2>
                <p class="text-[16px] md:text-[17px] text-gray-300 font-light leading-relaxed max-w-[480px] mx-auto md:mx-0">
                    At CoreUnity Solutions, we blend creative content, community building, 
                    and data-driven analysis to build social campaigns that deliver measurable ROI.
                </p>
            </div>

            <!-- Right Cards Grid -->
            <div class="flex-1 grid grid-cols-2 gap-4 max-w-[500px] w-full mx-auto md:mx-0">
                <!-- Card 1 -->
                <div class="bg-[#1a1a1a] border border-white rounded-[14px] py-9 px-4 md:px-6 flex flex-col items-center justify-center text-center gap-1 shadow-[0_0_15px_rgba(255,255,255,0.05)]">
                    <h3 class="text-white text-[32px] md:text-[38px] font-bold tracking-tight">500+</h3>
                    <p class="text-gray-300 text-[11px] md:text-[12px] font-bold tracking-widest uppercase">Social Communities Built</p>
                </div>
                <!-- Card 2 -->
                <div class="bg-[#1a1a1a] border border-white rounded-[14px] py-9 px-4 md:px-6 flex flex-col items-center justify-center text-center gap-1 shadow-[0_0_15px_rgba(255,255,255,0.05)]">
                    <h3 class="text-white text-[32px] md:text-[38px] font-bold tracking-tight">60%</h3>
                    <p class="text-gray-300 text-[11px] md:text-[12px] font-bold tracking-widest uppercase">Avg Engagement Boost</p>
                </div>
                <!-- Card 3 -->
                <div class="bg-white rounded-[14px] py-9 px-4 md:px-6 flex flex-col items-center justify-center text-center gap-1 shadow-xl">
                    <h3 class="text-[#c52833] text-[32px] md:text-[38px] font-bold tracking-tight">15+</h3>
                    <p class="text-[#1f1f1f] text-[11px] md:text-[12px] font-bold tracking-widest uppercase">Years of Innovation</p>
                </div>
                <!-- Card 4 -->
                <div class="bg-white rounded-[14px] py-9 px-4 md:px-6 flex flex-col items-center justify-center text-center gap-1 shadow-xl">
                    <h3 class="text-[#c52833] text-[32px] md:text-[38px] font-bold tracking-tight">24/7</h3>
                    <p class="text-[#1f1f1f] text-[11px] md:text-[12px] font-bold tracking-widest uppercase">Monitoring & Engagement</p>
                </div>
            </div>

        </div>
    </section>

    <!-- Our Process Section -->
    <section class="w-full bg-white text-black py-24 px-6 md:px-12 lg:px-24 overflow-hidden">
        <div class="max-w-[1300px] mx-auto flex flex-col items-center">
            <div class="flex items-center gap-3 mb-6">
                <div class="w-2.5 h-2.5 bg-[#c52833] rounded-full shadow-[0_0_12px_2px_rgba(197,40,51,0.6)]"></div>
                <h3 class="text-sm md:text-[15px] font-bold tracking-[0.1em] text-gray-500 uppercase">Our Process</h3>
            </div>
          
            <h2 class="text-[32px] md:text-[44px] font-bold text-center mb-16 tracking-tight text-[#1f1f1f]">
                Social Media Process
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 w-full max-w-[1200px] mx-auto">
                <!-- Process 1 -->
                <div class="flex flex-col bg-[#f8f9fa] hover:bg-[#c52833] transition-colors duration-300 rounded-[20px] p-8 border border-gray-100 hover:border-transparent group cursor-pointer">
                    <div class="w-12 h-12 bg-[#3f3f46] rounded-[14px] flex items-center justify-center mb-8">
                        <span class="text-white text-lg font-bold">01</span>
                    </div>
                    <h4 class="text-[22px] font-bold text-[#1f1f1f] group-hover:text-white transition-colors duration-300 mb-3">Strategy & Planning</h4>
                    <p class="text-gray-500 group-hover:text-white/90 transition-colors duration-300 text-[15px] leading-relaxed">Analyzing your target audience, competitors, and building a custom content calendar for each platform.</p>
                </div>
                <!-- Process 2 -->
                <div class="flex flex-col bg-[#f8f9fa] hover:bg-[#c52833] transition-colors duration-300 rounded-[20px] p-8 border border-gray-100 hover:border-transparent group cursor-pointer">
                    <div class="w-12 h-12 bg-[#3f3f46] rounded-[14px] flex items-center justify-center mb-8">
                        <span class="text-white text-lg font-bold">02</span>
                    </div>
                    <h4 class="text-[22px] font-bold text-[#1f1f1f] group-hover:text-white transition-colors duration-300 mb-3">Content Creation</h4>
                    <p class="text-gray-500 group-hover:text-white/90 transition-colors duration-300 text-[15px] leading-relaxed">Producing scroll-stopping graphics, videos, and copy designed specifically to earn engagement.</p>
                </div>
                <!-- Process 3 -->
                <div class="flex flex-col bg-[#f8f9fa] hover:bg-[#c52833] transition-colors duration-300 rounded-[20px] p-8 border border-gray-100 hover:border-transparent group cursor-pointer">
                    <div class="w-12 h-12 bg-[#3f3f46] rounded-[14px] flex items-center justify-center mb-8">
                        <span class="text-white text-lg font-bold">03</span>
                    </div>
                    <h4 class="text-[22px] font-bold text-[#1f1f1f] group-hover:text-white transition-colors duration-300 mb-3">Community Management</h4>
                    <p class="text-gray-500 group-hover:text-white/90 transition-colors duration-300 text-[15px] leading-relaxed">Actively monitoring channels, responding to comments, and building real connections with followers.</p>
                </div>
                <!-- Process 4 -->
                <div class="flex flex-col bg-[#f8f9fa] hover:bg-[#c52833] transition-colors duration-300 rounded-[20px] p-8 border border-gray-100 hover:border-transparent group cursor-pointer">
                    <div class="w-12 h-12 bg-[#3f3f46] rounded-[14px] flex items-center justify-center mb-8">
                        <span class="text-white text-lg font-bold">04</span>
                    </div>
                    <h4 class="text-[22px] font-bold text-[#1f1f1f] group-hover:text-white transition-colors duration-300 mb-3">Analytics & Optimization</h4>
                    <p class="text-gray-500 group-hover:text-white/90 transition-colors duration-300 text-[15px] leading-relaxed">Tracking engagement, follower growth, and campaign performance to refine our strategy weekly.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Clients Section (Global Reusable Section) -->
    @include('partials.our_clients')

    <!-- Testimonial Section (Global Reusable Section) -->
    @include('partials.testimonial_light')

</div>
@endsection

@push('scripts')
<script>
    function toggleDetailAccordion(targetIdx) {
        const items = document.querySelectorAll('.accordion-item');
        items.forEach((item, idx) => {
            const content = item.querySelector('.accordion-content');
            const icon = item.querySelector('.accordion-icon');
            if (idx === targetIdx) {
                const isOpen = content.classList.contains('max-h-[1000px]');
                if (isOpen) {
                    content.classList.remove('max-h-[1000px]', 'opacity-100', 'pb-8');
                    content.classList.add('max-h-0', 'opacity-0', 'pb-0');
                    icon.textContent = '+';
                } else {
                    content.classList.remove('max-h-0', 'opacity-0', 'pb-0');
                    content.classList.add('max-h-[1000px]', 'opacity-100', 'pb-8');
                    icon.textContent = '−';
                }
            } else {
                content.classList.remove('max-h-[1000px]', 'opacity-100', 'pb-8');
                content.classList.add('max-h-0', 'opacity-0', 'pb-0');
                icon.textContent = '+';
            }
        });
    }
</script>
@endpush

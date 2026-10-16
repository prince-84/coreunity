@extends('layouts.app')

@section('title', 'Dental Clinic Website Redesign: Faster, More Patient-Friendly')
@section('meta_description', 'See how a slow, outdated dental clinic website was rebuilt into a fast, user-friendly platform built to turn visitors into booked patients.')

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
            <h1 class="text-[28px] md:text-[32px] font-bold tracking-wide text-white">Case Study: Website</h1>
        </div>
        
        <!-- Main Heading -->
        <h2 class="text-center text-4xl md:text-[52px] font-bold leading-[1.2] text-white mb-6 tracking-tight max-w-5xl mx-auto">
            DentalZorg : From a Slow, Outdated Site to <br class="hidden md:block" />
            a Modern Patient-Booking Platform
        </h2>
        
    </main>

    <!-- Main Content Section -->
    <section class="bg-white text-black py-16 md:py-20 px-4 sm:px-8 md:px-12 lg:px-20 relative z-20 -mt-10 overflow-hidden font-sans">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-12">
            
            <!-- Left Column: Case Study Details -->
            <div class="lg:col-span-2 space-y-12">
                
                <!-- Featured Image -->
                <div class="w-full rounded-2xl overflow-hidden relative shadow-lg bg-[#f8f9fa] flex items-center justify-center">
                    <img 
                        src="{{ asset('website.jpg') }}" 
                        alt="DentalZorg Case Study Featured Image" 
                        class="w-full h-auto object-contain" 
                    />
                </div>

                <!-- Overview -->
                <div>
                    <h3 class="text-3xl font-bold mb-4">Project Overview</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        DentalZorg is a leading dental practice offering general, cosmetic, and pediatric dentistry to patients across Amsterdam and the surrounding regions. With a loyal patient base built over years of hands-on care, the clinic had never struggled to retain the patients it already had. However, its website hadn't kept pace with how new patients search for and choose a dentist today, turning what should have been the clinic's strongest digital asset into a quiet liability.
                    </p>
                </div>

                <!-- Business Challenge -->
                <div>
                    <h3 class="text-3xl font-bold mb-4">Business Challenge</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        DentalZorg faced several critical challenges prior to the overhaul:
                    </p>
                    <ul class="list-disc list-inside space-y-3 text-gray-600 font-medium marker:text-gray-400">
                        <li><strong>Outdated Theme:</strong> The site ran on a legacy, unsupported theme that no longer reflected the clinic's premium care, making the practice look far less current than the services it delivered.</li>
                        <li><strong>Slow Load Times:</strong> Desktop and mobile pages took over 6 seconds to load. Every extra second meant lost patients bouncing directly to local competitors.</li>
                        <li><strong>Poor User Experience:</strong> Navigation was convoluted. Visitors struggled to find essential details like service breakdowns, clinic hours, or online booking options.</li>
                        <li><strong>Zero Tracking Visibility:</strong> Mobile bounce rates were soaring above 70%, with no reliable analytics to attribute new patient bookings back to specific marketing efforts.</li>
                    </ul>
                </div>

                <!-- Strategy -->
                <div>
                    <h3 class="text-3xl font-bold mb-4">Strategy</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        We executed a comprehensive website rebuild focused on speed, intuitive UX, and seamless conversions:
                    </p>
                    <ul class="list-disc list-inside space-y-3 text-gray-600 font-medium marker:text-gray-400">
                        <li><strong>Modern CMS & Custom Redesign:</strong> Replaced the legacy setup with a custom, ultra-clean design built on a scalable CMS that the DentalZorg team can update internally without web developer assistance.</li>
                        <li><strong>Performance Engineering:</strong> Compressed media assets, eliminated bloated legacy scripts, streamlined CSS/JS files, and migrated the infrastructure to high-performance local hosting.</li>
                        <li><strong>Frictionless Booking Pathways:</strong> Restructured site navigation around the patient journey, integrating prominent "Book Appointment," click-to-call, and direct WhatsApp actions across every mobile and desktop view.</li>
                    </ul>
                </div>

                <!-- Execution Timeline -->
                <div>
                    <h3 class="text-3xl font-bold mb-4">Execution Timeline</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        The full rebuild was launched in an agile 8-week sprint:
                    </p>
                    <ul class="list-disc list-inside space-y-3 text-gray-600 font-medium marker:text-gray-400">
                        <li><strong>Weeks 1–2 (Audit & Strategy):</strong> Technical audit, UX research, competitor analysis, and patient journey wireframing.</li>
                        <li><strong>Weeks 3–5 (Design & Development):</strong> Mobile-first front-end engineering, custom theme build, and speed optimization.</li>
                        <li><strong>Weeks 6–8 (Integration & Launch):</strong> Content migration, online booking integration, QA cross-device testing, staff training, and go-live.</li>
                    </ul>
                </div>

                <!-- Results -->
                <div>
                    <h3 class="text-3xl font-bold mb-4">Results</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Following the rebuild, DentalZorg transformed its online presence into a direct engine for patient acquisition:
                    </p>
                    <ul class="list-disc list-inside space-y-3 text-gray-600 font-medium marker:text-gray-400">
                        <li><strong>68% Decrease in Load Time:</strong> Average page load speeds dropped from 6.2 seconds to 1.9 seconds.</li>
                        <li><strong>145% Increase in Online Bookings:</strong> Streamlined scheduling converted high-intent traffic into confirmed appointments within the first 90 days.</li>
                        <li><strong>42% Reduction in Mobile Bounce Rate:</strong> Fast mobile rendering kept prospective patients on-site longer.</li>
                        <li><strong>Modern Brand Perception:</strong> Aligned the clinic’s digital storefront with the high standard of care provided in the office.</li>
                    </ul>
                </div>

                <!-- Conclusion -->
                <div>
                    <h3 class="text-3xl font-bold mb-4">Conclusion</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        For a healthcare practice that depends on trust, an outdated, sluggish website actively turns patients away before they ever make contact. By rebuilding around performance, clarity, and easy conversion paths, DentalZorg turned its digital presence into a consistent source of new patient growth.
                    </p>
                    <p class="text-gray-600 leading-relaxed font-bold">
                        Is your website turning visitors away before they ever contact you? Get a free consultation with our web development team and see what a rebuild could do for your practice.
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

@extends('layouts.app')

@section('title', 'How to Get Your Local Business on Google Maps (Step-by-Step Guide) | CoreUnity Solutions')
@section('meta_description', 'Learn how to create a Google Business Profile, verify it, and optimize it for local search: A complete step-by-step guide to getting found on Google Maps')

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
            <h1 class="text-[28px] md:text-[32px] font-bold tracking-wide text-white">Our Blogs</h1>
        </div>
        
        <!-- Main Heading -->
        <h2 class="text-center text-4xl md:text-[52px] font-bold leading-[1.2] text-white mb-6 tracking-tight">
            Stories of strategy, <br />
            creativity, and measurable impact.
        </h2>

        <!-- Sub-description -->
        <p class="text-center text-gray-300 text-lg md:text-[21px] max-w-[850px] leading-[1.6] font-light">
            Real brands, real challenges, real transformations. Explore how we help <br class="hidden md:block" />
            teams grow with design, data, and intelligent marketing.
        </p>
        
    </main>

    <!-- Main Content Container (White Background) -->
    <div class="bg-white text-black relative z-20 -mt-10">
        <section class="py-20 px-6 sm:px-12 md:px-20">
            <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-12">
            
                <!-- Left Column: Blog Content -->
                <div class="lg:col-span-2 space-y-8">
                    
                    <!-- Heading -->
                    <h2 class="text-3xl md:text-[38px] font-bold text-[#1f1f1f] leading-[1.25] tracking-tight">
                        How to Get Your Local Business on Google Maps (Step-by-Step)
                    </h2>

                    <!-- Content -->
                    <div class="space-y-6 text-gray-600 text-[16px] leading-[1.7] font-normal">
                        <p>
                            If you run a local business and you're not showing up on Google Maps, you're handing customers straight to competitors who are. Most people don't flip through a phone book anymore, they type "plumber near me" or "coffee shop open now" into Google and pick from whatever pops up on the map. If your business isn't there, you're invisible at the exact moment someone is ready to buy.
                        </p>
                        <p>
                            The good news is that getting listed doesn't cost anything, and it isn't complicated once you know the order of operations. This guide walks through how to create a Google Business Profile from scratch, get it verified, and set it up so it actually helps you win local customers instead of sitting there half-finished and ignored.
                        </p>

                        <!-- Image/Banner Area -->
                        <div class="w-full rounded-2xl overflow-hidden relative my-10 shadow-lg border border-gray-800">
                            <img 
                                src="{{ asset('blog1_img_584x348.png') }}" 
                                alt="How to Get Your Local Business on Google Maps" 
                                class="w-full h-auto object-cover" 
                            />
                        </div>

                        <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Why This Matters More Than People Think</h3>
                        <p>
                            Local search isn't a "nice to have" anymore. It's often the first impression a customer gets of your business. A well-built profile does more than drop a pin on a map. It’s a key component for local SEO, as it affects your local search visibility and is a factor in whether you make it into the coveted “local 3-pack” at the top of search results. Companies with complete, accurate, and active profiles consistently outperform those with thin or neglected ones. This isn’t about Google playing favourites, but a full profile provides Google (and customers) with more reasons to trust you. You will need to take the following steps to increase visibility:
                        </p>

                        <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Step 1: Check If a Listing Already Exists</h3>
                        <p>
                            Before you rush into building something new, search your business name on Google. Sometimes Google auto-generates a basic listing from public data even if nobody at your company ever touched it. If you go straight to trying to build one from scratch, you risk creating a duplicate, which can hurt rather than help your rankings.
                        </p>
                        <p>
                            This step is really about the Google Maps add business process starting on the right foot. If a listing pops up that isn't managed by anyone at your company, you'll need to claim it. If nothing shows up, you're free to build a brand-new one.
                        </p>

                        <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Step 2: How to Create a Google Business Profile</h3>
                        <p>
                            This is the core of the whole process, so let's slow down here. Here's how to create a Google Business Profile the right way:
                        </p>
                        <ul class="list-disc pl-5 space-y-2">
                            <li>Go to google.com/business and sign in with a Google account (ideally one tied to your business email).</li>
                            <li>Type in your exact business name. Use the same one that appears on your storefront, invoices, and website. Don't stuff in extra keywords like "best" or "affordable"; Google's guidelines prohibit it and it can get your listing suspended.</li>
                            <li>Choose the most accurate business category. This single field carries a lot of weight in how Google decides which searches to match you with.</li>
                            <li>Add your address, or if you're a service-area business without a public storefront, list the areas you serve instead.</li>
                            <li>Add a phone number and website URL.</li>
                        </ul>
                        <p>
                            Once these basics are filled in, you'll land inside the Google Business Profile Manager, which is the dashboard you'll return to again and again to make edits, check insights, and respond to activity. Learning how to create a Google Business Profile is really just learning your way around this one dashboard, and everything else builds from there.
                        </p>

                        <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Step 3: Claim Google Business Profile Listings That Already Exist</h3>
                        <p>
                            If your search in Step 1 turned up an existing listing, you don't get to build a new one. You need to claim Google Business Profile ownership instead. Click "Claim this business" and follow the prompts. If the listing shows it's already being managed by someone else (a former employee, an old agency, a previous owner), you'll need to request access instead of a straight claim.
                        </p>
                        <p>
                            To claim Google Business Profile access from another manager, click "Request access," explain your relationship to the business, and wait. The current manager typically has a few days to respond before Google may allow the claim to go through automatically.
                        </p>

                        <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Step 4: Verify Google Business Profile Ownership</h3>
                        <p>
                            You can fill out every field perfectly, but none of it goes live until you complete verification. This is Google's way of confirming a real business is behind the listing, not a bot or a competitor trying to hijack your name.
                        </p>
                        <p>
                            To verify Google Business Profile ownership, Google will offer you one or more of the following depending on your business type and location:
                        </p>
                        <ul class="list-disc pl-5 space-y-2">
                            <li><strong>Phone:</strong> A text or automated call with a code</li>
                            <li><strong>Email:</strong> A code sent to your business email</li>
                            <li><strong>Postcard by Mail:</strong> A physical card with a code, usually arriving within one to two weeks</li>
                            <li><strong>Video Verification:</strong> A short recorded walkthrough of your premises, signage, and proof of operation</li>
                        </ul>
                        <p>
                            This range of Google Business verification (phone/email/postcard/video) options means most businesses can get verified within days, though postcard verification takes the longest. Don't skip this step or put it off, because an unverified profile won't show up in Maps or the local pack no matter how well you've filled it out.
                        </p>

                        <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Step 5: Get Your NAP (Name, Address, Phone) Accuracy Right</h3>
                        <p>
                            Once verified, double-check every detail against your other listings: your website footer, Yelp, Facebook, industry directories, everywhere. NAP (name, address, phone) accuracy across the web is one of the most overlooked ranking signals in local search. If your phone number on Google doesn't match the phone number on your website, or your address is formatted a bit differently across platforms, it creates confusion that can very quietly drag down your rankings.
                        </p>
                        <p>
                            You need to set a recurring reminder to audit your NAP (name, address, phone) accuracy and you need to do this every few months, especially if you've moved locations, changed phone providers, or rebranded.
                        </p>

                        <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Step 6: Write a Business Description That Actually Sells</h3>
                        <p>
                            Your business description Google profile field is prime real estate. You need up to 750 characters to explain what you do, who you serve, and what makes you different. Just skip the generic filler, things like ("We are a family-owned business dedicated to excellence") and instead be very specific about services, specialties, and neighborhoods you cover. This will greatly help both customers and Google's algorithm understand exactly what you offer.
                        </p>

                        <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Step 7: Add Photos That Do the Talking</h3>
                        <p>
                            Listings with photos get dramatically more clicks and direction requests than listings without them. Add Google Business Profile photos of your storefront, interior, team, and products or completed work. Upload a fresh batch every month or two. You will need recent, real photos (not stock images) to signal to both Google and customers that your business is active and legitimate.
                        </p>

                        <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Step 8: Optimize Google Business Profile for Rankings</h3>
                        <p>
                            This is where most businesses stop too early. To optimize Google Business Profile performance long-term, fill out every attribute Google offers: services, products, business hours (including holiday hours), accessibility features, and payment options. Each completed field is another signal that helps determine your local business ranking when someone searches nearby.
                        </p>
                        <p>
                            Google weighs three main factors for ranking: <strong>Relevance</strong>, <strong>Distance</strong>, <strong>Prominence</strong>.
                        </p>
                        <p>
                            You can't move your address, but you can absolutely improve relevance (through category and description accuracy) and prominence (through reviews, photos, and activity), which is exactly what it means to optimize Google Business Profile completeness over time.
                        </p>

                        <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Step 9: Post Regularly With Google Posts</h3>
                        <p>
                            Google Posts function like mini social media updates that appear directly on your profile. Things like Promotions, events, new products, seasonal updates. Regularly posting Google Posts helps keep your business looking more active and engaged, which affects how fresh and trustworthy your listing appears to Google and searchers.
                        </p>

                        <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Step 10: Build a Steady Stream of Google Reviews</h3>
                        <p>
                            Google reviews for business listings are one of the strongest trust signals you can build. A handful of five-star reviews from three years ago won't cut it because Google and customers both favor recent, ongoing feedback.
                        </p>
                        <p>
                            If you're wondering how to get Google reviews flowing consistently, the simplest method is also the most effective: ask. Send a direct link when a job or purchase is completed, add a QR code at checkout, or include a request in follow up emails. Timing is everything so ask right after a positive interaction while it is still fresh.
                        </p>
                        <p>
                            Just as important is how you respond to Google reviews, both good and bad. A short, genuine reply to a five-star review shows you're paying attention. A calm, solution-focused reply to a negative one shows future customers how you handle problems, often more persuasively than the glowing reviews do.
                        </p>

                        <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Summary Table: How to Get Your Local Business on Google Maps</h3>
                        <div class="overflow-x-auto">
                            <table class="w-full text-left border-collapse border border-gray-200">
                                <thead>
                                    <tr class="bg-gray-100">
                                        <th class="border border-gray-200 p-2 font-bold">Step</th>
                                        <th class="border border-gray-200 p-2 font-bold">Action</th>
                                        <th class="border border-gray-200 p-2 font-bold">Key Focus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td class="border border-gray-200 p-2">1</td><td class="border border-gray-200 p-2">Check if a listing already exists</td><td class="border border-gray-200 p-2">Avoid duplicates</td></tr>
                                    <tr><td class="border border-gray-200 p-2">2</td><td class="border border-gray-200 p-2">Create the profile via google.com/business</td><td class="border border-gray-200 p-2">Business name, category, address</td></tr>
                                    <tr><td class="border border-gray-200 p-2">3</td><td class="border border-gray-200 p-2">Claim or request access if one exists</td><td class="border border-gray-200 p-2">Ownership control</td></tr>
                                    <tr><td class="border border-gray-200 p-2">4</td><td class="border border-gray-200 p-2">Verify ownership</td><td class="border border-gray-200 p-2">Phone, email, postcard, or video</td></tr>
                                    <tr><td class="border border-gray-200 p-2">5</td><td class="border border-gray-200 p-2">Confirm NAP accuracy</td><td class="border border-gray-200 p-2">Match name/address/phone everywhere</td></tr>
                                    <tr><td class="border border-gray-200 p-2">6</td><td class="border border-gray-200 p-2">Write the business description</td><td class="border border-gray-200 p-2">Clear, specific, keyword-relevant</td></tr>
                                    <tr><td class="border border-gray-200 p-2">7</td><td class="border border-gray-200 p-2">Upload photos</td><td class="border border-gray-200 p-2">Storefront, team, products/work</td></tr>
                                    <tr><td class="border border-gray-200 p-2">8</td><td class="border border-gray-200 p-2">Fill out all attributes</td><td class="border border-gray-200 p-2">Hours, services, payment options</td></tr>
                                    <tr><td class="border border-gray-200 p-2">9</td><td class="border border-gray-200 p-2">Post regular updates</td><td class="border border-gray-200 p-2">Promotions, events, news</td></tr>
                                    <tr><td class="border border-gray-200 p-2">10</td><td class="border border-gray-200 p-2">Collect and respond to reviews</td><td class="border border-gray-200 p-2">Build trust, ongoing engagement</td></tr>
                                </tbody>
                            </table>
                        </div>

                        <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Treat It Like Ongoing Business Listing Management</h3>
                        <p>
                            A profile isn't "set it and forget it." Real business listing management means checking in monthly: updating hours around holidays, refreshing photos, replying to new reviews, posting updates, and correcting any information that's changed. Businesses that treat business listing management as an ongoing habit and not a one-time task, are the ones that consistently outrank competitors who built their profile once and walked away.
                        </p>

                        <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Conclusion</h3>
                        <p>
                            At this point, you've gone from a blank search result to a fully built, verified, and active presence on Maps. Knowing how to create a Google Business Profile is only the starting line, because the businesses that win the local search game are the ones that keep showing up, keep collecting reviews, and keep their information accurate month after month.
                        </p>
                        <p>
                            If you take one thing away from this guide, let it be this: how to create a Google Business Profile correctly matters less than what you do with it afterward. Build it right, verify it, and then treat it like the living, breathing storefront it actually is.
                        </p>

                        <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Frequently Asked Questions</h3>
                        <ol class="list-decimal pl-5 space-y-4">
                            <li>
                                <strong>Is it free to create a Google Business Profile?</strong><br />
                                Yes. There's no cost to set up, verify, or manage your listing. Google does offer paid ads that can appear alongside your listing, but the profile itself is completely free.
                            </li>
                            <li>
                                <strong>How long does verification take?</strong><br />
                                It depends on the method. Phone and email verification can be instant. Postcard verification typically takes one to two weeks. Video verification is usually reviewed within a few business days.
                            </li>
                            <li>
                                <strong>Can I have a Google Business Profile without a physical storefront?</strong><br />
                                Yes. Service-area businesses, like plumbers or mobile groomers, can hide their exact address and instead list the regions they serve.
                            </li>
                            <li>
                                <strong>What happens if I skip verification?</strong><br />
                                Your listing won't appear on Google Maps or in local search results. Verification is mandatory, not optional, for visibility.
                            </li>
                            <li>
                                <strong>How often should I post updates to my profile?</strong><br />
                                Aim for at least once or twice a month. Regular activity signals to Google that your business is active and engaged with customers.
                            </li>
                            <li>
                                <strong>Can I edit my business information after the profile goes live?</strong><br />
                                Yes, at any time through the Business Profile Manager. Just note that major changes, like a new address, may trigger a re-verification request.
                            </li>
                            <li>
                                <strong>Do reviews really affect my ranking?</strong><br />
                                Yes. The number, recency, and quality of reviews are among the strongest local ranking signals Google uses, alongside how well you respond to them.
                            </li>
                            <li>
                                <strong>What if someone else is already managing my business listing?</strong><br />
                                You'll need to request access through Google, explaining your relationship to the business. The current manager has a limited window to approve or deny the request.
                            </li>
                            <li>
                                <strong>How many photos should I upload?</strong><br />
                                There's no strict limit, but a healthy starting point is 10–15 photos covering your storefront, interior, team, and products or services, refreshed periodically.
                            </li>
                            <li>
                                <strong>Does my website need to match my Google profile exactly?</strong><br />
                                Your business name, address, and phone number should be identical across your website and profile. Small inconsistencies can quietly hurt your local search visibility.
                            </li>
                        </ol>
                    </div>

                    <!-- Share Section -->
                    <div class="pt-8 flex items-center gap-4">
                        <span class="font-semibold text-gray-700">Share:</span>
                        <div class="flex gap-3 items-center">
                            <a href="https://www.facebook.com/coreunitysolutions" target="_blank" rel="noopener noreferrer">
                                <img src="{{ asset('fb.png') }}" alt="Facebook" width={36} height={36} class="w-9 h-9 cursor-pointer hover:scale-105 transition-transform object-contain" />
                            </a>
                            <a href="https://www.instagram.com/coreunitysolutions/" target="_blank" rel="noopener noreferrer">
                                <img src="{{ asset('insts.png') }}" alt="Instagram" width={36} height={36} class="w-9 h-9 cursor-pointer hover:scale-105 transition-transform object-contain" />
                            </a>
                            <a href="https://www.youtube.com/@coreunitysolutions" target="_blank" rel="noopener noreferrer">
                                <img src="{{ asset('yt.png') }}" alt="YouTube" width={36} height={36} class="w-9 h-9 cursor-pointer hover:scale-105 transition-transform object-contain" />
                            </a>
                            <a href="https://www.linkedin.com/company/coreunitysolutions" target="_blank" rel="noopener noreferrer">
                                <img src="{{ asset('link.png') }}" alt="LinkedIn" width={36} height={36} class="w-9 h-9 cursor-pointer hover:scale-105 transition-transform object-contain" />
                            </a>
                            <a href="https://www.tiktok.com/@coreunitysolutions?lang=en" target="_blank" rel="noopener noreferrer" class="w-[36px] h-[36px] bg-black rounded-full flex items-center justify-center cursor-pointer hover:scale-105 transition-transform">
                                <svg class="w-5 h-5 fill-white" viewBox="0 0 24 24"><path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64c.29 0 .58.04.85.12V9.3a6.33 6.33 0 0 0-1-.08A6.26 6.26 0 0 0 3 15.48a6.26 6.26 0 0 0 10.7 4.41c.23-.23.44-.48.62-.75V12a8.28 8.28 0 0 0 5.27 1.85v-3.72a4.83 4.83 0 0 1-3.77-1.48v-2h3.77v.03z"/></svg>
                            </a>
                        </div>
                    </div>

                </div>

                <!-- Right Column: Sidebar -->
                @include('partials.blog_sidebar')

            </div>
        </section>

        <!-- Divider -->
        <div class="max-w-7xl mx-auto border-t border-gray-200"></div>

        <!-- Related Articles Section -->
        @include('partials.blog_related')
    </div>

</div>
@endsection

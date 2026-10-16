@extends('layouts.app')

@section('title', 'Google Ads vs. Meta Ads: Which Is Better?(2026 Guide) | CoreUnity Solutions')
@section('meta_description', 'Confused about Google Ads vs. Meta Ads? Compare cost, ROI, targeting, and results for small businesses and ecommerce brands to find the right fit in 2026.')

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
                        Google Ads vs. Meta Ads: Which Is Right for Your Business?
                    </h2>

                    <!-- Content -->
                    <div class="space-y-6 text-gray-600 text-[16px] leading-[1.7] font-normal">
                        <p>
                            If you've spent any time in a marketing Slack channel, a Facebook group for small business owners, or even just a late-night Google search, you've probably run into the same debate over and over: Google Ads vs. Meta Ads, and which one should actually get your budget?
                        </p>
                        <p>
                            The honest answer is a little unsatisfying at first: it depends on what you're selling, who you're selling to, and how ready your audience is to buy. But "it depends" isn't much help when you've got a finite ad budget sitting in your account, so let's actually dig into the details.
                        </p>
                        <p>
                            By the end of this guide, you'll understand exactly how these two platforms differ, what they cost, how they perform, and maybe most importantly, why so many of the smartest advertisers stop asking "which one" and start asking "how do I use both."
                        </p>

                        <!-- Image/Banner Area -->
                        <div class="w-full rounded-2xl overflow-hidden relative my-10 shadow-lg border border-gray-800">
                            <img 
                                src="{{ asset('blog2_resized_584x348.png') }}" 
                                alt="Google Ads vs Meta Ads" 
                                class="w-full h-auto object-cover" 
                            />
                        </div>

                        <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Google Ads vs. Meta Ads: The Core Difference</h3>
                        <p>
                            Every conversation about Google Ads vs. Meta Ads eventually comes down to one idea: intent versus attention.
                        </p>
                        
                        <h4 class="text-xl font-bold text-gray-900 mt-4 mb-2">Google Ads</h4>
                        <p>
                            Google Ads shows up when someone is actively searching for something. They've typed "emergency plumber near me" or "best running shoes for flat feet" into the search bar, which means they already have a need in mind. You're not creating demand. You're capturing it at the exact moment it exists.
                        </p>

                        <h4 class="text-xl font-bold text-gray-900 mt-4 mb-2">Meta Ads</h4>
                        <p>
                            Meta Ads (which covers Facebook and Instagram) work the opposite way. Nobody is searching for your brand by name. Instead, Meta uses behavioral data, interests, past interactions, and demographic signals to put your ad in front of someone who's simply scrolling their feed. You're not catching demand. You're creating it, or at least reminding someone that a need exists.
                        </p>

                        <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Google Ads vs. Meta Ads – Quick Comparison</h3>
                        <div class="overflow-x-auto">
                            <table class="w-full text-left border-collapse border border-gray-200 mb-6">
                                <thead>
                                    <tr class="bg-gray-100">
                                        <th class="border border-gray-200 p-2 font-bold">Key Difference</th>
                                        <th class="border border-gray-200 p-2 font-bold">Google Ads</th>
                                        <th class="border border-gray-200 p-2 font-bold">Meta Ads</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td class="border border-gray-200 p-2 font-semibold">Core</td><td class="border border-gray-200 p-2">Intent</td><td class="border border-gray-200 p-2">Attention</td></tr>
                                    <tr><td class="border border-gray-200 p-2 font-semibold">Audience</td><td class="border border-gray-200 p-2">Actively searching</td><td class="border border-gray-200 p-2">Browsing/scrolling</td></tr>
                                    <tr><td class="border border-gray-200 p-2 font-semibold">Goal</td><td class="border border-gray-200 p-2">Capture demand</td><td class="border border-gray-200 p-2">Create demand</td></tr>
                                </tbody>
                            </table>
                        </div>

                        <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">How Google Ads Actually Works</h3>
                        <p>
                            Google Ads runs on an auction system tied to keywords. You bid on search terms relevant to your business, and your ad shows up based on a mix of your bid, your ad's relevance, and your landing page quality (Google calls this Quality Score). The higher your Quality Score, the less you often pay for the same position.
                        </p>
                        <p>Google Ads tends to shine when:</p>
                        <ul class="list-disc pl-5 space-y-2">
                            <li>Someone already knows what they want and is close to a purchase decision</li>
                            <li>The product or service has a clear, searchable name or category</li>
                            <li>You need leads or sales quickly rather than building awareness over months</li>
                        </ul>
                        <p>
                            The tradeoff is that you're limited to people who are actively typing something into a search bar. If your product needs to be discovered rather than searched for, Google Ads alone won't get you very far.
                        </p>

                        <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">How Meta Ads Actually Works</h3>
                        <p>
                            Meta Ads live inside Facebook and Instagram feeds, Stories, and Reels. Instead of keywords, you're targeting audiences, including things like age, location, interests, behaviors, or custom audiences built from your website visitors and customer lists.
                        </p>
                        <p>
                            Meta's ad delivery system is built to learn. The more data it collects on who clicks, converts, and engages, the smarter its targeting becomes. This is why Meta Ads often need more runway to optimize compared to Google, which can produce results faster simply because intent is already built in.
                        </p>
                        <p>Meta Ads tend to perform best when:</p>
                        <ul class="list-disc pl-5 space-y-2">
                            <li>You're building brand awareness or introducing a new product</li>
                            <li>Visual storytelling (photos, video, short-form content) is part of your pitch</li>
                            <li>You're retargeting people who've already visited your site or interacted with your brand</li>
                        </ul>

                        <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Google Ads vs. Meta Ads Cost: What You'll Actually Pay</h3>
                        <p>Let's talk numbers, because this is usually where the real decision gets made.</p>
                        
                        <h4 class="text-xl font-bold text-gray-900 mt-4 mb-2">Cost-Per-Click (CPC)</h4>
                        <p>
                            When people compare google ads vs meta ads cost, they're usually comparing cost-per-click (CPC), but that's only part of the picture.
                        </p>

                        <h4 class="text-xl font-bold text-gray-900 mt-4 mb-2">Google Ads CPCs</h4>
                        <p>
                            Google Ads CPCs vary wildly by industry. A competitive keyword in legal services or insurance can run you $50 or more per click, while a niche product term might cost under a dollar. If you're specifically looking at average CPC google ads vs facebook ads, the general industry pattern (though it shifts constantly) is that Google Ads CPCs tend to run higher across most sectors because you're paying for people who are already close to converting.
                        </p>

                        <h4 class="text-xl font-bold text-gray-900 mt-4 mb-2">Meta Ads CPCs</h4>
                        <p>
                            Meta Ads CPCs are generally lower on average, but you're often paying for a colder audience that needs more nurturing before it converts. Facebook and Instagram CPCs are frequently lower, but conversion rates on a cold click can also be lower, which changes your actual cost per lead or sale.
                        </p>

                        <h4 class="text-xl font-bold text-gray-900 mt-6 mb-4">Google Ads vs. Meta Ads Cost – Quick Comparison</h4>
                        <div class="overflow-x-auto">
                            <table class="w-full text-left border-collapse border border-gray-200 mb-6">
                                <thead>
                                    <tr class="bg-gray-100">
                                        <th class="border border-gray-200 p-2 font-bold">Key Difference</th>
                                        <th class="border border-gray-200 p-2 font-bold">Google Ads</th>
                                        <th class="border border-gray-200 p-2 font-bold">Meta Ads</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td class="border border-gray-200 p-2 font-semibold">CPC</td><td class="border border-gray-200 p-2">Generally higher</td><td class="border border-gray-200 p-2">Generally lower</td></tr>
                                    <tr><td class="border border-gray-200 p-2 font-semibold">Audience</td><td class="border border-gray-200 p-2">High intent</td><td class="border border-gray-200 p-2">Colder audience</td></tr>
                                    <tr><td class="border border-gray-200 p-2 font-semibold">Conversion</td><td class="border border-gray-200 p-2">Often faster</td><td class="border border-gray-200 p-2">Usually needs nurturing</td></tr>
                                    <tr><td class="border border-gray-200 p-2 font-semibold">Focus</td><td class="border border-gray-200 p-2">Cost per conversion</td><td class="border border-gray-200 p-2">Cost per conversion</td></tr>
                                </tbody>
                            </table>
                        </div>

                        <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Google Ads vs. Meta Ads for Small Business</h3>
                        <p>Small business owners have a unique problem:</p>
                        <ul class="list-disc pl-5 space-y-2">
                            <li>Limited budget</li>
                            <li>Limited time</li>
                            <li>Zero patience for wasted spend</li>
                        </ul>
                        <p>
                            So when it comes to google ads vs meta ads for small business, the calculation looks a little different than it does for an enterprise brand with a seven-figure ad budget.
                        </p>
                        <p>
                            If you run a local service business, like a dentist, a landscaper, an HVAC company, Google Ads (particularly Local Services Ads and Search campaigns) usually gets you faster, more predictable leads because people are actively searching with intent to hire someone now.
                        </p>
                        <p>
                            If you're a newer brand, a product-based business, or something people don't typically search for by name yet, Meta Ads can be the better starting point because it builds visibility and trust before someone ever thinks to search for you.
                        </p>
                        <p>
                            Facebook ads vs google ads for small business cant be a flat "pick one" question, Most small businesses get their best results by starting with whichever platform matches their sales cycle, proving out a small budget, and then layering in the second platform once they have the tracking and creative in place to support it.
                        </p>

                        <h4 class="text-xl font-bold text-gray-900 mt-6 mb-4">Google Ads vs. Meta Ads for Small Business – Quick Comparison</h4>
                        <div class="overflow-x-auto">
                            <table class="w-full text-left border-collapse border border-gray-200 mb-6">
                                <thead>
                                    <tr class="bg-gray-100">
                                        <th class="border border-gray-200 p-2 font-bold">Small Business</th>
                                        <th class="border border-gray-200 p-2 font-bold">Google Ads</th>
                                        <th class="border border-gray-200 p-2 font-bold">Meta Ads</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td class="border border-gray-200 p-2 font-semibold">Best for</td><td class="border border-gray-200 p-2">Local/service businesses</td><td class="border border-gray-200 p-2">New/product-based brands</td></tr>
                                    <tr><td class="border border-gray-200 p-2 font-semibold">Customer intent</td><td class="border border-gray-200 p-2">High</td><td class="border border-gray-200 p-2">Lower</td></tr>
                                    <tr><td class="border border-gray-200 p-2 font-semibold">Lead speed</td><td class="border border-gray-200 p-2">Faster</td><td class="border border-gray-200 p-2">Slower</td></tr>
                                    <tr><td class="border border-gray-200 p-2 font-semibold">Main goal</td><td class="border border-gray-200 p-2">Capture demand</td><td class="border border-gray-200 p-2">Build awareness</td></tr>
                                    <tr><td class="border border-gray-200 p-2 font-semibold">Best approach</td><td class="border border-gray-200 p-2">Start here if people are searching</td><td class="border border-gray-200 p-2">Start here if you need to create demand</td></tr>
                                </tbody>
                            </table>
                        </div>

                        <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Google Ads vs. Meta Ads for Ecommerce</h3>
                        <p>
                            Ecommerce brands tend to have a slightly different equation. When it comes to google ads vs meta ads for ecommerce, both platforms typically play a role rather than one replacing the other entirely.
                        </p>
                        <ul class="list-disc pl-5 space-y-2">
                            <li>Google Shopping and Search campaigns capture people who already know they want a product and are comparing prices or retailers.</li>
                            <li>Meta Ads, on the other hand, are exceptionally good at product discovery, like showing someone a product they didn't know they wanted, using strong visuals, video, and social proof like reviews and user-generated content.</li>
                        </ul>

                        <h4 class="text-xl font-bold text-gray-900 mt-6 mb-4">Google Ads vs. Meta Ads for Ecommerce – Quick Comparison</h4>
                        <div class="overflow-x-auto">
                            <table class="w-full text-left border-collapse border border-gray-200 mb-6">
                                <thead>
                                    <tr class="bg-gray-100">
                                        <th class="border border-gray-200 p-2 font-bold">Ecommerce</th>
                                        <th class="border border-gray-200 p-2 font-bold">Google Ads</th>
                                        <th class="border border-gray-200 p-2 font-bold">Meta Ads</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td class="border border-gray-200 p-2 font-semibold">Best for</td><td class="border border-gray-200 p-2">Product search & comparison</td><td class="border border-gray-200 p-2">Product discovery</td></tr>
                                    <tr><td class="border border-gray-200 p-2 font-semibold">Customer intent</td><td class="border border-gray-200 p-2">High</td><td class="border border-gray-200 p-2">Lower</td></tr>
                                    <tr><td class="border border-gray-200 p-2 font-semibold">Strength</td><td class="border border-gray-200 p-2">Shopping & Search</td><td class="border border-gray-200 p-2">Visuals & UGC</td></tr>
                                    <tr><td class="border border-gray-200 p-2 font-semibold">Role</td><td class="border border-gray-200 p-2">Capture buyers</td><td class="border border-gray-200 p-2">Create interest</td></tr>
                                    <tr><td class="border border-gray-200 p-2 font-semibold">Best approach</td><td class="border border-gray-200 p-2">Convert existing demand</td><td class="border border-gray-200 p-2">Generate new demand</td></tr>
                                </tbody>
                            </table>
                        </div>

                        <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Which Is Better, Google Ads or Facebook Ads? A More Useful Way to Ask</h3>
                        <p>
                            At this point you can probably guess where to land on “which is better: google ads or facebook ads?” there isn't a universal winner, only a better fit for a specific business at a specific stage.
                        </p>
                        <p>Ask yourself these questions instead:</p>
                        <ul class="list-disc pl-5 space-y-2">
                            <li>Do people already search for what I sell? Lean toward Google.</li>
                            <li>Am I introducing something new or underexplored? Lean toward Meta.</li>
                            <li>Is my sales cycle short and transactional, or long and consideration-heavy?</li>
                            <li>Can my landing pages and tracking support both platforms well, or should I master one first?</li>
                        </ul>
                        <p>
                            Answering those honestly will get you further than any generic "Google Ads is better" or "Meta Ads is better" headline you'll find online.
                        </p>

                        <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Google Ads and Meta Ads ROI: What Actually Matters</h3>
                        <p>
                            When evaluating google ads vs meta ads ROI, don't just look at return on ad spend (ROAS) in isolation. Factor in:
                        </p>
                        <ul class="list-disc pl-5 space-y-2">
                            <li>Customer lifetime value, not just first purchase value</li>
                            <li>Cost per qualified lead, not just cost per click</li>
                            <li>Attribution, because Meta often gets under-credited because a user might see an ad, browse elsewhere, then convert later through a Google search</li>
                        </ul>
                        <p>
                            A campaign with a lower ROAS on paper can still be the more valuable channel if it's feeding conversions that show up elsewhere in your funnel. This is one of the biggest blind spots seen in google ads vs meta ads ROI conversations. Teams optimize for whichever platform's dashboard looks best instead of looking at revenue holistically.
                        </p>

                        <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Google Ads vs. Meta Ads in 2026: What's Changed</h3>
                        <p>
                            The landscape shifts every year, and google ads vs meta ads 2026 comparisons look noticeably different than they did even three or four years ago. AI-driven automation now plays a much bigger role on both platforms. Google's Performance Max campaigns and Meta's Advantage+ campaigns both lean heavily on machine learning to find and bid on the right audiences with far less manual input than before.
                        </p>
                        <p>
                            The practical takeaway for 2026 is that manual micromanagement matters less than it used to, while quality inputs like strong creative, accurate conversion data, and clear business goals matter more. Whichever platform you choose, feeding it clean data and compelling assets will outperform obsessively tweaking bids and audiences by hand.
                        </p>

                        <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Using Google Ads and Meta Ads Together</h3>
                        <p>
                            Here's the part most comparison articles skip entirely: the businesses getting the best long-term results usually aren't choosing one platform. They're using google ads and meta ads together in a deliberate way.
                        </p>
                        <p>A simple, effective structure looks like this:</p>
                        <ul class="list-disc pl-5 space-y-2">
                            <li>Run Meta Ads to build awareness and retarget website visitors who didn't convert</li>
                            <li>Run Google Search Ads to capture people actively searching, including branded searches from people who first saw you on Meta</li>
                            <li>Use Google Analytics or your CRM to track how leads move between the two, rather than judging each platform in a silo</li>
                        </ul>
                        <p>
                            When businesses commit to using google ads and meta ads together instead of treating it as an either/or decision, they typically see lower blended acquisition costs over time, because each platform is doing the job it's actually good at rather than trying to do everything.
                        </p>

                        <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Conclusion</h3>
                        <p>
                            The google ads vs meta ads debate isn't really about picking a winner. It's about understanding two very different tools and knowing when to reach for each one. Google Ads captures demand that already exists. Meta Ads creates and nurtures demand before it becomes a search. Small businesses, ecommerce brands, and service providers all benefit from understanding this distinction rather than chasing whichever platform a competitor happens to be using.
                        </p>

                        <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Frequently Asked Questions</h3>
                        <ol class="list-decimal pl-5 space-y-4">
                            <li>
                                <strong>What is the main difference between Google Ads and Meta Ads?</strong><br />
                                Google Ads targets people actively searching for something using keywords, while Meta Ads targets people based on interests, behavior, and demographics across Facebook and Instagram, regardless of whether they're actively searching.
                            </li>
                            <li>
                                <strong>Which is cheaper, Google Ads or Meta Ads?</strong><br />
                                It depends on your industry, but Meta Ads generally have a lower average cost-per-click than Google Ads. However, google ads vs meta ads cost should always be measured by cost-per-conversion, not just cost-per-click, since a cheaper click that doesn't convert can end up costing more overall.
                            </li>
                            <li>
                                <strong>Is Google Ads or Facebook Ads better for a small business?</strong><br />
                                For local, service-based small businesses with high buying intent, Google Ads often produces faster results. For small businesses introducing a new product or building brand awareness, Meta Ads can be more cost-effective in the early stages.
                            </li>
                            <li>
                                <strong>What's the average CPC for Google Ads vs. Facebook Ads?</strong><br />
                                Average CPC google ads vs facebook ads varies significantly by industry, but Google Ads CPCs are typically higher because you're paying for users closer to a purchase decision, while Facebook and Instagram CPCs tend to run lower on average.
                            </li>
                            <li>
                                <strong>Which platform has better ROI, Google Ads or Meta Ads?</strong><br />
                                Neither platform universally wins on google ads vs meta ads roi. Google Ads often shows stronger short-term ROI on high-intent searches, while Meta Ads can produce strong long-term ROI once retargeting and lookalike audiences are optimized.
                            </li>
                            <li>
                                <strong>Can I use Google Ads and Meta Ads at the same time?</strong><br />
                                Yes, and many of the best-performing accounts do. Using google ads and meta ads together lets you build awareness on Meta while capturing that same demand later through Google Search.
                            </li>
                            <li>
                                <strong>Which is better for ecommerce, Google Ads or Meta Ads?</strong><br />
                                For google ads vs meta ads for ecommerce, most brands benefit from both — Meta Ads for product discovery and visual storytelling, and Google Shopping or Search Ads for capturing shoppers who are ready to compare and buy.
                            </li>
                            <li>
                                <strong>Do Google Ads or Meta Ads work faster?</strong><br />
                                Google Ads typically shows results faster because it targets existing intent. Meta Ads usually needs more time and data for the algorithm to optimize targeting and delivery.
                            </li>
                            <li>
                                <strong>How is Google Ads vs. Meta Ads changing in 2026?</strong><br />
                                Google ads vs meta ads 2026 trends show both platforms leaning more heavily on AI-driven automation (Performance Max and Advantage+), which shifts the advertiser's focus from manual bid management toward providing quality creative and clean conversion data.
                            </li>
                            <li>
                                <strong>Which is better, Google Ads or Facebook Ads, for lead generation?</strong><br />
                                For high-intent lead generation, such as local services, Google Ads often converts faster. For nurturing cold leads or retargeting past visitors before they become sales-ready, Facebook Ads (Meta Ads) tend to perform better. The which is better google ads or facebook ads question ultimately comes down to how ready your target audience already is to buy.
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

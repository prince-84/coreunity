@php
    $footer = $footerSection ?? \App\Models\FooterSection::where('is_active', true)->latest()->first() ?? \App\Models\FooterSection::first();
    $logoUrl = $footer?->logo_url ?? asset('logo.png');
    $address = $footer?->address ?? 'Churchill Tower, Business Bay, Dubai, UAE';
    $email = $footer?->email ?? 'contact@coreunitysolutions.com';
    $phone = $footer?->phone ?? '+971 50 555 9646';
    $fbUrl = $footer?->facebook_url ?? 'https://www.facebook.com/coreunitysolutions';
    $instaUrl = $footer?->instagram_url ?? 'https://www.instagram.com/coreunitysolutions/';
    $youtubeUrl = $footer?->youtube_url ?? 'https://www.youtube.com/@coreunitysolutions';
    $linkedinUrl = $footer?->linkedin_url ?? 'https://www.linkedin.com/company/coreunitysolutions';
    $tiktokUrl = $footer?->tiktok_url ?? 'https://www.tiktok.com/@coreunitysolutions?lang=en';

    $col2Title = $footer?->col_2_title ?? 'Smart Technology Solutions';
    $col2Links = $footer?->resolved_col_2_links ?? [
        ['label' => 'Web Development', 'url' => '/services/web-development'],
        ['label' => 'UI/UX Design', 'url' => '/services/ui-ux-design'],
        ['label' => 'Ecommerce Web Development', 'url' => '/services/ecommerce-web-development'],
        ['label' => 'Mobile App Development', 'url' => '/services/mobile-app-development'],
        ['label' => 'Artificial Intelligence', 'url' => '/services/artificial-intelligence'],
        ['label' => 'Chatbot Development', 'url' => '/services/chatbot-development'],
        ['label' => 'Virtual Reality Development', 'url' => '/services/virtual-reality-development'],
        ['label' => 'Augmented Reality Development', 'url' => '/services/augmented-reality-development'],
    ];

    $col3Title = $footer?->col_3_title ?? 'Digital Growth & Marketing';
    $col3Links = $footer?->resolved_col_3_links ?? [
        ['label' => 'Digital Marketing', 'url' => '/services/digital-marketing'],
        ['label' => 'Search Engine Optimization (SEO)', 'url' => '/services/search-engine-optimization'],
        ['label' => 'Generative Engine Optimization (GEO)', 'url' => '/services/generative-engine-optimization'],
        ['label' => 'Pay-Per-Click Advertising (PPC)', 'url' => '/services/pay-per-click-advertising'],
        ['label' => 'Social Media Marketing', 'url' => '/services/social-media-marketing'],
        ['label' => 'Influencer Marketing', 'url' => '/services/influencer-marketing'],
        ['label' => 'Branding & Creative Design', 'url' => '/services/branding-and-creative-design'],
        ['label' => 'AI Development Company', 'url' => '/services/ai-development-company'],
    ];

    $col4Title = $footer?->col_4_title ?? 'Industry';
    $col4Links = $footer?->resolved_col_4_links ?? [
        ['label' => 'Real Estate', 'url' => '/industries/real-estate'],
        ['label' => 'Government', 'url' => '/industries/government'],
        ['label' => 'Healthcare', 'url' => '/industries/healthcare'],
        ['label' => 'Education', 'url' => '/industries/education'],
        ['label' => 'Hospitality', 'url' => '/industries/hospitality'],
        ['label' => 'legal & law', 'url' => '/industries/legal-and-law'],
        ['label' => 'FinTech', 'url' => '/industries/fintech'],
    ];

    $copyright = $footer?->copyright_text ?? '© 2026. CoreUnity Solutions';
    $privacyUrl = $footer?->privacy_policy_url ?? '/privacy-policy';
    $termsUrl = $footer?->terms_conditions_url ?? '/terms-and-conditions';
@endphp

@if($footer?->is_active ?? true)
<footer class="w-full flex flex-col font-sans overflow-hidden">
    <!-- Newsletter Bar -->
    @if($footer?->newsletter_is_active ?? true)
    <div class="w-full bg-[#cc2936] text-white py-6 px-4 sm:px-8">
        <div class="max-w-[1400px] mx-auto flex flex-col md:flex-row items-center justify-center gap-8 lg:gap-16">
            <!-- Left Text -->
            <div class="flex flex-col items-start">
                <p class="text-sm font-medium tracking-wide mb-2 flex items-center gap-2">
                    <span class="w-1.5 h-1.5 rounded-full bg-white opacity-90"></span>
                    {{ $footer?->newsletter_subtitle ?? 'Subscribe now to stay updated on the latest market trends' }}
                </p>
                <h2 class="text-4xl md:text-[42px] font-extrabold tracking-tight">
                    {{ $footer?->newsletter_title ?? 'Join Our Newsletter' }}
                </h2>
            </div>

            <!-- Right Inputs -->
            <form action="{{ url('/newsletter') }}" method="POST" class="flex flex-col sm:flex-row items-center gap-3 w-full md:w-auto">
                @csrf
                <input 
                    type="text" 
                    name="name"
                    placeholder="Name" 
                    class="bg-white px-5 py-2.5 rounded-full text-black focus:outline-none w-full sm:w-[200px] text-sm"
                />
                <input 
                    type="email" 
                    name="email"
                    required
                    placeholder="Email*" 
                    class="bg-white px-5 py-2.5 rounded-full text-black focus:outline-none w-full sm:w-[240px] text-sm"
                />
                <button 
                    type="submit"
                    class="bg-black hover:bg-gray-900 text-white px-6 py-2.5 rounded-full border border-white/20 text-sm font-bold flex items-center gap-2 transition-colors w-full sm:w-auto justify-center shadow-md cursor-pointer shrink-0"
                >
                    <span>{{ $footer?->newsletter_button_text ?? 'Subscribe' }}</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </button>
            </form>
        </div>
    </div>
    @endif

    <!-- Main Footer Directory -->
    <div class="w-full bg-black text-white pt-10 pb-4 px-4 sm:px-8 relative overflow-hidden">
        <!-- Glow at the bottom line -->
        <div class="absolute bottom-10 left-1/2 -translate-x-1/2 w-[800px] h-[300px] bg-red-900/40 blur-[150px] rounded-full pointer-events-none mix-blend-screen"></div>

        <div class="max-w-[1400px] mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 relative z-10">
            <!-- Column 1: Brand & Contact -->
            <div class="flex flex-col gap-4">
                <a href="{{ url('/') }}" class="relative w-40 h-14 mb-1 block">
                    <img src="{{ $logoUrl }}" alt="CoreUnity Solutions" class="w-full h-full object-contain object-left" />
                </a>
                
                <div class="flex flex-col gap-1.5 text-[13px] text-gray-300 font-light leading-relaxed">
                    <p>{{ $address }}</p>
                    @if($email)
                        <a href="mailto:{{ $email }}" class="hover:text-white transition-colors">
                            {{ $email }}
                        </a>
                    @endif
                    @if($phone)
                        <a href="tel:{{ preg_replace('/[^\d+]/', '', $phone) }}" class="hover:text-white transition-colors">
                            {{ $phone }}
                        </a>
                    @endif
                </div>

                <!-- Social Icons matching Port 3000 exactly -->
                <div class="flex items-center gap-4 mt-4">
                    @if($fbUrl)
                    <a href="{{ $fbUrl }}" target="_blank" rel="noopener noreferrer" class="opacity-80 hover:opacity-100 transition-opacity relative w-5 h-5 block">
                        <img src="{{ asset('fb_image.png') }}" alt="Facebook" class="w-full h-full object-contain" />
                    </a>
                    @endif
                    @if($instaUrl)
                    <a href="{{ $instaUrl }}" target="_blank" rel="noopener noreferrer" class="opacity-80 hover:opacity-100 transition-opacity relative w-5 h-5 block">
                        <img src="{{ asset('insta_logo.png') }}" alt="Instagram" class="w-full h-full object-contain" />
                    </a>
                    @endif
                    @if($youtubeUrl)
                    <a href="{{ $youtubeUrl }}" target="_blank" rel="noopener noreferrer" class="opacity-80 hover:opacity-100 transition-opacity relative w-5 h-5 block">
                        <img src="{{ asset('youtube_logo.png') }}" alt="YouTube" class="w-full h-full object-contain" />
                    </a>
                    @endif
                    @if($linkedinUrl)
                    <a href="{{ $linkedinUrl }}" target="_blank" rel="noopener noreferrer" class="opacity-80 hover:opacity-100 transition-opacity relative w-5 h-5 block">
                        <img src="{{ asset('linkdin_image.png') }}" alt="LinkedIn" class="w-full h-full object-contain" />
                    </a>
                    @endif
                    @if($tiktokUrl)
                    <a href="{{ $tiktokUrl }}" target="_blank" rel="noopener noreferrer" class="opacity-80 hover:opacity-100 transition-opacity relative w-5 h-5 flex items-center justify-center text-white" title="TikTok">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64c.29 0 .58.04.85.12V9.3a6.33 6.33 0 0 0-1-.08A6.26 6.26 0 0 0 3 15.48a6.26 6.26 0 0 0 10.7 4.41c.23-.23.44-.48.62-.75V12a8.28 8.28 0 0 0 5.27 1.85v-3.72a4.83 4.83 0 0 1-3.77-1.48v-2h3.77v.03z"/></svg>
                    </a>
                    @endif
                </div>
            </div>

            <!-- Column 1: Smart Technology Solutions -->
            <div class="flex flex-col gap-5">
                <h4 class="font-bold text-[#cc2936] flex items-center gap-2 mb-2">
                    <span class="w-0.5 h-4 bg-[#cc2936]"></span>
                    {{ $col2Title }}
                </h4>
                <ul class="flex flex-col gap-2 text-[12px] text-gray-400 font-light">
                    @foreach($col2Links as $link)
                        <li><a href="{{ str_starts_with($link['url'], 'http') ? $link['url'] : url($link['url']) }}" target="_blank" rel="noopener noreferrer" class="hover:text-white transition-colors">{{ $link['label'] }}</a></li>
                    @endforeach
                </ul>
            </div>

            <!-- Column 2: Digital Growth & Marketing -->
            <div class="flex flex-col gap-5">
                <h4 class="font-bold text-[#cc2936] flex items-center gap-2 mb-2">
                    <span class="w-0.5 h-4 bg-[#cc2936]"></span>
                    {{ $col3Title }}
                </h4>
                <ul class="flex flex-col gap-2 text-[12px] text-gray-400 font-light">
                    @foreach($col3Links as $link)
                        <li><a href="{{ str_starts_with($link['url'], 'http') ? $link['url'] : url($link['url']) }}" target="_blank" rel="noopener noreferrer" class="hover:text-white transition-colors">{{ $link['label'] }}</a></li>
                    @endforeach
                </ul>
            </div>

            <!-- Column 3: Industry -->
            <div class="flex flex-col gap-5">
                <h4 class="font-bold text-[#cc2936] flex items-center gap-2 mb-2">
                    <span class="w-0.5 h-4 bg-[#cc2936]"></span>
                    {{ $col4Title }}
                </h4>
                <ul class="flex flex-col gap-3 text-[13px] text-gray-400 font-light">
                    @foreach($col4Links as $link)
                        <li><a href="{{ str_starts_with($link['url'], 'http') ? $link['url'] : url($link['url']) }}" target="_blank" rel="noopener noreferrer" class="hover:text-white transition-colors">{{ $link['label'] }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="max-w-[1400px] mx-auto mt-10 relative z-10 border-t border-white/10 pt-4 pb-2 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-gray-400 font-light">
            <p>{{ $copyright }}</p>
            <div class="flex items-center gap-4">
                <a href="{{ str_starts_with($privacyUrl, 'http') ? $privacyUrl : url($privacyUrl) }}" class="hover:text-white transition-colors">Privacy Policy</a>
                <span class="text-gray-600">|</span>
                <a href="{{ str_starts_with($termsUrl, 'http') ? $termsUrl : url($termsUrl) }}" class="hover:text-white transition-colors">Terms & Conditions</a>
            </div>
        </div>
    </div>
</footer>
@endif

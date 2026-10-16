<?php

namespace App\Http\Controllers;

use App\Models\BlogSection;
use App\Models\ClientReviewsSection;
use App\Models\CoreStrengthsSection;
use App\Models\FooterSection;
use App\Models\HeroSection;
use App\Models\OurClientsSection;
use App\Models\OurWorkSection;
use App\Models\Page;
use App\Models\ServicesSection;
use App\Models\TeamSection;
use App\Models\TestimonialSection;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function index()
    {
        $hero = HeroSection::latest('updated_at')->first() ?? HeroSection::first();
        $servicesSection = ServicesSection::where('is_active', true)->latest('updated_at')->first() ?? ServicesSection::latest('updated_at')->first() ?? ServicesSection::first();
        $coreStrengths = CoreStrengthsSection::where('is_active', true)->latest('updated_at')->first() ?? CoreStrengthsSection::latest('updated_at')->first() ?? CoreStrengthsSection::first();
        $ourWork = OurWorkSection::where('is_active', true)->latest('updated_at')->first() ?? OurWorkSection::latest('updated_at')->first() ?? OurWorkSection::first();
        $ourClients = OurClientsSection::where('is_active', true)->latest('updated_at')->first() ?? OurClientsSection::latest('updated_at')->first() ?? OurClientsSection::first();
        $teamSection = TeamSection::where('is_active', true)->latest('updated_at')->first() ?? TeamSection::latest('updated_at')->first() ?? TeamSection::first();
        $testimonialSection = TestimonialSection::where('is_active', true)->latest('updated_at')->first() ?? TestimonialSection::latest('updated_at')->first() ?? TestimonialSection::first();
        $blogSection = BlogSection::where('is_active', true)->latest('updated_at')->first() ?? BlogSection::latest('updated_at')->first() ?? BlogSection::first();
        $clientReviewsSection = ClientReviewsSection::where('is_active', true)->latest('updated_at')->first() ?? ClientReviewsSection::latest('updated_at')->first() ?? ClientReviewsSection::first();
        $footerSection = FooterSection::where('is_active', true)->latest('updated_at')->first() ?? FooterSection::latest('updated_at')->first() ?? FooterSection::first();

        // Try to fetch the homepage config
        $page = Page::where('slug', 'homepage')
            ->orWhere('slug', 'home')
            ->first() ?? Page::first();

        // If no page exists yet (e.g. fresh database), create a default instance for seamless previewing
        if (!$page) {
            $page = new Page([
                'slug' => 'home',
                'hero_headline' => 'We are a bold and innovative digital agency based in the UAE.',
                'hero_cta_text' => 'Schedule a call',
                'hero_cta_url' => '#',
                'global_presence' => ['USA', 'UAE', 'Saudi Arabia', 'Pakistan'],
            ]);
        }

        return view('home', compact('page', 'hero', 'servicesSection', 'coreStrengths', 'ourWork', 'ourClients', 'teamSection', 'testimonialSection', 'blogSection', 'clientReviewsSection', 'footerSection'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\AboutHeroSection;
use App\Models\AboutIntroSection;
use App\Models\AboutValuesSection;
use App\Models\AboutIndustriesSection;
use App\Models\ServicesHeroSection;
use App\Models\ServicesListSection;
use App\Models\ServicesIndustriesSection;
use App\Models\ServicesSmmSection;
use App\Models\CaseStudyHeroSection;
use App\Models\BlogHeroSection;
use App\Models\BlogSection;
use App\Models\ContactHeroSection;
use App\Models\ContactDetailsSection;
use App\Models\OurClientsSection;
use App\Models\TeamSection;
use App\Models\Page;
use App\Models\Service;
use App\Models\CaseStudy;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PageController extends Controller
{
    /**
     * Display a dynamic page or specific view by slug.
     */
    public function show($slug)
    {
        $page = Page::where('slug', $slug)
            ->where('is_published', true)
            ->first();

        // If page exists in database
        if ($page) {
            if ($slug === 'case-study' || $slug === 'portfolio') {
                $data = compact('page');
                $data['caseStudyHero'] = CaseStudyHeroSection::where('is_active', true)->latest('updated_at')->first() ?? CaseStudyHeroSection::first();
                $viewName = view()->exists("pages.{$slug}") ? "pages.{$slug}" : 'pages.portfolio';
                return view($viewName, $data);
            }

            if (view()->exists("pages.{$slug}")) {
                $data = compact('page');
                if ($slug === 'about') {
                    $data['aboutHero'] = AboutHeroSection::where('is_active', true)->latest('updated_at')->first() ?? AboutHeroSection::first();
                    $data['aboutIntro'] = AboutIntroSection::where('is_active', true)->latest('updated_at')->first() ?? AboutIntroSection::first();
                    $data['aboutValues'] = AboutValuesSection::where('is_active', true)->latest('updated_at')->first() ?? AboutValuesSection::first();
                    $data['aboutIndustries'] = AboutIndustriesSection::where('is_active', true)->latest('updated_at')->first() ?? AboutIndustriesSection::first();
                    $data['ourClients'] = OurClientsSection::where('is_active', true)->latest('updated_at')->first() ?? OurClientsSection::first();
                    $data['teamSection'] = TeamSection::where('is_active', true)->latest('updated_at')->first() ?? TeamSection::first();
                } elseif ($slug === 'services') {
                    $data['servicesHero'] = ServicesHeroSection::where('is_active', true)->latest('updated_at')->first() ?? ServicesHeroSection::first();
                    $data['servicesList'] = ServicesListSection::where('is_active', true)->latest('updated_at')->first() ?? ServicesListSection::first();
                    $data['servicesIndustries'] = ServicesIndustriesSection::where('is_active', true)->latest('updated_at')->first() ?? ServicesIndustriesSection::first();
                    $data['servicesSmm'] = ServicesSmmSection::where('is_active', true)->latest('updated_at')->first() ?? ServicesSmmSection::first();
                    $data['ourClients'] = OurClientsSection::where('is_active', true)->latest('updated_at')->first() ?? OurClientsSection::first();
                } elseif ($slug === 'blog') {
                    $data['blogHero'] = BlogHeroSection::where('is_active', true)->latest('updated_at')->first() ?? BlogHeroSection::first();
                    $data['blogSection'] = BlogSection::where('is_active', true)->latest('updated_at')->first() ?? BlogSection::latest('updated_at')->first() ?? BlogSection::first();
                } elseif ($slug === 'contact') {
                    $data['contactHero'] = ContactHeroSection::where('is_active', true)->latest('updated_at')->first() ?? ContactHeroSection::first();
                    $data['contactDetails'] = ContactDetailsSection::where('is_active', true)->latest('updated_at')->first() ?? ContactDetailsSection::first();
                }
                return view("pages.{$slug}", $data);
            }
            return view('pages.dynamic', compact('page'));
        }

        // If not in database, check if a view file exists (e.g. built-in page)
        if ($slug === 'case-study' || $slug === 'portfolio') {
            $fallbackPage = new Page([
                'title' => 'Case Study',
                'slug' => $slug,
                'hero_headline' => 'Case Studies That Deliver Real Results',
                'is_published' => true,
            ]);
            $data = ['page' => $fallbackPage];
            $data['caseStudyHero'] = CaseStudyHeroSection::where('is_active', true)->latest('updated_at')->first() ?? CaseStudyHeroSection::first();
            $viewName = view()->exists("pages.{$slug}") ? "pages.{$slug}" : 'pages.portfolio';
            return view($viewName, $data);
        }

        if (view()->exists("pages.{$slug}")) {
            $fallbackPage = new Page([
                'title' => ucwords(str_replace('-', ' ', $slug)),
                'slug' => $slug,
                'hero_headline' => ucwords(str_replace('-', ' ', $slug)),
                'is_published' => true,
            ]);
            $data = ['page' => $fallbackPage];
            if ($slug === 'about') {
                $data['aboutHero'] = AboutHeroSection::where('is_active', true)->latest('updated_at')->first() ?? AboutHeroSection::first();
                $data['aboutIntro'] = AboutIntroSection::where('is_active', true)->latest('updated_at')->first() ?? AboutIntroSection::first();
                $data['aboutValues'] = AboutValuesSection::where('is_active', true)->latest('updated_at')->first() ?? AboutValuesSection::first();
                $data['aboutIndustries'] = AboutIndustriesSection::where('is_active', true)->latest('updated_at')->first() ?? AboutIndustriesSection::first();
                $data['ourClients'] = OurClientsSection::where('is_active', true)->latest('updated_at')->first() ?? OurClientsSection::first();
                $data['teamSection'] = TeamSection::where('is_active', true)->latest('updated_at')->first() ?? TeamSection::first();
            } elseif ($slug === 'services') {
                $data['servicesHero'] = ServicesHeroSection::where('is_active', true)->latest('updated_at')->first() ?? ServicesHeroSection::first();
                $data['servicesList'] = ServicesListSection::where('is_active', true)->latest('updated_at')->first() ?? ServicesListSection::first();
                $data['servicesIndustries'] = ServicesIndustriesSection::where('is_active', true)->latest('updated_at')->first() ?? ServicesIndustriesSection::first();
                $data['servicesSmm'] = ServicesSmmSection::where('is_active', true)->latest('updated_at')->first() ?? ServicesSmmSection::first();
                $data['ourClients'] = OurClientsSection::where('is_active', true)->latest('updated_at')->first() ?? OurClientsSection::first();
            } elseif ($slug === 'blog') {
                $data['blogHero'] = BlogHeroSection::where('is_active', true)->latest('updated_at')->first() ?? BlogHeroSection::first();
            } elseif ($slug === 'contact') {
                $data['contactHero'] = ContactHeroSection::where('is_active', true)->latest('updated_at')->first() ?? ContactHeroSection::first();
                $data['contactDetails'] = ContactDetailsSection::where('is_active', true)->latest('updated_at')->first() ?? ContactDetailsSection::first();
            }
            return view("pages.{$slug}", $data);
        }

        // Check if dynamic case study exists (e.g. root routes /mobile-app, /smm, /ppc, /print, /seo, /branding, /website)
        $caseStudy = CaseStudy::where('slug', $slug)->where('is_published', true)->first();
        if ($caseStudy) {
            return view('pages.case-study-detail', compact('caseStudy'));
        }

        if (view()->exists("pages.case-studies.{$slug}")) {
            return view("pages.case-studies.{$slug}");
        }

        abort(404);
    }

    /**
     * Display a case study details page.
     */
    public function showCaseStudy($slug)
    {
        $normalizedSlug = Str::slug(urldecode($slug));

        // 1. Fetch dynamic case study from database
        $caseStudy = CaseStudy::where('slug', $normalizedSlug)
            ->where('is_published', true)
            ->first();

        if ($caseStudy) {
            return view('pages.case-study-detail', compact('caseStudy'));
        }

        if (view()->exists("pages.case-studies.{$normalizedSlug}")) {
            return view("pages.case-studies.{$normalizedSlug}");
        }

        if (view()->exists("pages.{$normalizedSlug}")) {
            return view("pages.{$normalizedSlug}");
        }

        abort(404);
    }

    /**
     * Display an industry details page by industry slug.
     */
    public function showIndustry($industry)
    {
        $slug = Str::slug(urldecode($industry));

        if (view()->exists("pages.industries.{$slug}")) {
            return view("pages.industries.{$slug}");
        }

        $page = Page::where('slug', "industries/{$slug}")
            ->orWhere('slug', $slug)
            ->where('is_published', true)
            ->first();

        if ($page) {
            return view('pages.dynamic', compact('page'));
        }

        abort(404);
    }

    /**
     * Display a blog post details page by slug.
     */
    public function showBlog($slug)
    {
        $normalizedSlug = Str::slug(urldecode($slug));

        if ($normalizedSlug === 'detail') {
            $normalizedSlug = 'local-business-on-google-maps';
        }

        // 1. Fetch dynamic blog post from database
        $post = Post::where('slug', $normalizedSlug)
            ->where('is_published', true)
            ->first();

        if ($post) {
            return view('pages.blog-detail', compact('post'));
        }

        if (view()->exists("pages.blog.{$normalizedSlug}")) {
            return view("pages.blog.{$normalizedSlug}");
        }

        $page = Page::where('slug', "blog/{$normalizedSlug}")
            ->orWhere('slug', $normalizedSlug)
            ->where('is_published', true)
            ->first();

        if ($page) {
            return view('pages.dynamic', compact('page'));
        }

        abort(404);
    }

    /**
     * Display a service details page by subservice slug.
     */
    public function showService($subservice)
    {
        // Normalize slug: lowercase and convert spaces to hyphens
        $slug = Str::slug(urldecode($subservice));

        // 1. Fetch dynamic service model from database
        $service = Service::where('slug', $slug)
            ->where('is_published', true)
            ->first();

        if ($service) {
            return view('pages.service-detail', compact('service'));
        }

        // 2. Check if a dedicated view exists in pages.services.{slug}
        if (view()->exists("pages.services.{$slug}")) {
            return view("pages.services.{$slug}");
        }

        // 3. Check if page exists in DB with slug or services/{slug}
        $page = Page::where('slug', "services/{$slug}")
            ->orWhere('slug', $slug)
            ->where('is_published', true)
            ->first();

        if ($page) {
            return view('pages.dynamic', compact('page'));
        }

        // Fallback for any other service slug: render service detail with dynamic title
        $title = ucwords(str_replace('-', ' ', $slug));
        $fallbackPage = new Page([
            'title' => $title,
            'slug' => "services/{$slug}",
            'hero_headline' => "{$title} That Delivers Real Growth",
            'is_published' => true,
        ]);
        return view('pages.services.branding-and-creative-design', ['page' => $fallbackPage]);
    }

    /**
     * Handle Consultation Lead Form Submission.
     */
    public function submitLead(Request $request)
    {
        if (!$request->has('name') && ($request->has('first_name') || $request->has('last_name'))) {
            $assembledName = trim(($request->input('first_name') ?? '') . ' ' . ($request->input('last_name') ?? ''));
            $request->merge(['name' => $assembledName ?: 'Website Visitor']);
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'message' => 'nullable|string',
            'question' => 'nullable|string',
            'project_brief' => 'nullable|string',
        ]);

        // Dynamic Form Detection
        $formName = $request->input('form_type') 
            ?? $request->input('form_name') 
            ?? ($request->filled('service') ? 'Service Inquiry Form' : 'Contact Us Page Form');

        // Normalize naming for the consultation modal
        if ($formName === 'Speak to Expert Modal' || $formName === 'Speak to an Expert') {
            $formName = 'Consult an Expert';
        }

        $formSlug = Str::slug($formName);

        // Find or dynamically create CRM form catalog entry
        $crmForm = \App\Models\CrmForm::firstOrCreate(
            ['slug' => $formSlug],
            [
                'name' => $formName,
                'description' => 'Dynamic submissions from ' . $formName,
                'is_active' => true,
            ]
        );

        $phone = $request->input('phone');
        $countryIso = $request->input('country_iso');
        $countryCode = $request->input('country_dial_code') ?? $request->input('country_code');

        // Infer country code if missing
        if (!$countryIso && $phone) {
            if (str_starts_with($phone, '+971')) { $countryIso = 'AE'; $countryCode = '+971'; }
            elseif (str_starts_with($phone, '+92')) { $countryIso = 'PK'; $countryCode = '+92'; }
            elseif (str_starts_with($phone, '+1')) { $countryIso = 'US'; $countryCode = '+1'; }
            elseif (str_starts_with($phone, '+44')) { $countryIso = 'GB'; $countryCode = '+44'; }
            elseif (str_starts_with($phone, '+966')) { $countryIso = 'SA'; $countryCode = '+966'; }
            elseif (str_starts_with($phone, '+91')) { $countryIso = 'IN'; $countryCode = '+91'; }
        }

        $messageText = $request->input('message') 
            ?? $request->input('question') 
            ?? $request->input('project_brief');

        // Record submission
        \App\Models\FormSubmission::create([
            'crm_form_id' => $crmForm->id,
            'form_name' => $crmForm->name,
            'form_slug' => $crmForm->slug,
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $phone,
            'country_iso' => $countryIso ? strtoupper($countryIso) : null,
            'country_code' => $countryCode,
            'service' => $request->input('service'),
            'specialist' => $request->input('specialist'),
            'contact_method' => $request->input('contact_method'),
            'message' => $messageText,
            'payload' => $request->except(['_token', 'password', 'password_confirmation']),
            'status' => 'new',
            'ip_address' => $request->ip(),
            'page_url' => $request->header('referer') ?? url()->current(),
        ]);

        $msg = 'Thank you! Our digital experts will contact you within 24 hours.';

        if ($request->wantsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => $msg
            ]);
        }

        return back()->with('success', $msg);
    }

    /**
     * Handle Newsletter Subscription.
     */
    public function subscribeNewsletter(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:255',
        ]);

        $formName = 'Newsletter Subscription Form';
        $formSlug = 'newsletter-subscription-form';

        $crmForm = \App\Models\CrmForm::firstOrCreate(
            ['slug' => $formSlug],
            [
                'name' => $formName,
                'description' => 'Footer newsletter email subscription opt-ins.',
                'is_active' => true,
            ]
        );

        \App\Models\FormSubmission::create([
            'crm_form_id' => $crmForm->id,
            'form_name' => $crmForm->name,
            'form_slug' => $crmForm->slug,
            'name' => 'Newsletter Subscriber',
            'email' => $request->input('email'),
            'service' => 'Newsletter',
            'payload' => $request->except(['_token']),
            'status' => 'new',
            'ip_address' => $request->ip(),
            'page_url' => $request->header('referer') ?? url()->current(),
        ]);

        return back()->with('success', 'Thank you for subscribing to the Core Unity newsletter!');
    }
}

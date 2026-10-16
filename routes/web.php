<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Form actions
Route::post('/lead', [PageController::class, 'submitLead'])->name('lead.submit');
Route::post('/newsletter', [PageController::class, 'subscribeNewsletter'])->name('newsletter.submit');

// Dynamic Service Details Route (e.g. /services/web-development, /services/branding-and-creative-design)
Route::get('/services/{subservice}', [PageController::class, 'showService'])->name('service.show');

// Dynamic Case Study Details Routes (/case-studies/{slug} and backwards-compatible /case-study/{slug})
Route::get('/case-studies/{slug}', [PageController::class, 'showCaseStudy'])->name('case_studies.show');
Route::get('/case-study/{slug}', [PageController::class, 'showCaseStudy'])->name('case_study.show');

// Dynamic Industry Details Route (e.g. /industries/real-estate, /industries/fintech)
Route::get('/industries/{industry}', [PageController::class, 'showIndustry'])->name('industry.show');

// Dynamic Blog Details Routes (/blogs/{slug} and backwards-compatible /blog/{slug})
Route::get('/blogs/{slug}', [PageController::class, 'showBlog'])->name('blogs.show');
Route::get('/blog/{slug}', [PageController::class, 'showBlog'])->name('blog.show');

// Dynamic robots.txt Route
Route::get('/robots.txt', function () {
    $isIndexingEnabled = \App\Models\GlobalSeoSetting::isIndexingEnabled();

    if ($isIndexingEnabled) {
        $sitemapUrl = url('/sitemap.xml');
        $content = "User-agent: *\nAllow: /\n\nSitemap: {$sitemapUrl}\n";
    } else {
        $content = "User-agent: *\nDisallow: /\n";
    }

    return response($content, 200)
        ->header('Content-Type', 'text/plain; charset=UTF-8');
})->name('robots');

// Dynamic Catch-All Route for CMS Pages
Route::get('/{slug}', [PageController::class, 'show'])->name('page.show');

<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::before(function ($user, $ability) {
            return $user->hasRole('Super Admin') ? true : null;
        });

        // Register Model Policies
        Gate::policy(\App\Models\Service::class, \App\Policies\ServicePolicy::class);
        Gate::policy(\App\Models\Page::class, \App\Policies\PagePolicy::class);
        Gate::policy(\App\Models\Post::class, \App\Policies\PostPolicy::class);
        Gate::policy(\App\Models\CaseStudy::class, \App\Policies\CaseStudyPolicy::class);
        Gate::policy(\App\Models\TestimonialSection::class, \App\Policies\TestimonialSectionPolicy::class);
        Gate::policy(\App\Models\ClientReviewsSection::class, \App\Policies\ClientReviewsSectionPolicy::class);
        Gate::policy(\App\Models\TeamSection::class, \App\Policies\TeamSectionPolicy::class);
        Gate::policy(\App\Models\OurWorkSection::class, \App\Policies\OurWorkSectionPolicy::class);
        Gate::policy(\App\Models\OurClientsSection::class, \App\Policies\OurClientsSectionPolicy::class);
        Gate::policy(\App\Models\FooterSection::class, \App\Policies\FooterSectionPolicy::class);
        Gate::policy(\App\Models\GlobalSeoSetting::class, \App\Policies\GlobalSeoSettingPolicy::class);
        Gate::policy(\App\Models\SiteSetting::class, \App\Policies\SiteSettingPolicy::class);
        Gate::policy(\App\Models\User::class, \App\Policies\UserPolicy::class);
        Gate::policy(\App\Models\CrmForm::class, \App\Policies\CrmFormPolicy::class);
        Gate::policy(\App\Models\FormSubmission::class, \App\Policies\FormSubmissionPolicy::class);

        // Page Sections Policies
        $sectionModels = [
            \App\Models\HeroSection::class,
            \App\Models\HomePageSection::class,
            \App\Models\AboutHeroSection::class,
            \App\Models\AboutIntroSection::class,
            \App\Models\AboutValuesSection::class,
            \App\Models\AboutIndustriesSection::class,
            \App\Models\ContactHeroSection::class,
            \App\Models\ContactDetailsSection::class,
            \App\Models\CoreStrengthsSection::class,
            \App\Models\ServicesHeroSection::class,
            \App\Models\ServicesSection::class,
            \App\Models\ServicesListSection::class,
            \App\Models\ServicesIndustriesSection::class,
            \App\Models\ServicesSmmSection::class,
            \App\Models\BlogHeroSection::class,
            \App\Models\BlogSection::class,
            \App\Models\CaseStudyHeroSection::class,
            \App\Models\CaseStudyPageSection::class,
            \App\Models\AboutPageSection::class,
            \App\Models\BlogPageSection::class,
            \App\Models\ContactPageSection::class,
            \App\Models\ServicesPageSection::class,
        ];

        foreach ($sectionModels as $sectionModel) {
            Gate::policy($sectionModel, \App\Policies\PageSectionPolicy::class);
        }
    }
}

<?php

namespace App\Filament\Resources\Pages\Pages;

use App\Filament\Resources\Pages\PageResource;
use App\Models\AboutHeroSection;
use App\Models\AboutIndustriesSection;
use App\Models\AboutIntroSection;
use App\Models\AboutValuesSection;
use App\Models\BlogHeroSection;
use App\Models\CaseStudyHeroSection;
use App\Models\ContactDetailsSection;
use App\Models\ContactHeroSection;
use App\Models\CoreStrengthsSection;
use App\Models\HeroSection;
use App\Models\ServicesHeroSection;
use App\Models\ServicesIndustriesSection;
use App\Models\ServicesListSection;
use App\Models\ServicesSection;
use App\Models\ServicesSmmSection;
use Filament\Resources\Pages\EditRecord;

class EditPage extends EditRecord
{
    protected static string $resource = PageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            \Filament\Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        $slug = $this->record->slug ?? null;

        if ($slug === 'home') {
            if ($hero = HeroSection::first()) $data['hero_section'] = $hero->toArray();
            if ($services = ServicesSection::first()) $data['services_section'] = $services->toArray();
            if ($strengths = CoreStrengthsSection::first()) $data['core_strengths_section'] = $strengths->toArray();
        } elseif ($slug === 'about') {
            if ($m = AboutHeroSection::first()) $data['about_hero'] = $m->toArray();
            if ($m = AboutIntroSection::first()) $data['about_intro'] = $m->toArray();
            if ($m = AboutValuesSection::first()) $data['about_values'] = $m->toArray();
            if ($m = AboutIndustriesSection::first()) $data['about_industries'] = $m->toArray();
        } elseif ($slug === 'services') {
            if ($m = ServicesHeroSection::first()) $data['services_hero'] = $m->toArray();
            if ($m = ServicesListSection::first()) $data['services_list'] = $m->toArray();
            if ($m = ServicesIndustriesSection::first()) $data['services_industries'] = $m->toArray();
            if ($m = ServicesSmmSection::first()) $data['services_smm'] = $m->toArray();
        } elseif ($slug === 'case-study') {
            if ($m = CaseStudyHeroSection::first()) $data['case_study_hero'] = $m->toArray();
        } elseif ($slug === 'blog') {
            if ($m = BlogHeroSection::first()) $data['blog_hero'] = $m->toArray();
        } elseif ($slug === 'contact') {
            if ($m = ContactHeroSection::first()) $data['contact_hero'] = $m->toArray();
            if ($m = ContactDetailsSection::first()) $data['contact_details'] = $m->toArray();
        }

        return $data;
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        $slug = $this->record->slug ?? null;

        if ($slug === 'home') {
            if (isset($data['hero_section']) && is_array($data['hero_section'])) {
                HeroSection::first()?->update($data['hero_section']);
                unset($data['hero_section']);
            }
            if (isset($data['services_section']) && is_array($data['services_section'])) {
                ServicesSection::first()?->update($data['services_section']);
                unset($data['services_section']);
            }
            if (isset($data['core_strengths_section']) && is_array($data['core_strengths_section'])) {
                CoreStrengthsSection::first()?->update($data['core_strengths_section']);
                unset($data['core_strengths_section']);
            }
        } elseif ($slug === 'about') {
            if (isset($data['about_hero']) && is_array($data['about_hero'])) {
                AboutHeroSection::first()?->update($data['about_hero']);
                unset($data['about_hero']);
            }
            if (isset($data['about_intro']) && is_array($data['about_intro'])) {
                AboutIntroSection::first()?->update($data['about_intro']);
                unset($data['about_intro']);
            }
            if (isset($data['about_values']) && is_array($data['about_values'])) {
                AboutValuesSection::first()?->update($data['about_values']);
                unset($data['about_values']);
            }
            if (isset($data['about_industries']) && is_array($data['about_industries'])) {
                AboutIndustriesSection::first()?->update($data['about_industries']);
                unset($data['about_industries']);
            }
        } elseif ($slug === 'services') {
            if (isset($data['services_hero']) && is_array($data['services_hero'])) {
                ServicesHeroSection::first()?->update($data['services_hero']);
                unset($data['services_hero']);
            }
            if (isset($data['services_list']) && is_array($data['services_list'])) {
                ServicesListSection::first()?->update($data['services_list']);
                unset($data['services_list']);
            }
            if (isset($data['services_industries']) && is_array($data['services_industries'])) {
                ServicesIndustriesSection::first()?->update($data['services_industries']);
                unset($data['services_industries']);
            }
            if (isset($data['services_smm']) && is_array($data['services_smm'])) {
                ServicesSmmSection::first()?->update($data['services_smm']);
                unset($data['services_smm']);
            }
        } elseif ($slug === 'case-study') {
            if (isset($data['case_study_hero']) && is_array($data['case_study_hero'])) {
                CaseStudyHeroSection::first()?->update($data['case_study_hero']);
                unset($data['case_study_hero']);
            }
        } elseif ($slug === 'blog') {
            if (isset($data['blog_hero']) && is_array($data['blog_hero'])) {
                BlogHeroSection::first()?->update($data['blog_hero']);
                unset($data['blog_hero']);
            }
        } elseif ($slug === 'contact') {
            if (isset($data['contact_hero']) && is_array($data['contact_hero'])) {
                ContactHeroSection::first()?->update($data['contact_hero']);
                unset($data['contact_hero']);
            }
            if (isset($data['contact_details']) && is_array($data['contact_details'])) {
                ContactDetailsSection::first()?->update($data['contact_details']);
                unset($data['contact_details']);
            }
        }

        return $data;
    }
}

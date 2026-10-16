<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'hero_badge',
        'hero_headline',
        'hero_subheadline',
        'hero_cta_text',
        'hero_cta_url',
        'hero_image',
        'content',
        'blocks',
        'sections',
        'media_logos',
        'global_presence',
        'meta_title',
        'meta_description',
        'show_in_navbar',
        'navbar_order',
        'is_published',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'blocks' => 'array',
            'media_logos' => 'array',
            'global_presence' => 'array',
            'sections' => 'array',
            'show_in_navbar' => 'boolean',
            'is_published' => 'boolean',
            'navbar_order' => 'integer',
        ];
    }

    /**
     * Get the sections for this page.
     */
    public function homePageSections()
    {
        return $this->hasMany(HomePageSection::class)->orderBy('section_order', 'asc');
    }

    /**
     * Get the sections for the about page.
     */
    public function aboutPageSections()
    {
        return $this->hasMany(AboutPageSection::class)->orderBy('section_order', 'asc');
    }

    /**
     * Get the sections for the services page.
     */
    public function servicesPageSections()
    {
        return $this->hasMany(ServicesPageSection::class)->orderBy('section_order', 'asc');
    }

    /**
     * Get the sections for the case study page.
     */
    public function caseStudyPageSections()
    {
        return $this->hasMany(CaseStudyPageSection::class)->orderBy('section_order', 'asc');
    }

    /**
     * Get the sections for the blog page.
     */
    public function blogPageSections()
    {
        return $this->hasMany(BlogPageSection::class)->orderBy('section_order', 'asc');
    }

    /**
     * Get the sections for the contact page.
     */
    public function contactPageSections()
    {
        return $this->hasMany(ContactPageSection::class)->orderBy('section_order', 'asc');
    }
}


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

    /**
     * Get all structured sections for this page in table format.
     */
    public function getSectionsList(): \Illuminate\Support\Collection
    {
        if ($this->slug === 'home') {
            $sections = $this->homePageSections()->orderBy('section_order', 'asc')->get()->map(function ($section) {
                return (object) [
                    'section_order' => $section->section_order,
                    'name' => $section->name,
                    'description' => $section->description,
                    'edit_url' => $section->edit_url,
                    'is_active' => (bool) $section->is_active,
                    'badge' => 'Home Page Section',
                    'badge_color' => 'primary',
                ];
            });

            // Global/reusable sections displayed on the Home Page
            $globalSections = collect([
                (object) [
                    'section_order' => 4,
                    'name' => 'Our Work Showcase',
                    'description' => 'Featured portfolio work, case preview filters, client logos, and dynamic projects carousel.',
                    'edit_url' => '/admin/our-work-sections/1/edit',
                    'is_active' => true,
                    'badge' => 'Global Section',
                    'badge_color' => 'indigo',
                ],
                (object) [
                    'section_order' => 5,
                    'name' => 'Our Clients & Partners',
                    'description' => 'Client brand logos, trust badges, partner metrics, and UAE market credibility proof.',
                    'edit_url' => '/admin/our-clients-sections/1/edit',
                    'is_active' => true,
                    'badge' => 'Global Section',
                    'badge_color' => 'indigo',
                ],
                (object) [
                    'section_order' => 6,
                    'name' => 'Passionate Team Members',
                    'description' => 'Executive team members, leadership bios, designations, and social profile links.',
                    'edit_url' => '/admin/team-sections/1/edit',
                    'is_active' => true,
                    'badge' => 'Global Section',
                    'badge_color' => 'indigo',
                ],
                (object) [
                    'section_order' => 7,
                    'name' => 'Testimonials Showcase',
                    'description' => 'Client quotes, video endorsements, company ratings, and review cards.',
                    'edit_url' => '/admin/testimonial-sections/1/edit',
                    'is_active' => true,
                    'badge' => 'Global Section',
                    'badge_color' => 'indigo',
                ],
                (object) [
                    'section_order' => 8,
                    'name' => 'Latest Insights & Blog',
                    'description' => 'Homepage article highlights, category badges, publication dates, and read more CTA.',
                    'edit_url' => '/admin/blog-sections/1/edit',
                    'is_active' => true,
                    'badge' => 'Global Section',
                    'badge_color' => 'indigo',
                ],
                (object) [
                    'section_order' => 9,
                    'name' => 'Client Reviews & Ratings',
                    'description' => 'Google & Clutch ratings, 5-star testimonials, verified review count, and feedback.',
                    'edit_url' => '/admin/client-reviews-sections/1/edit',
                    'is_active' => true,
                    'badge' => 'Global Section',
                    'badge_color' => 'indigo',
                ],
                (object) [
                    'section_order' => 10,
                    'name' => 'Footer & Newsletter',
                    'description' => 'Global site footer, social channels, legal disclaimers, address, and newsletter subscription.',
                    'edit_url' => '/admin/footer-sections/1/edit',
                    'is_active' => true,
                    'badge' => 'Global Section',
                    'badge_color' => 'indigo',
                ],
            ]);

            return $sections->concat($globalSections);
        }

        $relationMap = [
            'about' => 'aboutPageSections',
            'services' => 'servicesPageSections',
            'case-study' => 'caseStudyPageSections',
            'blog' => 'blogPageSections',
            'contact' => 'contactPageSections',
        ];

        if (isset($relationMap[$this->slug])) {
            $rel = $relationMap[$this->slug];
            return $this->{$rel}()->orderBy('section_order', 'asc')->get()->map(function ($section) {
                return (object) [
                    'section_order' => $section->section_order,
                    'name' => $section->name,
                    'description' => $section->description,
                    'edit_url' => $section->edit_url,
                    'is_active' => (bool) $section->is_active,
                    'badge' => 'Page Section',
                    'badge_color' => 'primary',
                ];
            });
        }

        return collect();
    }
}


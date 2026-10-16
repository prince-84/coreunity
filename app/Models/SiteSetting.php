<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class SiteSetting extends Model
{
    use HasFactory;

    protected $table = 'site_settings';

    protected $fillable = [
        'site_name',
        'header_logo',
        'footer_logo',
        'favicon',
        'copyright_text',
        'primary_color',
        'secondary_color',
        'social_links',
        'email',
        'phone',
        'whatsapp',
        'address',
        'map_embed_url',
        'header_cta_text',
        'header_cta_url',
        'header_menu',
        'footer_menu_groups',
    ];

    protected $casts = [
        'social_links' => 'array',
        'header_menu' => 'array',
        'footer_menu_groups' => 'array',
    ];

    protected $appends = [
        'header_logo_url',
        'footer_logo_url',
        'favicon_url',
    ];

    /**
     * Resolve image URL helper
     */
    protected function resolveMediaUrl(?string $path, string $default): string
    {
        if (empty($path)) {
            return asset($default);
        }
        if (str_starts_with($path, 'http://') || str_starts_with($path, 'https://') || str_starts_with($path, '//')) {
            return $path;
        }
        if (str_starts_with($path, 'storage/')) {
            return asset($path);
        }
        if (File::exists(public_path($path))) {
            return asset($path);
        }
        if (Storage::disk('public')->exists($path)) {
            return asset('storage/' . $path);
        }
        return asset($path);
    }

    public function getHeaderLogoUrlAttribute(): string
    {
        return $this->resolveMediaUrl($this->header_logo, 'logo.png');
    }

    public function getFooterLogoUrlAttribute(): string
    {
        return $this->resolveMediaUrl($this->footer_logo ?: $this->header_logo, 'logo.png');
    }

    public function getFaviconUrlAttribute(): string
    {
        return $this->resolveMediaUrl($this->favicon, 'Core Unity Logo-05.svg');
    }

    /**
     * Get or create singleton instance
     */
    public static function current(): self
    {
        return static::firstOrCreate(['id' => 1], [
            'site_name' => 'CoreUnity Solutions',
            'header_logo' => 'logo.png',
            'footer_logo' => 'logo.png',
            'favicon' => 'Core Unity Logo-05.svg',
            'copyright_text' => '© ' . date('Y') . ' CoreUnity Solutions. All Rights Reserved.',
            'primary_color' => '#cc2936',
            'secondary_color' => '#b71c1c',
            'email' => 'contact@coreunitysolutions.com',
            'phone' => '+971 50 555 9646',
            'whatsapp' => '+971505559646',
            'address' => 'Churchill Tower, Business Bay, Dubai, UAE',
            'map_embed_url' => 'https://www.google.com/maps/embed?...',
            'header_cta_text' => 'Speak to an expert',
            'header_cta_url' => '#contact',
            'social_links' => [
                ['platform' => 'Facebook', 'url' => 'https://facebook.com', 'icon' => 'fb.png'],
                ['platform' => 'Instagram', 'url' => 'https://instagram.com', 'icon' => 'insta_logo.png'],
                ['platform' => 'LinkedIn', 'url' => 'https://linkedin.com', 'icon' => 'linkdin_image.png'],
                ['platform' => 'YouTube', 'url' => 'https://youtube.com', 'icon' => 'youtube_logo.png'],
            ],
            'header_menu' => [
                ['label' => 'Home', 'url' => '/', 'open_in_new_tab' => false, 'is_active' => true],
                ['label' => 'About', 'url' => '/about', 'open_in_new_tab' => false, 'is_active' => true],
                ['label' => 'Services', 'url' => '/services', 'open_in_new_tab' => false, 'is_active' => true],
                ['label' => 'Case Study', 'url' => '/portfolio', 'open_in_new_tab' => false, 'is_active' => true],
                ['label' => 'Blog', 'url' => '/blog', 'open_in_new_tab' => false, 'is_active' => true],
                ['label' => 'Contact', 'url' => '/contact', 'open_in_new_tab' => false, 'is_active' => true],
            ],
            'footer_menu_groups' => [
                [
                    'group_title' => 'Quick Links',
                    'links' => [
                        ['label' => 'About Us', 'url' => '/about'],
                        ['label' => 'Services', 'url' => '/services'],
                        ['label' => 'Case Studies', 'url' => '/portfolio'],
                        ['label' => 'Blog Insights', 'url' => '/blog'],
                        ['label' => 'Contact', 'url' => '/contact'],
                    ]
                ],
                [
                    'group_title' => 'Services',
                    'links' => [
                        ['label' => 'Web Development', 'url' => '/services/web-development'],
                        ['label' => 'Branding & Design', 'url' => '/services/branding-and-creative-design'],
                        ['label' => 'AI Solutions', 'url' => '/services/ai-solutions'],
                        ['label' => 'Social Media Marketing', 'url' => '/services/social-media-marketing'],
                        ['label' => 'SEO Optimization', 'url' => '/services/search-engine-optimization'],
                    ]
                ],
                [
                    'group_title' => 'Industries',
                    'links' => [
                        ['label' => 'Real Estate', 'url' => '/industries/real-estate'],
                        ['label' => 'Healthcare', 'url' => '/industries/healthcare'],
                        ['label' => 'Fintech', 'url' => '/industries/fintech'],
                        ['label' => 'Hospitality', 'url' => '/industries/hospitality'],
                        ['label' => 'Education', 'url' => '/industries/education'],
                    ]
                ],
            ]
        ]);
    }
}

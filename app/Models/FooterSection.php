<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FooterSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'newsletter_title',
        'newsletter_subtitle',
        'newsletter_button_text',
        'newsletter_is_active',
        'logo',
        'address',
        'email',
        'phone',
        'facebook_url',
        'instagram_url',
        'youtube_url',
        'linkedin_url',
        'tiktok_url',
        'col_2_title',
        'col_2_links',
        'col_3_title',
        'col_3_links',
        'col_4_title',
        'col_4_links',
        'copyright_text',
        'privacy_policy_url',
        'terms_conditions_url',
        'is_active',
    ];

    protected $casts = [
        'newsletter_is_active' => 'boolean',
        'col_2_links' => 'array',
        'col_3_links' => 'array',
        'col_4_links' => 'array',
        'is_active' => 'boolean',
    ];

    protected $appends = [
        'logo_url',
        'resolved_col_2_links',
        'resolved_col_3_links',
        'resolved_col_4_links',
    ];

    protected function resolveImageUrl(?string $path, string $default): string
    {
        if (!$path) {
            return asset($default);
        }
        if (str_starts_with($path, 'http://') || str_starts_with($path, 'https://') || str_starts_with($path, '/')) {
            return $path;
        }
        if (file_exists(public_path($path))) {
            return asset($path);
        }
        return asset('storage/' . $path);
    }

    public function getLogoUrlAttribute(): string
    {
        return $this->resolveImageUrl($this->logo, 'logo.png');
    }

    public function getResolvedCol2LinksAttribute(): array
    {
        $raw = $this->col_2_links;

        if (empty($raw) || !is_array($raw)) {
            return [
                ['label' => 'Web Development', 'url' => '/services/web-development'],
                ['label' => 'UI/UX Design', 'url' => '/services/ui-ux-design'],
                ['label' => 'Ecommerce Web Development', 'url' => '/services/ecommerce-web-development'],
                ['label' => 'Mobile App Development', 'url' => '/services/mobile-app-development'],
                ['label' => 'Artificial Intelligence', 'url' => '/services/artificial-intelligence'],
                ['label' => 'Chatbot Development', 'url' => '/services/chatbot-development'],
                ['label' => 'Virtual Reality Development', 'url' => '/services/virtual-reality-development'],
                ['label' => 'Augmented Reality Development', 'url' => '/services/augmented-reality-development'],
            ];
        }

        return $raw;
    }

    public function getResolvedCol3LinksAttribute(): array
    {
        $raw = $this->col_3_links;

        if (empty($raw) || !is_array($raw)) {
            return [
                ['label' => 'Digital Marketing', 'url' => '/services/digital-marketing'],
                ['label' => 'Search Engine Optimization (SEO)', 'url' => '/services/search-engine-optimization'],
                ['label' => 'Generative Engine Optimization (GEO)', 'url' => '/services/generative-engine-optimization'],
                ['label' => 'Pay-Per-Click Advertising (PPC)', 'url' => '/services/pay-per-click-advertising'],
                ['label' => 'Social Media Marketing', 'url' => '/services/social-media-marketing'],
                ['label' => 'Influencer Marketing', 'url' => '/services/influencer-marketing'],
                ['label' => 'Branding & Creative Design', 'url' => '/services/branding-and-creative-design'],
                ['label' => 'AI Development Company', 'url' => '/services/ai-development-company'],
            ];
        }

        return $raw;
    }

    public function getResolvedCol4LinksAttribute(): array
    {
        $raw = $this->col_4_links;

        if (empty($raw) || !is_array($raw)) {
            return [
                ['label' => 'Real Estate', 'url' => '/industries/real-estate'],
                ['label' => 'Government', 'url' => '/industries/government'],
                ['label' => 'Healthcare', 'url' => '/industries/healthcare'],
                ['label' => 'Education', 'url' => '/industries/education'],
                ['label' => 'Hospitality', 'url' => '/industries/hospitality'],
                ['label' => 'legal & law', 'url' => '/industries/legal-and-law'],
                ['label' => 'FinTech', 'url' => '/industries/fintech'],
            ];
        }

        return $raw;
    }
}

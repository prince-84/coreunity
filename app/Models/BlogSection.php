<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'mini_title',
        'main_title',
        'overlay_text',
        'date_icon',
        'category_icon',
        'posts',
        'is_active',
    ];

    protected $casts = [
        'posts' => 'array',
        'is_active' => 'boolean',
    ];

    protected $appends = [
        'date_icon_url',
        'category_icon_url',
        'resolved_cards',
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

    public function getDateIconUrlAttribute(): string
    {
        return $this->resolveImageUrl($this->date_icon, 'calendar_image.png');
    }

    public function getCategoryIconUrlAttribute(): string
    {
        return $this->resolveImageUrl($this->category_icon, 'file_image.png');
    }

    public function getResolvedCardsAttribute(): array
    {
        $raw = $this->posts;

        if (empty($raw) || !is_array($raw)) {
            $raw = [
                [
                    'title' => 'How to Get Your Local Business on Google Maps (Step-by-Step)',
                    'date' => 'January 10, 2022',
                    'category' => 'Local SEO',
                    'excerpt' => "If you run a local business and you're not showing up on Google Maps, you're handing customers straight to competitors who are...",
                    'slug' => 'local-business-on-google-maps',
                    'image' => 'blog_image.png',
                ],
                [
                    'title' => 'Google Ads vs. Meta Ads: Which Is Right for Your Business?',
                    'date' => 'January 10, 2022',
                    'category' => 'Paid Marketing',
                    'excerpt' => "If you've spent any time in a marketing Slack channel, a Facebook group for small business owners, or even just a late-night Google search...",
                    'slug' => 'google-ads-vs-meta-ads',
                    'image' => 'blog_image.png',
                ],
                [
                    'title' => 'Daily Manual Tasks Your Business Should Automate Today',
                    'date' => 'January 10, 2022',
                    'category' => 'Business Growth',
                    'excerpt' => "If you've been putting off the decision to automate manual tasks in your business, this is your sign to stop waiting...",
                    'slug' => 'daily-manual-tasks',
                    'image' => 'blog_image.png',
                ],
                [
                    'title' => '5 Must-Have Features Every Business Website Needs',
                    'date' => 'January 10, 2022',
                    'category' => 'Web Design',
                    'excerpt' => "Let's be honest for a second: most business owners don't think about their website until something goes wrong...",
                    'slug' => 'business-website-features',
                    'image' => 'blog_image.png',
                ],
            ];
        }

        $results = [];
        foreach ($raw as $b) {
            $title = $b['title'] ?? '';
            $date = $b['date'] ?? 'January 10, 2022';
            $category = $b['category'] ?? 'Insights';
            $excerpt = $b['excerpt'] ?? '';
            $slug = $b['slug'] ?? '';
            $imgPath = $b['image'] ?? 'blog_image.png';

            $url = '#';
            if ($slug) {
                if (str_starts_with($slug, 'http://') || str_starts_with($slug, 'https://') || str_starts_with($slug, '/')) {
                    $url = $slug;
                } else {
                    $url = url('/blog/' . $slug);
                }
            }

            $results[] = [
                'title' => $title,
                'date' => $date,
                'category' => $category,
                'excerpt' => $excerpt,
                'slug' => $slug,
                'url' => $url,
                'image' => $imgPath,
                'image_url' => $this->resolveImageUrl($imgPath, 'blog_image.png'),
            ];
        }

        return $results;
    }
}

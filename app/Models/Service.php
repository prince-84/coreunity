<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'badge',
        'category',
        'client_info',
        'excerpt',
        'featured_image',
        'hero_banner',
        'content',
        'blocks',
        'highlights',
        'stats',
        'faqs',
        'gallery',
        'meta_title',
        'meta_description',
        'og_image',
        'is_published',
        'sort_order',
    ];

    protected $casts = [
        'blocks' => 'array',
        'highlights' => 'array',
        'stats' => 'array',
        'faqs' => 'array',
        'gallery' => 'array',
        'is_published' => 'boolean',
        'sort_order' => 'integer',
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

    public function getFeaturedImageUrlAttribute(): string
    {
        return $this->resolveImageUrl($this->featured_image, 'marketing_image.png');
    }

    public function getHeroBannerUrlAttribute(): string
    {
        return $this->resolveImageUrl($this->hero_banner, 'marketing_image.png');
    }
}

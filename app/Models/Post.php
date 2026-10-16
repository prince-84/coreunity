<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'badge',
        'category',
        'author_name',
        'excerpt',
        'featured_image',
        'hero_banner',
        'content',
        'blocks',
        'status',
        'highlights',
        'stats',
        'faqs',
        'gallery',
        'meta_title',
        'meta_description',
        'og_image',
        'is_published',
        'sort_order',
        'published_at',
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
            'highlights' => 'array',
            'stats' => 'array',
            'faqs' => 'array',
            'gallery' => 'array',
            'is_published' => 'boolean',
            'sort_order' => 'integer',
            'published_at' => 'datetime',
        ];
    }

    /**
     * Get the user that wrote the post.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

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
        return $this->resolveImageUrl($this->featured_image ?: $this->hero_banner, 'blog_image.png');
    }

    public function getHeroBannerUrlAttribute(): string
    {
        return $this->resolveImageUrl($this->hero_banner ?: $this->featured_image, 'blog_image.png');
    }
}

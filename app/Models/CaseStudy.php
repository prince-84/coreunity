<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CaseStudy extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'case_studies';

    protected $fillable = [
        'title',
        'project_title',
        'slug',
        'badge',
        'category',
        'client_name',
        'excerpt',
        'featured_image',
        'hero_image',
        'challenge_text',
        'solution_text',
        'content',
        'blocks',
        'metrics',
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
        'metrics' => 'array',
        'highlights' => 'array',
        'stats' => 'array',
        'faqs' => 'array',
        'gallery' => 'array',
        'is_published' => 'boolean',
        'sort_order' => 'integer',
    ];

    public function getDisplayTitleAttribute(): string
    {
        return $this->title ?: ($this->project_title ?: 'Case Study');
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
        return $this->resolveImageUrl($this->featured_image ?: $this->hero_image, 'website.jpg');
    }

    public function getHeroImageUrlAttribute(): string
    {
        return $this->resolveImageUrl($this->hero_image ?: $this->featured_image, 'website.jpg');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoreStrengthsSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'mini_title',
        'main_title',
        'bg_image',
        'points',
        'collage_image_1',
        'collage_image_2',
        'collage_image_3',
        'collage_image_4',
        'collage_image_5',
        'collage_image_6',
        'is_active',
    ];

    protected $casts = [
        'points' => 'array',
        'is_active' => 'boolean',
    ];

    protected $appends = [
        'bg_image_url',
        'collage_image_1_url',
        'collage_image_2_url',
        'collage_image_3_url',
        'collage_image_4_url',
        'collage_image_5_url',
        'collage_image_6_url',
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

    public function getBgImageUrlAttribute(): string
    {
        return $this->resolveImageUrl($this->bg_image, 'bg_image.png');
    }

    public function getCollageImage1UrlAttribute(): string
    {
        return $this->resolveImageUrl($this->collage_image_1, 'clip_1_group.png');
    }

    public function getCollageImage2UrlAttribute(): string
    {
        return $this->resolveImageUrl($this->collage_image_2, 'clip_2_group.png');
    }

    public function getCollageImage3UrlAttribute(): string
    {
        return $this->resolveImageUrl($this->collage_image_3, 'clip_3_group.png');
    }

    public function getCollageImage4UrlAttribute(): string
    {
        return $this->resolveImageUrl($this->collage_image_4, 'clip_4_group.png');
    }

    public function getCollageImage5UrlAttribute(): string
    {
        return $this->resolveImageUrl($this->collage_image_5, 'clip_5_group.png');
    }

    public function getCollageImage6UrlAttribute(): string
    {
        return $this->resolveImageUrl($this->collage_image_6, 'clip_6_group.png');
    }
}

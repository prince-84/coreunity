<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutIntroSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_prefix',
        'title_highlight',
        'title_suffix',
        'paragraph_1',
        'paragraph_2',
        'main_image',
        'floating_bg_image',
        'floating_logo',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    protected $appends = [
        'main_image_url',
        'floating_bg_image_url',
        'floating_logo_url',
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

    public function getMainImageUrlAttribute(): string
    {
        return $this->resolveImageUrl($this->main_image, 'image.png');
    }

    public function getFloatingBgImageUrlAttribute(): string
    {
        return $this->resolveImageUrl($this->floating_bg_image, 'Rectangle.png');
    }

    public function getFloatingLogoUrlAttribute(): string
    {
        return $this->resolveImageUrl($this->floating_logo, 'logo1.png');
    }
}

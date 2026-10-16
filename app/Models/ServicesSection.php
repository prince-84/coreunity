<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicesSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'mini_title',
        'main_title',
        'cards',
        'card_1_icon',
        'card_1_title',
        'card_1_description',
        'card_1_image',
        'card_2_bg_image',
        'card_2_title_highlight',
        'card_2_title_main',
        'card_2_links',
        'card_3_icon',
        'card_3_title',
        'card_3_description',
        'card_3_image',
        'is_active',
    ];

    protected $casts = [
        'cards' => 'array',
        'card_2_links' => 'array',
        'is_active' => 'boolean',
    ];

    protected $appends = [
        'card_1_icon_url',
        'card_1_image_url',
        'card_2_bg_image_url',
        'card_3_icon_url',
        'card_3_image_url',
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

    public function getCard1IconUrlAttribute(): string
    {
        return $this->resolveImageUrl($this->card_1_icon, 'webnbrand_logo.png');
    }

    public function getCard1ImageUrlAttribute(): string
    {
        return $this->resolveImageUrl($this->card_1_image, 'digital_image.png');
    }

    public function getCard2BgImageUrlAttribute(): string
    {
        return $this->resolveImageUrl($this->card_2_bg_image, 'growth_bg.png');
    }

    public function getCard3IconUrlAttribute(): string
    {
        return $this->resolveImageUrl($this->card_3_icon, 'digi_logo.png');
    }

    public function getCard3ImageUrlAttribute(): string
    {
        return $this->resolveImageUrl($this->card_3_image, 'marketing_image.png');
    }
}

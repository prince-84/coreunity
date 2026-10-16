<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurWorkSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'mini_title',
        'main_title',
        'categories',
        'cards',
        'card_1_title',
        'card_1_stat_number',
        'card_1_stat_desc',
        'card_1_button_text',
        'card_1_button_link',
        'card_1_image',
        'card_1_bg_image',
        'card_2_title',
        'card_2_stat_number',
        'card_2_stat_desc',
        'card_2_button_text',
        'card_2_button_link',
        'card_2_image',
        'card_2_bg_image',
        'is_active',
    ];

    protected $casts = [
        'categories' => 'array',
        'cards' => 'array',
        'is_active' => 'boolean',
    ];

    protected $appends = [
        'card_1_image_url',
        'card_1_bg_image_url',
        'card_2_image_url',
        'card_2_bg_image_url',
    ];

    public function getCardsAttribute($value)
    {
        if (!empty($value)) {
            $decoded = is_string($value) ? json_decode($value, true) : $value;
            if (!empty($decoded) && is_array($decoded)) {
                return $decoded;
            }
        }

        $cards = [];
        if (!empty($this->card_1_title) || !empty($this->card_1_stat_number)) {
            $cards[] = [
                'title' => $this->card_1_title,
                'stat_number' => $this->card_1_stat_number,
                'stat_desc' => $this->card_1_stat_desc,
                'button_text' => $this->card_1_button_text ?: 'View Case Study',
                'button_link' => $this->card_1_button_link ?: '/case-study/website',
                'image' => $this->card_1_image,
                'bg_image' => $this->card_1_bg_image,
            ];
        }
        if (!empty($this->card_2_title) || !empty($this->card_2_stat_number)) {
            $cards[] = [
                'title' => $this->card_2_title,
                'stat_number' => $this->card_2_stat_number,
                'stat_desc' => $this->card_2_stat_desc,
                'button_text' => $this->card_2_button_text ?: 'View Case Study',
                'button_link' => $this->card_2_button_link ?: '/mobile-app',
                'image' => $this->card_2_image,
                'bg_image' => $this->card_2_bg_image,
            ];
        }

        return $cards;
    }

    public function setCardsAttribute($value)
    {
        $this->attributes['cards'] = is_array($value) ? json_encode($value) : $value;

        if (is_array($value)) {
            $items = array_values($value);
            if (isset($items[0])) {
                $this->attributes['card_1_title'] = $items[0]['title'] ?? $this->card_1_title;
                $this->attributes['card_1_stat_number'] = $items[0]['stat_number'] ?? $this->card_1_stat_number;
                $this->attributes['card_1_stat_desc'] = $items[0]['stat_desc'] ?? $this->card_1_stat_desc;
                $this->attributes['card_1_button_text'] = $items[0]['button_text'] ?? $this->card_1_button_text;
                $this->attributes['card_1_button_link'] = $items[0]['button_link'] ?? $this->card_1_button_link;
                $this->attributes['card_1_image'] = $items[0]['image'] ?? $this->card_1_image;
                $this->attributes['card_1_bg_image'] = $items[0]['bg_image'] ?? $this->card_1_bg_image;
            }
            if (isset($items[1])) {
                $this->attributes['card_2_title'] = $items[1]['title'] ?? $this->card_2_title;
                $this->attributes['card_2_stat_number'] = $items[1]['stat_number'] ?? $this->card_2_stat_number;
                $this->attributes['card_2_stat_desc'] = $items[1]['stat_desc'] ?? $this->card_2_stat_desc;
                $this->attributes['card_2_button_text'] = $items[1]['button_text'] ?? $this->card_2_button_text;
                $this->attributes['card_2_button_link'] = $items[1]['button_link'] ?? $this->card_2_button_link;
                $this->attributes['card_2_image'] = $items[1]['image'] ?? $this->card_2_image;
                $this->attributes['card_2_bg_image'] = $items[1]['bg_image'] ?? $this->card_2_bg_image;
            }
        }
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

    public function getCard1ImageUrlAttribute(): string
    {
        return $this->resolveImageUrl($this->card_1_image, 'dpworld_image.png');
    }

    public function getCard1BgImageUrlAttribute(): string
    {
        return $this->resolveImageUrl($this->card_1_bg_image, 'white_bg.png');
    }

    public function getCard2ImageUrlAttribute(): string
    {
        return $this->resolveImageUrl($this->card_2_image, 'sharjahuni_image.png');
    }

    public function getCard2BgImageUrlAttribute(): string
    {
        return $this->resolveImageUrl($this->card_2_bg_image, 'white_bg.png');
    }
}

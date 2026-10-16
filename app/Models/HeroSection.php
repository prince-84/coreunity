<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeroSection extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'description',
        'button_text',
        'button_link',
        'button_icon',
        'image',
        'globe_image',
        'global_presence',
        'logo_ticker',
        'media_logos',
    ];

    protected $casts = [
        'global_presence' => 'array',
        'logo_ticker' => 'array',
        'media_logos' => 'array',
    ];

    protected $appends = [
        'button_icon_url',
        'image_url',
        'globe_image_url',
        'logo_ticker_urls',
        'media_logos_list',
    ];

    public function getImageUrlAttribute(): ?string
    {
        $img = $this->image ?: $this->globe_image;
        if (!$img) {
            return null;
        }
        if (str_starts_with($img, 'http://') || str_starts_with($img, 'https://') || str_starts_with($img, '/')) {
            return $img;
        }
        if (file_exists(public_path($img))) {
            return asset($img);
        }
        return asset('storage/' . $img);
    }

    public function getButtonIconUrlAttribute(): ?string
    {
        if (!$this->button_icon) {
            return null;
        }
        if (str_starts_with($this->button_icon, 'http://') || str_starts_with($this->button_icon, 'https://') || str_starts_with($this->button_icon, '/')) {
            return $this->button_icon;
        }
        if (file_exists(public_path($this->button_icon))) {
            return asset($this->button_icon);
        }
        return asset('storage/' . $this->button_icon);
    }

    public function getGlobeImageUrlAttribute(): ?string
    {
        $img = $this->globe_image ?: $this->image;
        if (!$img) {
            return null;
        }
        if (str_starts_with($img, 'http://') || str_starts_with($img, 'https://') || str_starts_with($img, '/')) {
            return $img;
        }
        if (file_exists(public_path($img))) {
            return asset($img);
        }
        return asset('storage/' . $img);
    }

    public function getLogoTickerUrlsAttribute(): array
    {
        if (!$this->logo_ticker || !is_array($this->logo_ticker)) {
            return [];
        }
        return array_map(function ($logo) {
            if (str_starts_with($logo, 'http://') || str_starts_with($logo, 'https://') || str_starts_with($logo, '/')) {
                return $logo;
            }
            if (file_exists(public_path($logo))) {
                return asset($logo);
            }
            return asset('storage/' . $logo);
        }, $this->logo_ticker);
    }

    public function getMediaLogosListAttribute(): array
    {
        $logos = $this->media_logos;
        if (!empty($logos) && is_array($logos)) {
            $formatted = [];
            foreach ($logos as $item) {
                $img = $item['image'] ?? ($item['logo'] ?? null);
                if (!$img) {
                    continue;
                }
                $imgUrl = null;
                if (str_starts_with($img, 'http://') || str_starts_with($img, 'https://') || str_starts_with($img, '//')) {
                    $imgUrl = $img;
                } elseif (str_starts_with($img, 'storage/')) {
                    $imgUrl = asset($img);
                } elseif (file_exists(public_path($img))) {
                    $imgUrl = asset($img);
                } else {
                    $imgUrl = asset('storage/' . ltrim($img, '/'));
                }

                $formatted[] = [
                    'image_url' => $imgUrl,
                    'title' => $item['title'] ?? 'Media Logo',
                    'url' => !empty($item['url']) ? $item['url'] : null,
                ];
            }
            if (!empty($formatted)) {
                return $formatted;
            }
        }

        // Fallback to defaults
        return [
            ['image_url' => asset('al-jazeera.png'), 'title' => 'Al Jazeera', 'url' => null],
            ['image_url' => asset('zaaya.png'), 'title' => 'Zaaya', 'url' => null],
            ['image_url' => asset('gulf_logo.png'), 'title' => 'Gulf News', 'url' => null],
            ['image_url' => asset('khaleej_logo.png'), 'title' => 'Khaleej Times', 'url' => null],
            ['image_url' => asset('arabian_logo.png'), 'title' => 'Arabian Business', 'url' => null],
        ];
    }
}

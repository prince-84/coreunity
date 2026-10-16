<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutIndustriesSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'badge_text',
        'main_title',
        'bg_image',
        'items',
        'is_active',
    ];

    protected $casts = [
        'items' => 'array',
        'is_active' => 'boolean',
    ];

    protected $appends = [
        'bg_image_url',
        'resolved_items',
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
        return $this->resolveImageUrl($this->bg_image, 'white_bg.png');
    }

    public function getResolvedItemsAttribute(): array
    {
        $defaultItems = [
            [
                'title' => 'Real Estate',
                'description' => 'Leading with quality and effectively showcasing property',
                'icon' => 'state_img.png',
            ],
            [
                'title' => 'Retail & eCommerce',
                'description' => 'Driving sales through optimized digital Experiences.',
                'icon' => 'retail_img.png',
            ],
            [
                'title' => 'Healthcare & Wellness',
                'description' => 'Building trust with professional online solutions.',
                'icon' => 'health_img.png',
            ],
            [
                'title' => 'Food & Beverage',
                'description' => 'Creating engaging brands that attract customers.',
                'icon' => 'food_img.png',
            ],
            [
                'title' => 'Tech Startups',
                'description' => 'Supporting growth with scalable digital strategies.',
                'icon' => 'tect_img.png',
            ],
            [
                'title' => 'Education',
                'description' => 'optimizing learning through modern digital platforms.',
                'icon' => 'edu_img.png',
            ],
            [
                'title' => 'Hospitality & Tourism',
                'description' => 'Delivering seamless and engaging guest experiences.',
                'icon' => 'hospitality_image.png',
            ],
            [
                'title' => 'Restaurant',
                'description' => 'Providing strong branding and curating digital Presence.',
                'icon' => 'restaurant_combo',
            ],
        ];

        $rawItems = (!empty($this->items) && is_array($this->items)) ? $this->items : $defaultItems;

        $resolved = [];
        foreach ($rawItems as $item) {
            $icon = $item['icon'] ?? 'state_img.png';
            $resolved[] = [
                'title' => $item['title'] ?? '',
                'description' => $item['description'] ?? '',
                'icon' => $icon,
                'icon_url' => $this->resolveImageUrl($icon, 'state_img.png'),
            ];
        }

        return $resolved;
    }
}

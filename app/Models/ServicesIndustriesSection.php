<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicesIndustriesSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'mini_title',
        'main_title',
        'industries',
        'cta_title',
        'cta_subtitle',
        'cta_button_text',
        'cta_button_url',
        'is_active',
    ];

    protected $casts = [
        'industries' => 'array',
        'is_active' => 'boolean',
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

    public function getResolvedIndustriesAttribute(): array
    {
        $industries = $this->industries ?? [];
        if (!empty($industries)) {
            return array_map(function ($item) {
                $icon = $item['icon'] ?? 'state_img.png';
                $item['icon_url'] = $this->resolveImageUrl($icon, 'state_img.png');
                return $item;
            }, $industries);
        }

        $defaultIndustries = [
            [
                'title' => 'Real Estate',
                'desc' => 'Leading with quality and effectively showcasing property',
                'icon' => 'state_img.png',
                'link' => '/industries/real-estate',
            ],
            [
                'title' => 'Retail & eCommerce',
                'desc' => 'Driving sales through optimized digital Experiences.',
                'icon' => 'retail_img.png',
                'link' => '/industries/retail',
            ],
            [
                'title' => 'Healthcare & Wellness',
                'desc' => 'Building trust with professional online solutions.',
                'icon' => 'health_img.png',
                'link' => '/industries/healthcare',
            ],
            [
                'title' => 'Food & Beverage',
                'desc' => 'Creating engaging brands that attract customers.',
                'icon' => 'food_img.png',
                'link' => '/industries/hospitality',
            ],
            [
                'title' => 'Tech Startups',
                'desc' => 'Supporting growth with scalable digital strategies.',
                'icon' => 'tect_img.png',
                'link' => '/industries/fintech',
            ],
            [
                'title' => 'Education',
                'desc' => 'optimizing learning through modern digital platforms.',
                'icon' => 'edu_img.png',
                'link' => '/industries/education',
            ],
            [
                'title' => 'Hospitality & Tourism',
                'desc' => 'Delivering seamless and engaging guest experiences.',
                'icon' => 'hospitality_image.png',
                'link' => '/industries/hospitality',
            ],
            [
                'title' => 'Restaurant',
                'desc' => 'Providing strong branding and curating digital Presence.',
                'icon' => 'res_table_img.png',
                'link' => '/industries/hospitality',
            ],
        ];

        return array_map(function ($item) {
            $item['icon_url'] = $this->resolveImageUrl($item['icon'], 'state_img.png');
            return $item;
        }, $defaultIndustries);
    }
}

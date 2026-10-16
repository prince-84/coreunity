<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicesListSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'mini_title',
        'main_title',
        'services',
        'button_text',
        'button_url',
        'is_active',
    ];

    protected $casts = [
        'services' => 'array',
        'is_active' => 'boolean',
    ];

    public function getResolvedServicesAttribute(): array
    {
        $services = $this->services ?? [];
        if (!empty($services)) {
            return $services;
        }

        return [
            [
                'num' => '01',
                'title' => 'Branding',
                'desc' => 'Our agency combines creativity and strategy to build powerful brand identities that communicate your vision, and grow meaningful customer connections.',
                'href' => '/services/branding-and-creative-design',
            ],
            [
                'num' => '02',
                'title' => 'Digital Marketing',
                'desc' => 'Our digital marketing solutions help you connect with your customers through SEO, social content marketing, and paid advertising.',
                'href' => '/services/digital-marketing',
            ],
            [
                'num' => '03',
                'title' => 'Design & Creatives',
                'desc' => 'We create compelling visuals that capture attention, strengthen your brand identity, and communicate your message effectively across platforms.',
                'href' => '/services/ui-ux-design',
            ],
        ];
    }
}

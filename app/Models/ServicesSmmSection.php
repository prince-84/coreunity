<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicesSmmSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'main_title',
        'description',
        'stats',
        'is_active',
    ];

    protected $casts = [
        'stats' => 'array',
        'is_active' => 'boolean',
    ];

    public function getResolvedStatsAttribute(): array
    {
        $stats = $this->stats ?? [];
        if (!empty($stats)) {
            return $stats;
        }

        return [
            [
                'stat_number' => '100+',
                'stat_label' => 'Brands Transformed',
                'is_highlighted' => false,
            ],
            [
                'stat_number' => '325+',
                'stat_label' => 'Wins Delivered',
                'is_highlighted' => false,
            ],
            [
                'stat_number' => '15+',
                'stat_label' => 'Years of Innovation',
                'is_highlighted' => true,
            ],
            [
                'stat_number' => '98%',
                'stat_label' => 'Satisfaction',
                'is_highlighted' => true,
            ],
        ];
    }
}

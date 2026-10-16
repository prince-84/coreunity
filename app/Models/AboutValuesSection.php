<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutValuesSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'headline',
        'bg_image',
        'arrow_icon',
        'items',
        'is_active',
    ];

    protected $casts = [
        'items' => 'array',
        'is_active' => 'boolean',
    ];

    protected $appends = [
        'bg_image_url',
        'arrow_icon_url',
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
        return $this->resolveImageUrl($this->bg_image, 'bg_image.png');
    }

    public function getArrowIconUrlAttribute(): string
    {
        return $this->resolveImageUrl($this->arrow_icon, 'arrow.png');
    }

    public function getResolvedItemsAttribute(): array
    {
        $defaultItems = [
            [
                'title' => 'Our Mission',
                'description' => 'To help ambitious brands grow into market leaders through digital strategies that actually deliver. As a trusted digital marketing agency in Dubai, we blend creativity, data, and technology into every campaign.',
            ],
            [
                'title' => 'Our Vision',
                'description' => 'To build a future where every brand we work with has the digital edge to lead, not just compete. Our vision is to be the go-to digital marketing partner in Dubai, known for innovation, results, and setting new standards in how businesses connect with their audiences online.',
            ],
            [
                'title' => 'Our Values',
                'description' => 'To make Innovation, integrity, and excellence guide everything we do at CoreUnity Solutions. We work as an extension of your team, combining fresh thinking with honest execution to deliver real impact, because your growth is how we measure our own success.',
            ],
        ];

        if (empty($this->items) || !is_array($this->items)) {
            return $defaultItems;
        }

        return $this->items;
    }
}

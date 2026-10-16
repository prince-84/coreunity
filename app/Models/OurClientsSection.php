<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurClientsSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'mini_title',
        'main_title',
        'bg_image',
        'client_logos',
        'globe_image',
        'globe_text',
        'is_active',
    ];

    protected $casts = [
        'client_logos' => 'array',
        'is_active' => 'boolean',
    ];

    protected $appends = [
        'bg_image_url',
        'globe_image_url',
        'resolved_client_logos',
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
        return $this->resolveImageUrl($this->bg_image, 'grid_bg.png');
    }

    public function getGlobeImageUrlAttribute(): string
    {
        return $this->resolveImageUrl($this->globe_image, 'World.png');
    }

    public function getResolvedClientLogosAttribute(): array
    {
        $raw = $this->client_logos;

        if (empty($raw) || !is_array($raw)) {
            $raw = [
                ['image' => 'salwa.png', 'name' => 'Salwa Real Estate', 'url' => null],
                ['image' => 'dental.png', 'name' => 'Dental Clinic', 'url' => null],
                ['image' => 'SkillBridge Academy.png', 'name' => 'SkillBridge Academy', 'url' => null],
                ['image' => 'cajun.png', 'name' => 'Cajun', 'url' => null],
                ['image' => 'UAEofplan.png', 'name' => 'UAE Off Plan', 'url' => null],
                ['image' => 'alhilal.png', 'name' => 'Al Hilal', 'url' => null],
                ['image' => 'fs.png', 'name' => 'FS Group', 'url' => null],
                ['image' => 'handyman.png', 'name' => 'Handyman', 'url' => null],
                ['image' => 'soulnsoil.png', 'name' => 'Soul & Soil', 'url' => null],
                ['image' => 'appello.png', 'name' => 'Appello', 'url' => null],
                ['image' => 'sukihana.png', 'name' => 'Sukihana', 'url' => null],
            ];
        }

        $results = [];
        foreach ($raw as $item) {
            if (is_string($item)) {
                $name = ucwords(str_replace(['_', '-'], ' ', pathinfo($item, PATHINFO_FILENAME)));
                $imgUrl = $this->resolveImageUrl($item, $item);
                $results[] = [
                    'url' => $imgUrl,
                    'image_url' => $imgUrl,
                    'name' => $name,
                    'alt' => $name,
                    'redirect_url' => null,
                ];
            } elseif (is_array($item)) {
                $imgPath = $item['image'] ?? ($item['logo'] ?? ($item['url'] ?? ''));
                if (!$imgPath) {
                    continue;
                }
                $name = $item['name'] ?? ($item['title'] ?? pathinfo($imgPath, PATHINFO_FILENAME));
                $imgUrl = $this->resolveImageUrl($imgPath, $imgPath);
                $results[] = [
                    'url' => $imgUrl,
                    'image_url' => $imgUrl,
                    'name' => $name,
                    'alt' => $name,
                    'redirect_url' => !empty($item['url']) ? $item['url'] : null,
                ];
            }
        }

        return $results;
    }
}

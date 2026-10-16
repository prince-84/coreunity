<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'mini_title',
        'main_title',
        'badge_logo',
        'members',
        'is_active',
    ];

    protected $casts = [
        'members' => 'array',
        'is_active' => 'boolean',
    ];

    protected $appends = [
        'badge_logo_url',
        'resolved_members',
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
        if (file_exists(public_path('storage/' . $path))) {
            return asset('storage/' . $path);
        }
        $filename = basename($path);
        if (file_exists(public_path('storage/team/' . $filename))) {
            return asset('storage/team/' . $filename);
        }
        if (file_exists(public_path($filename))) {
            return asset($filename);
        }
        return asset('storage/' . $path);
    }

    public function getBadgeLogoUrlAttribute(): string
    {
        return $this->resolveImageUrl($this->badge_logo, 'red_logoimage.png');
    }

    public function getResolvedMembersAttribute(): array
    {
        $raw = $this->members;

        if (empty($raw) || !is_array($raw)) {
            $raw = [
                ['name' => 'Faraz Shafi', 'role' => 'CEO', 'image' => 'farazbhai_image.png'],
                ['name' => 'Osama Rasheed', 'role' => 'Managing Partner', 'image' => 'osama_image.png'],
                ['name' => 'Babar Ali Khan', 'role' => 'Sr. Developer', 'image' => 'babar_image.png'],
                ['name' => 'Muhammad Jawed', 'role' => 'Marketing Manager', 'image' => 'jawed_image.png'],
            ];
        }

        $defaultImages = [
            0 => 'farazbhai_image.png',
            1 => 'osama_image.png',
            2 => 'babar_image.png',
            3 => 'jawed_image.png',
        ];

        $results = [];
        foreach ($raw as $index => $m) {
            $name = $m['name'] ?? '';
            $role = $m['role'] ?? '';
            $imgPath = $m['image'] ?? null;

            $fallback = match (strtolower(trim($name))) {
                'faraz shafi' => 'farazbhai_image.png',
                'osama rasheed' => 'osama_image.png',
                'babar ali khan' => 'babar_image.png',
                'muhammad jawed' => 'jawed_image.png',
                default => ($defaultImages[$index] ?? 'farazbhai_image.png'),
            };

            $results[] = [
                'name' => $name,
                'role' => $role,
                'image' => $imgPath ?: $fallback,
                'image_url' => $this->resolveImageUrl($imgPath, $fallback),
            ];
        }

        return $results;
    }
}

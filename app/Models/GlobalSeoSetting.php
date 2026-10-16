<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GlobalSeoSetting extends Model
{
    protected $table = 'global_seo_settings';

    protected $fillable = [
        'site_indexing_enabled',
        'meta_title_default',
        'meta_description_default',
        'canonical_base_url',
    ];

    protected $casts = [
        'site_indexing_enabled' => 'boolean',
    ];

    protected static function booted(): void
    {
        static::saved(function (self $model) {
            static::syncRobotsFile($model->site_indexing_enabled);
        });
    }

    /**
     * Synchronize public/robots.txt file to match current indexing status.
     */
    public static function syncRobotsFile(?bool $enabled = null): void
    {
        try {
            $isIndexingEnabled = $enabled ?? static::isIndexingEnabled();
            if ($isIndexingEnabled) {
                $sitemapUrl = url('/sitemap.xml');
                $content = "User-agent: *\nAllow: /\n\nSitemap: {$sitemapUrl}\n";
            } else {
                $content = "User-agent: *\nDisallow: /\n";
            }
            @file_put_contents(public_path('robots.txt'), $content);
        } catch (\Throwable $e) {
            // Silently ignore filesystem permissions if public directory is read-only
        }
    }

    /**
     * Check if search engine indexing is globally enabled.
     * Guaranteed to return false by default on new deployments or if setting is not found.
     */
    public static function isIndexingEnabled(): bool
    {
        try {
            $setting = static::first();
            return $setting ? (bool) $setting->site_indexing_enabled : false;
        } catch (\Throwable $e) {
            return false;
        }
    }

    /**
     * Get or create singleton instance.
     */
    public static function instance(): self
    {
        return static::firstOrCreate([], [
            'site_indexing_enabled' => false,
            'meta_title_default' => 'Core Unity Solutions | Digital Marketing Agency & IT Solutions Dubai',
            'meta_description_default' => 'Core Unity Solutions is a results-driven digital marketing agency in Dubai, combining creativity, data, and technology to help ambitious brands grow.',
            'canonical_base_url' => 'http://127.0.0.1:8000',
        ]);
    }
}

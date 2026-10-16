<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('hero_sections', function (Blueprint $table) {
            if (!Schema::hasColumn('hero_sections', 'media_logos')) {
                $table->json('media_logos')->nullable()->after('logo_ticker');
            }
        });

        Schema::table('pages', function (Blueprint $table) {
            if (!Schema::hasColumn('pages', 'media_logos')) {
                $table->json('media_logos')->nullable()->after('sections');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hero_sections', function (Blueprint $table) {
            if (Schema::hasColumn('hero_sections', 'media_logos')) {
                $table->dropColumn('media_logos');
            }
        });

        Schema::table('pages', function (Blueprint $table) {
            if (Schema::hasColumn('pages', 'media_logos')) {
                $table->dropColumn('media_logos');
            }
        });
    }
};

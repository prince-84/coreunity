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
        Schema::create('global_seo_settings', function (Blueprint $table) {
            $table->id();
            // Default is strictly false (0) for new deployments
            $table->boolean('site_indexing_enabled')->default(false);
            $table->string('meta_title_default')->nullable();
            $table->text('meta_description_default')->nullable();
            $table->string('canonical_base_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('global_seo_settings');
    }
};

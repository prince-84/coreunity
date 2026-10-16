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
        if (!Schema::hasTable('site_settings')) {
            Schema::create('site_settings', function (Blueprint $table) {
                $table->id();
                $table->string('site_name')->default('CoreUnity Solutions');
                $table->string('header_logo')->nullable();
                $table->string('footer_logo')->nullable();
                $table->string('favicon')->nullable();
                $table->string('copyright_text')->nullable();
                $table->string('primary_color')->default('#cc2936');
                $table->string('secondary_color')->default('#b71c1c');
                $table->json('social_links')->nullable();
                $table->string('email')->nullable();
                $table->string('phone')->nullable();
                $table->string('whatsapp')->nullable();
                $table->text('address')->nullable();
                $table->text('map_embed_url')->nullable();
                $table->string('header_cta_text')->default('Speak to an expert');
                $table->string('header_cta_url')->default('#');
                $table->json('header_menu')->nullable();
                $table->json('footer_menu_groups')->nullable();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_settings');
    }
};

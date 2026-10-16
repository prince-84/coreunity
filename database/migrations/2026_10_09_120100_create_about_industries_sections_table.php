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
        Schema::create('about_industries_sections', function (Blueprint $table) {
            $table->id();
            $table->string('badge_text')->default('Serving Diverse Sectors Across the UAE');
            $table->string('main_title')->default('Industries We Serve');
            $table->string('bg_image')->nullable();
            $table->json('items')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_industries_sections');
    }
};

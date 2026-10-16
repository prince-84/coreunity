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
        Schema::create('core_strengths_sections', function (Blueprint $table) {
            $table->id();
            $table->string('mini_title')->nullable();
            $table->string('main_title')->nullable();
            $table->string('bg_image')->nullable();
            $table->json('points')->nullable();
            $table->string('collage_image_1')->nullable();
            $table->string('collage_image_2')->nullable();
            $table->string('collage_image_3')->nullable();
            $table->string('collage_image_4')->nullable();
            $table->string('collage_image_5')->nullable();
            $table->string('collage_image_6')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('core_strengths_sections');
    }
};

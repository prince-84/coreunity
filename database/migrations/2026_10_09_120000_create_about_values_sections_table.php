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
        Schema::create('about_values_sections', function (Blueprint $table) {
            $table->id();
            $table->string('headline')->default("What Drives Us\nForward");
            $table->string('bg_image')->nullable();
            $table->string('arrow_icon')->nullable();
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
        Schema::dropIfExists('about_values_sections');
    }
};

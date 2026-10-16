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
        Schema::create('client_reviews_sections', function (Blueprint $table) {
            $table->id();
            $table->string('mini_title')->default('Client Testimonials');
            $table->string('main_title')->default('Loved by your best customers');
            $table->text('description')->nullable();
            $table->string('bg_image')->nullable();
            $table->json('reviews')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_reviews_sections');
    }
};

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
        Schema::create('testimonial_sections', function (Blueprint $table) {
            $table->id();
            $table->string('mini_title')->default('Our Clients');
            $table->string('main_title')->default('Amazing Software Services');
            $table->text('review_text')->nullable();
            $table->string('author_name')->default('Alex Hales');
            $table->string('author_role')->default('Managing Partner');
            $table->string('author_image')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonial_sections');
    }
};

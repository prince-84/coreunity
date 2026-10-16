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
        Schema::create('blog_sections', function (Blueprint $table) {
            $table->id();
            $table->string('mini_title')->default('Our Blog');
            $table->text('main_title')->nullable();
            $table->string('overlay_text')->default("View Full\nBlog");
            $table->string('date_icon')->nullable();
            $table->string('category_icon')->nullable();
            $table->json('posts')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_sections');
    }
};

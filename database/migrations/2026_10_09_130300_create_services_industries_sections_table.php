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
        Schema::create('services_industries_sections', function (Blueprint $table) {
            $table->id();
            $table->string('mini_title')->default('Serving Diverse Sectors Across the UAE');
            $table->string('main_title')->default('Industries We Serve');
            $table->json('industries')->nullable();
            $table->string('cta_title')->default('Ready to grow your brand?');
            $table->string('cta_subtitle')->default("Let's build a strategy that delivers real results.");
            $table->string('cta_button_text')->default('Connect with us');
            $table->string('cta_button_url')->default('/contact');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services_industries_sections');
    }
};

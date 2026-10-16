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
        Schema::create('services_list_sections', function (Blueprint $table) {
            $table->id();
            $table->string('mini_title')->default('What We Offer');
            $table->text('main_title')->nullable();
            $table->json('services')->nullable();
            $table->string('button_text')->default('View all services');
            $table->string('button_url')->default('/services/all');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services_list_sections');
    }
};

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
        Schema::create('our_clients_sections', function (Blueprint $table) {
            $table->id();
            $table->string('mini_title')->default('Our Clients');
            $table->text('main_title')->nullable();
            $table->string('bg_image')->nullable();
            $table->json('client_logos')->nullable();
            $table->string('globe_image')->nullable();
            $table->string('globe_text')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('our_clients_sections');
    }
};

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
        Schema::create('our_work_sections', function (Blueprint $table) {
            $table->id();
            $table->string('mini_title')->nullable();
            $table->string('main_title')->nullable();
            $table->json('categories')->nullable();

            $table->string('card_1_title')->nullable();
            $table->string('card_1_stat_number')->nullable();
            $table->string('card_1_stat_desc')->nullable();
            $table->string('card_1_button_text')->nullable();
            $table->string('card_1_button_link')->nullable();
            $table->string('card_1_image')->nullable();
            $table->string('card_1_bg_image')->nullable();

            $table->string('card_2_title')->nullable();
            $table->string('card_2_stat_number')->nullable();
            $table->string('card_2_stat_desc')->nullable();
            $table->string('card_2_button_text')->nullable();
            $table->string('card_2_button_link')->nullable();
            $table->string('card_2_image')->nullable();
            $table->string('card_2_bg_image')->nullable();

            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('our_work_sections');
    }
};

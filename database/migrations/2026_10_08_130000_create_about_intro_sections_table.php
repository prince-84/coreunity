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
        Schema::create('about_intro_sections', function (Blueprint $table) {
            $table->id();
            $table->string('title_prefix')->default('We are a');
            $table->string('title_highlight')->default('Creative Bold');
            $table->string('title_suffix')->default('Digital Agency based In UAE');
            $table->text('paragraph_1')->nullable();
            $table->text('paragraph_2')->nullable();
            $table->string('main_image')->nullable();
            $table->string('floating_bg_image')->nullable();
            $table->string('floating_logo')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_intro_sections');
    }
};

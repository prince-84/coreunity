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
        Schema::table('hero_sections', function (Blueprint $table) {
            $table->string('button_icon')->nullable();
            $table->string('globe_image')->nullable();
            $table->json('global_presence')->nullable();
            $table->json('logo_ticker')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hero_sections', function (Blueprint $table) {
            $table->dropColumn(['button_icon', 'globe_image', 'global_presence', 'logo_ticker']);
        });
    }
};

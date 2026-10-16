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
        Schema::table('services_sections', function (Blueprint $table) {
            $table->string('card_1_icon')->nullable()->after('cards');
            $table->string('card_1_title')->nullable()->after('card_1_icon');
            $table->text('card_1_description')->nullable()->after('card_1_title');
            $table->string('card_1_image')->nullable()->after('card_1_description');

            $table->string('card_2_bg_image')->nullable()->after('card_1_image');
            $table->string('card_2_title_highlight')->nullable()->after('card_2_bg_image');
            $table->string('card_2_title_main')->nullable()->after('card_2_title_highlight');
            $table->json('card_2_links')->nullable()->after('card_2_title_main');

            $table->string('card_3_icon')->nullable()->after('card_2_links');
            $table->string('card_3_title')->nullable()->after('card_3_icon');
            $table->text('card_3_description')->nullable()->after('card_3_title');
            $table->string('card_3_image')->nullable()->after('card_3_description');

            $table->boolean('is_active')->default(true)->after('card_3_image');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('services_sections', function (Blueprint $table) {
            $table->dropColumn([
                'card_1_icon',
                'card_1_title',
                'card_1_description',
                'card_1_image',
                'card_2_bg_image',
                'card_2_title_highlight',
                'card_2_title_main',
                'card_2_links',
                'card_3_icon',
                'card_3_title',
                'card_3_description',
                'card_3_image',
                'is_active',
            ]);
        });
    }
};

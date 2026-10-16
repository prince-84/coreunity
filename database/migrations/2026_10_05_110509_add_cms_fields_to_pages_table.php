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
        Schema::table('pages', function (Blueprint $table) {
            $table->string('title')->nullable()->after('id');
            $table->string('hero_badge')->nullable()->after('slug');
            $table->text('hero_subheadline')->nullable()->after('hero_headline');
            $table->string('hero_image')->nullable()->after('hero_cta_url');
            $table->longText('content')->nullable()->after('hero_image');
            $table->json('sections')->nullable()->after('content');
            $table->string('meta_title')->nullable()->after('global_presence');
            $table->text('meta_description')->nullable()->after('meta_title');
            $table->boolean('show_in_navbar')->default(false)->after('meta_description');
            $table->integer('navbar_order')->default(0)->after('show_in_navbar');
            $table->boolean('is_published')->default(true)->after('navbar_order');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn([
                'title',
                'hero_badge',
                'hero_subheadline',
                'hero_image',
                'content',
                'sections',
                'meta_title',
                'meta_description',
                'show_in_navbar',
                'navbar_order',
                'is_published',
            ]);
        });
    }
};

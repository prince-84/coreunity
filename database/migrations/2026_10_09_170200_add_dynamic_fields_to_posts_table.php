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
        Schema::table('posts', function (Blueprint $table) {
            $table->string('badge')->nullable()->after('slug');
            $table->string('category')->nullable()->after('badge');
            $table->string('author_name')->nullable()->default('CoreUnity Team')->after('category');
            $table->text('excerpt')->nullable()->after('author_name');
            $table->string('hero_banner')->nullable()->after('featured_image');
            $table->json('highlights')->nullable()->after('content');
            $table->json('stats')->nullable()->after('highlights');
            $table->json('faqs')->nullable()->after('stats');
            $table->json('gallery')->nullable()->after('faqs');
            $table->string('meta_title')->nullable()->after('gallery');
            $table->text('meta_description')->nullable()->after('meta_title');
            $table->string('og_image')->nullable()->after('meta_description');
            $table->boolean('is_published')->default(true)->after('og_image');
            $table->integer('sort_order')->default(0)->after('is_published');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn([
                'badge',
                'category',
                'author_name',
                'excerpt',
                'hero_banner',
                'highlights',
                'stats',
                'faqs',
                'gallery',
                'meta_title',
                'meta_description',
                'og_image',
                'is_published',
                'sort_order',
            ]);
        });
    }
};

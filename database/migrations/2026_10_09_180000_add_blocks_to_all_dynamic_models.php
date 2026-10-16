<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (Schema::hasTable('pages') && !Schema::hasColumn('pages', 'blocks')) {
            Schema::table('pages', function (Blueprint $table) {
                $table->json('blocks')->nullable()->after('content');
            });
        }

        if (Schema::hasTable('services') && !Schema::hasColumn('services', 'blocks')) {
            Schema::table('services', function (Blueprint $table) {
                $table->json('blocks')->nullable()->after('content');
            });
        }

        if (Schema::hasTable('case_studies') && !Schema::hasColumn('case_studies', 'blocks')) {
            Schema::table('case_studies', function (Blueprint $table) {
                $table->json('blocks')->nullable()->after('content');
            });
        }

        if (Schema::hasTable('posts') && !Schema::hasColumn('posts', 'blocks')) {
            Schema::table('posts', function (Blueprint $table) {
                $table->json('blocks')->nullable()->after('content');
            });
        }
    }

    public function down(): void
    {
        if (Schema::hasTable('pages') && Schema::hasColumn('pages', 'blocks')) {
            Schema::table('pages', function (Blueprint $table) {
                $table->dropColumn('blocks');
            });
        }

        if (Schema::hasTable('services') && Schema::hasColumn('services', 'blocks')) {
            Schema::table('services', function (Blueprint $table) {
                $table->dropColumn('blocks');
            });
        }

        if (Schema::hasTable('case_studies') && Schema::hasColumn('case_studies', 'blocks')) {
            Schema::table('case_studies', function (Blueprint $table) {
                $table->dropColumn('blocks');
            });
        }

        if (Schema::hasTable('posts') && Schema::hasColumn('posts', 'blocks')) {
            Schema::table('posts', function (Blueprint $table) {
                $table->dropColumn('blocks');
            });
        }
    }
};

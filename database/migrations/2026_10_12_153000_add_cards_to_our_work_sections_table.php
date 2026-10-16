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
        Schema::table('our_work_sections', function (Blueprint $table) {
            if (!Schema::hasColumn('our_work_sections', 'cards')) {
                $table->json('cards')->nullable()->after('categories');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('our_work_sections', function (Blueprint $table) {
            if (Schema::hasColumn('our_work_sections', 'cards')) {
                $table->dropColumn('cards');
            }
        });
    }
};

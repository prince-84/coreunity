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
        Schema::create('contact_details_sections', function (Blueprint $table) {
            $table->id();
            $table->string('title_prefix')->default('Get');
            $table->string('title_highlight')->default('with');
            $table->string('title_suffix')->default('us');
            $table->text('description')->nullable();
            $table->string('phone')->default('+971 50 555 9646');
            $table->string('email')->default('contact@coreunitysolutions.com');
            $table->string('address')->default('Churchill Tower, Business Bay, Dubai, UAE');
            $table->string('submit_button_text')->default('Submit Message');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_details_sections');
    }
};

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
        Schema::create('crm_forms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        Schema::create('form_submissions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('crm_form_id')->nullable()->constrained('crm_forms')->nullOnDelete();
            $table->string('form_name');
            $table->string('form_slug')->index();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('service')->nullable();
            $table->string('specialist')->nullable();
            $table->string('contact_method')->nullable();
            $table->text('message')->nullable();
            $table->json('payload')->nullable();
            $table->string('status')->default('new')->index(); // 'new', 'contacted', 'closed'
            $table->text('admin_notes')->nullable();
            $table->string('ip_address')->nullable();
            $table->string('page_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_submissions');
        Schema::dropIfExists('crm_forms');
    }
};

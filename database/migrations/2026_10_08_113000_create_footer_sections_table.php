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
        Schema::create('footer_sections', function (Blueprint $table) {
            $table->id();

            // Newsletter Bar
            $table->string('newsletter_title')->default('Join Our Newsletter');
            $table->string('newsletter_subtitle')->default('Subscribe now to stay updated on the latest market trends');
            $table->string('newsletter_button_text')->default('Subscribe');
            $table->boolean('newsletter_is_active')->default(true);

            // Brand & Contact
            $table->string('logo')->nullable();
            $table->text('address')->nullable();
            $table->string('email')->default('contact@coreunitysolutions.com');
            $table->string('phone')->default('+971 50 555 9646');

            // Social URLs
            $table->string('facebook_url')->nullable();
            $table->string('instagram_url')->nullable();
            $table->string('youtube_url')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->string('tiktok_url')->nullable();

            // Directory Columns (JSON)
            $table->string('col_2_title')->default('Smart Technology Solutions');
            $table->json('col_2_links')->nullable();

            $table->string('col_3_title')->default('Digital Growth & Marketing');
            $table->json('col_3_links')->nullable();

            $table->string('col_4_title')->default('Industry');
            $table->json('col_4_links')->nullable();

            // Bottom Bar
            $table->string('copyright_text')->default('© 2026. CoreUnity Solutions');
            $table->string('privacy_policy_url')->default('/privacy-policy');
            $table->string('terms_conditions_url')->default('/terms-and-conditions');

            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('footer_sections');
    }
};

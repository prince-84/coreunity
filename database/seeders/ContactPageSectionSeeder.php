<?php

namespace Database\Seeders;

use App\Models\ContactPageSection;
use App\Models\Page;
use Illuminate\Database\Seeder;

class ContactPageSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contactPage = Page::where('slug', 'contact')->first();
        $pageId = $contactPage?->id;

        ContactPageSection::updateOrCreate(
            ['section_key' => 'contact_hero'],
            [
                'page_id' => $pageId,
                'section_order' => 1,
                'name' => 'Contact Hero Section',
                'description' => 'Top badge ("Contact Us") with glowing red dot, headline ("Lets get in touch and build something great together"), and visibility toggle.',
                'edit_url' => '/admin/contact-hero-sections/1/edit',
                'is_active' => true,
            ]
        );

        ContactPageSection::updateOrCreate(
            ['section_key' => 'contact_details'],
            [
                'page_id' => $pageId,
                'section_order' => 2,
                'name' => 'Contact Details & Inquiry Form Section',
                'description' => 'Left info ("Get with us", copy, Phone, Email, Address cards), right interactive lead submission form settings, and active toggle.',
                'edit_url' => '/admin/contact-details-sections/1/edit',
                'is_active' => true,
            ]
        );
    }
}

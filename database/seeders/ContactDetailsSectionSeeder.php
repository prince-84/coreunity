<?php

namespace Database\Seeders;

use App\Models\ContactDetailsSection;
use Illuminate\Database\Seeder;

class ContactDetailsSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ContactDetailsSection::updateOrCreate(
            ['id' => 1],
            [
                'title_prefix' => 'Get',
                'title_highlight' => 'with',
                'title_suffix' => 'us',
                'description' => "We'd love to hear from you! Our team is here to provide dedicated support, answer your questions, and help bring your next project to life. Feel free to reach out to us",
                'phone' => '+971 50 555 9646',
                'email' => 'contact@coreunitysolutions.com',
                'address' => 'Churchill Tower, Business Bay, Dubai, UAE',
                'submit_button_text' => 'Submit Message',
                'is_active' => true,
            ]
        );
    }
}

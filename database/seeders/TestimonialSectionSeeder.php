<?php

namespace Database\Seeders;

use App\Models\TestimonialSection;
use Illuminate\Database\Seeder;

class TestimonialSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TestimonialSection::updateOrCreate(
            ['id' => 1],
            [
                'mini_title' => 'Our Clients',
                'main_title' => 'Amazing Software Services',
                'review_text' => "They crafted a digital experience tailored to our exact needs. From initial consultation to final deployment, their professionalism, responsiveness, and technical expertise were unmatched. The system they built has streamlined our operations, improved customer engagement, and scaled effortlessly with our growth We couldn't be happier with.",
                'author_name' => 'Alex Hales',
                'author_role' => 'Managing Partner',
                'author_image' => 'managingpart_image.png',
                'is_active' => true,
            ]
        );
    }
}

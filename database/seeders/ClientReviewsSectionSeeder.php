<?php

namespace Database\Seeders;

use App\Models\ClientReviewsSection;
use Illuminate\Database\Seeder;

class ClientReviewsSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ClientReviewsSection::updateOrCreate(
            ['id' => 1],
            [
                'mini_title' => 'Client Testimonials',
                'main_title' => 'Loved by your best customers',
                'description' => "We're obsessed with delivering outstanding customer experiences that are a reflection of your brand.",
                'bg_image' => 'white_bg.png',
                'reviews' => [
                    [
                        'service' => 'Digital Marketing',
                        'name' => 'Ahmed Al Mansouri',
                        'role' => 'Managing Director, Dubai-based Business',
                        'review' => 'Working with the team completely changed the way we approached digital marketing. Their strategy was tailored to our Dubai market, and we saw a noticeable improvement in our online visibility, engagement, and lead generation. They were professional, responsive, and genuinely focused on our business goals.',
                        'rating' => 5,
                    ],
                    [
                        'service' => 'Social Media Marketing',
                        'name' => 'Sara Khan',
                        'role' => 'Founder, Dubai-based Lifestyle Brand',
                        'review' => 'Our social media presence has grown significantly since partnering with the team. They understood our brand, created engaging content, and developed a strategy that connected with our target audience in Dubai. The consistency and quality of their work have made a real difference.',
                        'rating' => 5,
                    ],
                    [
                        'service' => 'SEO',
                        'name' => 'Omar Rahman',
                        'role' => 'Marketing Manager, Dubai-based Company',
                        'review' => 'We were looking for a long-term SEO partner who understood the competitive Dubai market, and we found exactly that. Their approach was structured, transparent, and focused on sustainable growth. We’ve seen stronger search visibility and a steady increase in relevant organic traffic.',
                        'rating' => 5,
                    ],
                    [
                        'service' => 'Branding',
                        'name' => 'Fatima Al Nuaimi',
                        'role' => 'Founder, Dubai-based Startup',
                        'review' => 'The branding process was seamless from start to finish. The team took the time to understand our vision and transformed it into a professional identity that truly represents our business. Our new brand has given us much more confidence when presenting ourselves to customers and partners in Dubai.',
                        'rating' => 5,
                    ],
                    [
                        'service' => 'PPC',
                        'name' => 'Daniel Thomas',
                        'role' => 'Business Owner, Dubai',
                        'review' => 'Our previous PPC campaigns were generating clicks but not enough quality leads. The team completely reworked our approach, refined the targeting, and continuously optimized our campaigns. We now have a much clearer understanding of our paid marketing performance and are seeing better-quality enquiries.',
                        'rating' => 5,
                    ],
                    [
                        'service' => 'Mobile App Development',
                        'name' => 'Khalid Al Hashimi',
                        'role' => 'CEO, Dubai-based Technology Company',
                        'review' => 'From the initial concept to the final launch, the development team handled our mobile app project with great professionalism. They understood our requirements, communicated clearly throughout the process, and delivered a solution that was both functional and user-friendly. We’re extremely pleased with the result.',
                        'rating' => 5,
                    ],
                    [
                        'service' => 'Branding & Digital Marketing',
                        'name' => 'Aisha Malik',
                        'role' => 'Co-Founder, UAE Business',
                        'review' => 'We needed a partner who could bring our branding and digital marketing together under one clear strategy. The team delivered exactly that. From our visual identity to our online campaigns, everything now feels consistent, professional, and aligned with our business objectives.',
                        'rating' => 5,
                    ],
                    [
                        'service' => 'Digital Growth',
                        'name' => 'Faisal Ahmed',
                        'role' => 'Director, Dubai-based Enterprise',
                        'review' => 'What stood out most was their understanding of the local market. They didn’t simply apply a generic digital strategy—they took the time to understand our audience, competition, and goals in Dubai. The results have been impressive, and we’re excited to continue growing with them.',
                        'rating' => 5,
                    ],
                ],
                'is_active' => true,
            ]
        );
    }
}

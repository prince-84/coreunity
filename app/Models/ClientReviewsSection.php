<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientReviewsSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'mini_title',
        'main_title',
        'description',
        'bg_image',
        'reviews',
        'is_active',
    ];

    protected $casts = [
        'reviews' => 'array',
        'is_active' => 'boolean',
    ];

    protected $appends = [
        'bg_image_url',
        'resolved_reviews',
    ];

    protected function resolveImageUrl(?string $path, string $default): string
    {
        if (!$path) {
            return asset($default);
        }
        if (str_starts_with($path, 'http://') || str_starts_with($path, 'https://') || str_starts_with($path, '/')) {
            return $path;
        }
        if (file_exists(public_path($path))) {
            return asset($path);
        }
        return asset('storage/' . $path);
    }

    public function getBgImageUrlAttribute(): string
    {
        return $this->resolveImageUrl($this->bg_image, 'white_bg.png');
    }

    public function getResolvedReviewsAttribute(): array
    {
        $raw = $this->reviews;

        if (empty($raw) || !is_array($raw)) {
            $raw = [
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
            ];
        }

        $results = [];
        foreach ($raw as $t) {
            $results[] = [
                'service' => $t['service'] ?? 'Service',
                'name' => $t['name'] ?? 'Client',
                'role' => $t['role'] ?? 'Client',
                'review' => $t['review'] ?? '',
                'rating' => (int)($t['rating'] ?? 5),
            ];
        }

        return $results;
    }
}

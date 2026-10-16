<?php

namespace Database\Seeders;

use App\Models\CrmForm;
use App\Models\FormSubmission;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CrmFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $forms = [
            [
                'name' => 'Contact Us Page Form',
                'slug' => 'contact-us-page',
                'description' => 'General contact requests, corporate inquiries, and project messages.',
                'samples' => [
                    [
                        'name' => 'Sarah Al-Maktoum',
                        'email' => 'sarah@enterprisedubai.ae',
                        'phone' => '+971 50 123 4567',
                        'service' => 'Digital Transformation & Cloud',
                        'message' => 'Looking to revamp our internal ERP and client-facing digital portal.',
                        'status' => 'new',
                        'admin_notes' => null,
                    ],
                    [
                        'name' => 'David Miller',
                        'email' => 'david.m@fintechcorp.com',
                        'phone' => '+971 52 987 6543',
                        'service' => 'Fintech Security Architecture',
                        'message' => 'Need consultation on payment gateway integration and compliance.',
                        'status' => 'contacted',
                        'admin_notes' => 'Reached out via email on Oct 12. Meeting scheduled for next Tuesday.',
                    ],
                ],
            ],
            [
                'name' => 'Consult an Expert',
                'slug' => 'consult-an-expert',
                'description' => 'Strategic consultation requests and project inquiries from Consult an Expert modal.',
                'samples' => [
                    [
                        'name' => 'Ahmed Mansoor',
                        'email' => 'ahmed.m@techstart.io',
                        'phone' => '+971 55 456 7890',
                        'country_iso' => 'AE',
                        'country_code' => '+971',
                        'specialist' => 'Technical Architecture',
                        'contact_method' => 'whatsapp',
                        'message' => 'Need urgent advice on scaling high-concurrency microservices.',
                        'status' => 'new',
                        'admin_notes' => null,
                    ],
                    [
                        'name' => 'Elena Rostova',
                        'email' => 'elena@luxuryliving.ae',
                        'phone' => '+971 54 321 0987',
                        'country_iso' => 'AE',
                        'country_code' => '+971',
                        'specialist' => 'Creative UI/UX Design',
                        'contact_method' => 'email',
                        'message' => 'We want a modern high-end redesign for our real estate showcase website.',
                        'status' => 'closed',
                        'admin_notes' => 'Proposal accepted. Transferred to project delivery team.',
                    ],
                ],
            ],
            [
                'name' => 'Schedule Call Modal Form',
                'slug' => 'schedule-call-modal',
                'description' => 'Homepage schedule a call conversion form.',
                'samples' => [
                    [
                        'name' => 'Rashid Khan',
                        'email' => 'rashid@khanlogistics.com',
                        'phone' => '+971 50 789 0123',
                        'service' => 'Web App & Core Development',
                        'message' => 'We need custom fleet management tracking software built.',
                        'status' => 'new',
                        'admin_notes' => null,
                    ],
                ],
            ],
            [
                'name' => 'Service Inquiry Form',
                'slug' => 'service-inquiry-form',
                'description' => 'Inquiry form placed across individual service landing pages.',
                'samples' => [
                    [
                        'name' => 'Kareem Obeid',
                        'email' => 'kareem@obeiddental.ae',
                        'phone' => '+971 58 654 3210',
                        'service' => 'Search Engine Optimization (SEO)',
                        'message' => 'Want to rank #1 locally in Dubai for dental cosmetic surgery.',
                        'status' => 'contacted',
                        'admin_notes' => 'Shared initial SEO audit PDF via WhatsApp.',
                    ],
                ],
            ],
            [
                'name' => 'Newsletter Subscription Form',
                'slug' => 'newsletter-subscription-form',
                'description' => 'Footer newsletter email subscription opt-ins.',
                'samples' => [
                    [
                        'name' => 'Subscriber',
                        'email' => 'insights@digitalweekly.net',
                        'phone' => null,
                        'service' => 'Newsletter',
                        'message' => 'Subscribed to weekly tech newsletter.',
                        'status' => 'closed',
                        'admin_notes' => 'Added to mailing list.',
                    ],
                ],
            ],
        ];

        foreach ($forms as $formData) {
            $samples = $formData['samples'] ?? [];
            unset($formData['samples']);

            $crmForm = CrmForm::firstOrCreate(
                ['slug' => $formData['slug']],
                [
                    'name' => $formData['name'],
                    'description' => $formData['description'],
                    'is_active' => true,
                ]
            );

            foreach ($samples as $sample) {
                FormSubmission::firstOrCreate(
                    [
                        'crm_form_id' => $crmForm->id,
                        'email' => $sample['email'],
                    ],
                    array_merge($sample, [
                        'crm_form_id' => $crmForm->id,
                        'form_name' => $crmForm->name,
                        'form_slug' => $crmForm->slug,
                        'payload' => $sample,
                        'ip_address' => '127.0.0.1',
                        'page_url' => url('/'),
                    ])
                );
            }
        }
    }
}

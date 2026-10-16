@extends('layouts.app')

@section('title', 'Privacy Policy - CoreUnity Solutions')
@section('meta_description', 'Learn about how CoreUnity Solutions collects, uses, and protects your personal information.')

@section('content')
<div class="min-h-screen bg-white flex flex-col justify-between text-gray-800 font-sans">
    
    <main class="max-w-4xl mx-auto px-4 sm:px-6 pt-28 sm:pt-32 pb-16 flex-grow w-full">
        <h1 class="text-3xl sm:text-4xl font-extrabold text-gray-900 mb-6 border-b border-gray-200 pb-4">
            Privacy Policy
        </h1>

        <p class="text-sm text-gray-500 mb-8">
            Last updated: September 2026
        </p>

        <div class="space-y-8 text-gray-700 leading-relaxed text-base">
            <section>
                <h2 class="text-xl font-bold text-gray-900 mb-3">1. Introduction</h2>
                <p>
                    CoreUnity Solutions ("we", "our", or "us") values your privacy and is committed to protecting your personal data. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website or use our digital services.
                </p>
            </section>

            <section>
                <h2 class="text-xl font-bold text-gray-900 mb-3">2. Information We Collect</h2>
                <p class="mb-3">We may collect information about you in a variety of ways, including:</p>
                <ul class="list-disc pl-6 space-y-2">
                    <li><strong>Personal Data:</strong> Name, email address, phone number, and company name provided voluntarily when you fill out contact forms or request consultations.</li>
                    <li><strong>Usage Data:</strong> Information automatically collected when accessing the website, such as IP address, browser type, operating system, and pages visited.</li>
                </ul>
            </section>

            <section>
                <h2 class="text-xl font-bold text-gray-900 mb-3">3. How We Use Your Information</h2>
                <p class="mb-3">We use the information collected to:</p>
                <ul class="list-disc pl-6 space-y-2">
                    <li>Provide, maintain, and optimize our services and client solutions.</li>
                    <li>Respond to inquiries, consultation requests, and customer support needs.</li>
                    <li>Send administrative notices, updates, and promotional communications (if opted-in).</li>
                    <li>Analyze usage patterns to improve website performance and user experience.</li>
                </ul>
            </section>

            <section>
                <h2 class="text-xl font-bold text-gray-900 mb-3">4. Information Sharing & Disclosure</h2>
                <p>
                    We do not sell, trade, or rent your personal information to third parties. We may share information only with trusted service providers who assist us in operating our website or conducting business, subject to strict confidentiality agreements.
                </p>
            </section>

            <section>
                <h2 class="text-xl font-bold text-gray-900 mb-3">5. Data Security</h2>
                <p>
                    We implement industry-standard technical and organizational security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction.
                </p>
            </section>

            <section>
                <h2 class="text-xl font-bold text-gray-900 mb-3">6. Contact Us</h2>
                <p>
                    If you have any questions or concerns about this Privacy Policy, please email us at 
                    <a href="mailto:contact@coreunitysolutions.com" class="text-red-600 font-semibold hover:underline">
                        contact@coreunitysolutions.com
                    </a>.
                </p>
            </section>
        </div>
    </main>

</div>
@endsection

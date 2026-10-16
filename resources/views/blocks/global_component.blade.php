@php
    $key = $block['component_key'] ?? null;
    $isVisible = (bool) ($block['is_visible'] ?? true);
    $customBadge = $block['custom_badge'] ?? null;
    $customTitle = $block['custom_title'] ?? null;
@endphp

@if($isVisible && $key)
    @switch($key)
        @case('our_clients')
            @php
                $ourClients = $ourClients ?? \App\Models\OurClientsSection::where('is_active', true)->latest('updated_at')->first() ?? \App\Models\OurClientsSection::first();
            @endphp
            @if(view()->exists('partials.our_clients'))
                @include('partials.our_clients')
            @endif
            @break

        @case('our_work')
            @php
                $ourWork = $ourWork ?? \App\Models\OurWorkSection::where('is_active', true)->latest('updated_at')->first() ?? \App\Models\OurWorkSection::first();
            @endphp
            @if(view()->exists('partials.our_work'))
                @include('partials.our_work')
            @endif
            @break

        @case('team')
            @php
                $teamSection = $teamSection ?? \App\Models\TeamSection::where('is_active', true)->latest('updated_at')->first() ?? \App\Models\TeamSection::first();
            @endphp
            @if(view()->exists('partials.team'))
                @include('partials.team')
            @endif
            @break

        @case('testimonials')
            @php
                $testimonialSection = $testimonialSection ?? \App\Models\TestimonialSection::where('is_active', true)->latest('updated_at')->first() ?? \App\Models\TestimonialSection::first();
            @endphp
            @if(view()->exists('partials.testimonial_light'))
                @include('partials.testimonial_light')
            @endif
            @break

        @case('client_reviews')
            @php
                $clientReviewsSection = $clientReviewsSection ?? \App\Models\ClientReviewsSection::where('is_active', true)->latest('updated_at')->first() ?? \App\Models\ClientReviewsSection::first();
            @endphp
            @if(view()->exists('partials.client_reviews'))
                @include('partials.client_reviews')
            @endif
            @break

        @case('blog_showcase')
            @php
                $blogSection = $blogSection ?? \App\Models\BlogSection::where('is_active', true)->latest('updated_at')->first() ?? \App\Models\BlogSection::first();
            @endphp
            @if(view()->exists('partials.blog_cards'))
                @include('partials.blog_cards')
            @endif
            @break

        @case('contact_details')
            @php
                $contactDetails = $contactDetails ?? \App\Models\ContactDetailsSection::where('is_active', true)->latest('updated_at')->first() ?? \App\Models\ContactDetailsSection::first();
            @endphp
            @if(view()->exists('partials.contact_details'))
                @include('partials.contact_details')
            @endif
            @break

        @case('footer')
            @php
                $footerSection = $footerSection ?? \App\Models\FooterSection::where('is_active', true)->latest('updated_at')->first() ?? \App\Models\FooterSection::first();
            @endphp
            @if(view()->exists('partials.footer'))
                @include('partials.footer')
            @endif
            @break
    @endswitch
@endif

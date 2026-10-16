@php
    $blogSection = $blogSection ?? \App\Models\BlogSection::where('is_active', true)->latest('updated_at')->first() ?? \App\Models\BlogSection::first();
@endphp

@if(view()->exists('partials.blog_section'))
    @include('partials.blog_section', ['blogSection' => $blogSection])
@endif

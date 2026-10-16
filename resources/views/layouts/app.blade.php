<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Core Unity Solutions | Digital Marketing Agency & IT Solutions Dubai')</title>
    <meta name="description" content="@yield('meta_description', 'Core Unity Solutions is a results-driven digital marketing agency in Dubai, combining creativity, data, and technology to help ambitious brands grow.')">
    
    <!-- Global SEO Indexing Control -->
    @php
        $siteIndexingEnabled = \App\Models\GlobalSeoSetting::isIndexingEnabled();
    @endphp
    @if($siteIndexingEnabled)
        <meta name="robots" content="index, follow">
    @else
        <meta name="robots" content="noindex, nofollow">
    @endif
    
    <link rel="icon" type="image/svg+xml" href="{{ asset('Core Unity Logo-05.svg') }}">
    <link rel="alternate icon" href="{{ asset('favicon.ico') }}">

    <!-- Geist Font matching Next.js frontend -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Geist:wght@100..900&family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Geist', 'sans-serif'],
                        display: ['Outfit', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            red: '#cc2936',
                            dark: '#030303',
                            gray: '#0f0f0f',
                        }
                    }
                }
            }
        }
    </script>
    
    <style>
        @font-face {
            font-family: 'Geist';
            font-style: normal;
            font-weight: 100 900;
            font-display: swap;
            src: url("{{ asset('fonts/geist/geist-latin.woff2') }}") format("woff2"),
                 url("{{ asset('fonts/geist/geist-latin-ext.woff2') }}") format("woff2");
        }
        html {
            overflow-x: hidden;
            width: 100%;
            max-width: 100%;
        }
        body {
            background-color: #000000;
            color: #ffffff;
            overflow-x: hidden;
            width: 100%;
            max-width: 100%;
            position: relative;
            font-family: 'Geist', sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        /* Ensure Tailwind leading classes take priority over font-size defaults, matching Tailwind v4 */
        .leading-none { line-height: 1 !important; }
        .leading-tight { line-height: 1.25 !important; }
        .leading-snug { line-height: 1.375 !important; }
        .leading-normal { line-height: 1.5 !important; }
        .leading-relaxed { line-height: 1.625 !important; }
        .leading-loose { line-height: 2 !important; }
        [class*="leading-[1.08]"] { line-height: 1.08 !important; }
        [class*="leading-[1.1]"] { line-height: 1.1 !important; }
        [class*="leading-[1.12]"] { line-height: 1.12 !important; }
        [class*="leading-[1.15]"] { line-height: 1.15 !important; }
        [class*="leading-[1.2]"] { line-height: 1.2 !important; }
        [class*="leading-[1.25]"] { line-height: 1.25 !important; }
        [class*="leading-[1.3]"] { line-height: 1.3 !important; }
        [class*="leading-[1.35]"] { line-height: 1.35 !important; }
        [class*="leading-[1.4]"] { line-height: 1.4 !important; }
        [class*="leading-[1.5]"] { line-height: 1.5 !important; }
        .grid-bg {
            background-image: 
                radial-gradient(circle at 1px 1px, rgba(255, 255, 255, 0.05) 1px, transparent 0),
                radial-gradient(circle at 50% 50%, rgba(204, 41, 54, 0.04) 0%, transparent 60%);
            background-size: 40px 40px, 100% 100%;
        }
    </style>
    @stack('styles')
</head>
<body class="font-sans antialiased bg-black text-white min-h-screen flex flex-col justify-between w-full max-w-full overflow-x-hidden">

    <!-- Top Navigation Bar -->
    @include('partials.navbar')

    <!-- Flash message -->
    @if(session('success'))
        <div class="fixed top-24 right-6 z-50 bg-emerald-600 text-white px-6 py-3 rounded-xl shadow-2xl flex items-center gap-3">
            <span>{{ session('success') }}</span>
        </div>
    @endif

    <!-- Main Content Yield -->
    <div class="flex-grow w-full min-w-0 max-w-full overflow-x-hidden">
        @yield('content')
    </div>

    <!-- Footer -->
    @include('partials.footer')

    <!-- Speak to an Expert Modal (identical to Next.js SpeakExpertModal) -->
    @include('partials.speak_expert_modal')

    @stack('scripts')
</body>
</html>

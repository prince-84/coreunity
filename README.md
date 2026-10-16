# Core Unity Solutions - Laravel CMS & Frontend

This project contains both the **Dynamic Frontend** and the **Filament CMS Admin Panel** built with Laravel 12.

---

## 🚀 Overview

The frontend website and backend CMS have been consolidated into Laravel:
1. **Filament CMS (`/admin`)**: A full-featured admin dashboard where administrators can create, edit, publish, and order dynamic pages, hero sections, posts, and case studies.
2. **Dynamic Frontend (`/`)**: Blade templates styled with Tailwind CSS, Outfit and Plus Jakarta Sans typography, dark mode glassmorphism, responsive navigation, and interactive sections.
3. **Dynamic Routing (`/{slug}`)**: Any page created in the CMS is immediately rendered live on the frontend with custom hero banners, rich text content, and configurable feature blocks.
4. **Dynamic Header Navigation**: When creating or editing a page in the CMS, toggle **"Show in Header Navigation Menu"** and specify the **"Navbar Order"** — the page link will automatically appear in both desktop and mobile navigation bars.

---

## 🔑 Admin Login Credentials

| Attribute | Details |
|---|---|
| **Admin URL** | `http://127.0.0.1:8000/admin` |
| **Email** | `admin@coreunity.com` |
| **Password** | `admin123` |

---

## ⚡ Filament Admin Structured Navigation & Multi-Page Sections Architecture

The Filament CMS Admin Panel (`http://127.0.0.1:8000/admin`) navigation has been upgraded into a clean parent-child and modular architecture with a strict separation between **Page-Unique Sections** and **Global / Reusable Sections**:

### 1. Sidebar Navigation Structure
1. **Pages Management (`/admin/pages`)**:
   - Registered at the top of the sidebar.
   - Strictly manages **Page-Unique Sections** via embedded RelationManagers:
     - **Home Page Sections**:
       - `Hero Section`: Main headline, Subtitle, Description, CTA button, Earth globe, Global presence locations, Client logo ticker.
       - `Services Highlights`: Digital Marketing Services badge, Agency scaling headline, Websites & Branding, Growth Strategy link pills, Digital Marketing card.
       - `Core Strengths`: Our Core Strengths badge, Stand Out headline, 6 key agency strength points (01 to 06), right background pattern, and center 6-image marketing collage.
     - **About Page Sections**:
       - `About Us Hero Section`: Top badge ("About Us") with glowing ping indicator, and main heading ("From Dubai's best minds to a global powerhouse").
       - `About Intro Section`: Creative Bold intro heading, 2 narrative paragraphs, team meeting image, floating badge.
       - `What Drives Us Forward (Values)`: Narrative copy, red glowing indicator, interactive values/mission accordion.
       - `Industries We Serve`: 8 industry cards grid with icons, titles, and descriptions.

2. **Global / Reusable Sections Group** (Directly beneath `Pages Management`):
   - In accordance with the **Automatic Audit & Auto-Exclusion Rule**, any section that repeats on 2 or more pages across the website is strictly excluded from single-page section tables and grouped into `Global / Reusable Sections`:
     - **`Footer & Newsletter`** (Sort 1): Shared across every page via `layouts/app.blade.php` and `home.blade.php`.
     - **`Our Clients Logos`** (Sort 2): Shared across Home, About, Services, 17 service detail pages, and 7 industry detail pages (27 total pages).
     - **`Team Members`** (Sort 3): Shared across Home and About pages.
     - **`Testimonials`** (Sort 4): Shared across Home, Services, all 8 Case Study templates, and subservice pages.
     - **`Client Reviews (Marquee)`** (Sort 5): Infinite marquee reviews component.
     - **`Our Work Showcase`** (Sort 6): Featured case study cards and category filters shared across Home, Services, Portfolio, and Industries.
     - **`Blog Showcase Section`** (Sort 7): Industry insights showcase section shared across Home and Blog partials.

3. **Content & Portfolio Group**:
   - **`Case Studies`** (Sort 1): Agency portfolio case studies.
   - **`Blog Posts`** (Sort 2): Marketing articles and insights.

### 2. Dynamic Global Sync (Single Source of Truth)
- **Zero Redundancy**: When an administrator updates content in `Global / Reusable Sections > [Section Name]`, the change immediately reflects across every single page that renders the component (Home, About, Services, Case Studies, etc.) in a single click.
- **Centralized Blade Partials**:
  - `resources/views/partials/our_clients.blade.php`: Single source of truth for the client logo grid and worldwide globe card.
  - `resources/views/partials/team.blade.php`: Single source of truth for leadership and team profile cards.
  - `resources/views/partials/testimonial_light.blade.php`: Single source of truth for testimonial quote, author spokesperson avatar, and credentials.
  - `resources/views/partials/footer.blade.php`: Single source of truth for newsletter bar, contact directory, and footer links.

### 2. Main Navbar Pages Seeded (`PageSeeder`)
All 6 primary pages have been seeded into the MySQL `coreunity` database with full SEO metadata, banner copy, and navbar flags:
| # | Page Title | Slug / Route | Navbar Order | In Header Navbar | Published |
|---|---|---|---|---|---|
| 1 | **Home** | `/home` | 1 | Yes | Yes |
| 2 | **About** | `/about` | 2 | Yes | Yes |
| 3 | **Services** | `/services` | 3 | Yes | Yes |
| 4 | **Case Study** | `/case-study` | 4 | Yes | Yes |
| 5 | **Blog** | `/blog` | 5 | Yes | Yes |
| 6 | **Contact** | `/contact` | 6 | Yes | Yes |

### 3. Section 1: Hero Section CRUD (`/admin/hero-sections`)
- **Direct Edit URL**: `http://127.0.0.1:8000/admin/hero-sections/1/edit`
- **Form Schema**: Rich headline textarea, subtitle, description, CTA button text, CTA link URL, button icon image, featured image, earth globe image, country repeater, and logo ticker multi-image upload.
- **Seeder (`HeroSectionSeeder`)**: Seeds/updates record `id = 1` in `coreunity` MySQL database.
- **Model (`App\Models\HeroSection`)**: URL accessors (`button_icon_url`, `image_url`, `globe_image_url`, `logo_ticker_urls`) with smart `public_path()` fallback.

### 4. Section 2: Services Highlights CRUD (`/admin/services-sections`)
- **Direct Edit URL**: `http://127.0.0.1:8000/admin/services-sections/1/edit`
- **Database Schema (`services_sections`)**:
  - `mini_title`: Section pill badge (e.g. "Digital Marketing Services")
  - `main_title`: Main section heading (e.g. "How Our Agency Helps You Scale")
  - `card_1_icon`, `card_1_title`, `card_1_description`, `card_1_image`: Card 1 (Websites & Branding)
  - `card_2_bg_image`, `card_2_title_highlight`, `card_2_title_main`, `card_2_links`: Card 2 (Growth Strategy with dynamic link pills)
  - `card_3_icon`, `card_3_title`, `card_3_description`, `card_3_image`: Card 3 (Digital Marketing)
  - `is_active`: Visibility toggle
- **Seeder (`ServicesSectionSeeder`)**: Seeds/updates default values for record `id = 1` matching the frontend design.
- **Model (`App\Models\ServicesSection`)**: Automatically appends resolved asset URLs: `card_1_icon_url`, `card_1_image_url`, `card_2_bg_image_url`, `card_3_icon_url`, `card_3_image_url`.

### 5. Section 3: Core Strengths CRUD (`/admin/core-strengths-sections`)
- **Direct Edit URL**: `http://127.0.0.1:8000/admin/core-strengths-sections/1/edit`
- **Database Schema (`core_strengths_sections`)**:
  - `mini_title`: Section badge (e.g. "Our Core Strengths")
  - `main_title`: Main heading (e.g. "What Makes Our Digital Marketing Agency Stand Out?")
  - `bg_image`: Right-side background pattern image
  - `points`: JSON array of 6 key strength points (number badge, title, description)
  - `collage_image_1` to `collage_image_6`: Center column marketing collage images
  - `is_active`: Section display toggle
- **Seeder (`CoreStrengthsSectionSeeder`)**: Seeds/updates default record `id = 1` matching the frontend design.
- **Model (`App\Models\CoreStrengthsSection`)**: URL accessors for `bg_image_url` and `collage_image_1_url` through `collage_image_6_url` with smart `public_path()` fallback.

### 6. Section 4: Our Work CRUD (`/admin/our-work-sections`)
- **Direct Edit URL**: `http://127.0.0.1:8000/admin/our-work-sections/1/edit`
- **Database Schema (`our_work_sections`)**:
  - `mini_title`: Section badge (e.g. "OUR WORK")
  - `main_title`: Main heading (e.g. "10+ yrs of expertise in providing innovative solutions")
  - `categories`: JSON array of category filter pills (`label`, `url`)
  - `card_1_title`, `card_1_stat_number`, `card_1_stat_desc`, `card_1_button_text`, `card_1_button_link`, `card_1_image`, `card_1_bg_image`: Case Study Card 1 (Website Development)
  - `card_2_title`, `card_2_stat_number`, `card_2_stat_desc`, `card_2_button_text`, `card_2_button_link`, `card_2_image`, `card_2_bg_image`: Case Study Card 2 (Mobile Development)
  - `is_active`: Section display toggle
- **Seeder (`OurWorkSectionSeeder`)**: Seeds/updates default record `id = 1` matching the frontend design.
- **Model (`App\Models\OurWorkSection`)**: URL accessors for `card_1_image_url`, `card_1_bg_image_url`, `card_2_image_url`, `card_2_bg_image_url` with smart `public_path()` fallback.

### 7. Section 5: Our Clients CRUD (`/admin/our-clients-sections`)
- **Direct Edit URL**: `http://127.0.0.1:8000/admin/our-clients-sections/1/edit`
- **Database Schema (`our_clients_sections`)**:
  - `mini_title`: Section badge (e.g. "Our Clients")
  - `main_title`: Main heading (e.g. "5-Star Rated, Works with CoreUnity Solutions")
  - `bg_image`: Background pattern grid image
  - `client_logos`: Multi-file upload / array of partner brand logos
  - `globe_image`: Globe / feature icon image
  - `globe_text`: Worldwide clients description text
  - `is_active`: Section display toggle
- **Seeder (`OurClientsSectionSeeder`)**: Seeds/updates default record `id = 1` matching the frontend design.
- **Model (`App\Models\OurClientsSection`)**: URL accessors for `bg_image_url`, `globe_image_url`, and `resolved_client_logos` with smart `public_path()` fallback.

### 8. Section 6: Passionate Team CRUD (`/admin/team-sections`)
- **Direct Edit URL**: `http://127.0.0.1:8000/admin/team-sections/1/edit`
- **Database Schema (`team_sections`)**:
  - `mini_title`: Section badge (e.g. "Our Passionate Team")
  - `main_title`: Main heading (e.g. "The Brilliant Minds Behind Our Success")
  - `badge_logo`: Corner agency logo badge overlaid on member portraits
  - `members`: Repeater JSON array of team members (`name`, `role`, `image`)
  - `is_active`: Section display toggle
- **Seeder (`TeamSectionSeeder`)**: Seeds/updates default record `id = 1` matching the frontend design with exact original images (`farazbhai_image.png`, `osama_image.png`, `babar_image.png`, `jawed_image.png`).
- **Model (`App\Models\TeamSection`)**: URL accessors for `badge_logo_url` and `resolved_members` with distinct Port 3000 original image mappings (`farazbhai_image.png`, `osama_image.png`, `babar_image.png`, `jawed_image.png`) and full CMS dynamic file upload support.

### 9. Section 7: Testimonials CRUD (`/admin/testimonial-sections`)
- **Direct Edit URL**: `http://127.0.0.1:8000/admin/testimonial-sections/1/edit`
- **Database Schema (`testimonial_sections`)**:
  - `mini_title`: Section badge (e.g. "Our Clients")
  - `main_title`: Main heading (e.g. "Amazing Software Services")
  - `review_text`: Full quote testimonial review narrative
  - `author_name`: Client spokesperson name (e.g. "Alex Hales")
  - `author_role`: Client spokesperson title (e.g. "Managing Partner")
  - `author_image`: Client spokesperson portrait image upload
  - `is_active`: Section display toggle
- **Seeder (`TestimonialSectionSeeder`)**: Seeds/updates default record `id = 1` matching the frontend design.
- **Model (`App\Models\TestimonialSection`)**: URL accessors for `author_image_url` with smart `public_path()` fallback.

### 10. Section 8: Our Blog CRUD (`/admin/blog-sections`)
- **Direct Edit URL**: `http://127.0.0.1:8000/admin/blog-sections/1/edit`
- **Database Schema (`blog_sections`)**:
  - `mini_title`: Section badge (e.g. "Our Blog")
  - `main_title`: Main heading (e.g. "What's going on in the\nindustry?")
  - `overlay_text`: Hover button label inside the circular overlay (e.g. "View Full\nBlog")
  - `date_icon`: Custom date meta icon upload (default: `calendar_image.png`)
  - `category_icon`: Custom category meta icon upload (default: `file_image.png`)
  - `posts`: JSON repeater array of featured blog articles (`title`, `category`, `date`, `slug`, `excerpt`, `image`)
  - `is_active`: Section display toggle
- **Seeder (`BlogSectionSeeder`)**: Seeds/updates default record `id = 1` matching the frontend design with 3 featured industry articles.
- **Model (`App\Models\BlogSection`)**: URL accessors for `date_icon_url`, `category_icon_url`, and `resolved_cards` with full CMS image upload support and slug link routing.

### 11. Section 9: Client Reviews CRUD (`/admin/client-reviews-sections`)
- **Direct Edit URL**: `http://127.0.0.1:8000/admin/client-reviews-sections/1/edit`
- **Database Schema (`client_reviews_sections`)**:
  - `mini_title`: Section badge (e.g. "Client Testimonials")
  - `main_title`: Main heading (e.g. "Loved by your best customers")
  - `description`: Subtitle narrative text
  - `bg_image`: Background ambient texture upload (default: `white_bg.png`)
  - `reviews`: JSON repeater array of client testimonial cards (`service`, `name`, `role`, `rating`, `review`)
  - `is_active`: Section display toggle
- **Seeder (`ClientReviewsSectionSeeder`)**: Seeds/updates default record `id = 1` matching the frontend design with 8 verified client reviews.
- **Model (`App\Models\ClientReviewsSection`)**: URL accessors for `bg_image_url` and `resolved_reviews` with rating numbers and avatar initials fallback.

### 12. Section 10: Footer & Newsletter CRUD (`/admin/footer-sections`)
- **Direct Edit URL**: `http://127.0.0.1:8000/admin/footer-sections/1/edit`
- **Database Schema (`footer_sections`)**:
  - `newsletter_title`, `newsletter_subtitle`, `newsletter_button_text`, `newsletter_is_active`: Red banner newsletter subscription block
  - `logo`, `address`, `email`, `phone`: Agency brand identity and Dubai physical contact information
  - `facebook_url`, `instagram_url`, `youtube_url`, `linkedin_url`, `tiktok_url`: Social media channels
  - `col_2_title`, `col_2_links`: Smart Technology Solutions directory navigation links
  - `col_3_title`, `col_3_links`: Digital Growth & Marketing directory navigation links
  - `col_4_title`, `col_4_links`: Industry directory navigation links
  - `copyright_text`, `privacy_policy_url`, `terms_conditions_url`: Bottom bar legal copyright and policy URLs
  - `is_active`: Global footer display toggle
- **Seeder (`FooterSectionSeeder`)**: Seeds/updates default record `id = 1` matching the frontend design.
- **Model (`App\Models\FooterSection`)**: URL accessors for `logo_url`, `resolved_col_2_links`, `resolved_col_3_links`, `resolved_col_4_links` with smart fallback.

### 13. Zero-Hardcoding Frontend Live Parity (Port 8000)
- [`HomeController.php`](file:///c:/Users/Administrator/Desktop/coreunity/backend/app/Http/Controllers/HomeController.php): Queries `HeroSection`, `ServicesSection`, `CoreStrengthsSection`, `OurWorkSection`, `OurClientsSection`, `TeamSection`, `TestimonialSection`, `BlogSection`, `ClientReviewsSection`, and `FooterSection` from MySQL `coreunity` and passes all 10 section records to `home.blade.php`.
- [`home.blade.php`](file:///c:/Users/Administrator/Desktop/coreunity/backend/resources/views/home.blade.php) & [`partials/footer.blade.php`](file:///c:/Users/Administrator/Desktop/coreunity/backend/resources/views/partials/footer.blade.php):
  - **Section 1 (Hero)**: Live headline `{!! $hero?->title !!}`, subtitle, description, CTA button text & icon, globe, global presence loop, logo ticker loop.
  - **Section 2 (Services Highlights)**: Live pill badge `{{ $servicesSection?->mini_title }}`, headline, Card 1 icon & copy, Card 2 highlight & links loop, Card 3 icon & copy.
  - **Section 3 (Core Strengths)**: Live pill badge `{{ $coreStrengths?->mini_title }}`, headline `{{ $coreStrengths?->main_title }}`, points `$p1` to `$p6` dynamic loop, 6 collage images, and active toggle condition.
  - **Section 4 (Our Work)**: Live pill badge `{{ $ourWork?->mini_title }}`, headline `{{ $ourWork?->main_title }}`, categories `$workCategories` loop, Card 1 & Card 2 titles, stat numbers, descriptions, CTA buttons, mockup images, background textures, and active toggle condition.
  - **Section 5 (Our Clients)**: Live pill badge `{{ $ourClients?->mini_title }}`, headline `{!! nl2br(e($ourClients?->main_title)) !!}`, dynamic `$logosList` loop, background grid pattern, globe image, globe text, and active toggle condition.
  - **Section 6 (Passionate Team)**: Live pill badge `{{ $teamSection?->mini_title }}`, headline `{!! nl2br(e($teamSection?->main_title)) !!}`, dynamic `$teamMembers` loop (names, roles, portrait images), overlay badge logo, and active toggle condition.
  - **Section 7 (Testimonials)**: Live pill badge `{{ $testimonialSection?->mini_title }}`, headline `{!! nl2br(e($testimonialSection?->main_title)) !!}`, dynamic `{!! nl2br(e($testimonialSection?->review_text)) !!}`, client author name, role, portrait image, and active toggle condition.
  - **Section 8 (Our Blog)**: Live pill badge `{{ $blogSection?->mini_title }}`, headline `{!! nl2br(e($blogSection?->main_title)) !!}`, dynamic `$blogSection->resolved_cards` loop (article title, date with dynamic icon, category with dynamic icon, excerpt, destination link, cover image with dynamic upload support), circular hover button label, and active toggle condition.
  - **Section 9 (Client Reviews)**: Live pill badge `{{ $clientReviewsSection?->mini_title }}`, headline `{{ $clientReviewsSection?->main_title }}`, description `{{ $clientReviewsSection?->description }}`, dynamic background texture `{{ $clientReviewsSection?->bg_image_url }}`, infinite continuous marquee cards loop (`$clientReviewsSection->resolved_reviews`), dynamic service tags, star ratings, quotes, names, roles, and active toggle condition.
  - **Section 10 (Footer & Newsletter)**: Live newsletter bar headline `{{ $footer->newsletter_title }}`, subtitle `{{ $footer->newsletter_subtitle }}`, CTA button text `{{ $footer->newsletter_button_text }}`, dynamic logo `{{ $footer->logo_url }}`, Dubai address, phone, email, social links (Facebook, Instagram, YouTube, LinkedIn, TikTok), dynamic columns 2, 3, 4 links loops, copyright text, privacy and terms URLs.

---

## 🏛️ About Us Page Modular CMS Architecture (`/about`)

Following the exact modular sections paradigm established for the Home Page, the About Us page (`/about`) has been converted into a modular CMS architecture:

### 1. Navigation Flow (No Extra Sidebar Groups)
- **Flow**: `Pages Management > Pages > Edit About Us > About Page Sections Table`
- Clicking **"Manage Sections"** on the **About Us** page row directly opens `/admin/pages/2/edit` where the **About Page Sections** RelationManager table is displayed.
- The RelationManager displays each section's order, name, feature overview, active state, and a direct **"Edit Section"** action button.
- All section resources have `protected static bool $shouldRegisterNavigation = false;` to keep the left sidebar clean and focused.

### 2. Section 1: About Us Hero Section CRUD (`/admin/about-hero-sections`)
- **Direct Edit URL**: `http://127.0.0.1:8000/admin/about-hero-sections/1/edit`
- **Database Schema (`about_hero_sections`)**:
  - `mini_title`: Top badge title (Default: `'About Us'`)
  - `main_title`: Main section headline (Default: `"From Dubai's best minds to\na global powerhouse"`)
  - `is_active`: Section display toggle
- **Seeder (`AboutHeroSectionSeeder`)**: Seeds/updates default record `id = 1` in `coreunity` MySQL database.
- **Model (`App\Models\AboutHeroSection`)**: Model with boolean cast for `is_active`.
- **Frontend Integration (`about.blade.php`)**: Top hero section (`<main class="h-[600px] ...">`) dynamically renders `{!! nl2br(e($hero->main_title)) !!}` and `{{ $hero->mini_title }}` with active toggle condition.

### 3. Section 2: About Intro Section CRUD (`/admin/about-intro-sections`)
- **Direct Edit URL**: `http://127.0.0.1:8000/admin/about-intro-sections/1/edit`
- **Database Schema (`about_intro_sections`)**:
  - `title_prefix`: Headline prefix (Default: `'We are a'`)
  - `title_highlight`: Highlighted red text (Default: `'Creative Bold'`)
  - `title_suffix`: Headline suffix (Default: `'Digital Agency based In UAE'`)
  - `paragraph_1`: First narrative paragraph with rich formatting / HTML support
  - `paragraph_2`: Second narrative paragraph explaining global expansion and emerging tech
  - `main_image`: Team meeting photo upload (Default fallback: `image.png`)
  - `floating_bg_image`: Floating badge background texture upload (Default fallback: `Rectangle.png`)
  - `floating_logo`: Floating brand logo upload (Default fallback: `logo1.png`)
  - `is_active`: Section display toggle
- **Seeder (`AboutIntroSectionSeeder`)**: Seeds/updates default record `id = 1` in `coreunity` MySQL database.
- **Model (`App\Models\AboutIntroSection`)**: Includes `main_image_url`, `floating_bg_image_url`, and `floating_logo_url` URL accessors.
- **Frontend Integration (`about.blade.php`)**: Section 2 (`<section class="bg-white text-black ...">`) dynamically renders title parts, formatted paragraphs, meeting image, and floating logo overlay with active toggle condition.

### 4. Section 3: What Drives Us Forward CRUD (`/admin/about-values-sections`)
- **Direct Edit URL**: `http://127.0.0.1:8000/admin/about-values-sections/1/edit`
- **Database Schema (`about_values_sections`)**:
  - `headline`: Main section heading supporting linebreaks (Default: `"What Drives Us\nForward"`)
  - `bg_image`: Background pattern overlay file upload (Default: `bg_image.png`)
  - `arrow_icon`: Collapsible accordion chevron icon upload (Default: `arrow.png`)
  - `items`: JSON repeater for accordion entries (title, description), reorderable and expandable.
  - `is_active`: Section display toggle
- **Seeder (`AboutValuesSectionSeeder`)**: Seeds/updates default record `id = 1` with 3 core pillars (Our Mission, Our Vision, Our Values).
- **Model (`App\Models\AboutValuesSection`)**: Includes `bg_image_url`, `arrow_icon_url`, and `resolved_items` attribute accessors.
- **Frontend Integration (`about.blade.php`)**: Section 3 renders dynamic headline `{!! nl2br(e($values->headline)) !!}`, left background texture `bg_image.png`, bottom red radial glow, and interactive accordion items loop with butter-smooth expand/collapse animation.

### 5. Section 4: Industries We Serve CRUD (`/admin/about-industries-sections`)
- **Direct Edit URL**: `http://127.0.0.1:8000/admin/about-industries-sections/1/edit`
- **Database Schema (`about_industries_sections`)**:
  - `badge_text`: Section pill label (Default: `'Serving Diverse Sectors Across the UAE'`)
  - `main_title`: Main section heading (Default: `'Industries We Serve'`)
  - `bg_image`: Subtle background texture upload (Default: `white_bg.png`)
  - `items`: JSON repeater for 8 industry cards (title, description, icon filename/asset)
  - `is_active`: Section display toggle
- **Seeder (`AboutIndustriesSectionSeeder`)**: Seeds/updates default record `id = 1` with 8 industry cards: Real Estate, Retail & eCommerce, Healthcare & Wellness, Food & Beverage, Tech Startups, Education, Hospitality & Tourism, and Restaurant.
- **Model (`App\Models\AboutIndustriesSection`)**: Includes `bg_image_url` and `resolved_items` with smart asset URL resolution for icons.
- **Frontend Integration (`about.blade.php`)**: Section 4 renders dynamic badge label, main title, subtle background texture, and an 8-card responsive grid featuring 3D double-square badge icons (`redbg.png` + `blackbg.png`), industry titles, and descriptions.

---

## 🛠️ Services Page Modular CMS Architecture (`/services`)

Following the modular sections paradigm established for Home and About pages, the Services page (`/services`) has been fully converted into a dynamic CMS architecture:

### 1. Navigation Flow (No Extra Sidebar Groups)
- **Flow**: `Pages Management > Pages > Edit Services > Services Page Sections Table`
- In accordance with the **Automatic Audit & Auto-Exclusion Rule**, repeating sections (`Our Clients`, `Testimonials`, `Footer`) are strictly excluded from single-page section tables and dynamically linked to `Global / Reusable Sections`.
- Only page-unique sections reside in `ServicesPageSection` (managed via `ServicesPageSectionsRelationManager`).
- Clicking **"Edit Section"** on any row directly navigates to that section's dedicated Filament edit form.
- All section resources have `protected static bool $shouldRegisterNavigation = false;` to keep the sidebar uncluttered.

### 2. Section 1: Services Hero Section CRUD (`/admin/services-hero-sections`)
- **Direct Edit URL**: `http://127.0.0.1:8000/admin/services-hero-sections/1/edit`
- **Database Schema (`services_hero_sections`)**:
  - `mini_title`: Top badge title (Default: `'Services We Offer'`)
  - `main_title`: Main section headline (Default: `"From Dubai's best minds to\na global powerhouse"`)
  - `is_active`: Section display toggle
- **Model**: `App\Models\ServicesHeroSection`
- **Seeder**: `ServicesHeroSectionSeeder`

### 3. Section 2: What We Offer (Services List) CRUD (`/admin/services-list-sections`)
- **Direct Edit URL**: `http://127.0.0.1:8000/admin/services-list-sections/1/edit`
- **Database Schema (`services_list_sections`)**:
  - `mini_title`: Pill badge label (Default: `'What We Offer'`)
  - `main_title`: Section headline (Default: `"Save time and grow your business\nwith our expert solutions"`)
  - `services`: JSON repeater for service cards (`num`, `title`, `desc`, `href`)
  - `button_text`: Bottom button label (Default: `'View all services'`)
  - `button_url`: Target URL (Default: `'/services/all'`)
  - `is_active`: Section display toggle
- **Model**: `App\Models\ServicesListSection` (with `getResolvedServicesAttribute()`)
- **Seeder**: `ServicesListSectionSeeder`

### 4. Section 3: Industries We Serve & CTA Banner CRUD (`/admin/services-industries-sections`)
- **Direct Edit URL**: `http://127.0.0.1:8000/admin/services-industries-sections/1/edit`
- **Database Schema (`services_industries_sections`)**:
  - `mini_title`: Pill badge label (Default: `'Serving Diverse Sectors Across the UAE'`)
  - `main_title`: Section headline (Default: `'Industries We Serve'`)
  - `industries`: JSON repeater for 8 industry cards (`title`, `desc`, `icon`, `link`)
  - `cta_title`: Red banner headline (Default: `'Ready to grow your brand?'`)
  - `cta_subtitle`: Red banner subtitle (Default: `"Let's build a strategy that delivers real results."`)
  - `cta_button_text`: Red banner button text (Default: `'Connect with us'`)
  - `cta_button_url`: Red banner button URL (Default: `'/contact'`)
  - `is_active`: Section display toggle
- **Model**: `App\Models\ServicesIndustriesSection` (with `getResolvedIndustriesAttribute()` & smart asset path resolver)
- **Seeder**: `ServicesIndustriesSectionSeeder`

### 5. Section 4: Experience Growth with Leading SMM (Stats) CRUD (`/admin/services-smm-sections`)
- **Direct Edit URL**: `http://127.0.0.1:8000/admin/services-smm-sections/1/edit`
- **Database Schema (`services_smm_sections`)**:
  - `main_title`: Section headline (Default: `"Experience Growth\nwith Leading SMM"`)
  - `description`: Narrative copy
  - `stats`: JSON repeater for 4 performance metrics (`stat_number`, `stat_label`, `is_highlighted`)
  - `is_active`: Section display toggle
- **Model**: `App\Models\ServicesSmmSection` (with `getResolvedStatsAttribute()`)
- **Seeder**: `ServicesSmmSectionSeeder`

### 6. Zero Hardcoding Dynamic Blade Integration
- [`pages/services.blade.php`](file:///c:/Users/Administrator/Desktop/coreunity/backend/resources/views/pages/services.blade.php) renders 100% dynamically from database models passed by `PageController`:
  - Hero badge and heading from `$servicesHero`
  - Services list cards, interactive hover transitions, and catalog button from `$servicesList`
  - Client logos from global partial `@include('partials.our_clients')`
  - Industries cards and CTA banner from `$servicesIndustries`
  - SMM heading, narrative copy, and 4 metric cards from `$servicesSmm`
  - Testimonial from global partial `@include('partials.testimonial_light')`

---

## 💼 Case Study Page Modular CMS Architecture (`/case-study` & `/portfolio`)

Following the modular sections paradigm and the **Multiple/Repeating Section Auto-Exclusion Rule**:

### 1. Navigation Flow & Single Source of Truth
- **Flow**: `Pages Management > Pages > Edit Case Study > Case Study Page Sections Table`
- URL: `http://127.0.0.1:8000/admin/pages/4/edit`
- **Multiple Section Exclusion Rule**:
  - `Our Work Showcase` (`OurWorkSection`) is a multi-page repeating component (shared across Home, Portfolio, and Services).
  - As instructed, it is strictly excluded from the single-page sections table and remains centrally managed under `Global / Reusable Sections > Our Work Showcase`.
  - Only the page-unique section (`Case Studies Hero Section`) resides in `CaseStudyPageSection`.
- Clicking **"Edit Section"** directly opens `/admin/case-study-hero-sections/1/edit`.
- Section resource has `protected static bool $shouldRegisterNavigation = false;` to maintain a clean left sidebar.

### 2. Section 1: Case Studies Hero Section CRUD (`/admin/case-study-hero-sections`)
- **Direct Edit URL**: `http://127.0.0.1:8000/admin/case-study-hero-sections/1/edit`
- **Database Schema (`case_study_hero_sections`)**:
  - `mini_title`: Top badge title (Default: `'Case Studies'`)
  - `main_title`: Main section headline (Default: `"Stories of strategy,\ncreativity, and measurable impact."`)
  - `description`: Sub-description / intro paragraph (Default: `"Real brands, real challenges, real transformations. Explore how we help teams grow with design, data, and intelligent marketing."`)
  - `is_active`: Section display toggle
- **Model**: `App\Models\CaseStudyHeroSection`
- **Seeder**: `CaseStudyHeroSectionSeeder`

### 3. Zero-Hardcoding Frontend Integration
- **Blade Views**: [`pages/portfolio.blade.php`](file:///c:/Users/Administrator/Desktop/coreunity/backend/resources/views/pages/portfolio.blade.php) and [`pages/case-study.blade.php`](file:///c:/Users/Administrator/Desktop/coreunity/backend/resources/views/pages/case-study.blade.php):
  - Section 1 (Hero): Dynamically renders `{!! nl2br(e($caseStudyHero->main_title)) !!}`, badge `{{ $caseStudyHero->mini_title }}`, and description `{!! nl2br(e($caseStudyHero->description)) !!}` with active condition toggle.
  - Section 2 (Our Work Showcase): Dynamically renders via global reusable partial `@include('partials.our_work', ['maxRows' => 4])`.
- **Controller**: `PageController.php` provides automatic data binding for both `/case-study` and `/portfolio` slugs.

---

## 📰 Blog Page Modular CMS Architecture (`/blog`)

Following the modular sections paradigm and the **Multiple/Repeating Section Auto-Exclusion Rule**:

### 1. Navigation Flow & Single Source of Truth
- **Flow**: `Pages Management > Pages > Edit Blog > Blog Page Sections Table`
- URL: `http://127.0.0.1:8000/admin/pages/5/edit`
- **Multiple Section Exclusion Rule**:
  - `Blog Showcase Section` (`BlogSection`) is a multi-page repeating component (shared across Home and Blog pages).
  - As instructed, it is strictly excluded from the single-page sections table and remains centrally managed under `Global / Reusable Sections > Blog Showcase Section`.
  - Individual blog articles are managed under `Content & Portfolio > Blog Posts`.
  - Only the page-unique section (`Blog Hero Section`) resides in `BlogPageSection`.
- Clicking **"Edit Section"** directly opens `/admin/blog-hero-sections/1/edit`.
- Section resource has `protected static bool $shouldRegisterNavigation = false;` to maintain a clean left sidebar.

### 2. Section 1: Blog Hero Section CRUD (`/admin/blog-hero-sections`)
- **Direct Edit URL**: `http://127.0.0.1:8000/admin/blog-hero-sections/1/edit`
- **Database Schema (`blog_hero_sections`)**:
  - `mini_title`: Top badge title (Default: `'Our Blogs'`)
  - `main_title`: Main section headline (Default: `"Stories of strategy,\ncreativity, and measurable impact."`)
  - `description`: Sub-description / intro paragraph (Default: `"Real brands, real challenges, real transformations. Explore how we help teams grow with design, data, and intelligent marketing."`)
  - `is_active`: Section display toggle
- **Model**: `App\Models\BlogHeroSection`
- **Seeder**: `BlogHeroSectionSeeder`

### 3. Zero-Hardcoding Frontend Integration & Real-Time Global Sync
- **Shared Partial Component** ([`partials/blog_section.blade.php`](file:///c:/Users/Administrator/Desktop/coreunity/backend/resources/views/partials/blog_section.blade.php)):
  - Centralized single source of truth for the Blog Showcase Section across the entire application.
  - Dynamically renders `$blogSection->mini_title`, `$blogSection->main_title`, hover overlay button label, custom calendar/file icons, and the full `$blogSection->resolved_cards` repeater.
- **Blade Views Integration**:
  - Home Page ([`home.blade.php`](file:///c:/Users/Administrator/Desktop/coreunity/backend/resources/views/home.blade.php)): Replaced duplicate inlined markup with `@include('partials.blog_section', ['blogSection' => $blogSection])`.
  - Blog Page ([`pages/blog.blade.php`](file:///c:/Users/Administrator/Desktop/coreunity/backend/resources/views/pages/blog.blade.php)): Renders Section 1 Hero followed by `@include('partials.blog_section', ['blogSection' => $blogSection])`.
- **Controllers Alignment**:
  - `HomeController.php`: Queries `$blogSection = BlogSection::where('is_active', true)->latest('updated_at')->first() ...` and passes it to `home.blade.php`.
  - `PageController.php`: Queries `$blogSection` and passes it to `pages.blog.blade.php`.
- **Synchronized Parity**:
  - Both Home (`/`) and Blog (`/blog`) render the exact same cards without discrepancy.
  - Updating `Global / Reusable Sections > Blog Showcase Section` in the Filament sidebar (`/admin/blog-sections/1/edit`) updates both pages simultaneously.

---

## 📞 Contact Page Modular CMS Architecture (`/contact`)

Following the modular sections paradigm and the **Multiple/Repeating Section Auto-Exclusion Rule**:

### 1. Navigation Flow & Single Source of Truth
- **Flow**: `Pages Management > Pages > Edit Contact > Contact Page Sections Table`
- URL: `http://127.0.0.1:8000/admin/pages/6/edit`
- **Multiple Section Exclusion Rule**:
  - Multi-page repeating elements (Navbar, Footer, consultation modals) are excluded from the single-page sections table.
  - As instructed, only sections unique to the Contact page are managed here.
- Clicking **"Edit Section"** directly opens the corresponding section's edit form.
- Section resources have `protected static bool $shouldRegisterNavigation = false;` to maintain a clean left sidebar without redundant entries.

### 2. Section 1: Contact Hero Section CRUD (`/admin/contact-hero-sections`)
- **Direct Edit URL**: `http://127.0.0.1:8000/admin/contact-hero-sections/1/edit`
- **Database Schema (`contact_hero_sections`)**:
  - `mini_title`: Top badge title (Default: `'Contact Us'`)
  - `main_title`: Main section headline (Default: `"Lets get in touch and build something great together"`)
  - `is_active`: Section display toggle
- **Model**: `App\Models\ContactHeroSection`
- **Seeder**: `ContactHeroSectionSeeder`

### 3. Section 2: Contact Details & Form Section CRUD (`/admin/contact-details-sections`)
- **Direct Edit URL**: `http://127.0.0.1:8000/admin/contact-details-sections/1/edit`
- **Database Schema (`contact_details_sections`)**:
  - `title`: Section headline (Default: `'Get with us'`)
  - `description`: Narrative copy / intro text
  - `phone`: Customer contact phone (Default: `'+971 50 555 9646'`)
  - `email`: Customer support email (Default: `'contact@coreunitysolutions.com'`)
  - `address`: Physical office location (Default: `'Churchill Tower, Business Bay, Dubai, UAE'`)
  - `form_button_text`: Submit button label (Default: `'Submit Message'`)
  - `is_active`: Section display toggle
- **Model**: `App\Models\ContactDetailsSection`
- **Seeder**: `ContactDetailsSectionSeeder`

### 4. Zero-Hardcoding Frontend Integration
- **Blade View**: [`pages/contact.blade.php`](file:///c:/Users/Administrator/Desktop/coreunity/backend/resources/views/pages/contact.blade.php):
  - Section 1 (Hero): Dynamically renders `{!! nl2br(e($contactHero->main_title)) !!}` and badge `{{ $contactHero->mini_title }}` with active condition toggle.
  - Section 2 (Details & Form): Dynamically renders headline, narrative description, interactive phone/email cards, office address, and submit button label from `$contactDetails`.
  - AJAX Lead Submission: Directly submits inquiries to `lead.submit` with immediate feedback and spinner state.
- **Controller**: `PageController.php` provides automatic data binding for `$contactHero` and `$contactDetails` when routing `/contact`.

---

## 🚀 100% Dynamic Detail Pages Architecture (Portfolio & Dynamic Content)

A completely unified, dynamic architecture has been implemented for all detail pages across the website (Services, Case Studies, and Blogs) with zero hardcoding.

### 1. 📂 Filament Admin Sidebar (`Portfolio & Dynamic Content`)
Located right beneath `Pages Management`, this navigation group provides central control over all individual dynamic items:
- **Services** (`/admin/services`): Full CRUD for all 16 digital services with dynamic hero, highlights, stats, FAQs, and media galleries.
- **Case Studies** (`/admin/case-studies`): Full CRUD for client case studies with project challenge, solution, quantifiable results, highlights, and gallery mockups.
- **Blogs** (`/admin/posts`): Full CRUD for in-depth articles, tutorials, and insights with author, category, key takeaways, stats, and FAQs.

### 2. 🗄️ Database Tables & Schema

#### A. Services Table (`services`)
- `title`: Service title (e.g. `Web Development & Engineering`)
- `slug`: Unique endpoint slug (e.g. `web-development`)
- `badge`: Pill badge (Default: `Your Digital Partner`)
- `category`: Service domain (e.g. `Engineering`, `Marketing`, `Design`)
- `client_info`: Target audience / client profile
- `excerpt`: Hero subheading / brief summary
- `featured_image` & `hero_banner`: Featured visual assets
- `content`: Full rich text body editor
- `highlights`: JSON repeater (`icon`, `title`, `description`)
- `stats`: JSON repeater (`number`, `label`)
- `faqs`: JSON repeater (`question`, `answer`)
- `gallery`: JSON array of media attachments
- `meta_title`, `meta_description`, `og_image`: Full SEO metadata suite
- `is_published`: Visibility toggle
- `sort_order`: Ordering integer

#### B. Case Studies Table (`case_studies`)
- Enhanced with complete dynamic attributes: `title`, `project_title`, `slug`, `badge`, `category`, `client_name`, `excerpt`, `featured_image`, `hero_image`, `challenge_text`, `solution_text`, `content`, `metrics`, `highlights`, `stats`, `faqs`, `gallery`, `meta_title`, `meta_description`, `og_image`, `is_published`, `sort_order`.

#### C. Blog Posts Table (`posts`)
- Enhanced with complete dynamic attributes: `user_id`, `title`, `slug`, `badge`, `category`, `author_name`, `excerpt`, `featured_image`, `hero_banner`, `content`, `status`, `highlights`, `stats`, `faqs`, `gallery`, `meta_title`, `meta_description`, `og_image`, `is_published`, `sort_order`, `published_at`.

### 3. 🌐 Dynamic Routes & Zero-Hardcoded Blade Templates

| Page Type | Dynamic Route | Legacy Route Fallback | Dynamic Blade View |
| :--- | :--- | :--- | :--- |
| **Services Detail** | `/services/{slug}` | `/services/{subservice}` | [`pages/service-detail.blade.php`](file:///c:/Users/Administrator/Desktop/coreunity/backend/resources/views/pages/service-detail.blade.php) |
| **Case Studies Detail** | `/case-studies/{slug}` | `/case-study/{slug}` & `/{slug}` | [`pages/case-study-detail.blade.php`](file:///c:/Users/Administrator/Desktop/coreunity/backend/resources/views/pages/case-study-detail.blade.php) |
| **Blog Articles Detail** | `/blogs/{slug}` | `/blog/{slug}` | [`pages/blog-detail.blade.php`](file:///c:/Users/Administrator/Desktop/coreunity/backend/resources/views/pages/blog-detail.blade.php) |

### 4. 🛡️ Graceful UI Conditionals
- Every block (Highlights, Stats, FAQs/Accordions, Gallery, Rich Content) is protected with `@if(!empty(...))` conditionals. If an item does not have FAQs or Gallery images attached, no empty white spaces, broken tags, or empty containers are rendered.

---

## 🛠️ Key Changes & Implementation Summary

### 1. Database & Migrations
- Added migration `add_cms_fields_to_pages_table`:
  - `title`: Page title
  - `slug`: Unique URL slug (e.g. `about`, `careers`, `our-approach`)
  - `hero_badge`: Top pill badge (e.g. "DIGITAL AGENCY", "GLOBAL EXPANSION")
  - `hero_headline`: Main banner heading
  - `hero_subheadline`: Sub-headline or introductory summary
  - `hero_cta_text` & `hero_cta_url`: Action button configuration
  - `hero_image`: Custom uploaded hero banner image
  - `content`: Full rich text / HTML content
  - `sections`: Flexible repeater JSON schema for adding feature blocks (badge, title, description, image, button text & URL)
  - `global_presence`: Array of global office locations
  - `meta_title` & `meta_description`: SEO metadata tags
  - `show_in_navbar`: Boolean flag to automatically display page in header navigation
  - `navbar_order`: Sorting integer for header navigation
  - `is_published`: Publishing toggle

### 2. Filament CMS Page Builder (`PageForm` & `PagesTable`)
- **PageForm**:
  - **General Information**: Title, Slug, Show in Navbar toggle, Navbar Order, Published toggle.
  - **Hero Banner**: Badge, Headline, Subheadline, CTA Button Text, CTA Button URL, Hero Image file upload.
  - **Page Content**: Rich text editor for body content + Dynamic Sections Repeater (blocks with headings, body copy, images, and links).
  - **SEO & Meta Information**: Meta Title and Description.
- **PagesTable**:
  - Displays Title, URL Slug badge, Headline preview, "In Navbar" boolean status, Navbar Order, Published status, and Updated timestamp.

### 3. Frontend Blade Architecture
- **`resources/views/layouts/app.blade.php`**: Master layout with SEO tags, Tailwind CSS styling, Google fonts, Flash alerts, and "Speak to an Expert" consultation modal.
- **`resources/views/partials/navbar.blade.php`**: Header navigation matching Core Unity brand style, with active route highlighting, mobile drawer, and dynamic menu items queried from published CMS pages where `show_in_navbar = true`.
- **`resources/views/partials/footer.blade.php`**: Newsletter subscription bar, Core Unity branding, quick links, services directory, and contact details.
- **`resources/views/pages/dynamic.blade.php`**: Universal dynamic page renderer displaying the CMS hero banner, rich text, alternating dynamic feature blocks, global presence bar, and bottom consultation CTA banner.
- **`resources/views/pages/about.blade.php`**: Converted high-fidelity About Us page from Next.js into Blade, featuring the Dubai agency story, interactive accordion (Mission, Vision, Values), UAE industries grid, and leadership team.
- **`resources/views/home.blade.php`**: Updated with dynamic navbar and expert modal integration.

### 4. Routing & Controllers
- **`PageController.php`**:
  - `show($slug)`: Dispatches dynamic pages. If a dedicated blade view exists (e.g. `pages.about`), it renders it with `$page`; otherwise renders `pages.dynamic`.
  - `submitLead(Request $request)`: Validates and processes consultation requests.
  - `subscribeNewsletter(Request $request)`: Validates newsletter subscriptions.
- **`routes/web.php`**:
  - `/` -> `HomeController@index`
  - `/lead` -> `PageController@submitLead`
  - `/newsletter` -> `PageController@subscribeNewsletter`
  - `/{slug}` -> `PageController@show`

### 5. Static Assets
- Synchronized all 112 visual assets, logos, and illustrations from frontend into `backend/public/`.
- Created storage symlink via `php artisan storage:link`.

---

## 💻 How to Run

### Option 1: 1-Click Batch Runner (Easiest)
Simply double click or run:
```bash
run_server.bat
```
or from the root folder:
```bash
..\run_backend.bat
```

### Option 2: Terminal Command
```bash
cd backend
php artisan serve
```

> [!TIP]
> **Agar terminal me `php` recognize na ho:**
> `C:\xampp\php` ko permanent Windows Environment PATH me register kar diya gaya hai aur Composer ke files bhi wahan sync kar diye gaye hain.
> Jo terminal pehle se khula tha usme purana PATH cache hota hai. Sirf **New Terminal** open karein (Ctrl + Shift + \`), aur `php -v` & `composer --version` smoothly kaam karenge!

### Step 2: Open in Browser
- **Frontend Website**: `http://127.0.0.1:8000`
- **About Page**: `http://127.0.0.1:8000/about`
- **Services Catalog**: `http://127.0.0.1:8000/services`
- **All 16 Service Detail Pages**:
  - `http://127.0.0.1:8000/services/web-development`
  - `http://127.0.0.1:8000/services/ui-ux-design`
  - `http://127.0.0.1:8000/services/ecommerce-web-development`
  - `http://127.0.0.1:8000/services/mobile-app-development`
  - `http://127.0.0.1:8000/services/artificial-intelligence`
  - `http://127.0.0.1:8000/services/chatbot-development`
  - `http://127.0.0.1:8000/services/virtual-reality-development`
  - `http://127.0.0.1:8000/services/augmented-reality-development`
  - `http://127.0.0.1:8000/services/digital-marketing`
  - `http://127.0.0.1:8000/services/search-engine-optimization`
  - `http://127.0.0.1:8000/services/generative-engine-optimization`
  - `http://127.0.0.1:8000/services/pay-per-click-advertising`
  - `http://127.0.0.1:8000/services/social-media-marketing`
  - `http://127.0.0.1:8000/services/influencer-marketing`
  - `http://127.0.0.1:8000/services/branding-and-creative-design`
  - `http://127.0.0.1:8000/services/ai-development-company`
- **All 7 Industry Pages**:
  - `http://127.0.0.1:8000/industries/real-estate`
  - `http://127.0.0.1:8000/industries/government`
  - `http://127.0.0.1:8000/industries/healthcare`
  - `http://127.0.0.1:8000/industries/education`
  - `http://127.0.0.1:8000/industries/hospitality`
  - `http://127.0.0.1:8000/industries/legal-and-law`
  - `http://127.0.0.1:8000/industries/fintech`
- **Case Studies (Portfolio)**: `http://127.0.0.1:8000/portfolio`
- **Case Studies Individual**:
  - Website: `http://127.0.0.1:8000/case-study/website`
  - Mobile App: `http://127.0.0.1:8000/mobile-app`
  - SMM: `http://127.0.0.1:8000/smm`
  - PPC: `http://127.0.0.1:8000/ppc`
  - PRINT: `http://127.0.0.1:8000/print`
  - SEO: `http://127.0.0.1:8000/seo`
  - BRANDING: `http://127.0.0.1:8000/branding`
- **Blog Page**: `http://127.0.0.1:8000/blog`
- **Contact Us Page**: `http://127.0.0.1:8000/contact`
- **Privacy Policy**: `http://127.0.0.1:8000/privacy-policy`
- **Terms & Conditions**: `http://127.0.0.1:8000/terms-and-conditions`
- **Dynamic Careers Page**: `http://127.0.0.1:8000/careers`
- **CMS Admin Panel**: `http://127.0.0.1:8000/admin`

---

## 📱 Mobile Responsiveness & Parity
- **Zero Horizontal Overflow**: Constrained all glows and background radial elements (`w-full max-w-[800px]`, `w-full max-w-5xl`), ensuring perfect rendering on 360px - 400px mobile viewports.
- **Fixed Navbar**: Pinned logo and action icons (`WhatsApp` + `Mobile Menu Toggle`) within viewport with `shrink-0` and `left-0 right-0`.
- **Form & Content Fluidity**: Responsive inputs, UAE selector dropdown, and adaptive card padding across all service Blade views.
- **Mobile Modal Responsiveness**:
  - `speak_expert_modal.blade.php` and `scheduleCallModal` updated with `overflow-y-auto overscroll-contain` on root containers.
  - Replaced rigid centering with a non-clipping flex layout (`min-h-full flex justify-center items-center py-6 sm:py-10` with `my-auto` on the dialog card), ensuring that on viewports with short heights (e.g. 400x642), the header, badge, and close button are 100% visible and the submit button is fully reachable via scrolling.
- **Mobile Navbar Parity**:
  - Logo on mobile updated to `h-10` (40px) exactly matching Port 3000 Next.js `Image`.
  - Action buttons wrapper set to `gap-3` (12px).
  - WhatsApp and Hamburger buttons sized to `w-10 h-10` (40px) circle buttons with `border border-gray-700`.
  - Hamburger icon synchronized to exact Lucide Menu path geometry (`M4 5h16`, `M4 12h16`, `M4 19h16`) with `w-5 h-5` stroke icon.
  - Active navigation highlights on desktop and mobile matching Next.js.
- **AJAX Leads**: Contact page form, Service Inquiry form, and Expert modal with asynchronous submissions, validation, and instantaneous success feedback.
- **Mobile Navbar Color Harmonization & Smooth Unfold Animation**:
  - **Unified `<header id="mainNav">` Architecture**: Both the top navbar bar (logo and action buttons) and the mobile dropdown are wrapped inside the same fixed parent header. This completely eliminates any color seam or hero background glow discrepancy (`rgba(160, 20, 25, 0.35)`), guaranteeing that the top bar and dropdown menu share the exact same `bg-black` background when open.
  - **CSS `grid-template-rows` Butter-Smooth Unfold**: Built using CSS `grid-template-rows: 0fr` to `1fr` transition combined with `opacity` and subtle `translate-y` easing. This provides fluid, hardware-accelerated 60fps expansion and collapse with zero pixel jumps.
  - **Rotating Icon Crossfade**: The mobile menu button smoothly rotates and crossfades between the Lucide Menu (3 bars) and the Close (`X`) icon (`opacity-0 -rotate-90 scale-75` to `opacity-100 rotate-0 scale-100`).
  - **Backdrop & Outside Dismiss**: Includes a smooth dark blur backdrop (`bg-black/75 backdrop-blur-sm`), dismissing gracefully on backdrop click or `Escape` key press.
- **Blog Detail Pages 100% Dicto Match Parity (`pages/blog/`)**:
  - **All 4 Dedicated Blog Detail Views Created**:
    - `local-business-on-google-maps.blade.php`: Full 10-step guide, summary table, FAQ list, and banner image (`blog1_img_584x348.png`).
    - `google-ads-vs-meta-ads.blade.php`: In-depth comparison, 4 responsive comparison tables (Core differences, Cost, Small business, Ecommerce), FAQ list, and banner (`blog2_resized_584x348.png`).
    - `daily-manual-tasks.blade.php`: Automation breakdown for invoicing, scheduling, and lead follow-up, tool recommendations, FAQ list, and banner (`blog3_resized_584x348.png`).
    - `business-website-features.blade.php`: 5 must-have website features checklist, detailed subsections, FAQ list, and banner (`blog4.png`).
    - `detail.blade.php`: Alias forwarder to `local-business-on-google-maps.blade.php` to prevent broken links from legacy references.
  - **Shared Reusable Partials**:
    - `partials/blog_sidebar.blade.php`: "Contact With Us Now !" card (CoreUnity logo, Customer Support phone, Call & WhatsApp buttons) and Airtel Case Study card (airtel logo, app store buttons, 3D phone frame mockup, 4 floating team avatars).
    - `partials/blog_related.blade.php`: 3-post card grid with circular hover overlay "View Full Blog" (`bg-[#8c1c24]/90`).
  - **Routing & Controller**:
- **Case Study (Portfolio) Mobile Card Parity & Lucide Menu Lines**:
  - **Card Padding Synchronized**: Updated card padding in `partials/our_work.blade.php` from `p-6 sm:p-8 lg:p-10` to exact `p-8 lg:p-10`, identical to Port 3000 Next.js `OurWorkSection.tsx`. This eliminates the tighter spacing on mobile viewports and ensures consistent breathing room around "WEBSITE DEVELOPMENT" and statistics.
  - **Image Alignment Matching**: Changed the image container on mobile from `justify-center sm:justify-end` to `justify-end z-10`, positioning Burj Khalifa (`dpworld_image.png`) on the right side of the card rather than centered, matching Port 3000 pixel-for-pixel.
  - **Exact Lucide React Menu Coordinates**: Updated hamburger icon in `partials/navbar.blade.php` to exact Lucide line coordinates (`<line x1="4" x2="20" y1="6" y2="6"></line>`, `y1="12"`, `y1="18"`) for identical line thickness and 6px equidistant spacing.
- **Navbar Scroll White Line Removal (`partials/navbar.blade.php`)**:
  - **Identified Cause**: The navbar dynamically injected `border-b border-white/5` classes upon scrolling (`scrollY > 20`), which rendered a noticeable 1px light horizontal line across the screen beneath the navbar, disrupting the dark aesthetic.
  - **Resolution**: Completely removed all `border-b` and `border-white/5` classes from both initial Blade rendering and JavaScript scroll / mobile menu toggle handlers.
  - **Added `border-none`**: Applied explicit `border-none` on `<nav id="mainNav">` to ensure a seamless, clean black background with smooth `shadow-lg` elevation during scroll and zero bottom borders.
- **Sidebar Customer Support Logo Size Parity (`partials/blog_sidebar.blade.php`, `partials/case_study_sidebar.blade.php`)**:
  - **Identified Discrepancy**: The circular emblem container had nested `p-1` padding on both wrapper and `<img>`, causing the CoreUnity logo to appear significantly smaller with excessive white margins (Image 1).
  - **Resolution**: Refined the container padding to `p-0.5` and removed `p-1` from the `<img>` tag (`w-full h-full object-contain`), allowing the red & black logo to expand and fill the circular badge with a clean 2px boundary margin, achieving 100% dicto parity with Image 2.

---

## 🔄 Real-Time UI Sync & Caching Fix (`Port 8000`)

### 1. Root Causes Diagnosed
- **Stale Record Selection via Default `latest()`**:
  - `HeroSection` table had two records (ID 1 and ID 2).
  - The Filament CMS relation manager specifically routed edits to ID 1 (`/admin/hero-sections/1/edit`), updating ID 1's `updated_at` timestamp.
  - However, `HomeController.php` was querying `$hero = HeroSection::latest()->first()`. In Laravel Eloquent, `latest()` without parameters defaults to `orderBy('created_at', 'desc')`. Because ID 2 had a newer `created_at` timestamp, `HeroSection::latest()->first()` perpetually loaded the unedited ID 2, causing the frontend UI to display stale data despite database saves succeeding.
- **Port 8000 Socket Collision**:
  - Two parallel `php artisan serve` instances (PID 17976/28300 and PID 20096/23728) were simultaneously listening on port 8000, causing socket deadlocks and intermittent request hangs.

### 2. Solutions Implemented
1. **Query Update to `latest('updated_at')`**:
   - Updated `HomeController.php` across all sections (`Hero`, `Services`, `CoreStrengths`, `OurWork`, `OurClients`, `Team`, `Testimonials`, `Blog`, `ClientReviews`, `Footer`) to explicitly order by `latest('updated_at')->first()`.
   - Updated `PageController.php` and `pages/about.blade.php` to query `AboutHeroSection` and `AboutIntroSection` using `latest('updated_at')->first()`.
2. **Database Record De-duplication**:
   - Removed orphaned ID 2 record from `hero_sections`, leaving the active, edited ID 1 record as the single source of truth.
3. **Cache Invalidation**:
   - Cleared all application caches: `php artisan cache:clear`, `php artisan view:clear`, `php artisan route:clear`, and `php artisan config:clear`.
4. **Process Cleanup**:
   - Terminated colliding background PHP server processes and launched a single, healthy `php artisan serve --port=8000` process.
5. **Zero Hardcoding Enforcement in `partials/our_work.blade.php`**:
   - Connected `partials/our_work.blade.php` directly to the `OurWorkSection` model so that badge, main headline, and categories update dynamically.

---

## 🛠️ Performance & 60s Execution Timeout Resolution (`/admin/blog-sections/1/edit`)

### 1. Root Cause Identified
- **PHP Built-in Server Worker Collision & Stale View Cache**:
  - The built-in PHP development server (`php artisan serve`) on Windows is single-threaded.
  - When background connections or multiple simultaneous browser tabs (Livewire polling, assets, multiple open admin tabs) hold sockets, requests to heavy Filament forms (e.g. `BlogSectionForm` with repeaters and file upload previews) were queued behind unreleased sockets.
  - After accumulating high CPU cycles on long-running worker processes, web requests exceeded the 60-second execution/input limit (`Symfony\Component\ErrorHandler\Error\FatalError: Maximum execution time of 60 seconds exceeded in base.blade.php:1`).
  - Stale compiled Blade views in `storage/framework/views` further compounded hydration overhead.

### 2. Solutions Implemented
1. **Cache Purge & View Recompilation**:
   - Executed full application cache flush via `php artisan optimize:clear` (clearing config, route, view, blade-icons, and filament caches).
2. **Zombie Process Termination & Clean Server Daemon**:
   - Terminated orphan background PHP processes holding socket locks on port 8000.
   - Initialized a clean, dedicated dev server instance on `http://127.0.0.1:8000`.
3. **Sidebar Navigation Harmonization**:
   - Synchronized `AdminPanelProvider.php` navigation groups order (`Pages Management` -> `Portfolio & Dynamic Content` -> `Global / Reusable Sections`) to guarantee fast, clean sidebar tree hydration without orphaned groups.
4. **Verified Performance**:
   - Livewire edit component (`EditBlogSection`) rendering verified in under **1.5 seconds**, and HTTP status returns clean **200 OK**.

---

## 🛠️ Filament Schema Utilities TypeError Resolution (`Get` & `Set`)

### 1. Root Cause Diagnosed
- **Namespace Mismatch between Forms & Schemas Utilities**:
  - In Filament's unified schema architecture, form field closures (`afterStateUpdated`, `live(onBlur: true)`) inject schema utility instances:
    `Filament\Schemas\Components\Utilities\Get` and `Filament\Schemas\Components\Utilities\Set`.
  - When typing closures with legacy `Filament\Forms\Get` and `Filament\Forms\Set` in:
    - `CaseStudyForm.php`
    - `ServiceForm.php`
    - `PostForm.php`
  - Any Livewire field update request (`POST /livewire-dfc0b9fc/update`) triggered a fatal PHP `TypeError`:
    `App\Filament\Resources\CaseStudies\Schemas\CaseStudyForm::{closure}(): Argument #1 ($get) must be of type Filament\Forms\Get, Filament\Schemas\Components\Utilities\Get given`.

### 2. Solutions Implemented
- Updated imports in `CaseStudyForm.php`, `ServiceForm.php`, and `PostForm.php`:
  ```php
  use Filament\Schemas\Components\Utilities\Get;
  use Filament\Schemas\Components\Utilities\Set;
  ```
- Tested all three forms using Livewire test harness (`EditCaseStudy`, `EditService`, `EditPost`). All state updates and automatic slug generations completed with zero errors.

---

## 🚀 Full Dynamic Builder Mode & Drag-and-Drop Block Engine

CMS ko 100% Full Dynamic Builder Mode par upgrade kiya gaya hai jismein koi bhi section ya layout static ya restricted nahi hai.

### 1. Universal Creation, Editing, Cloning & Deletion
- **Resources**: `Pages`, `Services`, `Case Studies`, `Blogs`.
- **Full CRUD & Clone**:
  - `CreateAction` (New dynamic pages, services, case studies, blogs from scratch).
  - `EditAction` (In-place live editing of content and visual blocks).
  - `ReplicateAction` ("Clone" feature with auto-generated unique slug suffix `-copy-{timestamp}`).
  - `DeleteAction` (Safe deletion with database cascading).
- **Core Governance Fields**:
  - Auto-generated, real-time editable URL Slugs.
  - Visibility / Publishing toggle (`is_published`).
  - Search Engine Optimization (Meta Title, Meta Description, OG Image).

### 2. Modular Drag-and-Drop Block Builder Architecture (`App\Filament\Components\BlocksBuilder`)
Sabhi resource forms (`PageForm`, `ServiceForm`, `CaseStudyForm`, `PostForm`) mein Drag-and-Drop sortable `BlocksBuilder` integrated hai:
1. **Hero / Banner Block (`hero_banner`)**: Badge, Headline (with multi-line support), Sub-headline, Primary & Secondary CTA link buttons, Alignment (Center vs Left Grid), and visual upload.
2. **Text & Media Block (`text_media`)**: Split-layout (Media Right, Media Left, Full Width Narrative), Rich Text formatting, Image or YouTube video embed.
3. **Features / Grid Cards Block (`features_grid`)**: Configurable 2, 3, or 4 columns grid with card icon, title, description, and link pill.
4. **Dynamic Repeater Block (`dynamic_repeater`)**: 4 built-in layout presets:
   - `accordion_faqs`: Collapsible question/answer accordion with smooth Alpine/Blade interaction.
   - `key_stats`: High-impact metric counters with gradient numerals.
   - `testimonials`: Client quote cards with star ratings and spokesperson avatars.
   - `team_members`: Team and leadership profile cards.
5. **CTA (Call to Action) Block (`cta_block`)**: Radial red ambient glow, high-converting copy, and action button links.
6. **Global Shared Component Block (`global_component`)**: Central components (`our_clients`, `our_work`, `team`, `testimonials`, `client_reviews`, `blog_showcase`, `contact_details`, `footer`) attach karne ke liye with single source of truth sync.

### 3. Dynamic Template & Router Engine (Zero Hardcoding)
- **Central Blocks Renderer**: `resources/views/partials/blocks_renderer.blade.php`.
- **Modular Views**:
  - `resources/views/blocks/hero_banner.blade.php`
  - `resources/views/blocks/text_media.blade.php`
  - `resources/views/blocks/features_grid.blade.php`
  - `resources/views/blocks/dynamic_repeater.blade.php`
  - `resources/views/blocks/cta_block.blade.php`
  - `resources/views/blocks/global_component.blade.php`
- **Dynamic Detail Views**:
  - `resources/views/pages/page.blade.php` & `dynamic.blade.php`
  - `resources/views/pages/service-detail.blade.php`
  - `resources/views/pages/case-study-detail.blade.php`
  - `resources/views/pages/blog-detail.blade.php`
- **Active Routes**:
  - Dynamic Catch-All Pages: `/{slug}`
  - Dynamic Services: `/services/{slug}`
  - Dynamic Case Studies: `/case-studies/{slug}` (and `/case-study/{slug}`)
  - Dynamic Blogs: `/blogs/{slug}` (and `/blog/{slug}`)

### 4. Storage Link & Dynamic Block Image Resolution Fix
- **Issue**:
  - In Laravel 11/12, when `FILESYSTEM_DISK=local` in `.env`, uploaded files were stored by default in `storage/app/private` which is not exposed through the web symlink `/storage`.
  - On the frontend (`/services/ai-solutions` and other dynamic pages), uploaded icons and banner thumbnails in the Grid Cards block (`features_grid`) showed broken image icons.
- **Root Cause & Fixes Implemented**:
  1. **Filesystem Disk Configuration**:
     - Configured `.env` with `FILESYSTEM_DISK=public`.
     - Explicitly specified `->disk('public')` across all `FileUpload` fields in `App\Filament\Components\BlocksBuilder` (`banner_image`, `media_image`, `icon`, `image`, `bg_image`).
     - Migrated previously uploaded assets from `storage/app/private/` to `storage/app/public/` so no existing media was lost.
  2. **Storage Symlink**:
     - Verified and linked public storage via `php artisan storage:link` (`public/storage` junction pointing to `storage\app\public`).
  3. **Universal Blade Image Path Normalizer**:
     - Standardized URL resolution across all modular block Blade templates (`features_grid.blade.php`, `hero_banner.blade.php`, `text_media.blade.php`, `dynamic_repeater.blade.php`, `cta_block.blade.php`):
       - If absolute URL (`http://`, `https://`, `//`): rendered as-is.
       - If prefixed with `storage/`: wrapped with `asset($path)`.
       - If file exists directly in `public/`: wrapped with `asset($path)`.
       - For standard disk uploads: wrapped with `asset('storage/' . ltrim($path, '/'))`.
  4. **Cache Invalidation & Verification**:
     - Cleared compiled views and application caches via `php artisan optimize:clear` (`view:clear` and `cache:clear`).
     - Verified rendered `<img>` tags on `/services/ai-solutions` load with HTTP 200 OK.

### 5. Global SEO Indexing Control (Default-Off Security Feature)
- **Direct Edit URL**: `http://127.0.0.1:8000/admin/global-seo-settings`
- **Sidebar Group**: `Global Settings` > `Global SEO & Indexing` (Sort 1)
- **Model**: `App\Models\GlobalSeoSetting` (`global_seo_settings` table)
- **Default-Off Safety Rule**:
  - `site_indexing_enabled` field is set to **`false` (0) by default** in database migration, model casting, and seeder.
  - On new deployments or staging setups, search engines are strictly blocked from indexing until an administrator explicitly toggles indexing ON.
- **Dynamic Meta Tag Injection**:
  - In `resources/views/layouts/app.blade.php` and `resources/views/home.blade.php`:
    - **When ON (`site_indexing_enabled = true`)**:
      ```html
      <meta name="robots" content="index, follow">
      ```
    - **When OFF (`site_indexing_enabled = false` or missing record)**:
      ```html
      <meta name="robots" content="noindex, nofollow">
      ```
- **Fallback Metadata Support**:
  - Form also supports setting `meta_title_default`, `meta_description_default`, and `canonical_base_url`.
- **Cache Management**:
  - Automatically flushed using `php artisan config:clear` and `php artisan view:clear`.

### 6. Our Work Showcase Drag-and-Drop Card Reordering
- **Direct Edit URL**: `http://127.0.0.1:8000/admin/our-work-sections/1/edit`
- **Sidebar Group**: `Global / Reusable Sections` > `Our Work Showcase` (Sort 6)
- **Model**: `App\Models\OurWorkSection` (`our_work_sections` table)
- **Drag-and-Drop Reordering Handle (Zero Data Loss)**:
  - Form migrated from static sections to a sortable, collapsible `Repeater::make('cards')` featuring the native grab handle (`:::`) on each card header.
  - **Zero Data Loss**: All existing database columns (`card_1_title`, `card_1_stat_number`, `card_1_stat_desc`, `card_1_button_text`, `card_1_button_link`, `card_1_image`, `card_1_bg_image`, `card_2_title`, `card_2_stat_number`, etc.) and all fields are 100% preserved.
  - Added JSON column `cards` to `our_work_sections` table with two-way accessor/mutator synchronization.
  - When reordering cards via drag-and-drop, the new order updates both the `cards` JSON array and the respective `card_1_*` and `card_2_*` columns automatically on save.
- **Frontend Sync**:
  - [resources/views/partials/our_work.blade.php](file:///c:/Users/Administrator/Desktop/coreunity/backend/resources/views/partials/our_work.blade.php) dynamically reflects the reordered card sequence.

### 7. Pages Table Clean-Up (Removal of Redundant Manage Sections Action)
- In [PagesTable.php](file:///c:/Users/Administrator/Desktop/coreunity/backend/app/Filament/Resources/Pages/Tables/PagesTable.php), removed the redundant orange `Manage Sections` action button from Home and About rows.
- The Pages management list now has a uniform, clutter-free action bar across all pages: `Edit`, `Clone`, and `Delete`.

### 8. Home Page Hero Media / Press Logos Strip CMS (CRUD)
- **Direct Edit URLs**:
  - Hero Section Resource: `http://127.0.0.1:8000/admin/hero-sections/1/edit`
  - Pages Resource (Home): `http://127.0.0.1:8000/admin/pages/1/edit`
- **Model**: `App\Models\HeroSection` (`hero_sections` table) & `App\Models\Page` (`pages` table)
- **Features Implemented**:
  - Added `media_logos` JSON column to `hero_sections` and `pages` tables.
  - Added drag-and-drop sortable Repeater (`reorderableWithDragAndDrop()`) in `HeroSectionForm.php` and `PageForm.php`.
  - Repeater fields per logo:
    - `Logo Image` (FileUpload with `public` disk directory `hero/logos`)
    - `Title / Brand Name` (TextInput, e.g. Khaleej Times, Al Jazeera)
    - `Optional Redirect Link / URL` (TextInput)
  - **Dynamic Blade Rendering with Fallback**:
    - [home.blade.php](file:///c:/Users/Administrator/Desktop/coreunity/backend/resources/views/home.blade.php) and [partials/hero.blade.php](file:///c:/Users/Administrator/Desktop/coreunity/backend/resources/views/partials/hero.blade.php) loop through `$hero->media_logos_list` dynamically.
    - If CMS has custom uploaded logos, they render seamlessly with optional external links and branded `alt`/`title` tags; otherwise, standard default press logos (Al Jazeera, Zaaya, Gulf News, Khaleej Times, Arabian Business) render as a fallback.

### 9. Our Clients Logos Full CRUD Repeater System
- **Direct Edit URL**: `http://127.0.0.1:8000/admin/our-clients-sections/1/edit`
- **Sidebar Group**: `Global / Reusable Sections` > `Our Clients Logos` (Sort 2)
- **Model**: `App\Models\OurClientsSection` (`our_clients_sections` table)
- **Features Implemented**:
  - Upgraded `client_logos` field from simple file upload to sortable `Repeater::make('client_logos')` with `.reorderableWithDragAndDrop()`.
  - Repeater fields per client partner:
    - `Logo Image` (FileUpload with image preview & `public` disk directory `clients`)
    - `Client / Brand Name` (TextInput, e.g., Salwa Real Estate)
    - `Website / Redirect URL` (TextInput, optional link)
  - `EditOurClientsSection.php` auto-normalizes legacy string entries into full objects seamlessly.
  - **Grid View Sync**:
    - [our_clients.blade.php](file:///c:/Users/Administrator/Desktop/coreunity/backend/resources/views/partials/our_clients.blade.php) loops through the dynamic `client_logos` in the exact visual sequence set in the CMS admin panel, with optional redirect links and branded tooltips.

### 10. Automated Seeding, Media Attachment & Nullable Validation Fixes
- **Nullable FileUpload Validation**:
  - In [HeroSectionForm.php](file:///c:/Users/Administrator/Desktop/coreunity/backend/app/Filament/Resources/HeroSections/Schemas/HeroSectionForm.php), [PageForm.php](file:///c:/Users/Administrator/Desktop/coreunity/backend/app/Filament/Resources/Pages/Schemas/PageForm.php), and [OurClientsSectionForm.php](file:///c:/Users/Administrator/Desktop/coreunity/backend/app/Filament/Resources/OurClientsSections/Schemas/OurClientsSectionForm.php), made the `FileUpload` fields nullable (`->nullable()`) to prevent required-field validation errors when updating existing records.
- **Automated Storage Media Sync & Seeding**:
  - [OurClientsSectionSeeder.php](file:///c:/Users/Administrator/Desktop/coreunity/backend/database/seeders/OurClientsSectionSeeder.php): Automatically copies client logos from `public/` into `storage/app/public/clients/` and seeds the relative paths (`clients/salwa.png`, etc.) directly into the database.
  - [HeroSectionSeeder.php](file:///c:/Users/Administrator/Desktop/coreunity/backend/database/seeders/HeroSectionSeeder.php): Automatically copies press logos from `public/` into `storage/app/public/hero/logos/` and seeds the relative paths (`hero/logos/al-jazeera.png`, etc.).
  - [EditOurClientsSection.php](file:///c:/Users/Administrator/Desktop/coreunity/backend/app/Filament/Resources/OurClientsSections/Pages/EditOurClientsSection.php) and [EditHeroSection.php](file:///c:/Users/Administrator/Desktop/coreunity/backend/app/Filament/Resources/HeroSections/Pages/EditHeroSection.php): Form fill hooks automatically resolve relative paths so all existing images show up pre-attached with thumbnails in the Filament repeater without requiring manual re-uploading.

### 11. 100% Modular & Flexible Page Builder Architecture
- **CMS Location**: `Pages Management` > `Pages` (`/admin/pages/{id}/edit`).
- **Dynamic Block Builder (`BlocksBuilder.php`)**:
  - Registered website's core global and reusable sections as first-class Drag-and-Drop Block Components:
    1. **Hero Section Block (`hero_section`)**: Embeds global hero configuration or overrides headline, badge, CTA, globe visual, presence tags, and press logo strip.
    2. **Our Clients Logos Block (`our_clients`)**: Embeds global client partner grid or customizable partner logo repeater with drag-and-drop ordering.
    3. **Our Work Showcase Block (`our_work`)**: Embeds global portfolio showcase or custom project case study cards with metrics.
    4. **Team Members Block (`team`)**: Embeds global team section or custom leadership grid with member photos and LinkedIn links.
    5. **Testimonials / Reviews Block (`testimonials`)**: Embeds global testimonial showcase or custom quote cards with 5-star ratings and avatars.
    6. **Accordion / FAQ Block (`accordion_faq`)**: Interactive collapsible questions & answers accordion with expand/collapse animations and plus/minus icons.
    7. **Custom Rich Text Block (`custom_rich_text`)**: Full WYSIWYG editor with themes (dark, light, glow) and custom container widths.
- **Frontend Sequence Rendering**:
  - Frontend views ([`pages/dynamic.blade.php`](file:///c:/Users/Administrator/Desktop/coreunity/backend/resources/views/pages/dynamic.blade.php), [`pages/page.blade.php`](file:///c:/Users/Administrator/Desktop/coreunity/backend/resources/views/pages/page.blade.php), and [`page.blade.php`](file:///c:/Users/Administrator/Desktop/coreunity/backend/resources/views/page.blade.php)) iterate over `@foreach($page->blocks as $block)` in the exact drag-and-drop order arranged in the CMS admin panel.

### 12. Port 3000 Exact Matching Footer & Navbar, Modular Block Builder & SoftDeletes
- **1. Port 3000 Reference Footer Architecture**:
  - **Direct Edit URL**: `http://127.0.0.1:8000/admin/footer-sections/1/edit`
  - **Sidebar Group**: `Global / Reusable Sections` > `Footer Section`
  - **Model**: `App\Models\FooterSection` (`footer_sections` table).
  - **Structure Matching Next.js Frontend Exactly**:
    - **Newsletter Bar**: Red `#cc2936` banner with title ("Join Our Newsletter"), subtitle, Name, Email, and Subscribe action.
    - **Column 1 (Left Brand & Contact)**: CoreUnity logo, physical Dubai address, email, phone, and social icons: Facebook (`fb_image.png`), Instagram (`insta_logo.png`), YouTube (`youtube_logo.png`), LinkedIn (`linkdin_image.png`), TikTok (SVG).
    - **Column 2**: `Smart Technology Solutions` (Web Development, UI/UX Design, Ecommerce, Mobile Apps, AI, Chatbots, VR, AR).
    - **Column 3**: `Digital Growth & Marketing` (Digital Marketing, SEO, GEO, PPC, Social Media, Influencer, Branding, AI Company).
    - **Column 4**: `Industry` (Real Estate, Government, Healthcare, Education, Hospitality, Legal & Law, FinTech).
    - **Bottom Bar**: `© 2026. CoreUnity Solutions`, Privacy Policy (`/privacy-policy`) and Terms & Conditions (`/terms-and-conditions`).
- **2. Port 3000 Exact Matching Navbar**:
  - [partials/navbar.blade.php](file:///c:/Users/Administrator/Desktop/coreunity/backend/resources/views/partials/navbar.blade.php):
  - Clean Port 3000 links: Home (`/`), About (`/about`), Services (`/services`), Case Study (`/portfolio`), Blog (`/blog`), Contact (`/contact`).
  - Active route highlighting, Consultation Modal trigger, WhatsApp button, Phone hotline, and mobile dropdown drawer.
- **3. Complete Section-Level Block Builder**:
  - `BlocksBuilder.php` includes all 10 modular blocks with rich `helperText()` and `placeholder()` on all fields:
    1. Hero Section Block (`hero_section`)
    2. Press & Media Logos Block (`press_media_logos`)
    3. Work Showcase / Case Studies Grid (`our_work`)
    4. Services Cards & Capabilities Grid (`services_cards`)
    5. Our Clients & 5-Star Reviews (`our_clients`)
    6. Team Members & Leadership Grid (`team`)
    7. Testimonials & Client Reviews (`testimonials`)
    8. Accordion & FAQs Block (`accordion_faq`)
    9. Rich Text & Custom HTML Free-Block (`custom_rich_text`)
    10. Call To Action (CTA Banner) (`cta_block`)
- **4. SoftDeletes on Critical Models**:
  - Added `deleted_at` timestamp migration and `SoftDeletes` trait to `Page`, `Service`, `CaseStudy`, and `Post`.
  - Added `TrashedFilter`, `RestoreAction`, and `ForceDeleteAction` to all corresponding Filament Tables to prevent accidental permanent data loss.

### 13. Filament FileUpload Performance Optimization & Zero-Lag Previews
- **Problem Resolved**:
  - Filament FileUpload components previously suffered from slow loading or infinite spinners when attempting to preview uploaded media.
  - Root cause was identified: `config/filesystems.php` defaulted to an absolute `APP_URL` (`http://localhost/storage`), causing cross-origin requests to hit port 80 (returning 404 Not Found) instead of the active artisan serve port `8000`.
- **Architectural Fixes Applied**:
  1. **Relative Public Storage URL**:
     - Configured `config/filesystems.php` public disk URL to `/storage`, making asset previews completely host-and-port agnostic across all local ports and production domains.
     - Updated `.env` with `APP_URL=http://127.0.0.1:8000`.
  2. **Standardized High-Performance FileUpload Configuration**:
     - Across all Filament resources and `BlocksBuilder.php`, configured every `FileUpload` field with:
       - `->image()`: Native image file validation.
       - `->preserveFilenames()`: Retains clear human-readable original filenames.
       - `->maxSize(2048)`: 2MB payload ceiling to prevent oversized payloads from causing memory spikes or timeouts.
       - `->imageEditor()`: Enables lightweight in-browser cropping and rotation.
       - `->disk('public')`: Explicitly binds to the public disk.
       - `->visibility('public')`: Guarantees direct URL resolution without expensive PHP signed-stream roundtrips.
  3. **Symlink Verification**:
     - Confirmed `public/storage` NTFS directory junction directly maps to `storage/app/public` (`Mode: d----l`, target `storage/app/public`).
     - Verified images return HTTP 200 OK directly from the web server.




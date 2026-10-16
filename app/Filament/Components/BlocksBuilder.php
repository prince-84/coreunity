<?php

namespace App\Filament\Components;

use Filament\Forms\Components\Builder;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Support\Enums\Alignment;

class BlocksBuilder
{
    public static function make(string $name = 'blocks'): Builder
    {
        return Builder::make($name)
            ->label('Drag-and-Drop Dynamic Block Builder')
            ->addActionLabel('Add New Page Block Component')
            ->addActionAlignment(Alignment::Start)
            ->collapsible()
            ->collapsed()
            ->cloneable()
            ->reorderableWithDragAndDrop()
            ->blocks([
                // 1. Hero Section Block
                Block::make('hero_section')
                    ->label('Hero Section Block')
                    ->icon('heroicon-o-sparkles')
                    ->schema([
                        Toggle::make('use_global')
                            ->label('Use Global Hero Section (Default CMS Config)')
                            ->helperText('Enable to display the global hero section configured in the admin panel.')
                            ->default(true)
                            ->reactive()
                            ->columnSpanFull(),
                        TextInput::make('badge')
                            ->label('Top Badge Pill')
                            ->placeholder('e.g. Digital Agency')
                            ->helperText('Small badge displayed above the main hero headline.')
                            ->visible(fn ($get) => !$get('use_global')),
                        TextInput::make('headline')
                            ->label('Main Hero Headline')
                            ->placeholder('We are a bold and innovative digital agency based in the UAE.')
                            ->helperText('Main primary headline text for the hero section.')
                            ->visible(fn ($get) => !$get('use_global'))
                            ->columnSpanFull(),
                        Textarea::make('subheadline')
                            ->label('Hero Subheadline / Brief Description')
                            ->rows(2)
                            ->placeholder('Crafting award-winning digital experiences for ambitious brands.')
                            ->helperText('Supporting paragraph beneath the hero headline.')
                            ->visible(fn ($get) => !$get('use_global'))
                            ->columnSpanFull(),
                        TextInput::make('button_text')
                            ->label('Primary CTA Button Text')
                            ->default('Schedule a call')
                            ->placeholder('Schedule a call')
                            ->helperText('Call to action button text.')
                            ->visible(fn ($get) => !$get('use_global')),
                        TextInput::make('button_link')
                            ->label('Primary CTA Button URL')
                            ->default('#contact')
                            ->placeholder('#contact or /contact')
                            ->helperText('URL or anchor link for the CTA button.')
                            ->visible(fn ($get) => !$get('use_global')),
                        FileUpload::make('globe_image')
                            ->label('Hero Graphic / Earth Globe Visual')
                            ->image()
                            ->preserveFilenames()
                            ->maxSize(2048)
                            ->imageEditor()
                            ->disk('public')
                            ->visibility('public')
                            ->directory('hero')
                            ->helperText('Visual center element in the hero (Earth globe or custom brand asset).')
                            ->visible(fn ($get) => !$get('use_global')),
                        TextInput::make('video_url')
                            ->label('Hero Background Video (Optional URL)')
                            ->placeholder('https://www.youtube.com/watch?v=...')
                            ->helperText('Optional video embed or video loop URL.')
                            ->visible(fn ($get) => !$get('use_global')),
                        Repeater::make('global_presence')
                            ->label('Global Presence Locations')
                            ->helperText('Countries or cities displayed under the hero globe.')
                            ->schema([
                                TextInput::make('country')
                                    ->label('Country / Region')
                                    ->placeholder('e.g. UAE, USA, Saudi Arabia')
                                    ->required(),
                            ])
                            ->default([
                                ['country' => 'USA'],
                                ['country' => 'UAE'],
                                ['country' => 'Saudi Arabia'],
                                ['country' => 'Pakistan'],
                            ])
                            ->visible(fn ($get) => !$get('use_global'))
                            ->columnSpanFull(),
                    ])->columns(2),

                // 2. Press / Media Logos Block
                Block::make('press_media_logos')
                    ->label('Press & Media Logos Marquee Strip')
                    ->icon('heroicon-o-newspaper')
                    ->schema([
                        Toggle::make('use_global')
                            ->label('Use Global Media & Press Strip')
                            ->helperText('Loads press logos from the Hero Section configuration.')
                            ->default(true)
                            ->reactive()
                            ->columnSpanFull(),
                        TextInput::make('strip_title')
                            ->label('Optional Header / Label')
                            ->placeholder('As Featured In')
                            ->helperText('Small text above the ticker strip.')
                            ->visible(fn ($get) => !$get('use_global')),
                        Repeater::make('logos')
                            ->label('Press & Media Logos')
                            ->helperText('Add publications and media logos with drag-and-drop reordering.')
                            ->schema([
                                FileUpload::make('image')
                                    ->label('Publication Logo')
                                    ->image()
                                    ->preserveFilenames()
                                    ->maxSize(2048)
                                    ->imageEditor()
                                    ->disk('public')
                                    ->visibility('public')
                                    ->directory('hero/logos')
                                    ->helperText('Transparent logo image.')
                                    ->nullable(),
                                TextInput::make('title')
                                    ->label('Publication Name')
                                    ->placeholder('e.g. Khaleej Times, Al Jazeera, Gulf News')
                                    ->required(),
                                TextInput::make('url')
                                    ->label('Optional Press Article Link')
                                    ->placeholder('https://www.khaleejtimes.com/...'),
                            ])
                            ->columns(3)
                            ->reorderableWithDragAndDrop()
                            ->collapsible()
                            ->itemLabel(fn (array $state): ?string => $state['title'] ?? 'Press Logo')
                            ->visible(fn ($get) => !$get('use_global'))
                            ->columnSpanFull(),
                    ])->columns(2),

                // 3. Work Showcase / Case Studies Grid Block
                Block::make('our_work')
                    ->label('Our Work Showcase')
                    ->icon('heroicon-o-briefcase')
                    ->schema([
                        Toggle::make('use_global')
                            ->label('Use Synchronized Global Work Showcase Section')
                            ->helperText('Embeds the central Work Showcase section.')
                            ->default(true)
                            ->reactive()
                            ->columnSpanFull(),
                        TextInput::make('mini_title')
                            ->label('Section Badge')
                            ->default('Our Work')
                            ->placeholder('Our Work')
                            ->helperText('Pill badge displayed above the main heading.')
                            ->visible(fn ($get) => !$get('use_global')),
                        Textarea::make('main_title')
                            ->label('Section Headline')
                            ->default('Transforming Ideas into Digital Realities')
                            ->placeholder('Transforming Ideas into Digital Realities')
                            ->rows(2)
                            ->helperText('Primary headline for the portfolio section.')
                            ->visible(fn ($get) => !$get('use_global'))
                            ->columnSpanFull(),
                        Repeater::make('cards')
                            ->label('Showcase Project Cards')
                            ->helperText('Add and reorder featured client projects.')
                            ->schema([
                                TextInput::make('title')
                                    ->label('Project Title')
                                    ->placeholder('e.g. E-Commerce Platform Scaling')
                                    ->required(),
                                TextInput::make('stat_number')
                                    ->label('Highlight Stat Metric')
                                    ->placeholder('e.g. 10x, 350%, $12M'),
                                TextInput::make('stat_desc')
                                    ->label('Stat Description / Label')
                                    ->placeholder('e.g. Revenue Increase in 6 Months'),
                                FileUpload::make('image')
                                    ->label('Project Mockup Visual')
                                    ->image()
                                    ->preserveFilenames()
                                    ->maxSize(2048)
                                    ->imageEditor()
                                    ->disk('public')
                                    ->visibility('public')
                                    ->directory('work')
                                    ->helperText('High-resolution screenshot or mockup.'),
                                TextInput::make('button_text')
                                    ->label('Button Text')
                                    ->default('View Case Study')
                                    ->placeholder('View Case Study'),
                                TextInput::make('button_link')
                                    ->label('Button Link URL')
                                    ->default('/case-studies')
                                    ->placeholder('/case-studies/project-name'),
                            ])
                            ->columns(2)
                            ->reorderableWithDragAndDrop()
                            ->collapsible()
                            ->itemLabel(fn (array $state): ?string => $state['title'] ?? 'Project Card')
                            ->visible(fn ($get) => !$get('use_global'))
                            ->columnSpanFull(),
                    ])->columns(2),

                // 4. Services Cards Block
                Block::make('services_cards')
                    ->label('Services Cards & Capabilities Grid')
                    ->icon('heroicon-o-cpu-chip')
                    ->schema([
                        Toggle::make('use_global')
                            ->label('Load All Dynamic Services From Database')
                            ->helperText('Loads published service cards from the Services resource automatically.')
                            ->default(true)
                            ->reactive()
                            ->columnSpanFull(),
                        TextInput::make('badge')
                            ->label('Section Badge')
                            ->default('Our Expertise')
                            ->placeholder('Our Expertise')
                            ->visible(fn ($get) => !$get('use_global')),
                        TextInput::make('title')
                            ->label('Section Headline')
                            ->default('Services That Drive Measurable Growth')
                            ->placeholder('Services That Drive Measurable Growth')
                            ->visible(fn ($get) => !$get('use_global')),
                        Textarea::make('description')
                            ->label('Section Overview')
                            ->rows(2)
                            ->placeholder('End-to-end digital solutions tailored to the modern business landscape.')
                            ->visible(fn ($get) => !$get('use_global'))
                            ->columnSpanFull(),
                        Repeater::make('custom_services')
                            ->label('Custom Service Cards')
                            ->schema([
                                FileUpload::make('icon')
                                    ->label('Service Icon')
                                    ->image()
                                    ->preserveFilenames()
                                    ->maxSize(2048)
                                    ->imageEditor()
                                    ->disk('public')
                                    ->visibility('public')
                                    ->directory('services/icons'),
                                TextInput::make('title')
                                    ->label('Service Title')
                                    ->placeholder('e.g. AI-Powered Web Platforms')
                                    ->required(),
                                Textarea::make('description')
                                    ->label('Service Description')
                                    ->rows(2)
                                    ->placeholder('Full-stack responsive web development with modern architecture.')
                                    ->required(),
                                TextInput::make('link_url')
                                    ->label('Service Details Page URL')
                                    ->placeholder('/services/web-development'),
                            ])
                            ->columns(2)
                            ->reorderableWithDragAndDrop()
                            ->collapsible()
                            ->itemLabel(fn (array $state): ?string => $state['title'] ?? 'Service Card')
                            ->visible(fn ($get) => !$get('use_global'))
                            ->columnSpanFull(),
                    ])->columns(2),

                // 5. Our Clients & Client Reviews Block
                Block::make('our_clients')
                    ->label('Our Clients Logos')
                    ->icon('heroicon-o-building-office-2')
                    ->schema([
                        Toggle::make('use_global')
                            ->label('Use Synchronized Global Clients Section')
                            ->helperText('Embeds the synchronized client logo grid and world counter from the CMS.')
                            ->default(true)
                            ->reactive()
                            ->columnSpanFull(),
                        TextInput::make('mini_title')
                            ->label('Section Badge')
                            ->default('Our Clients')
                            ->placeholder('Our Clients')
                            ->visible(fn ($get) => !$get('use_global')),
                        Textarea::make('main_title')
                            ->label('Section Headline')
                            ->default("5-Star Rated, Works\nwith CoreUnity Solutions")
                            ->placeholder("5-Star Rated, Works\nwith CoreUnity Solutions")
                            ->rows(2)
                            ->visible(fn ($get) => !$get('use_global'))
                            ->columnSpanFull(),
                        Repeater::make('client_logos')
                            ->label('Client Partner Brand Logos')
                            ->helperText('Manage client partner brand logos with drag-and-drop reordering.')
                            ->schema([
                                FileUpload::make('image')
                                    ->label('Logo Image')
                                    ->image()
                                    ->preserveFilenames()
                                    ->maxSize(2048)
                                    ->imageEditor()
                                    ->disk('public')
                                    ->visibility('public')
                                    ->directory('clients')
                                    ->nullable(),
                                TextInput::make('name')
                                    ->label('Client / Brand Name')
                                    ->placeholder('e.g. Salwa Real Estate')
                                    ->required(),
                                TextInput::make('url')
                                    ->label('Website / Redirect URL')
                                    ->placeholder('https://...'),
                            ])
                            ->columns(3)
                            ->reorderableWithDragAndDrop()
                            ->collapsible()
                            ->itemLabel(fn (array $state): ?string => $state['name'] ?? 'Client Logo')
                            ->visible(fn ($get) => !$get('use_global'))
                            ->columnSpanFull(),
                    ])->columns(2),

                // 6. Team Members Grid Block
                Block::make('team')
                    ->label('Team Members')
                    ->icon('heroicon-o-user-group')
                    ->schema([
                        Toggle::make('use_global')
                            ->label('Use Synchronized Global Team Section')
                            ->helperText('Loads leadership and team members from the central Team Section.')
                            ->default(true)
                            ->reactive()
                            ->columnSpanFull(),
                        TextInput::make('badge')
                            ->label('Section Badge')
                            ->default('Our Team')
                            ->placeholder('Our Team')
                            ->visible(fn ($get) => !$get('use_global')),
                        TextInput::make('title')
                            ->label('Section Heading')
                            ->default('Meet the Minds Behind the Magic')
                            ->placeholder('Meet the Minds Behind the Magic')
                            ->visible(fn ($get) => !$get('use_global')),
                        Repeater::make('members')
                            ->label('Team Member Profiles')
                            ->helperText('Add executive and team member profiles.')
                            ->schema([
                                FileUpload::make('image')
                                    ->label('Member Photo')
                                    ->image()
                                    ->preserveFilenames()
                                    ->maxSize(2048)
                                    ->imageEditor()
                                    ->disk('public')
                                    ->visibility('public')
                                    ->directory('team'),
                                TextInput::make('name')
                                    ->label('Full Name')
                                    ->placeholder('e.g. Faraz Khan')
                                    ->required(),
                                TextInput::make('role')
                                    ->label('Designation / Role')
                                    ->placeholder('e.g. Chief Executive Officer')
                                    ->required(),
                                TextInput::make('linkedin')
                                    ->label('LinkedIn Profile URL')
                                    ->placeholder('https://linkedin.com/in/...'),
                            ])
                            ->columns(2)
                            ->reorderableWithDragAndDrop()
                            ->collapsible()
                            ->itemLabel(fn (array $state): ?string => $state['name'] ?? 'Team Member')
                            ->visible(fn ($get) => !$get('use_global'))
                            ->columnSpanFull(),
                    ])->columns(2),

                // 7. Testimonials & Client Reviews Block
                Block::make('testimonials')
                    ->label('Testimonials')
                    ->icon('heroicon-o-chat-bubble-bottom-center-text')
                    ->schema([
                        Toggle::make('use_global')
                            ->label('Use Synchronized Global Testimonials Section')
                            ->helperText('Embeds the central Testimonials & Reviews showcase.')
                            ->default(true)
                            ->reactive()
                            ->columnSpanFull(),
                        TextInput::make('badge')
                            ->label('Section Badge')
                            ->default('Testimonials')
                            ->placeholder('Testimonials')
                            ->visible(fn ($get) => !$get('use_global')),
                        TextInput::make('title')
                            ->label('Section Heading')
                            ->default('What Our Partners Say About Us')
                            ->placeholder('What Our Partners Say About Us')
                            ->visible(fn ($get) => !$get('use_global'))
                            ->columnSpanFull(),
                        Repeater::make('items')
                            ->label('Client Testimonial Quotes')
                            ->schema([
                                TextInput::make('name')
                                    ->label('Client Name')
                                    ->placeholder('e.g. Ahmed Al Mansoori')
                                    ->required(),
                                TextInput::make('company')
                                    ->label('Company / Designation')
                                    ->placeholder('e.g. Managing Partner, Dubai'),
                                Select::make('rating')
                                    ->label('Rating (Stars)')
                                    ->options([5 => '5 Stars ★★★★★', 4 => '4 Stars ★★★★☆'])
                                    ->default(5),
                                Textarea::make('quote')
                                    ->label('Client Feedback Quote')
                                    ->placeholder('Working with CoreUnity Solutions accelerated our digital growth exponentially.')
                                    ->required()
                                    ->rows(2),
                                FileUpload::make('avatar')
                                    ->label('Client Avatar')
                                    ->image()
                                    ->preserveFilenames()
                                    ->maxSize(2048)
                                    ->imageEditor()
                                    ->disk('public')
                                    ->visibility('public')
                                    ->directory('testimonials'),
                            ])
                            ->columns(2)
                            ->reorderableWithDragAndDrop()
                            ->collapsible()
                            ->itemLabel(fn (array $state): ?string => $state['name'] ?? 'Testimonial')
                            ->visible(fn ($get) => !$get('use_global'))
                            ->columnSpanFull(),
                    ])->columns(2),

                // 7.1 Client Reviews (Marquee)
                Block::make('client_reviews')
                    ->label('Client Reviews (Marquee)')
                    ->icon('heroicon-o-star')
                    ->schema([
                        Toggle::make('use_global')
                            ->label('Use Synchronized Global Client Reviews Section')
                            ->helperText('Embeds the synchronized infinite marquee of client reviews.')
                            ->default(true)
                            ->reactive()
                            ->columnSpanFull(),
                        TextInput::make('badge')
                            ->label('Section Badge')
                            ->default('Client Testimonials')
                            ->placeholder('Client Testimonials')
                            ->visible(fn ($get) => !$get('use_global')),
                        TextInput::make('title')
                            ->label('Section Heading')
                            ->default('Loved by your best customers')
                            ->placeholder('Loved by your best customers')
                            ->visible(fn ($get) => !$get('use_global')),
                        Textarea::make('description')
                            ->label('Section Description')
                            ->rows(2)
                            ->default("We're obsessed with delivering outstanding customer experiences that are a reflection of your brand.")
                            ->visible(fn ($get) => !$get('use_global'))
                            ->columnSpanFull(),
                    ])->columns(2),

                // 7.2 Blog Showcase Section
                Block::make('blog_showcase')
                    ->label('Blog Showcase Section')
                    ->icon('heroicon-o-newspaper')
                    ->schema([
                        Toggle::make('use_global')
                            ->label('Use Synchronized Global Blog Showcase Section')
                            ->helperText('Embeds latest published articles and insights.')
                            ->default(true)
                            ->reactive()
                            ->columnSpanFull(),
                        TextInput::make('badge')
                            ->label('Section Badge')
                            ->default('Our Blogs')
                            ->placeholder('Our Blogs')
                            ->visible(fn ($get) => !$get('use_global')),
                        TextInput::make('title')
                            ->label('Section Heading')
                            ->default('Latest News, Insights & Updates')
                            ->placeholder('Latest News, Insights & Updates')
                            ->visible(fn ($get) => !$get('use_global')),
                    ])->columns(2),

                // 8. Accordion / FAQ Block
                Block::make('accordion_faq')
                    ->label('Accordion & FAQs Block')
                    ->icon('heroicon-o-question-mark-circle')
                    ->schema([
                        TextInput::make('badge')
                            ->label('Top Badge Pill')
                            ->default('Frequently Asked Questions')
                            ->placeholder('Frequently Asked Questions')
                            ->helperText('Badge above the FAQ title.'),
                        TextInput::make('title')
                            ->label('Section Heading')
                            ->default('Got Questions? We Have Answers.')
                            ->placeholder('Got Questions? We Have Answers.')
                            ->helperText('Main title for the FAQs section.')
                            ->required(),
                        Textarea::make('description')
                            ->label('Intro Summary')
                            ->rows(2)
                            ->placeholder('Find quick answers to common questions about our services and delivery.')
                            ->helperText('Brief narrative displayed above the accordion.')
                            ->columnSpanFull(),
                        Repeater::make('faqs')
                            ->label('FAQ Q&A Entries')
                            ->helperText('Add and reorder questions and answers.')
                            ->schema([
                                TextInput::make('question')
                                    ->label('Question')
                                    ->placeholder('e.g. How long does custom web development take?')
                                    ->required(),
                                Textarea::make('answer')
                                    ->label('Answer')
                                    ->placeholder('Typical timelines range between 3 to 6 weeks depending on project scope.')
                                    ->required()
                                    ->rows(3),
                            ])
                            ->reorderableWithDragAndDrop()
                            ->collapsible()
                            ->itemLabel(fn (array $state): ?string => $state['question'] ?? 'FAQ Item')
                            ->columnSpanFull(),
                    ])->columns(2),

                // 9. Custom Rich Text & HTML Free-Block
                Block::make('custom_rich_text')
                    ->label('Rich Text & Custom HTML Free-Block')
                    ->icon('heroicon-o-document-text')
                    ->schema([
                        TextInput::make('badge')
                            ->label('Optional Pill Badge')
                            ->placeholder('e.g. Detailed Specifications')
                            ->helperText('Optional section badge.'),
                        TextInput::make('title')
                            ->label('Optional Section Title')
                            ->placeholder('e.g. In-Depth Project Scope')
                            ->helperText('Optional heading above the content.'),
                        Select::make('theme')
                            ->label('Background Theme')
                            ->options([
                                'dark' => 'Deep Black (#000000)',
                                'light' => 'Pure White (#ffffff)',
                                'glow' => 'Dark with Red Subtle Glow',
                            ])
                            ->default('dark')
                            ->helperText('Section background aesthetic style.'),
                        Select::make('container_width')
                            ->label('Container Width')
                            ->options([
                                'narrow' => 'Narrow (Prose max-w-4xl)',
                                'standard' => 'Standard (max-w-6xl)',
                                'wide' => 'Full Width (max-w-7xl)',
                            ])
                            ->default('standard')
                            ->helperText('Controls the max-width of the content container.'),
                        RichEditor::make('content')
                            ->label('Rich Text / Narrative Content')
                            ->placeholder('Write article body, formatted text, tables, lists, or embeds...')
                            ->helperText('Full WYSIWYG editor supporting bold, headings, links, and bullet lists.')
                            ->columnSpanFull(),
                        Textarea::make('custom_html')
                            ->label('Custom Raw HTML / Embed Code (Optional)')
                            ->rows(4)
                            ->placeholder('<div class="...">...</div> or <iframe src="..."></iframe>')
                            ->helperText('Insert custom widgets, iframes, calculator scripts, or custom HTML markup.')
                            ->columnSpanFull(),
                    ])->columns(2),

                // 10. Call To Action (CTA Banner) Block
                Block::make('cta_block')
                    ->label('Call To Action (CTA Banner)')
                    ->icon('heroicon-o-megaphone')
                    ->schema([
                        TextInput::make('badge')
                            ->label('Top Pill Badge')
                            ->default('Start Your Transformation')
                            ->placeholder('Start Your Transformation')
                            ->helperText('Small badge above CTA headline.'),
                        Toggle::make('show_glow')
                            ->label('Show Radial Red Glow')
                            ->helperText('Displays glowing red accent backdrop.')
                            ->default(true),
                        Textarea::make('headline')
                            ->label('Main CTA Headline')
                            ->rows(2)
                            ->default("Ready to Scale Your Business\nTo New Heights?")
                            ->placeholder("Ready to Scale Your Business\nTo New Heights?")
                            ->helperText('Compelling action headline.')
                            ->required()
                            ->columnSpanFull(),
                        Textarea::make('description')
                            ->label('CTA Supporting Copy')
                            ->rows(2)
                            ->default('Get in touch with our team in Dubai today for a complimentary discovery session.')
                            ->placeholder('Supporting text encouraging the user to reach out.')
                            ->columnSpanFull(),
                        TextInput::make('primary_button_text')
                            ->label('Primary Button Label')
                            ->default('Speak to an Expert')
                            ->placeholder('Speak to an Expert'),
                        TextInput::make('primary_button_url')
                            ->label('Primary Button URL')
                            ->default('/contact')
                            ->placeholder('/contact'),
                        TextInput::make('secondary_button_text')
                            ->label('Secondary Button Label')
                            ->default('WhatsApp Us')
                            ->placeholder('WhatsApp Us'),
                        TextInput::make('secondary_button_url')
                            ->label('Secondary Button URL')
                            ->default('https://wa.me/971505559646')
                            ->placeholder('https://wa.me/971505559646'),
                        FileUpload::make('bg_image')
                            ->label('Background Texture / Overlay')
                            ->image()
                            ->preserveFilenames()
                            ->maxSize(2048)
                            ->imageEditor()
                            ->disk('public')
                            ->visibility('public')
                            ->directory('blocks/cta')
                            ->helperText('Optional background texture image.')
                            ->columnSpanFull(),
                    ])->columns(2),

                // Backwards-Compatible Blocks
                Block::make('hero_banner')
                    ->label('Hero / Banner Section (Split & Centered)')
                    ->icon('heroicon-o-sparkles')
                    ->schema([
                        TextInput::make('badge')->label('Top Pill Badge')->placeholder('e.g. Digital Agency')->columnSpan(1),
                        Select::make('alignment')->label('Text Alignment')->options(['center' => 'Center Aligned', 'left' => 'Left Aligned'])->default('center')->columnSpan(1),
                        Textarea::make('headline')->label('Main Hero Headline')->rows(2)->required()->columnSpanFull(),
                        Textarea::make('subheadline')->label('Sub-Headline / Narrative')->rows(2)->columnSpanFull(),
                        TextInput::make('cta_text')->label('Primary Button Text')->default('Get In Touch'),
                        TextInput::make('cta_url')->label('Primary Button Link')->default('/contact'),
                        TextInput::make('secondary_cta_text')->label('Secondary Button Text')->default('View Our Work'),
                        TextInput::make('secondary_cta_url')->label('Secondary Button Link')->default('/case-studies'),
                        FileUpload::make('banner_image')->label('Hero Banner / Featured Visual')->image()->preserveFilenames()->maxSize(2048)->imageEditor()->disk('public')->visibility('public')->directory('blocks/hero')->columnSpanFull(),
                    ])->columns(2),

                Block::make('text_media')
                    ->label('Text & Media (Split Layout)')
                    ->icon('heroicon-o-photo')
                    ->schema([
                        TextInput::make('badge')->label('Section Pill Badge')->columnSpan(1),
                        Select::make('layout')->label('Visual Placement')->options(['media_right' => 'Text on Left, Media on Right', 'media_left' => 'Media on Left, Text on Right', 'full_width' => 'Full Width Narrative'])->default('media_right')->columnSpan(1),
                        TextInput::make('title')->label('Main Section Heading')->required()->columnSpanFull(),
                        RichEditor::make('content')->label('Rich Text Content')->columnSpanFull(),
                        Select::make('media_type')->label('Media Type')->options(['image' => 'Featured Image', 'video' => 'Video Embed / URL'])->default('image')->reactive(),
                        FileUpload::make('media_image')->label('Upload Media Image')->image()->preserveFilenames()->maxSize(2048)->imageEditor()->disk('public')->visibility('public')->directory('blocks/media')->visible(fn ($get) => ($get('media_type') ?? 'image') === 'image'),
                        TextInput::make('media_video_url')->label('Video URL / YouTube Embed')->placeholder('https://www.youtube.com/watch?v=...')->visible(fn ($get) => $get('media_type') === 'video'),
                    ])->columns(2),

                Block::make('features_grid')
                    ->label('Features / Grid Cards')
                    ->icon('heroicon-o-squares-2x2')
                    ->schema([
                        TextInput::make('badge')->label('Section Pill Badge')->columnSpan(1),
                        Select::make('columns')->label('Cards Per Row')->options(['2' => '2 Columns', '3' => '3 Columns (Standard)', '4' => '4 Columns (Compact)'])->default('3')->columnSpan(1),
                        TextInput::make('title')->label('Section Title')->required()->columnSpanFull(),
                        Textarea::make('subtitle')->label('Section Subtitle / Description')->rows(2)->columnSpanFull(),
                        Repeater::make('cards')->label('Grid Cards')->schema([
                            FileUpload::make('icon')->label('Card Icon / Thumbnail')->image()->preserveFilenames()->maxSize(2048)->imageEditor()->disk('public')->visibility('public')->directory('blocks/features'),
                            TextInput::make('title')->label('Card Title')->required(),
                            Textarea::make('description')->label('Card Description')->rows(2)->required(),
                            TextInput::make('link_url')->label('Optional Card Link URL'),
                        ])->columns(2)->reorderable()->cloneable()->columnSpanFull(),
                    ])->columns(2),

                Block::make('dynamic_repeater')
                    ->label('Dynamic Repeater (Preset Mode)')
                    ->icon('heroicon-o-list-bullet')
                    ->schema([
                        Select::make('repeater_type')->label('Display Mode / Preset')->options(['accordion_faqs' => 'Accordion / FAQs', 'key_stats' => 'Key Numerical Metrics', 'testimonials' => 'Testimonials Quotes', 'team_members' => 'Team & Leadership Grid'])->default('accordion_faqs')->required()->columnSpan(1),
                        TextInput::make('badge')->label('Section Pill Badge')->columnSpan(1),
                        TextInput::make('title')->label('Section Heading')->required()->columnSpanFull(),
                        Textarea::make('description')->label('Intro Description')->rows(2)->columnSpanFull(),
                        Repeater::make('items')->label('Repeater Entries')->schema([
                            TextInput::make('title')->label('Title / Question / Metric')->required(),
                            TextInput::make('subtitle')->label('Subtitle / Role / Label'),
                            Textarea::make('description')->label('Answer / Quote / Description')->rows(2),
                            FileUpload::make('image')->label('Entry Avatar / Icon')->image()->preserveFilenames()->maxSize(2048)->imageEditor()->disk('public')->visibility('public')->directory('blocks/repeater'),
                        ])->columns(2)->reorderable()->cloneable()->columnSpanFull(),
                    ])->columns(2),

                Block::make('global_component')
                    ->label('Global Shared Component (Reusable)')
                    ->icon('heroicon-o-puzzle-piece')
                    ->schema([
                        Select::make('component_key')->label('Select Reusable Central Component')->options([
                            'hero_section' => 'Hero Section (Main Headline, Globe & Press Ticker)',
                            'our_clients' => 'Our Clients (Logos Ticker & World Presence)',
                            'our_work' => 'Our Work Showcase (Featured Case Studies)',
                            'team' => 'Leadership & Team Profiles',
                            'testimonials' => 'Client Testimonial Showcase',
                            'client_reviews' => 'Client Reviews Infinite Marquee',
                            'blog_showcase' => 'Blog & Insights Showcase Section',
                            'contact_details' => 'Contact Info, Office Directory & Form',
                            'footer' => 'Global Footer & Newsletter Bar',
                        ])->required()->columnSpanFull(),
                        TextInput::make('custom_badge')->label('Optional Custom Badge Override'),
                        TextInput::make('custom_title')->label('Optional Custom Title Override'),
                        Toggle::make('is_visible')->label('Active / Visible')->default(true),
                    ])->columns(2),
            ]);
    }
}

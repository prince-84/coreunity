<?php

namespace App\Filament\Resources\Pages\Schemas;

use App\Filament\Components\BlocksBuilder;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Components\View;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use App\Models\Page;
use Illuminate\Support\Str;

class PageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Page')
                    ->columnSpanFull()
                    ->tabs([
                        Tab::make('General')
                            ->icon(Heroicon::Cog6Tooth)
                            ->schema([
                                Section::make('General Information')
                                    ->description('General configuration, auto slug, and visibility settings for this page.')
                                    ->schema([
                                        TextInput::make('title')
                                            ->required()
                                            ->label('Page Title (e.g. About Us)')
                                            ->live(onBlur: true)
                                            ->afterStateUpdated(function (Get $get, Set $set, ?string $state) {
                                                if (!$get('slug') && $state) {
                                                    $set('slug', Str::slug($state));
                                                }
                                            }),
                                        TextInput::make('slug')
                                            ->required()
                                            ->unique(ignoreRecord: true)
                                            ->label('Page Slug (e.g. about, services, custom-page)'),
                                        Toggle::make('show_in_navbar')
                                            ->default(false)
                                            ->label('Show in Header Navigation Menu'),
                                        TextInput::make('navbar_order')
                                            ->numeric()
                                            ->default(0)
                                            ->label('Navbar Order (0 = default)'),
                                        Toggle::make('is_published')
                                            ->default(true)
                                            ->label('Published / Visible'),
                                    ])->columns(2),
                            ]),

                        Tab::make('Content Blocks')
                            ->icon(Heroicon::Squares2x2)
                            ->schema([
                                Section::make('Drag-and-Drop Dynamic Block Builder')
                                    ->description('Create, reorder, and configure custom page sections using modular drag-and-drop blocks.')
                                    ->schema([
                                        BlocksBuilder::make('blocks')
                                            ->columnSpanFull(),
                                    ]),

                                Section::make('Page Content')
                                    ->description('Main text and flexible dynamic sections for this page.')
                                    ->schema([
                                        RichEditor::make('content')
                                            ->label('Main Page Content')
                                            ->columnSpanFull(),
                                        Repeater::make('sections')
                                            ->label('Dynamic Page Sections / Feature Blocks')
                                            ->schema([
                                                TextInput::make('badge')
                                                    ->label('Section Badge (e.g. OUR EXPERTISE)'),
                                                TextInput::make('title')
                                                    ->required()
                                                    ->label('Section Heading'),
                                                Textarea::make('description')
                                                    ->rows(3)
                                                    ->label('Section Body / Details'),
                                                FileUpload::make('image')
                                                    ->image()
                                                    ->preserveFilenames()
                                                    ->maxSize(2048)
                                                    ->imageEditor()
                                                    ->disk('public')
                                                    ->visibility('public')
                                                    ->directory('sections')
                                                    ->label('Section Image'),
                                                TextInput::make('button_text')
                                                    ->label('Button Text (Optional)'),
                                                TextInput::make('button_url')
                                                    ->label('Button URL (Optional)'),
                                            ])
                                            ->columns(2)
                                            ->columnSpanFull()
                                            ->collapsible()
                                            ->itemLabel(fn (array $state): ?string => $state['title'] ?? 'Section Block'),
                                    ]),
                            ]),

                        // Home Page Individual Section Tabs with Direct Inline Form Fields
                        Tab::make('Hero Section')
                            ->icon(Heroicon::Photo)
                            ->visible(fn (?Page $record) => $record?->slug === 'home' || $record === null)
                            ->schema([
                                Section::make('Hero Content')
                                    ->description('The main headline and text for the hero section.')
                                    ->schema([
                                        Textarea::make('hero_section.title')
                                            ->label('Headline Title')
                                            ->rows(3)
                                            ->columnSpanFull()
                                            ->helperText('You can use HTML tags like <br className="hidden md:block" /> or <br /> to break lines on desktop.'),
                                        TextInput::make('hero_section.subtitle')
                                            ->label('Subtitle')
                                            ->columnSpanFull()
                                            ->placeholder('Optional subtitle or secondary tagline'),
                                        Textarea::make('hero_section.description')
                                            ->label('Description')
                                            ->rows(3)
                                            ->columnSpanFull()
                                            ->placeholder('Optional description or brief overview'),
                                    ]),

                                Section::make('Call to Action')
                                    ->description('Configure the main button under the headline.')
                                    ->schema([
                                        TextInput::make('hero_section.button_text')
                                            ->default('Schedule a call')
                                            ->label('Button Text'),
                                        TextInput::make('hero_section.button_link')
                                            ->default('#contact')
                                            ->label('Button Link URL (e.g. #contact)'),
                                        FileUpload::make('hero_section.button_icon')
                                            ->image()
                                            ->preserveFilenames()
                                            ->maxSize(2048)
                                            ->imageEditor()
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('hero')
                                            ->label('Button Icon (Optional Avatar)'),
                                    ])->columns(3),

                                Section::make('Images & Visual Elements')
                                    ->description('Earth Globe, Global Presence tags, and client logo ticker.')
                                    ->schema([
                                        FileUpload::make('hero_section.image')
                                            ->image()
                                            ->preserveFilenames()
                                            ->maxSize(2048)
                                            ->imageEditor()
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('hero')
                                            ->label('Hero Main / Featured Image (Optional)')
                                            ->columnSpanFull(),

                                        FileUpload::make('hero_section.globe_image')
                                            ->image()
                                            ->preserveFilenames()
                                            ->maxSize(2048)
                                            ->imageEditor()
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('hero')
                                            ->label('Earth Globe Image')
                                            ->columnSpanFull(),

                                        Repeater::make('hero_section.global_presence')
                                            ->label('Global Presence Locations')
                                            ->schema([
                                                TextInput::make('country')
                                                    ->required()
                                                    ->label('Country Name (e.g. USA, UAE)'),
                                            ])
                                            ->collapsible()
                                            ->columnSpanFull(),

                                        FileUpload::make('hero_section.logo_ticker')
                                            ->image()
                                            ->multiple()
                                            ->reorderable()
                                            ->preserveFilenames()
                                            ->maxSize(2048)
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('hero')
                                            ->label('Legacy Logo Ticker Images (Optional)')
                                            ->columnSpanFull(),
                                    ]),

                                Section::make('Hero Media / Press Logos')
                                    ->description('Manage media, press, and client brand logos displayed below the hero.')
                                    ->schema([
                                        Repeater::make('hero_section.media_logos')
                                            ->label('Hero Press Logos')
                                            ->schema([
                                                FileUpload::make('image')
                                                    ->label('Logo Image')
                                                    ->image()
                                                    ->preserveFilenames()
                                                    ->maxSize(2048)
                                                    ->imageEditor()
                                                    ->disk('public')
                                                    ->visibility('public')
                                                    ->directory('hero/logos')
                                                    ->nullable(),
                                                TextInput::make('title')
                                                    ->label('Brand Name (e.g. Khaleej Times)')
                                                    ->required(),
                                                TextInput::make('url')
                                                    ->label('Website / Redirect URL')
                                                    ->placeholder('https://www.khaleejtimes.com'),
                                            ])
                                            ->columns(3)
                                            ->reorderableWithDragAndDrop()
                                            ->collapsible()
                                            ->itemLabel(fn (array $state): ?string => $state['title'] ?? ($state['brand_name'] ?? 'Press Logo'))
                                            ->columnSpanFull(),
                                    ]),
                            ]),

                        Tab::make('Services Highlights')
                            ->icon(Heroicon::Sparkles)
                            ->visible(fn (?Page $record) => $record?->slug === 'home' || $record === null)
                            ->schema([
                                Section::make('Section Header')
                                    ->description('Section badge, headline, and display status.')
                                    ->schema([
                                        TextInput::make('services_section.mini_title')
                                            ->label('Badge / Mini Title')
                                            ->default('Digital Marketing Services'),
                                        TextInput::make('services_section.main_title')
                                            ->label('Main Headline')
                                            ->default('How Our Agency Helps You Scale'),
                                        Toggle::make('services_section.is_active')
                                            ->label('Active / Visible on Home Page')
                                            ->default(true),
                                    ])->columns(3),

                                Section::make('Card 1: Websites & Branding')
                                    ->description('First service card (left).')
                                    ->collapsible()
                                    ->schema([
                                        FileUpload::make('services_section.card_1_icon')
                                            ->label('Card Icon (Logo)')
                                            ->image()
                                            ->preserveFilenames()
                                            ->maxSize(2048)
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('services'),
                                        TextInput::make('services_section.card_1_title')
                                            ->label('Card Title')
                                            ->default("WEBSITES &\nBRANDING"),
                                        Textarea::make('services_section.card_1_description')
                                            ->label('Card Description')
                                            ->default('From branding to websites, every design is built to attract, engage, and convert.')
                                            ->rows(3),
                                        FileUpload::make('services_section.card_1_image')
                                            ->label('Mockup / Preview Image')
                                            ->image()
                                            ->preserveFilenames()
                                            ->maxSize(2048)
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('services'),
                                    ])->columns(2),

                                Section::make('Card 2: Growth Strategy (Interactive Links Card)')
                                    ->description('Center card with background image and strategic pills.')
                                    ->collapsible()
                                    ->schema([
                                        FileUpload::make('services_section.card_2_bg_image')
                                            ->label('Card Background Image')
                                            ->image()
                                            ->preserveFilenames()
                                            ->maxSize(2048)
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('services'),
                                        TextInput::make('services_section.card_2_title_highlight')
                                            ->label('Title Red Highlight Word')
                                            ->default('GROWTH'),
                                        TextInput::make('services_section.card_2_title_main')
                                            ->label('Title Main Word')
                                            ->default('STRATEGY'),
                                        Repeater::make('services_section.card_2_links')
                                            ->label('Growth Strategy Link Pills')
                                            ->schema([
                                                TextInput::make('label')
                                                    ->label('Pill Text')
                                                    ->required(),
                                            ])
                                            ->columnSpanFull(),
                                    ])->columns(3),

                                Section::make('Card 3: Digital Marketing')
                                    ->description('Third service card (right).')
                                    ->collapsible()
                                    ->schema([
                                        FileUpload::make('services_section.card_3_icon')
                                            ->label('Card Icon (Logo)')
                                            ->image()
                                            ->preserveFilenames()
                                            ->maxSize(2048)
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('services'),
                                        TextInput::make('services_section.card_3_title')
                                            ->label('Card Title')
                                            ->default('DIGITAL MARKETING'),
                                        Textarea::make('services_section.card_3_description')
                                            ->label('Card Description')
                                            ->default('Intent-driven marketing across SEO, CRO, social media, and PR that attracts attention and drives results.')
                                            ->rows(3),
                                        FileUpload::make('services_section.card_3_image')
                                            ->label('Mockup / Preview Image')
                                            ->image()
                                            ->preserveFilenames()
                                            ->maxSize(2048)
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('services'),
                                    ])->columns(2),
                            ]),

                        Tab::make('Core Strengths')
                            ->icon(Heroicon::ShieldCheck)
                            ->visible(fn (?Page $record) => $record?->slug === 'home' || $record === null)
                            ->schema([
                                Section::make('Section Header')
                                    ->description('Badge, main headline, and section visibility.')
                                    ->schema([
                                        TextInput::make('core_strengths_section.mini_title')
                                            ->label('Badge / Mini Title')
                                            ->default('Our Core Strengths'),
                                        TextInput::make('core_strengths_section.main_title')
                                            ->label('Main Section Headline')
                                            ->default('What Makes Our Digital Marketing Agency Stand Out?')
                                            ->columnSpan(2),
                                        FileUpload::make('core_strengths_section.bg_image')
                                            ->label('Right Background Pattern Image')
                                            ->image()
                                            ->preserveFilenames()
                                            ->maxSize(2048)
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('strengths'),
                                        Toggle::make('core_strengths_section.is_active')
                                            ->label('Active / Visible on Home Page')
                                            ->default(true),
                                    ])->columns(2),

                                Section::make('6 Key Strength Points')
                                    ->description('Editable strength blocks: 01 to 06 with number, title, and description.')
                                    ->schema([
                                        Repeater::make('core_strengths_section.points')
                                            ->label('Strength Points (01 to 06)')
                                            ->schema([
                                                TextInput::make('number')
                                                    ->label('Number Badge (e.g. 01)')
                                                    ->required(),
                                                TextInput::make('title')
                                                    ->label('Strength Title')
                                                    ->required(),
                                                Textarea::make('description')
                                                    ->label('Brief Description')
                                                    ->required()
                                                    ->rows(2)
                                                    ->columnSpanFull(),
                                            ])
                                            ->columns(2)
                                            ->reorderable()
                                            ->collapsible()
                                            ->columnSpanFull(),
                                    ]),

                                Section::make('Center Collage (6 Images)')
                                    ->description('Center column marketing funnels, team, and client showcase collage images.')
                                    ->schema([
                                        FileUpload::make('core_strengths_section.collage_image_1')
                                            ->label('Collage Image 1 (Marketing Funnels)')
                                            ->image()
                                            ->preserveFilenames()
                                            ->maxSize(2048)
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('strengths'),
                                        FileUpload::make('core_strengths_section.collage_image_2')
                                            ->label('Collage Image 2 (Summer Collection)')
                                            ->image()
                                            ->preserveFilenames()
                                            ->maxSize(2048)
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('strengths'),
                                        FileUpload::make('core_strengths_section.collage_image_3')
                                            ->label('Collage Image 3 (Team Banner)')
                                            ->image()
                                            ->preserveFilenames()
                                            ->maxSize(2048)
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('strengths'),
                                        FileUpload::make('core_strengths_section.collage_image_4')
                                            ->label('Collage Image 4 (Business Woman)')
                                            ->image()
                                            ->preserveFilenames()
                                            ->maxSize(2048)
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('strengths'),
                                        FileUpload::make('core_strengths_section.collage_image_5')
                                            ->label('Collage Image 5 (Tech Products)')
                                            ->image()
                                            ->preserveFilenames()
                                            ->maxSize(2048)
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('strengths'),
                                        FileUpload::make('core_strengths_section.collage_image_6')
                                            ->label('Collage Image 6 (Fitness Marketing)')
                                            ->image()
                                            ->preserveFilenames()
                                            ->maxSize(2048)
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('strengths'),
                                    ])->columns(3),
                            ]),

                        // ==========================================
                        // About Page Section Tabs
                        // ==========================================
                        Tab::make('About Hero')
                            ->icon(Heroicon::Photo)
                            ->visible(fn (?Page $record) => $record?->slug === 'about')
                            ->schema([
                                Section::make('About Us Hero Header')
                                    ->description('Badge label with glowing red dot, main headline, and section active toggle.')
                                    ->schema([
                                        TextInput::make('about_hero.mini_title')
                                            ->label('Badge / Mini Title')
                                            ->default('About Us')
                                            ->required(),
                                        Toggle::make('about_hero.is_active')
                                            ->label('Active / Visible on About Us Page')
                                            ->default(true),
                                        Textarea::make('about_hero.main_title')
                                            ->label('Main Section Headline')
                                            ->default("From Dubai's best minds to\na global powerhouse")
                                            ->rows(3)
                                            ->required()
                                            ->columnSpanFull(),
                                    ])->columns(2),
                            ]),

                        Tab::make('About Intro')
                            ->icon(Heroicon::InformationCircle)
                            ->visible(fn (?Page $record) => $record?->slug === 'about')
                            ->schema([
                                Section::make('Headline & Visibility')
                                    ->description('Section main headline with red highlighted text and active toggle.')
                                    ->schema([
                                        TextInput::make('about_intro.title_prefix')
                                            ->label('Title Prefix')
                                            ->default('We are a')
                                            ->required(),
                                        TextInput::make('about_intro.title_highlight')
                                            ->label('Highlighted Text (Red Accent)')
                                            ->default('Creative Bold')
                                            ->required(),
                                        TextInput::make('about_intro.title_suffix')
                                            ->label('Title Suffix')
                                            ->default('Digital Agency based In UAE')
                                            ->required(),
                                        Toggle::make('about_intro.is_active')
                                            ->label('Active / Visible on About Us Page')
                                            ->default(true),
                                    ])->columns(2),

                                Section::make('Agency Narrative Copy')
                                    ->description('Detailed paragraphs describing agency credentials, experience, and global expansion.')
                                    ->schema([
                                        Textarea::make('about_intro.paragraph_1')
                                            ->label('First Paragraph')
                                            ->rows(4)
                                            ->helperText('Supports inline HTML formatting like <span> tags.')
                                            ->columnSpanFull(),
                                        Textarea::make('about_intro.paragraph_2')
                                            ->label('Second Paragraph')
                                            ->rows(4)
                                            ->helperText('Supports plain text or HTML formatting.')
                                            ->columnSpanFull(),
                                    ]),

                                Section::make('Media & Floating Badge')
                                    ->description('Right side team photo and floating logo badge overlay.')
                                    ->schema([
                                        FileUpload::make('about_intro.main_image')
                                            ->label('Main Team Image')
                                            ->image()
                                            ->preserveFilenames()
                                            ->maxSize(2048)
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('about'),
                                        FileUpload::make('about_intro.floating_bg_image')
                                            ->label('Floating Badge Background Texture')
                                            ->image()
                                            ->preserveFilenames()
                                            ->maxSize(2048)
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('about'),
                                        FileUpload::make('about_intro.floating_logo')
                                            ->label('Floating Badge Logo')
                                            ->image()
                                            ->preserveFilenames()
                                            ->maxSize(2048)
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('about'),
                                    ])->columns(3),
                            ]),

                        Tab::make('Values & Mission')
                            ->icon(Heroicon::Heart)
                            ->visible(fn (?Page $record) => $record?->slug === 'about')
                            ->schema([
                                Section::make('Section Header & Visual Settings')
                                    ->description('Main headline with red glow indicator and background pattern.')
                                    ->schema([
                                        Textarea::make('about_values.headline')
                                            ->label('Section Headline')
                                            ->rows(2)
                                            ->default("What Drives Us\nForward")
                                            ->required(),
                                        Toggle::make('about_values.is_active')
                                            ->label('Active / Visible on About Us Page')
                                            ->default(true),
                                        FileUpload::make('about_values.bg_image')
                                            ->label('Background Pattern Image')
                                            ->image()
                                            ->preserveFilenames()
                                            ->maxSize(2048)
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('about'),
                                        FileUpload::make('about_values.arrow_icon')
                                            ->label('Accordion Arrow Icon')
                                            ->image()
                                            ->preserveFilenames()
                                            ->maxSize(2048)
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('about'),
                                    ])->columns(2),

                                Section::make('Interactive Accordion Items')
                                    ->description('Manage Mission, Vision, Values, or add custom accordion entries.')
                                    ->schema([
                                        Repeater::make('about_values.items')
                                            ->label('Accordion Tabs')
                                            ->schema([
                                                TextInput::make('title')
                                                    ->label('Tab Title')
                                                    ->required()
                                                    ->placeholder('e.g. Our Mission, Our Vision, Our Values'),
                                                Textarea::make('description')
                                                    ->label('Tab Description Copy')
                                                    ->rows(3)
                                                    ->required(),
                                            ])
                                            ->reorderable()
                                            ->collapsible()
                                            ->itemLabel(fn (array $state): ?string => $state['title'] ?? null)
                                            ->columnSpanFull(),
                                    ]),
                            ]),

                        Tab::make('Industries We Serve')
                            ->icon(Heroicon::BuildingOffice2)
                            ->visible(fn (?Page $record) => $record?->slug === 'about')
                            ->schema([
                                Section::make('Section Header & Atmosphere')
                                    ->description('Badge label, main heading, and background texture.')
                                    ->schema([
                                        TextInput::make('about_industries.badge_text')
                                            ->label('Badge Text')
                                            ->default('Serving Diverse Sectors Across the UAE')
                                            ->required(),
                                        TextInput::make('about_industries.main_title')
                                            ->label('Main Title')
                                            ->default('Industries We Serve')
                                            ->required(),
                                        FileUpload::make('about_industries.bg_image')
                                            ->label('Background Texture')
                                            ->image()
                                            ->preserveFilenames()
                                            ->maxSize(2048)
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('about'),
                                        Toggle::make('about_industries.is_active')
                                            ->label('Active / Visible on About Us Page')
                                            ->default(true),
                                    ])->columns(2),

                                Section::make('Industry Cards Grid')
                                    ->description('Manage all industry cards, titles, descriptions, and icons.')
                                    ->schema([
                                        Repeater::make('about_industries.items')
                                            ->label('Industries')
                                            ->schema([
                                                TextInput::make('title')
                                                    ->label('Industry Title')
                                                    ->required(),
                                                Textarea::make('description')
                                                    ->label('Subtitle / Tagline')
                                                    ->rows(2)
                                                    ->required(),
                                                TextInput::make('icon')
                                                    ->label('Icon File Name / Asset')
                                                    ->placeholder('state_img.png, retail_img.png, health_img.png, etc.'),
                                            ])
                                            ->columns(3)
                                            ->reorderable()
                                            ->columnSpanFull(),
                                    ]),
                            ]),

                        // ==========================================
                        // Services Page Section Tabs
                        // ==========================================
                        Tab::make('Services Hero')
                            ->icon(Heroicon::Photo)
                            ->visible(fn (?Page $record) => $record?->slug === 'services')
                            ->schema([
                                Section::make('Services Hero Header')
                                    ->description('Badge label with glowing red dot, main headline, and section active toggle.')
                                    ->schema([
                                        TextInput::make('services_hero.mini_title')
                                            ->label('Badge / Mini Title')
                                            ->default('Services We Offer')
                                            ->required(),
                                        Toggle::make('services_hero.is_active')
                                            ->label('Active / Visible on Services Page')
                                            ->default(true),
                                        Textarea::make('services_hero.main_title')
                                            ->label('Main Section Headline')
                                            ->default("From Dubai's best minds to\na global powerhouse")
                                            ->rows(3)
                                            ->required()
                                            ->columnSpanFull(),
                                    ])->columns(2),
                            ]),

                        Tab::make('Services List')
                            ->icon(Heroicon::ListBullet)
                            ->visible(fn (?Page $record) => $record?->slug === 'services')
                            ->schema([
                                Section::make('Section Header')
                                    ->description('Section badge, heading, and visibility toggle.')
                                    ->schema([
                                        TextInput::make('services_list.mini_title')
                                            ->label('Badge / Mini Title')
                                            ->default('What We Offer')
                                            ->required(),
                                        Toggle::make('services_list.is_active')
                                            ->label('Active / Visible on Services Page')
                                            ->default(true),
                                        Textarea::make('services_list.main_title')
                                            ->label('Main Section Headline')
                                            ->default("Save time and grow your business\nwith our expert solutions")
                                            ->rows(2)
                                            ->required()
                                            ->columnSpanFull(),
                                        TextInput::make('services_list.button_text')
                                            ->label('Button Text')
                                            ->default('View all services'),
                                        TextInput::make('services_list.button_url')
                                            ->label('Button URL')
                                            ->default('/services/all'),
                                    ])->columns(2),

                                Section::make('Services List Cards')
                                    ->description('Interactive cards with hover transitions, number index, title, description, and link.')
                                    ->schema([
                                        Repeater::make('services_list.services')
                                            ->label('Services Items')
                                            ->schema([
                                                TextInput::make('num')
                                                    ->label('Index Number')
                                                    ->default('01')
                                                    ->required(),
                                                TextInput::make('title')
                                                    ->label('Service Title')
                                                    ->required(),
                                                TextInput::make('href')
                                                    ->label('Service Link / URL')
                                                    ->required(),
                                                Textarea::make('desc')
                                                    ->label('Description')
                                                    ->rows(3)
                                                    ->required()
                                                    ->columnSpanFull(),
                                            ])
                                            ->columns(3)
                                            ->reorderable()
                                            ->columnSpanFull(),
                                    ]),
                            ]),

                        Tab::make('Services Industries')
                            ->icon(Heroicon::BuildingOffice2)
                            ->visible(fn (?Page $record) => $record?->slug === 'services')
                            ->schema([
                                Section::make('Section Header')
                                    ->description('Badge label, section title, and active status.')
                                    ->schema([
                                        TextInput::make('services_industries.mini_title')
                                            ->label('Badge / Mini Title')
                                            ->default('Serving Diverse Sectors Across the UAE')
                                            ->required(),
                                        TextInput::make('services_industries.main_title')
                                            ->label('Main Title')
                                            ->default('Industries We Serve')
                                            ->required(),
                                        Toggle::make('services_industries.is_active')
                                            ->label('Active / Visible on Services Page')
                                            ->default(true),
                                    ])->columns(3),

                                Section::make('Red CTA Banner')
                                    ->description('Call to action banner displayed below the industries grid.')
                                    ->schema([
                                        TextInput::make('services_industries.cta_title')
                                            ->label('CTA Title')
                                            ->default('Ready to grow your brand?')
                                            ->required(),
                                        TextInput::make('services_industries.cta_subtitle')
                                            ->label('CTA Subtitle')
                                            ->default("Let's build a strategy that delivers real results.")
                                            ->required(),
                                        TextInput::make('services_industries.cta_button_text')
                                            ->label('Button Text')
                                            ->default('Connect with us')
                                            ->required(),
                                        TextInput::make('services_industries.cta_button_url')
                                            ->label('Button URL')
                                            ->default('/contact')
                                            ->required(),
                                    ])->columns(2),

                                Section::make('Industries Grid (8 Cards)')
                                    ->description('Customizable industry cards with title, description, and asset icon.')
                                    ->schema([
                                        Repeater::make('services_industries.industries')
                                            ->label('Industries List')
                                            ->schema([
                                                TextInput::make('title')
                                                    ->label('Industry Title')
                                                    ->required(),
                                                TextInput::make('icon')
                                                    ->label('Icon Asset Name or Path')
                                                    ->placeholder('state_img.png, retail_img.png, health_img.png'),
                                            ])
                                            ->columns(2)
                                            ->reorderable()
                                            ->columnSpanFull(),
                                    ]),
                            ]),

                        Tab::make('SMM Growth')
                            ->icon(Heroicon::ChartBar)
                            ->visible(fn (?Page $record) => $record?->slug === 'services')
                            ->schema([
                                Section::make('SMM Growth Header & Copy')
                                    ->description('Section title, descriptive text, and visibility toggle.')
                                    ->schema([
                                        Toggle::make('services_smm.is_active')
                                            ->label('Active / Visible on Services Page')
                                            ->default(true),
                                        Textarea::make('services_smm.main_title')
                                            ->label('Section Headline')
                                            ->default("Experience Growth\nwith Leading SMM")
                                            ->rows(2)
                                            ->required()
                                            ->columnSpanFull(),
                                        Textarea::make('services_smm.description')
                                            ->label('Paragraph / Copy')
                                            ->rows(3)
                                            ->required()
                                            ->columnSpanFull(),
                                    ]),

                                Section::make('Stats Grid (4 Metrics)')
                                    ->description('Key performance numbers and labels.')
                                    ->schema([
                                        Repeater::make('services_smm.stats')
                                            ->label('Statistics List')
                                            ->schema([
                                                TextInput::make('stat_number')
                                                    ->label('Stat Value / Number')
                                                    ->required(),
                                                TextInput::make('stat_label')
                                                    ->label('Metric Label')
                                                    ->required(),
                                                Toggle::make('is_highlighted')
                                                    ->label('Highlight Card (White/Red Card)'),
                                            ])
                                            ->columns(3)
                                            ->reorderable()
                                            ->columnSpanFull(),
                                    ]),
                            ]),

                        // ==========================================
                        // Case Study Page Section Tab
                        // ==========================================
                        Tab::make('Case Study Hero')
                            ->icon(Heroicon::Photo)
                            ->visible(fn (?Page $record) => $record?->slug === 'case-study')
                            ->schema([
                                Section::make('Case Study Hero Header')
                                    ->description('Badge label with glowing red dot, main headline, narrative description, and active status toggle.')
                                    ->schema([
                                        TextInput::make('case_study_hero.mini_title')
                                            ->label('Badge / Mini Title')
                                            ->default('Case Studies')
                                            ->required(),
                                        Toggle::make('case_study_hero.is_active')
                                            ->label('Active / Visible on Case Study Page')
                                            ->default(true),
                                        Textarea::make('case_study_hero.main_title')
                                            ->label('Main Section Headline')
                                            ->rows(3)
                                            ->required()
                                            ->columnSpanFull(),
                                        Textarea::make('case_study_hero.description')
                                            ->label('Intro Narrative / Sub-description')
                                            ->rows(3)
                                            ->columnSpanFull(),
                                    ])->columns(2),
                            ]),

                        // ==========================================
                        // Blog Page Section Tab
                        // ==========================================
                        Tab::make('Blog Hero')
                            ->icon(Heroicon::Photo)
                            ->visible(fn (?Page $record) => $record?->slug === 'blog')
                            ->schema([
                                Section::make('Blog Hero Header')
                                    ->description('Badge label with glowing red dot, main headline, narrative description, and active status toggle.')
                                    ->schema([
                                        TextInput::make('blog_hero.mini_title')
                                            ->label('Badge / Mini Title')
                                            ->default('Our Blogs')
                                            ->required(),
                                        Toggle::make('blog_hero.is_active')
                                            ->label('Active / Visible on Blog Page')
                                            ->default(true),
                                        Textarea::make('blog_hero.main_title')
                                            ->label('Main Section Headline')
                                            ->rows(3)
                                            ->required()
                                            ->columnSpanFull(),
                                        Textarea::make('blog_hero.description')
                                            ->label('Intro Narrative / Sub-description')
                                            ->rows(3)
                                            ->columnSpanFull(),
                                    ])->columns(2),
                            ]),

                        // ==========================================
                        // Contact Page Section Tabs
                        // ==========================================
                        Tab::make('Contact Hero')
                            ->icon(Heroicon::Photo)
                            ->visible(fn (?Page $record) => $record?->slug === 'contact')
                            ->schema([
                                Section::make('Contact Hero Header')
                                    ->description('Badge label with glowing red dot, main headline, and visibility toggle.')
                                    ->schema([
                                        TextInput::make('contact_hero.mini_title')
                                            ->label('Badge / Mini Title')
                                            ->default('Contact Us')
                                            ->required(),
                                        Toggle::make('contact_hero.is_active')
                                            ->label('Active / Visible on Contact Page')
                                            ->default(true),
                                        Textarea::make('contact_hero.main_title')
                                            ->label('Main Section Headline')
                                            ->rows(3)
                                            ->required()
                                            ->columnSpanFull(),
                                    ])->columns(2),
                            ]),

                        Tab::make('Contact Details')
                            ->icon(Heroicon::Phone)
                            ->visible(fn (?Page $record) => $record?->slug === 'contact')
                            ->schema([
                                Section::make('Left Header & Copy')
                                    ->description('Headline with custom highlight word, description paragraph, and active toggle.')
                                    ->schema([
                                        TextInput::make('contact_details.title_prefix')
                                            ->label('Title Prefix')
                                            ->default('Get')
                                            ->required(),
                                        TextInput::make('contact_details.title_highlight')
                                            ->label('Highlighted Word (Red)')
                                            ->default('with')
                                            ->required(),
                                        TextInput::make('contact_details.title_suffix')
                                            ->label('Title Suffix')
                                            ->default('us')
                                            ->required(),
                                        Toggle::make('contact_details.is_active')
                                            ->label('Active / Visible on Contact Page')
                                            ->default(true),
                                        Textarea::make('contact_details.description')
                                            ->label('Description Paragraph')
                                            ->rows(3)
                                            ->required()
                                            ->columnSpanFull(),
                                    ])->columns(4),

                                Section::make('Contact Information Cards & Form')
                                    ->description('Agency direct phone number, email address, Dubai office location, and submit button.')
                                    ->schema([
                                        TextInput::make('contact_details.phone')
                                            ->label('Direct Phone Number')
                                            ->default('+971 50 555 9646'),
                                        TextInput::make('contact_details.email')
                                            ->label('Direct Email Address')
                                            ->email(),
                                        TextInput::make('contact_details.address')
                                            ->label('Office Address')
                                            ->columnSpanFull(),
                                        TextInput::make('contact_details.submit_button_text')
                                            ->label('Submit Button Label')
                                            ->default('Submit Message'),
                                    ])->columns(2),
                            ]),

                        Tab::make('SEO & Meta')
                            ->icon(Heroicon::MagnifyingGlass)
                            ->schema([
                                Section::make('SEO & Meta Information')
                                    ->description('Search engine optimization fields.')
                                    ->schema([
                                        TextInput::make('meta_title')
                                            ->label('SEO Meta Title'),
                                        Textarea::make('meta_description')
                                            ->rows(2)
                                            ->columnSpanFull()
                                            ->label('SEO Meta Description'),
                                    ])->columns(1),
                            ]),
                    ]),
            ]);
    }
}

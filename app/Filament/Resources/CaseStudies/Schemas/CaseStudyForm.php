<?php

namespace App\Filament\Resources\CaseStudies\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Illuminate\Support\Str;

class CaseStudyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Case Study')
                    ->columnSpanFull()
                    ->tabs([
                        Tab::make('Content')
                            ->icon(Heroicon::DocumentText)
                            ->schema([
                                Section::make('Core Project Information')
                                    ->description('Essential case study client, title, and metadata.')
                                    ->schema([
                                        TextInput::make('project_title')
                                            ->required()
                                            ->label('Project Title')
                                            ->placeholder('e.g. UrbanCart: Mobile Shopping Platform')
                                            ->live(onBlur: true)
                                            ->afterStateUpdated(function (Get $get, Set $set, ?string $state) {
                                                if (!$get('slug') && $state) {
                                                    $set('slug', Str::slug($state));
                                                }
                                                if (!$get('title')) {
                                                    $set('title', $state);
                                                }
                                            }),

                                        TextInput::make('title')
                                            ->label('Display Title / Sub-Headline')
                                            ->placeholder('e.g. UrbanCart: Streamlining Retail with Custom Mobile App'),

                                        TextInput::make('slug')
                                            ->required()
                                            ->unique(ignoreRecord: true)
                                            ->label('URL Slug')
                                            ->placeholder('e.g. mobile-app or urbancart'),

                                        TextInput::make('client_name')
                                            ->required()
                                            ->label('Client Name / Brand')
                                            ->placeholder('e.g. UrbanCart UAE'),

                                        TextInput::make('badge')
                                            ->label('Hero Pill Badge')
                                            ->default('Case Study (Mobile App Development)')
                                            ->placeholder('e.g. Case Study (Website Redesign)'),

                                        TextInput::make('category')
                                            ->label('Category / Sector')
                                            ->placeholder('e.g. Mobile App, E-Commerce, Retail'),

                                        Toggle::make('is_published')
                                            ->label('Published & Live')
                                            ->default(true),

                                        TextInput::make('sort_order')
                                            ->numeric()
                                            ->default(0)
                                            ->label('Sort Order (0 = First)'),

                                        Textarea::make('excerpt')
                                            ->label('Case Study Excerpt / Sub-Description')
                                            ->rows(3)
                                            ->columnSpanFull()
                                            ->placeholder('Concise summary displayed in hero banner and portfolio showcase cards...'),
                                    ])->columns(3),

                                Section::make('Drag-and-Drop Dynamic Block Builder')
                                    ->description('Create, reorder, and configure custom case study sections using modular drag-and-drop blocks.')
                                    ->schema([
                                        \App\Filament\Components\BlocksBuilder::make('blocks')
                                            ->columnSpanFull(),
                                    ]),

                                Section::make('Overview, Challenge & Solution Content')
                                    ->description('In-depth story of the client transformation.')
                                    ->schema([
                                        RichEditor::make('content')
                                            ->label('Project Overview & Story')
                                            ->placeholder('Detailed narrative of background, client goals, and context...')
                                            ->columnSpanFull(),

                                        RichEditor::make('challenge_text')
                                            ->label('Business Challenge')
                                            ->placeholder('What obstacles, bottlenecks, or market issues did the client face?')
                                            ->columnSpanFull(),

                                        RichEditor::make('solution_text')
                                            ->label('Strategic Solution & Execution')
                                            ->placeholder('How did CoreUnity design, engineer, and deploy the solution?')
                                            ->columnSpanFull(),
                                    ]),
                            ]),

                        Tab::make('Highlights & FAQs')
                            ->icon(Heroicon::ListBullet)
                            ->schema([
                                Section::make('Key Highlights / Capabilities Executed')
                                    ->description('Specific features, strategies, or deliverables developed.')
                                    ->schema([
                                        Repeater::make('highlights')
                                            ->label('Key Capabilities & Features')
                                            ->schema([
                                                TextInput::make('icon')
                                                    ->label('Bullet / Icon')
                                                    ->default('✓'),
                                                TextInput::make('title')
                                                    ->label('Highlight Title')
                                                    ->required()
                                                    ->placeholder('e.g. Intuitive Product Browsing'),
                                                Textarea::make('description')
                                                    ->label('Details / Description')
                                                    ->rows(2)
                                                    ->placeholder('e.g. Advanced search, filtering, and rapid category access.'),
                                            ])
                                            ->columns(3)
                                            ->collapsible()
                                            ->defaultItems(0)
                                            ->reorderable()
                                            ->columnSpanFull(),
                                    ]),

                                Section::make('Project Stats / Measurable Results')
                                    ->description('Key performance indicators and business growth metrics.')
                                    ->schema([
                                        Repeater::make('stats')
                                            ->label('Key Metrics & KPI Results')
                                            ->schema([
                                                TextInput::make('number')
                                                    ->label('Number / Stat')
                                                    ->required()
                                                    ->placeholder('e.g. 145%, 40%, 68%'),
                                                TextInput::make('label')
                                                    ->label('Metric Label')
                                                    ->required()
                                                    ->placeholder('e.g. Booking Surge, App Sales Share, Faster Speed'),
                                            ])
                                            ->columns(2)
                                            ->collapsible()
                                            ->defaultItems(0)
                                            ->reorderable()
                                            ->columnSpanFull(),
                                    ]),

                                Section::make('Accordion / FAQs Section')
                                    ->description('Detailed breakdown FAQs or project methodology phases.')
                                    ->schema([
                                        Repeater::make('faqs')
                                            ->label('Project FAQs / Accordion Topics')
                                            ->schema([
                                                TextInput::make('question')
                                                    ->label('Question / Heading')
                                                    ->required(),
                                                Textarea::make('answer')
                                                    ->label('Answer / Details')
                                                    ->rows(3)
                                                    ->required(),
                                            ])
                                            ->collapsible()
                                            ->defaultItems(0)
                                            ->reorderable()
                                            ->columnSpanFull(),
                                    ]),
                            ]),

                        Tab::make('Media')
                            ->icon(Heroicon::Photo)
                            ->schema([
                                Section::make('Hero Visuals & Media')
                                    ->description('Primary preview imagery, mockups, and banner graphics.')
                                    ->schema([
                                        FileUpload::make('featured_image')
                                            ->image()
                                            ->preserveFilenames()
                                            ->maxSize(2048)
                                            ->imageEditor()
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('casestudies/featured')
                                            ->label('Featured Thumbnail Image'),

                                        FileUpload::make('hero_image')
                                            ->image()
                                            ->preserveFilenames()
                                            ->maxSize(2048)
                                            ->imageEditor()
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('casestudies/banners')
                                            ->label('Hero Banner / Main Mockup Image'),
                                    ])->columns(2),

                                Section::make('Project Gallery & Screenshots')
                                    ->description('Interactive mockups, interface captures, and design assets.')
                                    ->schema([
                                        FileUpload::make('gallery')
                                            ->label('Gallery Screenshots')
                                            ->multiple()
                                            ->image()
                                            ->preserveFilenames()
                                            ->maxSize(2048)
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('casestudies/gallery')
                                            ->columnSpanFull(),
                                    ]),
                            ]),

                        Tab::make('SEO')
                            ->icon(Heroicon::MagnifyingGlass)
                            ->schema([
                                Section::make('Meta & SEO Information')
                                    ->description('Metadata for search engine optimization.')
                                    ->collapsible()
                                    ->schema([
                                        TextInput::make('meta_title')
                                            ->label('SEO Meta Title')
                                            ->placeholder('e.g. Mobile App Development Case Study | UrbanCart UAE'),
                                        Textarea::make('meta_description')
                                            ->label('SEO Meta Description')
                                            ->rows(2)
                                            ->placeholder('e.g. Discover how UrbanCart achieved 40% sales share with custom mobile app...'),
                                        FileUpload::make('og_image')
                                            ->image()
                                            ->preserveFilenames()
                                            ->maxSize(2048)
                                            ->imageEditor()
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('casestudies/seo')
                                            ->label('Social Share (OG) Image'),
                                    ])->columns(2),
                            ]),
                    ]),
            ]);
    }
}

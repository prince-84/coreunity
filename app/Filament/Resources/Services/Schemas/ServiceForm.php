<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Forms\Components\FileUpload;
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

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Service')
                    ->columnSpanFull()
                    ->tabs([
                        Tab::make('Content')
                            ->icon(Heroicon::DocumentText)
                            ->schema([
                                Section::make('Core Service Information')
                                    ->description('Essential service identifiers, titles, and categorization.')
                                    ->schema([
                                        TextInput::make('title')
                                            ->required()
                                            ->label('Service Title')
                                            ->placeholder('e.g. Web Development & Engineering')
                                            ->live(onBlur: true)
                                            ->afterStateUpdated(function (Get $get, Set $set, ?string $state) {
                                                if (!$get('slug') && $state) {
                                                    $set('slug', Str::slug($state));
                                                }
                                            }),

                                        TextInput::make('slug')
                                            ->required()
                                            ->unique(ignoreRecord: true)
                                            ->label('URL Slug')
                                            ->placeholder('e.g. web-development'),

                                        TextInput::make('badge')
                                            ->label('Hero Pill Badge')
                                            ->default('Your Digital Partner')
                                            ->placeholder('e.g. High-Performance Web Solutions'),

                                        TextInput::make('category')
                                            ->label('Service Category / Domain')
                                            ->placeholder('e.g. Engineering & Development'),

                                        TextInput::make('client_info')
                                            ->label('Client / Target Audience Info')
                                            ->placeholder('e.g. Enterprises & High-Growth Startups'),

                                        Toggle::make('is_published')
                                            ->label('Published & Live')
                                            ->default(true),

                                        TextInput::make('sort_order')
                                            ->numeric()
                                            ->default(0)
                                            ->label('Sort Order (0 = First)'),

                                        Textarea::make('excerpt')
                                            ->label('Hero Subheading / Brief Summary')
                                            ->rows(3)
                                            ->columnSpanFull()
                                            ->placeholder('Concise summary displayed in hero banner and catalog cards...'),
                                    ])->columns(3),

                                Section::make('Drag-and-Drop Dynamic Block Builder')
                                    ->description('Create, reorder, and configure custom service sections using modular drag-and-drop blocks.')
                                    ->schema([
                                        \App\Filament\Components\BlocksBuilder::make('blocks')
                                            ->columnSpanFull(),
                                    ]),

                                Section::make('Main Content & Detailed Overview')
                                    ->description('Primary rich text narrative describing capabilities and methodologies.')
                                    ->schema([
                                        RichEditor::make('content')
                                            ->label('Main Body Content')
                                            ->placeholder('Write comprehensive service descriptions, technology stacks, and value propositions...')
                                            ->columnSpanFull(),
                                    ]),
                            ]),

                        Tab::make('Highlights & FAQs')
                            ->icon(Heroicon::ListBullet)
                            ->schema([
                                Section::make('Key Highlights / Features List')
                                    ->description('Bullet points or feature cards highlighting key strengths.')
                                    ->schema([
                                        Repeater::make('highlights')
                                            ->label('Highlights & Features')
                                            ->schema([
                                                TextInput::make('icon')
                                                    ->label('Icon / Bullet')
                                                    ->default('✓')
                                                    ->placeholder('e.g. ✓ or SVG URL'),
                                                TextInput::make('title')
                                                    ->label('Feature Title')
                                                    ->required()
                                                    ->placeholder('e.g. Clean, Scalable Code'),
                                                Textarea::make('description')
                                                    ->label('Feature Description')
                                                    ->rows(2)
                                                    ->placeholder('e.g. Built for speed, high concurrency, and SEO optimization.'),
                                            ])
                                            ->columns(3)
                                            ->collapsible()
                                            ->defaultItems(0)
                                            ->reorderable()
                                            ->columnSpanFull(),
                                    ]),

                                Section::make('Project Stats / Results')
                                    ->description('Quantifiable impact numbers, metrics, and KPI achievements.')
                                    ->schema([
                                        Repeater::make('stats')
                                            ->label('Performance Metrics')
                                            ->schema([
                                                TextInput::make('number')
                                                    ->label('Number / Stat')
                                                    ->required()
                                                    ->placeholder('e.g. 150+, 4.9/5, 68%'),
                                                TextInput::make('label')
                                                    ->label('Metric Label')
                                                    ->required()
                                                    ->placeholder('e.g. Faster Page Load, Client Satisfaction'),
                                            ])
                                            ->columns(2)
                                            ->collapsible()
                                            ->defaultItems(0)
                                            ->reorderable()
                                            ->columnSpanFull(),
                                    ]),

                                Section::make('Accordion / FAQs Section')
                                    ->description('Interactive collapsible questions, answers, and deep-dive topics.')
                                    ->schema([
                                        Repeater::make('faqs')
                                            ->label('Accordion Items / FAQs')
                                            ->schema([
                                                TextInput::make('question')
                                                    ->label('Question / Topic Heading')
                                                    ->required()
                                                    ->placeholder('e.g. How long does a full custom web app take to build?'),
                                                Textarea::make('answer')
                                                    ->label('Answer / Topic Details')
                                                    ->rows(3)
                                                    ->required()
                                                    ->placeholder('e.g. Typical enterprise projects range between 6 to 12 weeks...'),
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
                                Section::make('Banners & Media')
                                    ->description('Featured visuals and hero graphics for this service.')
                                    ->schema([
                                        FileUpload::make('featured_image')
                                            ->image()
                                            ->preserveFilenames()
                                            ->maxSize(2048)
                                            ->imageEditor()
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('services/images')
                                            ->label('Featured Thumbnail Image'),

                                        FileUpload::make('hero_banner')
                                            ->image()
                                            ->preserveFilenames()
                                            ->maxSize(2048)
                                            ->imageEditor()
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('services/banners')
                                            ->label('Hero Banner / Mockup Graphics'),
                                    ])->columns(2),

                                Section::make('Dynamic Gallery / Media Attachments')
                                    ->description('Supporting product mockups, wireframes, or deliverable screenshots.')
                                    ->schema([
                                        FileUpload::make('gallery')
                                            ->label('Gallery Images')
                                            ->multiple()
                                            ->image()
                                            ->preserveFilenames()
                                            ->maxSize(2048)
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('services/gallery')
                                            ->columnSpanFull(),
                                    ]),
                            ]),

                        Tab::make('SEO')
                            ->icon(Heroicon::MagnifyingGlass)
                            ->schema([
                                Section::make('Meta & SEO Information')
                                    ->description('Search engine optimization metadata for this service page.')
                                    ->collapsible()
                                    ->schema([
                                        TextInput::make('meta_title')
                                            ->label('SEO Meta Title')
                                            ->placeholder('e.g. Web Development Company in Dubai | CoreUnity Solutions'),
                                        Textarea::make('meta_description')
                                            ->label('SEO Meta Description')
                                            ->rows(2)
                                            ->placeholder('e.g. Top web development agency in UAE offering modern web apps...'),
                                        FileUpload::make('og_image')
                                            ->image()
                                            ->preserveFilenames()
                                            ->maxSize(2048)
                                            ->imageEditor()
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('services/seo')
                                            ->label('OpenGraph (Social Share) Image'),
                                    ])->columns(2),
                            ]),
                    ]),
            ]);
    }
}

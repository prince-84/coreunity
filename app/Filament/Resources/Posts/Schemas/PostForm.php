<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
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

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Post')
                    ->columnSpanFull()
                    ->tabs([
                        Tab::make('Content')
                            ->icon(Heroicon::DocumentText)
                            ->schema([
                                Section::make('Core Article Details')
                                    ->description('Essential article titles, authors, and categorization.')
                                    ->schema([
                                        TextInput::make('title')
                                            ->required()
                                            ->label('Article Title')
                                            ->placeholder('e.g. How to Get Your Local Business on Google Maps (Step-by-Step)')
                                            ->live(onBlur: true)
                                            ->afterStateUpdated(function (Get $get, Set $set, ?string $state) {
                                                if (!$get('slug') && $state) {
                                                    $set('slug', Str::slug($state));
                                                }
                                            })
                                            ->columnSpan(2),

                                        TextInput::make('slug')
                                            ->required()
                                            ->unique(ignoreRecord: true)
                                            ->label('URL Slug')
                                            ->placeholder('e.g. local-business-on-google-maps'),

                                        TextInput::make('badge')
                                            ->label('Hero Pill Badge')
                                            ->default('Our Blogs')
                                            ->placeholder('e.g. Local SEO Guide'),

                                        TextInput::make('category')
                                            ->label('Article Category')
                                            ->placeholder('e.g. Local SEO, Paid Marketing, Web Design'),

                                        TextInput::make('author_name')
                                            ->label('Author / Team Name')
                                            ->default('CoreUnity Team')
                                            ->placeholder('e.g. CoreUnity Digital Team'),

                                        Toggle::make('is_published')
                                            ->label('Published & Live')
                                            ->default(true),

                                        TextInput::make('sort_order')
                                            ->numeric()
                                            ->default(0)
                                            ->label('Sort Order (0 = First)'),

                                        Textarea::make('excerpt')
                                            ->label('Article Excerpt / Brief Summary')
                                            ->rows(3)
                                            ->columnSpanFull()
                                            ->placeholder('Short summary shown on blog list cards and hero header...'),
                                    ])->columns(3),

                                Section::make('Drag-and-Drop Dynamic Block Builder')
                                    ->description('Create, reorder, and configure custom blog sections using modular drag-and-drop blocks.')
                                    ->schema([
                                        \App\Filament\Components\BlocksBuilder::make('blocks')
                                            ->columnSpanFull(),
                                    ]),

                                Section::make('Main Article Body')
                                    ->description('Full rich text article content with headings, lists, and formatting.')
                                    ->schema([
                                        RichEditor::make('content')
                                            ->label('Article Content')
                                            ->placeholder('Write your comprehensive in-depth guide or industry article here...')
                                            ->columnSpanFull(),
                                    ]),
                            ]),

                        Tab::make('Highlights & FAQs')
                            ->icon(Heroicon::ListBullet)
                            ->schema([
                                Section::make('Key Highlights / Key Takeaways')
                                    ->description('Summary bullet points, steps, or featured highlights.')
                                    ->schema([
                                        Repeater::make('highlights')
                                            ->label('Key Highlights / Takeaways')
                                            ->schema([
                                                TextInput::make('icon')
                                                    ->label('Bullet Icon')
                                                    ->default('✓'),
                                                TextInput::make('title')
                                                    ->label('Highlight Title')
                                                    ->required()
                                                    ->placeholder('e.g. Step 1: Claim Your Listing'),
                                                Textarea::make('description')
                                                    ->label('Details')
                                                    ->rows(2)
                                                    ->placeholder('e.g. Search for your business on Google Maps and verify ownership.'),
                                            ])
                                            ->columns(3)
                                            ->collapsible()
                                            ->defaultItems(0)
                                            ->reorderable()
                                            ->columnSpanFull(),
                                    ]),

                                Section::make('Project Stats / Impact Numbers')
                                    ->description('Key statistics, growth metrics, or benchmark data.')
                                    ->schema([
                                        Repeater::make('stats')
                                            ->label('Key Metrics & Data')
                                            ->schema([
                                                TextInput::make('number')
                                                    ->label('Metric / Number')
                                                    ->required()
                                                    ->placeholder('e.g. 250%, 70%, 10 Steps'),
                                                TextInput::make('label')
                                                    ->label('Metric Description')
                                                    ->required()
                                                    ->placeholder('e.g. Increase in Maps Searches, Competitor Adoption'),
                                            ])
                                            ->columns(2)
                                            ->collapsible()
                                            ->defaultItems(0)
                                            ->reorderable()
                                            ->columnSpanFull(),
                                    ]),

                                Section::make('Accordion / Frequently Asked Questions')
                                    ->description('Article FAQs and deep-dive question accordions.')
                                    ->schema([
                                        Repeater::make('faqs')
                                            ->label('Article FAQs')
                                            ->schema([
                                                TextInput::make('question')
                                                    ->label('Question')
                                                    ->required()
                                                    ->placeholder('e.g. How long does Google Maps verification take?'),
                                                Textarea::make('answer')
                                                    ->label('Answer')
                                                    ->rows(3)
                                                    ->required()
                                                    ->placeholder('e.g. Verification can take between 5 business days for postcards or instantly via phone.'),
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
                                Section::make('Featured Graphics & Banners')
                                    ->description('Visual imagery, article cover, and hero graphics.')
                                    ->schema([
                                        FileUpload::make('featured_image')
                                            ->image()
                                            ->preserveFilenames()
                                            ->maxSize(2048)
                                            ->imageEditor()
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('posts/featured')
                                            ->label('Featured Cover Image'),

                                        FileUpload::make('hero_banner')
                                            ->image()
                                            ->preserveFilenames()
                                            ->maxSize(2048)
                                            ->imageEditor()
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('posts/banners')
                                            ->label('Article Body Banner Graphic'),
                                    ])->columns(2),

                                Section::make('Dynamic Media Gallery')
                                    ->description('Supporting infographics, charts, and diagrams.')
                                    ->schema([
                                        FileUpload::make('gallery')
                                            ->label('Media Gallery')
                                            ->multiple()
                                            ->image()
                                            ->preserveFilenames()
                                            ->maxSize(2048)
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('posts/gallery')
                                            ->columnSpanFull(),
                                    ]),
                            ]),

                        Tab::make('SEO')
                            ->icon(Heroicon::MagnifyingGlass)
                            ->schema([
                                Section::make('Meta & SEO Information')
                                    ->description('Search engine optimization metadata for this blog post.')
                                    ->collapsible()
                                    ->schema([
                                        TextInput::make('meta_title')
                                            ->label('SEO Meta Title')
                                            ->placeholder('e.g. How to Get Your Local Business on Google Maps | CoreUnity'),
                                        Textarea::make('meta_description')
                                            ->label('SEO Meta Description')
                                            ->rows(2)
                                            ->placeholder('e.g. Complete step-by-step guide to local search dominance in UAE...'),
                                        FileUpload::make('og_image')
                                            ->image()
                                            ->preserveFilenames()
                                            ->maxSize(2048)
                                            ->imageEditor()
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('posts/seo')
                                            ->label('Social Share (OG) Image'),
                                    ])->columns(2),
                            ]),
                    ]),
            ]);
    }
}

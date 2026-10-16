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
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
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

                        Tab::make('Hero Banner')
                            ->icon(Heroicon::Photo)
                            ->schema([
                                Section::make('Hero Banner')
                                    ->description('Configuration for the top hero banner.')
                                    ->schema([
                                        TextInput::make('hero_badge')
                                            ->label('Hero Badge (e.g. Digital Agency)'),
                                        TextInput::make('hero_headline')
                                            ->required()
                                            ->label('Hero Headline'),
                                        Textarea::make('hero_subheadline')
                                            ->rows(3)
                                            ->columnSpanFull()
                                            ->label('Hero Subheadline / Brief'),
                                        TextInput::make('hero_cta_text')
                                            ->label('CTA Button Text (e.g. Get in Touch)'),
                                        TextInput::make('hero_cta_url')
                                            ->label('CTA Button URL (e.g. /contact)'),
                                        FileUpload::make('hero_image')
                                            ->image()
                                            ->preserveFilenames()
                                            ->maxSize(2048)
                                            ->imageEditor()
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('pages')
                                            ->columnSpanFull()
                                            ->label('Hero Image / Banner'),
                                        Repeater::make('media_logos')
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

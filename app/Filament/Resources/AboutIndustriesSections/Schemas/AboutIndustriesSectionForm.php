<?php

namespace App\Filament\Resources\AboutIndustriesSections\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class AboutIndustriesSectionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('About Industries Section')
                    ->columnSpanFull()
                    ->tabs([
                        Tab::make('Header')
                            ->icon(Heroicon::DocumentText)
                            ->schema([
                                Section::make('Section Header & Atmosphere')
                                    ->description('Badge label, main heading, and background texture.')
                                    ->schema([
                                        TextInput::make('badge_text')
                                            ->label('Badge Text')
                                            ->default('Serving Diverse Sectors Across the UAE')
                                            ->required(),
                                        TextInput::make('main_title')
                                            ->label('Main Title')
                                            ->default('Industries We Serve')
                                            ->required(),
                                        FileUpload::make('bg_image')
                                            ->label('Background Texture')
                                            ->image()
                                            ->preserveFilenames()
                                            ->maxSize(2048)
                                            ->imageEditor()
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('about')
                                            ->helperText('Default: public/white_bg.png'),
                                        Toggle::make('is_active')
                                            ->label('Active / Visible on About Us Page')
                                            ->default(true),
                                    ])->columns(2),
                            ]),

                        Tab::make('Industry Cards')
                            ->icon(Heroicon::Squares2x2)
                            ->schema([
                                Section::make('Industry Cards Grid')
                                    ->description('Manage all industry cards, titles, descriptions, and icons.')
                                    ->schema([
                                        Repeater::make('items')
                                            ->label('Industries')
                                            ->schema([
                                                TextInput::make('title')
                                                    ->label('Industry Title')
                                                    ->required()
                                                    ->placeholder('e.g. Real Estate, Retail & eCommerce'),
                                                Textarea::make('description')
                                                    ->label('Subtitle / Tagline')
                                                    ->rows(2)
                                                    ->required()
                                                    ->placeholder('e.g. Leading with quality and effectively showcasing property'),
                                                TextInput::make('icon')
                                                    ->label('Icon File Name / Asset')
                                                    ->placeholder('state_img.png, retail_img.png, health_img.png, etc.')
                                                    ->helperText('Available presets: state_img.png, retail_img.png, health_img.png, food_img.png, tect_img.png, edu_img.png, hospitality_image.png, restaurant_combo'),
                                            ])
                                            ->defaultItems(8)
                                            ->columns(3)
                                            ->reorderable()
                                            ->collapsible()
                                            ->itemLabel(fn (array $state): ?string => $state['title'] ?? null)
                                            ->columnSpanFull(),
                                    ]),
                            ]),
                    ]),
            ]);
    }
}

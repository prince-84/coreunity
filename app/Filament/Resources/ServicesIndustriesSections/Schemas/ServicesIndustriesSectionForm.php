<?php

namespace App\Filament\Resources\ServicesIndustriesSections\Schemas;

use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class ServicesIndustriesSectionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Services Industries Section')
                    ->columnSpanFull()
                    ->tabs([
                        Tab::make('Content')
                            ->icon(Heroicon::DocumentText)
                            ->schema([
                                Section::make('Section Header')
                                    ->description('Badge label, section title, and active status.')
                                    ->schema([
                                        TextInput::make('mini_title')
                                            ->label('Badge / Mini Title')
                                            ->default('Serving Diverse Sectors Across the UAE')
                                            ->required(),
                                        TextInput::make('main_title')
                                            ->label('Main Title')
                                            ->default('Industries We Serve')
                                            ->required(),
                                        Toggle::make('is_active')
                                            ->label('Active / Visible on Services Page')
                                            ->default(true),
                                    ])->columns(3),

                                Section::make('Red CTA Banner')
                                    ->description('Call to action banner displayed below the industries grid.')
                                    ->schema([
                                        TextInput::make('cta_title')
                                            ->label('CTA Title')
                                            ->default('Ready to grow your brand?')
                                            ->required(),
                                        TextInput::make('cta_subtitle')
                                            ->label('CTA Subtitle')
                                            ->default("Let's build a strategy that delivers real results.")
                                            ->required(),
                                        TextInput::make('cta_button_text')
                                            ->label('Button Text')
                                            ->default('Connect with us')
                                            ->required(),
                                        TextInput::make('cta_button_url')
                                            ->label('Button URL')
                                            ->default('/contact')
                                            ->required(),
                                    ])->columns(2),
                            ]),

                        Tab::make('Industry Cards')
                            ->icon(Heroicon::Squares2x2)
                            ->schema([
                                Section::make('Industries Grid (8 Cards)')
                                    ->description('Customizable industry cards with title, description, asset icon, and target page link.')
                                    ->schema([
                                        Repeater::make('industries')
                                            ->label('Industries List')
                                            ->schema([
                                                TextInput::make('title')
                                                    ->label('Industry Title')
                                                    ->required()
                                                    ->placeholder('e.g. Real Estate, Retail & eCommerce'),
                                                TextInput::make('icon')
                                                    ->label('Icon Asset Name or Path')
                                                    ->placeholder('state_img.png, retail_img.png, health_img.png')
                                                    ->helperText('Presets: state_img.png, retail_img.png, health_img.png, food_img.png, tect_img.png, edu_img.png, hospitality_image.png, res_table_img.png'),
                                                TextInput::make('link')
                                                    ->label('Link / URL')
                                                    ->placeholder('/industries/real-estate'),
                                                Textarea::make('desc')
                                                    ->label('Description')
                                                    ->rows(2)
                                                    ->required()
                                                    ->columnSpanFull(),
                                            ])
                                            ->defaultItems(8)
                                            ->columns(3)
                                            ->reorderable()
                                            ->collapsible()
                                            ->itemLabel(fn (array $state): ?string => $state['title'] ?? 'Industry Card')
                                            ->columnSpanFull(),
                                    ]),
                            ]),
                    ]),
            ]);
    }
}

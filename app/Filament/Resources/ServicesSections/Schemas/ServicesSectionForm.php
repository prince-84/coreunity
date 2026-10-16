<?php

namespace App\Filament\Resources\ServicesSections\Schemas;

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

class ServicesSectionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Services Section')
                    ->columnSpanFull()
                    ->tabs([
                        Tab::make('Header')
                            ->icon(Heroicon::DocumentText)
                            ->schema([
                                Section::make('Section Header')
                                    ->description('Section badge, headline, and display status.')
                                    ->schema([
                                        TextInput::make('mini_title')
                                            ->label('Badge / Mini Title')
                                            ->default('Digital Marketing Services')
                                            ->required(),
                                        TextInput::make('main_title')
                                            ->label('Main Headline')
                                            ->default('How Our Agency Helps You Scale')
                                            ->required(),
                                        Toggle::make('is_active')
                                            ->label('Active / Visible on Home Page')
                                            ->default(true),
                                    ])->columns(3),
                            ]),

                        Tab::make('Service Cards')
                            ->icon(Heroicon::ViewColumns)
                            ->schema([
                                Section::make('Card 1: Websites & Branding')
                                    ->description('First service card (left).')
                                    ->collapsible()
                                    ->schema([
                                        FileUpload::make('card_1_icon')
                                            ->label('Card Icon (Logo)')
                                            ->image()
                                            ->preserveFilenames()
                                            ->maxSize(2048)
                                            ->imageEditor()
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('services'),
                                        TextInput::make('card_1_title')
                                            ->label('Card Title')
                                            ->default("WEBSITES &\nBRANDING")
                                            ->required(),
                                        Textarea::make('card_1_description')
                                            ->label('Card Description')
                                            ->default('From branding to websites, every design is built to attract, engage, and convert.')
                                            ->rows(3),
                                        FileUpload::make('card_1_image')
                                            ->label('Mockup / Preview Image')
                                            ->image()
                                            ->preserveFilenames()
                                            ->maxSize(2048)
                                            ->imageEditor()
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('services'),
                                    ])->columns(2),

                                Section::make('Card 2: Growth Strategy (Interactive Links Card)')
                                    ->description('Center card with background image and strategic pills.')
                                    ->collapsible()
                                    ->schema([
                                        FileUpload::make('card_2_bg_image')
                                            ->label('Card Background Image')
                                            ->image()
                                            ->preserveFilenames()
                                            ->maxSize(2048)
                                            ->imageEditor()
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('services'),
                                        TextInput::make('card_2_title_highlight')
                                            ->label('Title Red Highlight Word')
                                            ->default('GROWTH')
                                            ->required(),
                                        TextInput::make('card_2_title_main')
                                            ->label('Title Main Word')
                                            ->default('STRATEGY')
                                            ->required(),
                                        Repeater::make('card_2_links')
                                            ->label('Growth Strategy Link Pills')
                                            ->schema([
                                                TextInput::make('label')
                                                    ->label('Pill Text')
                                                    ->required(),
                                            ])
                                            ->default([
                                                ['label' => 'Signature Growth System'],
                                                ['label' => 'Venture Marketing'],
                                                ['label' => 'Marketing Strategy'],
                                                ['label' => 'Marketing Advisory'],
                                                ['label' => 'SEO Consulting'],
                                            ])
                                            ->columnSpanFull(),
                                    ])->columns(3),

                                Section::make('Card 3: Digital Marketing')
                                    ->description('Third service card (right).')
                                    ->collapsible()
                                    ->schema([
                                        FileUpload::make('card_3_icon')
                                            ->label('Card Icon (Logo)')
                                            ->image()
                                            ->preserveFilenames()
                                            ->maxSize(2048)
                                            ->imageEditor()
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('services'),
                                        TextInput::make('card_3_title')
                                            ->label('Card Title')
                                            ->default('DIGITAL MARKETING')
                                            ->required(),
                                        Textarea::make('card_3_description')
                                            ->label('Card Description')
                                            ->default('Intent-driven marketing across SEO, CRO, social media, and PR that attracts attention and drives results.')
                                            ->rows(3),
                                        FileUpload::make('card_3_image')
                                            ->label('Mockup / Preview Image')
                                            ->image()
                                            ->preserveFilenames()
                                            ->maxSize(2048)
                                            ->imageEditor()
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('services'),
                                    ])->columns(2),
                            ]),
                    ]),
            ]);
    }
}

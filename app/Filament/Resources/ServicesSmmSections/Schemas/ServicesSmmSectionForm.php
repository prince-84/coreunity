<?php

namespace App\Filament\Resources\ServicesSmmSections\Schemas;

use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class ServicesSmmSectionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Services SMM Section')
                    ->columnSpanFull()
                    ->tabs([
                        Tab::make('Content')
                            ->icon(Heroicon::DocumentText)
                            ->schema([
                                Section::make('SMM Growth Header & Copy')
                                    ->description('Section title, descriptive text, and visibility toggle.')
                                    ->schema([
                                        Toggle::make('is_active')
                                            ->label('Active / Visible on Services Page')
                                            ->default(true),
                                        Textarea::make('main_title')
                                            ->label('Section Headline')
                                            ->default("Experience Growth\nwith Leading SMM")
                                            ->rows(2)
                                            ->required()
                                            ->columnSpanFull(),
                                        Textarea::make('description')
                                            ->label('Paragraph / Copy')
                                            ->default("At CoreUnity Solutions, squeeze out each platform's power and scope and utilize it for your brand success. Our team of social media marketing strategists")
                                            ->rows(3)
                                            ->required()
                                            ->columnSpanFull(),
                                    ]),
                            ]),

                        Tab::make('Stats')
                            ->icon(Heroicon::ChartBar)
                            ->schema([
                                Section::make('Stats Grid (4 Metrics)')
                                    ->description('Key performance numbers and labels. Toggle "Highlight Card" to make it white with red font (like cards 3 & 4).')
                                    ->schema([
                                        Repeater::make('stats')
                                            ->label('Statistics List')
                                            ->schema([
                                                TextInput::make('stat_number')
                                                    ->label('Stat Value / Number')
                                                    ->default('100+')
                                                    ->required()
                                                    ->placeholder('100+, 325+, 15+, 98%'),
                                                TextInput::make('stat_label')
                                                    ->label('Metric Label')
                                                    ->default('Brands Transformed')
                                                    ->required()
                                                    ->placeholder('Brands Transformed, Satisfaction'),
                                                Toggle::make('is_highlighted')
                                                    ->label('Highlight Card (White with Red Accent)')
                                                    ->default(false),
                                            ])
                                            ->defaultItems(4)
                                            ->columns(3)
                                            ->reorderable()
                                            ->collapsible()
                                            ->itemLabel(fn (array $state): ?string => ($state['stat_number'] ?? '') . ' ' . ($state['stat_label'] ?? 'Metric'))
                                            ->columnSpanFull(),
                                    ]),
                            ]),
                    ]),
            ]);
    }
}

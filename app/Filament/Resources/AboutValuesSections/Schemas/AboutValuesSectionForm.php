<?php

namespace App\Filament\Resources\AboutValuesSections\Schemas;

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

class AboutValuesSectionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('About Values Section')
                    ->columnSpanFull()
                    ->tabs([
                        Tab::make('Header & Visuals')
                            ->icon(Heroicon::DocumentText)
                            ->schema([
                                Section::make('Section Header & Visual Settings')
                                    ->description('Main headline with red glow indicator and background pattern.')
                                    ->schema([
                                        Textarea::make('headline')
                                            ->label('Section Headline')
                                            ->rows(2)
                                            ->default("What Drives Us\nForward")
                                            ->required()
                                            ->helperText('Supports line breaks (e.g. "What Drives Us\nForward").'),
                                        Toggle::make('is_active')
                                            ->label('Active / Visible on About Us Page')
                                            ->default(true),
                                        FileUpload::make('bg_image')
                                            ->label('Background Pattern Image')
                                            ->image()
                                            ->preserveFilenames()
                                            ->maxSize(2048)
                                            ->imageEditor()
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('about')
                                            ->helperText('Default: public/bg_image.png (mix-blend-lighten background)'),
                                        FileUpload::make('arrow_icon')
                                            ->label('Accordion Arrow Icon')
                                            ->image()
                                            ->preserveFilenames()
                                            ->maxSize(2048)
                                            ->imageEditor()
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('about')
                                            ->helperText('Default: public/arrow.png (collapsible toggle chevron)'),
                                    ])->columns(2),
                            ]),

                        Tab::make('Accordion Items')
                            ->icon(Heroicon::ListBullet)
                            ->schema([
                                Section::make('Interactive Accordion Items')
                                    ->description('Manage Mission, Vision, Values, or add custom accordion entries.')
                                    ->schema([
                                        Repeater::make('items')
                                            ->label('Accordion Tabs')
                                            ->schema([
                                                TextInput::make('title')
                                                    ->label('Tab Title')
                                                    ->required()
                                                    ->placeholder('e.g. Our Mission, Our Vision, Our Values'),
                                                Textarea::make('description')
                                                    ->label('Tab Description Copy')
                                                    ->rows(3)
                                                    ->required()
                                                    ->placeholder('Detailed narrative for this core pillar...'),
                                            ])
                                            ->defaultItems(3)
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

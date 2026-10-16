<?php

namespace App\Filament\Resources\CoreStrengthsSections\Schemas;

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

class CoreStrengthsSectionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Core Strengths Section')
                    ->columnSpanFull()
                    ->tabs([
                        Tab::make('Content')
                            ->icon(Heroicon::DocumentText)
                            ->schema([
                                Section::make('Section Header')
                                    ->description('Badge, main headline, and section visibility.')
                                    ->schema([
                                        TextInput::make('mini_title')
                                            ->label('Badge / Mini Title')
                                            ->default('Our Core Strengths')
                                            ->required(),
                                        TextInput::make('main_title')
                                            ->label('Main Section Headline')
                                            ->default('What Makes Our Digital Marketing Agency Stand Out?')
                                            ->required()
                                            ->columnSpan(2),
                                        FileUpload::make('bg_image')
                                            ->label('Right Background Pattern Image')
                                            ->image()
                                            ->preserveFilenames()
                                            ->maxSize(2048)
                                            ->imageEditor()
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('strengths'),
                                        Toggle::make('is_active')
                                            ->label('Active / Visible on Home Page')
                                            ->default(true),
                                    ])->columns(2),

                                Section::make('6 Key Strength Points')
                                    ->description('Editable strength blocks: 01 to 06 with number, title, and description.')
                                    ->schema([
                                        Repeater::make('points')
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
                            ]),

                        Tab::make('Media')
                            ->icon(Heroicon::Photo)
                            ->schema([
                                Section::make('Center Collage (6 Images)')
                                    ->description('Center column marketing funnels, team, and client showcase collage images.')
                                    ->schema([
                                        FileUpload::make('collage_image_1')
                                            ->label('Collage Image 1 (Marketing Funnels)')
                                            ->image()
                                            ->preserveFilenames()
                                            ->maxSize(2048)
                                            ->imageEditor()
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('strengths'),
                                        FileUpload::make('collage_image_2')
                                            ->label('Collage Image 2 (Summer Collection)')
                                            ->image()
                                            ->preserveFilenames()
                                            ->maxSize(2048)
                                            ->imageEditor()
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('strengths'),
                                        FileUpload::make('collage_image_3')
                                            ->label('Collage Image 3 (Team Banner)')
                                            ->image()
                                            ->preserveFilenames()
                                            ->maxSize(2048)
                                            ->imageEditor()
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('strengths'),
                                        FileUpload::make('collage_image_4')
                                            ->label('Collage Image 4 (Business Woman)')
                                            ->image()
                                            ->preserveFilenames()
                                            ->maxSize(2048)
                                            ->imageEditor()
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('strengths'),
                                        FileUpload::make('collage_image_5')
                                            ->label('Collage Image 5 (Tech Products)')
                                            ->image()
                                            ->preserveFilenames()
                                            ->maxSize(2048)
                                            ->imageEditor()
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('strengths'),
                                        FileUpload::make('collage_image_6')
                                            ->label('Collage Image 6 (Fitness Marketing)')
                                            ->image()
                                            ->preserveFilenames()
                                            ->maxSize(2048)
                                            ->imageEditor()
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('strengths'),
                                    ])->columns(3),
                            ]),
                    ]),
            ]);
    }
}

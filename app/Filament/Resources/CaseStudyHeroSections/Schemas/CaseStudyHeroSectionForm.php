<?php

namespace App\Filament\Resources\CaseStudyHeroSections\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CaseStudyHeroSectionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Case Study Hero Header')
                    ->description('Badge label with glowing red dot, main headline, narrative description, and active status toggle.')
                    ->schema([
                        TextInput::make('mini_title')
                            ->label('Badge / Mini Title')
                            ->default('Case Studies')
                            ->required(),
                        Toggle::make('is_active')
                            ->label('Active / Visible on Case Study Page')
                            ->default(true),
                        Textarea::make('main_title')
                            ->label('Main Section Headline')
                            ->default("Stories of strategy,\ncreativity, and measurable impact.")
                            ->rows(3)
                            ->required()
                            ->columnSpanFull(),
                        Textarea::make('description')
                            ->label('Intro Narrative / Sub-description')
                            ->default("Real brands, real challenges, real transformations. Explore how we help teams grow with design, data, and intelligent marketing.")
                            ->rows(3)
                            ->columnSpanFull(),
                    ])->columns(2),
            ]);
    }
}

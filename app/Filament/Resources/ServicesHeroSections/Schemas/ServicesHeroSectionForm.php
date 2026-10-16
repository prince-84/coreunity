<?php

namespace App\Filament\Resources\ServicesHeroSections\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ServicesHeroSectionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Services Hero Header')
                    ->description('Badge label with glowing red dot, main headline, and section active toggle.')
                    ->schema([
                        TextInput::make('mini_title')
                            ->label('Badge / Mini Title')
                            ->default('Services We Offer')
                            ->required(),
                        Toggle::make('is_active')
                            ->label('Active / Visible on Services Page')
                            ->default(true),
                        Textarea::make('main_title')
                            ->label('Main Section Headline')
                            ->default("From Dubai's best minds to\na global powerhouse")
                            ->rows(3)
                            ->required()
                            ->columnSpanFull(),
                    ])->columns(2),
            ]);
    }
}

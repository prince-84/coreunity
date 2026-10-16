<?php

namespace App\Filament\Resources\ContactHeroSections\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ContactHeroSectionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Contact Hero Header')
                    ->description('Badge label with glowing red dot, main headline, and visibility toggle.')
                    ->schema([
                        TextInput::make('mini_title')
                            ->label('Badge / Mini Title')
                            ->default('Contact Us')
                            ->required(),
                        Toggle::make('is_active')
                            ->label('Active / Visible on Contact Page')
                            ->default(true),
                        Textarea::make('main_title')
                            ->label('Main Section Headline')
                            ->default("Lets get in touch and build\nsomething great together")
                            ->rows(3)
                            ->required()
                            ->columnSpanFull(),
                    ])->columns(2),
            ]);
    }
}

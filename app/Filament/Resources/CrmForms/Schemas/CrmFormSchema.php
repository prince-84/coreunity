<?php

namespace App\Filament\Resources\CrmForms\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CrmFormSchema
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Form Configuration')
                    ->description('Details and status for this website form.')
                    ->schema([
                        TextInput::make('name')
                            ->required()
                            ->label('Form Display Name')
                            ->placeholder('e.g. Speak to Expert Modal Form')
                            ->maxLength(255),

                        TextInput::make('slug')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->label('System Slug Identifier')
                            ->placeholder('e.g. speak-to-expert-modal')
                            ->maxLength(255),

                        Textarea::make('description')
                            ->label('Description / Notes')
                            ->placeholder('Describe where this form is located on the website...')
                            ->rows(3)
                            ->columnSpanFull(),

                        Toggle::make('is_active')
                            ->label('Active & Accepting Submissions')
                            ->default(true),
                    ])->columns(2),
            ]);
    }
}

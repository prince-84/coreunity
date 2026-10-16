<?php

namespace App\Filament\Resources\TeamSections\Schemas;

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

class TeamSectionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Team Section')
                    ->columnSpanFull()
                    ->tabs([
                        Tab::make('Content')
                            ->icon(Heroicon::DocumentText)
                            ->schema([
                                Section::make('Section Header')
                                    ->description('Top badge, main headline, and visibility toggle.')
                                    ->schema([
                                        TextInput::make('mini_title')
                                            ->label('Badge / Mini Title')
                                            ->default('Our Passionate Team')
                                            ->required(),
                                        Toggle::make('is_active')
                                            ->label('Active / Visible on Home Page')
                                            ->default(true),
                                        Textarea::make('main_title')
                                            ->label('Main Section Headline')
                                            ->default("The Brilliant Minds Behind\nOur Success")
                                            ->rows(2)
                                            ->required()
                                            ->columnSpanFull(),
                                    ])->columns(2),

                                Section::make('Branding & Badges')
                                    ->description('Corner agency badge icon displayed over member portraits.')
                                    ->collapsible()
                                    ->schema([
                                        FileUpload::make('badge_logo')
                                            ->label('Overlay Agency Logo Badge')
                                            ->image()
                                            ->preserveFilenames()
                                            ->maxSize(2048)
                                            ->imageEditor()
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('team'),
                                    ]),
                            ]),

                        Tab::make('Team Members')
                            ->icon(Heroicon::UserGroup)
                            ->schema([
                                Section::make('Team Members')
                                    ->description('Add, edit, or reorder company team members.')
                                    ->schema([
                                        Repeater::make('members')
                                            ->label('Team Members')
                                            ->schema([
                                                TextInput::make('name')
                                                    ->label('Member Name')
                                                    ->required(),
                                                TextInput::make('role')
                                                    ->label('Role / Job Title')
                                                    ->required(),
                                                FileUpload::make('image')
                                                    ->label('Portrait / Avatar Image')
                                                    ->image()
                                                    ->preserveFilenames()
                                                    ->maxSize(2048)
                                                    ->imageEditor()
                                                    ->disk('public')
                                                    ->visibility('public')
                                                    ->directory('team'),
                                            ])
                                            ->columns(3)
                                            ->reorderable()
                                            ->default([
                                                ['name' => 'Faraz Shafi', 'role' => 'CEO', 'image' => 'farazbhai_image.png'],
                                                ['name' => 'Osama Rasheed', 'role' => 'Managing Partner', 'image' => 'osama_image.png'],
                                                ['name' => 'Babar Ali Khan', 'role' => 'Sr. Developer', 'image' => 'babar_image.png'],
                                                ['name' => 'Muhammad Jawed', 'role' => 'Marketing Manager', 'image' => 'jawed_image.png'],
                                            ])
                                            ->columnSpanFull(),
                                    ]),
                            ]),
                    ]),
            ]);
    }
}

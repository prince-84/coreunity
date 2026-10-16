<?php

namespace App\Filament\Resources\AboutIntroSections\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class AboutIntroSectionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('About Intro Section')
                    ->columnSpanFull()
                    ->tabs([
                        Tab::make('Content')
                            ->icon(Heroicon::DocumentText)
                            ->schema([
                                Section::make('Headline & Visibility')
                                    ->description('Section main headline with red highlighted text and active toggle.')
                                    ->schema([
                                        TextInput::make('title_prefix')
                                            ->label('Title Prefix')
                                            ->default('We are a')
                                            ->required(),
                                        TextInput::make('title_highlight')
                                            ->label('Highlighted Text (Red Accent)')
                                            ->default('Creative Bold')
                                            ->required(),
                                        TextInput::make('title_suffix')
                                            ->label('Title Suffix')
                                            ->default('Digital Agency based In UAE')
                                            ->required(),
                                        Toggle::make('is_active')
                                            ->label('Active / Visible on About Us Page')
                                            ->default(true),
                                    ])->columns(2),

                                Section::make('Agency Narrative Copy')
                                    ->description('Detailed paragraphs describing agency credentials, experience, and global expansion.')
                                    ->schema([
                                        Textarea::make('paragraph_1')
                                            ->label('First Paragraph')
                                            ->rows(4)
                                            ->default('With <span class="font-bold text-black">8 + years of experience</span>, 500+ prestigious clients, 50+ expert developers, and a 200+ strong team, Core Unity Solutions stands out as Dubai\'s No.1 digital transformation and marketing agency.')
                                            ->helperText('Supports inline HTML formatting like <span> tags.')
                                            ->columnSpanFull(),
                                        Textarea::make('paragraph_2')
                                            ->label('Second Paragraph')
                                            ->rows(4)
                                            ->default('We deliver efficient web, mobile, and marketing solutions powered by Innovative AI and emerging tech like AR, VR, and Blockchain. After our proven track record in Dubai, we\'re now expanding globally across the USA and MENA region — empowering global brands to evolve, scale, and lead in this digital age.')
                                            ->helperText('Supports plain text or HTML formatting.')
                                            ->columnSpanFull(),
                                    ]),
                            ]),

                        Tab::make('Media')
                            ->icon(Heroicon::Photo)
                            ->schema([
                                Section::make('Media & Floating Badge')
                                    ->description('Right side team photo and floating logo badge overlay.')
                                    ->schema([
                                        FileUpload::make('main_image')
                                            ->label('Main Team Image')
                                            ->image()
                                            ->preserveFilenames()
                                            ->maxSize(2048)
                                            ->imageEditor()
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('about')
                                            ->helperText('Default: public/image.png (Core Unity Team Meeting)'),
                                        FileUpload::make('floating_bg_image')
                                            ->label('Floating Badge Background Texture')
                                            ->image()
                                            ->preserveFilenames()
                                            ->maxSize(2048)
                                            ->imageEditor()
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('about')
                                            ->helperText('Default: public/Rectangle.png'),
                                        FileUpload::make('floating_logo')
                                            ->label('Floating Badge Logo')
                                            ->image()
                                            ->preserveFilenames()
                                            ->maxSize(2048)
                                            ->imageEditor()
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('about')
                                            ->helperText('Default: public/logo1.png (Core Unity Logo)'),
                                    ])->columns(3),
                            ]),
                    ]),
            ]);
    }
}

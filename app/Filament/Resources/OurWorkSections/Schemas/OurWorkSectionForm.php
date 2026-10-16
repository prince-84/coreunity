<?php

namespace App\Filament\Resources\OurWorkSections\Schemas;

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

class OurWorkSectionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Our Work Section')
                    ->columnSpanFull()
                    ->tabs([
                        Tab::make('Header')
                            ->icon(Heroicon::DocumentText)
                            ->schema([
                                Section::make('Section Header')
                                    ->description('Top badge, main headline, and active toggle.')
                                    ->schema([
                                        TextInput::make('mini_title')
                                            ->label('Badge / Mini Title')
                                            ->default('OUR WORK')
                                            ->required(),
                                        TextInput::make('main_title')
                                            ->label('Main Section Headline')
                                            ->default('10+ yrs of expertise in providing innovative solutions')
                                            ->required()
                                            ->columnSpan(2),
                                        Toggle::make('is_active')
                                            ->label('Active / Visible on Home Page')
                                            ->default(true),
                                    ])->columns(2),
                            ]),

                        Tab::make('Showcase')
                            ->icon(Heroicon::Briefcase)
                            ->schema([
                                Section::make('Horizontal Categories Filter Bar')
                                    ->description('Category link pills displayed under the headline.')
                                    ->schema([
                                        Repeater::make('categories')
                                            ->label('Categories & Links')
                                            ->schema([
                                                TextInput::make('label')
                                                    ->label('Category Name')
                                                    ->required(),
                                                TextInput::make('url')
                                                    ->label('Link URL')
                                                    ->required(),
                                            ])
                                            ->columns(2)
                                            ->reorderable()
                                            ->default([
                                                ['label' => 'Website', 'url' => '/case-study/website'],
                                                ['label' => 'Mobile App', 'url' => '/mobile-app'],
                                                ['label' => 'SMM', 'url' => '/smm'],
                                                ['label' => 'PPC', 'url' => '/ppc'],
                                                ['label' => 'PRINT', 'url' => '/print'],
                                                ['label' => 'SEO', 'url' => '/seo'],
                                                ['label' => 'BRANDING', 'url' => '/branding'],
                                            ])
                                            ->columnSpanFull(),
                                    ]),

                                Section::make('Featured Showcase Cards (Drag & Drop Reorderable)')
                                    ->description('Grab the drag handle (:::) on either card header to easily reorder them via drag and drop.')
                                    ->schema([
                                        Repeater::make('cards')
                                            ->label('Case Study Cards')
                                            ->itemLabel(fn (array $state): ?string => (!empty($state['title']) ? strip_tags(str_replace(["\r\n", "\r", "\n", '<br>', '<br/>', '<br />'], ' ', $state['title'])) : 'Featured Case Study Card'))
                                            ->reorderable()
                                            ->collapsible()
                                            ->cloneable(false)
                                            ->schema([
                                                TextInput::make('title')
                                                    ->label('Card Title')
                                                    ->required()
                                                    ->helperText('You can use line breaks / newlines.'),
                                                TextInput::make('stat_number')
                                                    ->label('Highlight Stat Number')
                                                    ->required(),
                                                Textarea::make('stat_desc')
                                                    ->label('Stat Description')
                                                    ->rows(2)
                                                    ->columnSpanFull(),
                                                TextInput::make('button_text')
                                                    ->label('Button Text')
                                                    ->default('View Case Study')
                                                    ->required(),
                                                TextInput::make('button_link')
                                                    ->label('Button Link URL')
                                                    ->required(),
                                                FileUpload::make('image')
                                                    ->label('Mockup / Device Image')
                                                    ->image()
                                                    ->preserveFilenames()
                                                    ->maxSize(2048)
                                                    ->imageEditor()
                                                    ->disk('public')
                                                    ->visibility('public')
                                                    ->directory('work'),
                                                FileUpload::make('bg_image')
                                                    ->label('Card Background Texture (Optional)')
                                                    ->image()
                                                    ->preserveFilenames()
                                                    ->maxSize(2048)
                                                    ->imageEditor()
                                                    ->disk('public')
                                                    ->visibility('public')
                                                    ->directory('work'),
                                            ])
                                            ->columns(2)
                                            ->columnSpanFull(),
                                    ]),
                            ]),
                    ]),
            ]);
    }
}

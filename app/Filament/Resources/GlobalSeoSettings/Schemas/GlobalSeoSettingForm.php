<?php

namespace App\Filament\Resources\GlobalSeoSettings\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class GlobalSeoSettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Global SEO Settings')
                    ->columnSpanFull()
                    ->tabs([
                        Tab::make('Indexing')
                            ->icon(Heroicon::GlobeAlt)
                            ->schema([
                                Section::make('Search Engine Visibility / Global Indexing Control')
                                    ->description('Security & SEO Control: Choose whether search engines (Google, Bing, Yahoo, etc.) are allowed to index this website.')
                                    ->schema([
                                        Toggle::make('site_indexing_enabled')
                                            ->label('Search Engine Visibility / Global Indexing')
                                            ->default(false)
                                            ->helperText('OFF (Default - Safe Mode): Renders <meta name="robots" content="noindex, nofollow"> to block search engines. | ON (Production): Renders <meta name="robots" content="index, follow"> allowing search engines to index your pages.')
                                            ->onColor('success')
                                            ->offColor('danger')
                                            ->columnSpanFull(),
                                    ]),
                            ]),

                        Tab::make('Fallback Metadata')
                            ->icon(Heroicon::DocumentText)
                            ->schema([
                                Section::make('Global Fallback Metadata & Canonical')
                                    ->description('Default meta titles and descriptions used across pages when page-specific tags are not defined.')
                                    ->schema([
                                        TextInput::make('meta_title_default')
                                            ->label('Default Meta Title')
                                            ->placeholder('Core Unity Solutions | Digital Marketing Agency & IT Solutions Dubai')
                                            ->columnSpanFull(),
                                        Textarea::make('meta_description_default')
                                            ->label('Default Meta Description')
                                            ->rows(3)
                                            ->placeholder('Core Unity Solutions is a results-driven digital marketing agency in Dubai...')
                                            ->columnSpanFull(),
                                        TextInput::make('canonical_base_url')
                                            ->label('Canonical Site URL')
                                            ->placeholder('https://coreunitysolutions.com')
                                            ->columnSpanFull(),
                                    ]),
                            ]),
                    ]),
            ]);
    }
}

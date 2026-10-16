<?php

namespace App\Filament\Resources\FooterSections\Schemas;

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

class FooterSectionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Footer Section')
                    ->columnSpanFull()
                    ->tabs([
                        Tab::make('Brand & Newsletter')
                            ->icon(Heroicon::Megaphone)
                            ->schema([
                                Section::make('General Visibility')
                                    ->description('Master display toggle for the footer.')
                                    ->schema([
                                        Toggle::make('is_active')
                                            ->label('Active / Visible Across Website')
                                            ->default(true),
                                    ]),

                                Section::make('Newsletter Subscription Bar')
                                    ->description('Red banner newsletter bar shown directly above the footer directory.')
                                    ->schema([
                                        Toggle::make('newsletter_is_active')
                                            ->label('Show Newsletter Bar')
                                            ->default(true),
                                        TextInput::make('newsletter_title')
                                            ->label('Newsletter Headline')
                                            ->default('Join Our Newsletter')
                                            ->required(),
                                        Textarea::make('newsletter_subtitle')
                                            ->label('Newsletter Subtitle / Description')
                                            ->default('Subscribe now to stay updated on the latest market trends')
                                            ->rows(2)
                                            ->required()
                                            ->columnSpanFull(),
                                        TextInput::make('newsletter_button_text')
                                            ->label('Subscribe Button Text')
                                            ->default('Subscribe')
                                            ->required(),
                                    ])->columns(2),

                                Section::make('Agency Brand & Dubai Contact Details')
                                    ->description('Footer brand logo, Dubai physical office address, support email, and phone.')
                                    ->schema([
                                        FileUpload::make('logo')
                                            ->label('Footer Logo')
                                            ->image()
                                            ->preserveFilenames()
                                            ->maxSize(2048)
                                            ->imageEditor()
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('footer'),
                                        Textarea::make('address')
                                            ->label('Physical Office Address')
                                            ->default('Churchill Tower, Business Bay, Dubai, UAE')
                                            ->rows(2)
                                            ->required(),
                                        TextInput::make('email')
                                            ->label('Contact Email')
                                            ->default('contact@coreunitysolutions.com')
                                            ->email()
                                            ->required(),
                                        TextInput::make('phone')
                                            ->label('Contact Phone Number')
                                            ->default('+971 50 555 9646')
                                            ->required(),
                                    ])->columns(2),
                            ]),

                        Tab::make('Social Links')
                            ->icon(Heroicon::Link)
                            ->schema([
                                Section::make('Social Media Profile Links')
                                    ->description('Links to agency social channels displayed beneath contact information.')
                                    ->collapsible()
                                    ->schema([
                                        TextInput::make('facebook_url')
                                            ->label('Facebook URL')
                                            ->default('https://www.facebook.com/coreunitysolutions'),
                                        TextInput::make('instagram_url')
                                            ->label('Instagram URL')
                                            ->default('https://www.instagram.com/coreunitysolutions/'),
                                        TextInput::make('youtube_url')
                                            ->label('YouTube URL')
                                            ->default('https://www.youtube.com/@coreunitysolutions'),
                                        TextInput::make('linkedin_url')
                                            ->label('LinkedIn URL')
                                            ->default('https://www.linkedin.com/company/coreunitysolutions'),
                                        TextInput::make('tiktok_url')
                                            ->label('TikTok URL')
                                            ->default('https://www.tiktok.com/@coreunitysolutions?lang=en'),
                                    ])->columns(2),
                            ]),

                        Tab::make('Footer Columns')
                            ->icon(Heroicon::ViewColumns)
                            ->schema([
                                Section::make('Column 2: Smart Technology Solutions')
                                    ->description('Directory navigation links for column 2.')
                                    ->collapsible()
                                    ->schema([
                                        TextInput::make('col_2_title')
                                            ->label('Column 2 Header')
                                            ->default('Smart Technology Solutions')
                                            ->required(),
                                        Repeater::make('col_2_links')
                                            ->label('Column 2 Links')
                                            ->schema([
                                                TextInput::make('label')->required(),
                                                TextInput::make('url')->required(),
                                            ])
                                            ->columns(2)
                                            ->reorderable()
                                            ->columnSpanFull(),
                                    ]),

                                Section::make('Column 3: Digital Growth & Marketing')
                                    ->description('Directory navigation links for column 3.')
                                    ->collapsible()
                                    ->schema([
                                        TextInput::make('col_3_title')
                                            ->label('Column 3 Header')
                                            ->default('Digital Growth & Marketing')
                                            ->required(),
                                        Repeater::make('col_3_links')
                                            ->label('Column 3 Links')
                                            ->schema([
                                                TextInput::make('label')->required(),
                                                TextInput::make('url')->required(),
                                            ])
                                            ->columns(2)
                                            ->reorderable()
                                            ->columnSpanFull(),
                                    ]),

                                Section::make('Column 4: Industry')
                                    ->description('Directory navigation links for column 4.')
                                    ->collapsible()
                                    ->schema([
                                        TextInput::make('col_4_title')
                                            ->label('Column 4 Header')
                                            ->default('Industry')
                                            ->required(),
                                        Repeater::make('col_4_links')
                                            ->label('Column 4 Links')
                                            ->schema([
                                                TextInput::make('label')->required(),
                                                TextInput::make('url')->required(),
                                            ])
                                            ->columns(2)
                                            ->reorderable()
                                            ->columnSpanFull(),
                                    ]),
                            ]),

                        Tab::make('Bottom Bar')
                            ->icon(Heroicon::Bars3)
                            ->schema([
                                Section::make('Bottom Bar & Legal')
                                    ->description('Copyright statement, Privacy Policy URL, and Terms & Conditions URL.')
                                    ->schema([
                                        TextInput::make('copyright_text')
                                            ->label('Copyright Statement')
                                            ->default('© 2026. CoreUnity Solutions')
                                            ->required(),
                                        TextInput::make('privacy_policy_url')
                                            ->label('Privacy Policy Route / URL')
                                            ->default('/privacy-policy')
                                            ->required(),
                                        TextInput::make('terms_conditions_url')
                                            ->label('Terms & Conditions Route / URL')
                                            ->default('/terms-and-conditions')
                                            ->required(),
                                    ])->columns(3),
                            ]),
                    ]),
            ]);
    }
}

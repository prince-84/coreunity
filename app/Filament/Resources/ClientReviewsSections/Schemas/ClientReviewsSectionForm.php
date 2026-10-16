<?php

namespace App\Filament\Resources\ClientReviewsSections\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class ClientReviewsSectionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Client Reviews Section')
                    ->columnSpanFull()
                    ->tabs([
                        Tab::make('Content')
                            ->icon(Heroicon::DocumentText)
                            ->schema([
                                Section::make('Section Header')
                                    ->description('Top badge, main headline, description, and visibility toggle.')
                                    ->schema([
                                        TextInput::make('mini_title')
                                            ->label('Badge / Mini Title')
                                            ->default('Client Testimonials')
                                            ->required(),
                                        Toggle::make('is_active')
                                            ->label('Active / Visible on Home Page')
                                            ->default(true),
                                        TextInput::make('main_title')
                                            ->label('Main Section Headline')
                                            ->default('Loved by your best customers')
                                            ->required()
                                            ->columnSpanFull(),
                                        Textarea::make('description')
                                            ->label('Header Subtitle / Description')
                                            ->default("We're obsessed with delivering outstanding customer experiences that are a reflection of your brand.")
                                            ->rows(2)
                                            ->required()
                                            ->columnSpanFull(),
                                    ])->columns(2),

                                Section::make('Background Styling (Optional)')
                                    ->description('Subtle ambient pattern texture behind header (default: white_bg.png).')
                                    ->collapsible()
                                    ->schema([
                                        FileUpload::make('bg_image')
                                            ->label('Background Ambient Texture')
                                            ->image()
                                            ->preserveFilenames()
                                            ->maxSize(2048)
                                            ->imageEditor()
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('testimonials'),
                                    ]),
                            ]),

                        Tab::make('Reviews')
                            ->icon(Heroicon::Star)
                            ->schema([
                                Section::make('Client Reviews (Continuous Marquee)')
                                    ->description('Add, edit, or reorder client testimonial cards shown in the animated infinite slider.')
                                    ->schema([
                                        Repeater::make('reviews')
                                            ->label('Client Testimonial Cards')
                                            ->schema([
                                                TextInput::make('service')
                                                    ->label('Service Tag / Category')
                                                    ->placeholder('e.g. Digital Marketing, SEO, Branding')
                                                    ->required(),
                                                TextInput::make('name')
                                                    ->label('Client Full Name')
                                                    ->required(),
                                                TextInput::make('role')
                                                    ->label('Client Role / Company')
                                                    ->required(),
                                                Select::make('rating')
                                                    ->label('Star Rating')
                                                    ->options([
                                                        5 => '5 Stars ★★★★★',
                                                        4 => '4 Stars ★★★★☆',
                                                        3 => '3 Stars ★★★☆☆',
                                                    ])
                                                    ->default(5)
                                                    ->required(),
                                                Textarea::make('review')
                                                    ->label('Client Feedback Narrative')
                                                    ->rows(3)
                                                    ->required()
                                                    ->columnSpanFull(),
                                            ])
                                            ->columns(2)
                                            ->reorderable()
                                            ->columnSpanFull(),
                                    ]),
                            ]),
                    ]),
            ]);
    }
}

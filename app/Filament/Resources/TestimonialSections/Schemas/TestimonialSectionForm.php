<?php

namespace App\Filament\Resources\TestimonialSections\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class TestimonialSectionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Testimonial Section')
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
                                            ->default('Our Clients')
                                            ->required(),
                                        TextInput::make('main_title')
                                            ->label('Main Section Headline')
                                            ->default('Amazing Software Services')
                                            ->required(),
                                        Toggle::make('is_active')
                                            ->label('Active / Visible on Home Page')
                                            ->default(true)
                                            ->columnSpanFull(),
                                    ])->columns(2),

                                Section::make('Testimonial Quote / Review')
                                    ->description('Client review narrative displayed prominently on dark radial background.')
                                    ->schema([
                                        Textarea::make('review_text')
                                            ->label('Review Quote Body')
                                            ->default("They crafted a digital experience tailored to our exact needs. From initial consultation to final deployment, their professionalism, responsiveness, and technical expertise were unmatched. The system they built has streamlined our operations, improved customer engagement, and scaled effortlessly with our growth We couldn't be happier with.")
                                            ->rows(4)
                                            ->required()
                                            ->columnSpanFull(),
                                    ]),
                            ]),

                        Tab::make('Author')
                            ->icon(Heroicon::UserCircle)
                            ->schema([
                                Section::make('Client Author Details')
                                    ->description('Client spokesperson name, title, and profile portrait.')
                                    ->schema([
                                        TextInput::make('author_name')
                                            ->label('Author Name')
                                            ->default('Alex Hales')
                                            ->required(),
                                        TextInput::make('author_role')
                                            ->label('Author Role / Job Title')
                                            ->default('Managing Partner')
                                            ->required(),
                                        FileUpload::make('author_image')
                                            ->label('Author Portrait Image')
                                            ->image()
                                            ->preserveFilenames()
                                            ->maxSize(2048)
                                            ->imageEditor()
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('testimonials')
                                            ->columnSpanFull(),
                                    ])->columns(2),
                            ]),
                    ]),
            ]);
    }
}

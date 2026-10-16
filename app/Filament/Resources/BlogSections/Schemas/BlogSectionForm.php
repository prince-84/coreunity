<?php

namespace App\Filament\Resources\BlogSections\Schemas;

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

class BlogSectionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Blog Section')
                    ->columnSpanFull()
                    ->tabs([
                        Tab::make('Header')
                            ->icon(Heroicon::DocumentText)
                            ->schema([
                                Section::make('Section Header')
                                    ->description('Top badge, main headline, overlay text, and visibility toggle.')
                                    ->schema([
                                        TextInput::make('mini_title')
                                            ->label('Badge / Mini Title')
                                            ->default('Our Blog')
                                            ->required(),
                                        Toggle::make('is_active')
                                            ->label('Active / Visible on Home Page')
                                            ->default(true),
                                        Textarea::make('main_title')
                                            ->label('Main Section Headline')
                                            ->default("What's going on in the\nindustry?")
                                            ->rows(2)
                                            ->required()
                                            ->columnSpanFull(),
                                        TextInput::make('overlay_text')
                                            ->label('Hover Button Text (Circular Overlay)')
                                            ->default("View Full\nBlog")
                                            ->required(),
                                    ])->columns(2),

                                Section::make('Custom Meta Icons (Optional)')
                                    ->description('Custom icons for publish date and category tag (defaults: calendar & file icons).')
                                    ->collapsible()
                                    ->schema([
                                        FileUpload::make('date_icon')
                                            ->label('Date Meta Icon')
                                            ->image()
                                            ->preserveFilenames()
                                            ->maxSize(2048)
                                            ->imageEditor()
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('blog'),
                                        FileUpload::make('category_icon')
                                            ->label('Category Meta Icon')
                                            ->image()
                                            ->preserveFilenames()
                                            ->maxSize(2048)
                                            ->imageEditor()
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('blog'),
                                    ])->columns(2),
                            ]),

                        Tab::make('Blog Cards')
                            ->icon(Heroicon::Newspaper)
                            ->schema([
                                Section::make('Blog Articles / Cards')
                                    ->description('Add, edit, or reorder featured blog posts on the home page.')
                                    ->schema([
                                        Repeater::make('posts')
                                            ->label('Blog Cards')
                                            ->schema([
                                                TextInput::make('title')
                                                    ->label('Article Title')
                                                    ->required()
                                                    ->columnSpan(2),
                                                TextInput::make('category')
                                                    ->label('Category Tag')
                                                    ->default('Local SEO')
                                                    ->required(),
                                                TextInput::make('date')
                                                    ->label('Published Date')
                                                    ->default('January 10, 2022')
                                                    ->required(),
                                                TextInput::make('slug')
                                                    ->label('Slug / Destination URL')
                                                    ->helperText('e.g. local-business-on-google-maps or /blog/my-post')
                                                    ->required(),
                                                FileUpload::make('image')
                                                    ->label('Featured Cover Image')
                                                    ->image()
                                                    ->preserveFilenames()
                                                    ->maxSize(2048)
                                                    ->imageEditor()
                                                    ->disk('public')
                                                    ->visibility('public')
                                                    ->directory('blog'),
                                                Textarea::make('excerpt')
                                                    ->label('Article Excerpt / Summary')
                                                    ->rows(2)
                                                    ->columnSpanFull(),
                                            ])
                                            ->columns(3)
                                            ->reorderable()
                                            ->default([
                                                [
                                                    'title' => 'How to Get Your Local Business on Google Maps (Step-by-Step)',
                                                    'date' => 'January 10, 2022',
                                                    'category' => 'Local SEO',
                                                    'excerpt' => "If you run a local business and you're not showing up on Google Maps, you're handing customers straight to competitors who are...",
                                                    'slug' => 'local-business-on-google-maps',
                                                    'image' => 'blog_image.png',
                                                ],
                                                [
                                                    'title' => 'Google Ads vs. Meta Ads: Which Is Right for Your Business?',
                                                    'date' => 'January 10, 2022',
                                                    'category' => 'Paid Marketing',
                                                    'excerpt' => "If you've spent any time in a marketing Slack channel, a Facebook group for small business owners, or even just a late-night Google search...",
                                                    'slug' => 'google-ads-vs-meta-ads',
                                                    'image' => 'blog_image.png',
                                                ],
                                                [
                                                    'title' => 'Daily Manual Tasks Your Business Should Automate Today',
                                                    'date' => 'January 10, 2022',
                                                    'category' => 'Business Growth',
                                                    'excerpt' => "If you've been putting off the decision to automate manual tasks in your business, this is your sign to stop waiting...",
                                                    'slug' => 'daily-manual-tasks',
                                                    'image' => 'blog_image.png',
                                                ],
                                                [
                                                    'title' => '5 Must-Have Features Every Business Website Needs',
                                                    'date' => 'January 10, 2022',
                                                    'category' => 'Web Design',
                                                    'excerpt' => "Let's be honest for a second: most business owners don't think about their website until something goes wrong...",
                                                    'slug' => 'business-website-features',
                                                    'image' => 'blog_image.png',
                                                ],
                                            ])
                                            ->columnSpanFull(),
                                    ]),
                            ]),
                    ]),
            ]);
    }
}

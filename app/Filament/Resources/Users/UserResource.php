<?php

namespace App\Filament\Resources\Users;

use App\Filament\Resources\Users\Pages\CreateUser;
use App\Filament\Resources\Users\Pages\EditUser;
use App\Filament\Resources\Users\Pages\ListUsers;
use App\Filament\Resources\Users\Schemas\UserForm;
use App\Filament\Resources\Users\Tables\UsersTable;
use App\Models\User;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Users;

    protected static string|UnitEnum|null $navigationGroup = 'Site Settings';

    protected static ?string $navigationLabel = 'Users & Permissions';

    protected static ?string $modelLabel = 'User';

    protected static ?string $pluralModelLabel = 'Users';

    protected static ?int $navigationSort = 3;

    protected static ?string $recordTitleAttribute = 'name';

    public static function getPermissionModules(): array
    {
        return [
            'services' => [
                'label' => 'Services Management',
                'desc' => 'Manage services, service detail blocks, categories, and slugs',
            ],
            'pages' => [
                'label' => 'Pages & Dynamic Blocks',
                'desc' => 'Manage pages, page blocks, SEO titles, and layout builders',
            ],
            'posts' => [
                'label' => 'Blogs & Posts',
                'desc' => 'Manage blog articles, authors, categories, and publications',
            ],
            'case_studies' => [
                'label' => 'Case Studies',
                'desc' => 'Manage portfolio items, client showcase cards, and results',
            ],
            'testimonials' => [
                'label' => 'Testimonials & Reviews',
                'desc' => 'Manage client testimonials, feedback quotes, and ratings',
            ],
            'team' => [
                'label' => 'Team Members',
                'desc' => 'Manage team member profiles, designations, and images',
            ],
            'our_work' => [
                'label' => 'Our Work Showcase',
                'desc' => 'Manage portfolio showcases, live project links, and tags',
            ],
            'our_clients' => [
                'label' => 'Our Clients',
                'desc' => 'Manage client brand logos, titles, and partner affiliations',
            ],
            'footer' => [
                'label' => 'Footer & Newsletter',
                'desc' => 'Manage footer columns, navigation links, and newsletter setup',
            ],
            'global_settings' => [
                'label' => 'Global SEO & Site Settings',
                'desc' => 'Manage site metadata, favicon, social links, and contact info',
            ],
            'page_sections' => [
                'label' => 'Page Sections & Blocks',
                'desc' => 'Manage reusable section components across all landing pages',
            ],
            'users' => [
                'label' => 'User Management & Roles',
                'desc' => 'Manage admin accounts, security roles, and granular permissions',
            ],
            'crm' => [
                'label' => 'CRM & Leads Management',
                'desc' => 'Manage dynamic CRM forms, customer inquiries, and lead status',
            ],
        ];
    }

    public static function form(Schema $schema): Schema
    {
        return UserForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return UsersTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListUsers::route('/'),
            'create' => CreateUser::route('/create'),
            'edit' => EditUser::route('/{record}/edit'),
        ];
    }
}

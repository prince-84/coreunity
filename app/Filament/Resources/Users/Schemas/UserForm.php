<?php

namespace App\Filament\Resources\Users\Schemas;

use App\Filament\Resources\Users\UserResource;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        $permissionSections = [];

        foreach (UserResource::getPermissionModules() as $moduleKey => $moduleInfo) {
            $permissionSections[] = Section::make($moduleInfo['label'])
                ->description($moduleInfo['desc'])
                ->collapsible()
                ->compact()
                ->schema([
                    CheckboxList::make("permissions_{$moduleKey}")
                        ->hiddenLabel()
                        ->options([
                            "view_{$moduleKey}" => 'View / View Any',
                            "create_{$moduleKey}" => 'Create',
                            "edit_{$moduleKey}" => 'Edit / Update',
                            "delete_{$moduleKey}" => 'Delete',
                        ])
                        ->columns([
                            'default' => 2,
                            'sm' => 4,
                        ])
                        ->dehydrated(false),
                ]);
        }

        return $schema
            ->components([
                Tabs::make('User')
                    ->columnSpanFull()
                    ->tabs([
                        Tab::make('Account')
                            ->icon(Heroicon::UserCircle)
                            ->schema([
                                Section::make('User Account Details')
                                    ->description('Primary login credentials and identity for the user.')
                                    ->schema([
                                        Grid::make(2)
                                            ->schema([
                                                TextInput::make('name')
                                                    ->required()
                                                    ->label('Full Name')
                                                    ->placeholder('e.g. John Doe')
                                                    ->maxLength(255),

                                                TextInput::make('email')
                                                    ->email()
                                                    ->required()
                                                    ->unique(ignoreRecord: true)
                                                    ->label('Email Address')
                                                    ->placeholder('e.g. user@coreunity.com')
                                                    ->maxLength(255),
                                            ]),

                                        TextInput::make('password')
                                            ->password()
                                            ->revealable()
                                            ->label('Password')
                                            ->placeholder('••••••••')
                                            ->helperText('Leave empty to keep the current password when editing.')
                                            ->dehydrateStateUsing(fn ($state) => filled($state) ? bcrypt($state) : null)
                                            ->dehydrated(fn ($state) => filled($state))
                                            ->required(fn (string $operation): bool => $operation === 'create')
                                            ->maxLength(255),
                                    ]),

                                Section::make('Role Assignment')
                                    ->description('High-level security roles.')
                                    ->schema([
                                        Select::make('roles')
                                            ->relationship('roles', 'name')
                                            ->multiple()
                                            ->preload()
                                            ->label('Assign Roles')
                                            ->helperText('Assigning "Super Admin" automatically grants full bypass permissions across all resources.'),
                                    ]),
                            ]),

                        Tab::make('Permissions')
                            ->icon(Heroicon::LockClosed)
                            ->schema([
                                Section::make('Granular Resource Permissions')
                                    ->description('Fine-grained CRUD access permissions per system module. These permissions apply directly when the user is not a Super Admin.')
                                    ->collapsible()
                                    ->schema($permissionSections),
                            ]),
                    ]),
            ]);
    }
}

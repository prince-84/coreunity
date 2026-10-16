<?php

namespace App\Filament\Resources\GlobalSeoSettings\Pages;

use App\Filament\Resources\GlobalSeoSettings\GlobalSeoSettingResource;
use App\Models\GlobalSeoSetting;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListGlobalSeoSettings extends ListRecords
{
    protected static string $resource = GlobalSeoSettingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->visible(fn () => GlobalSeoSetting::count() === 0),
        ];
    }
}

<?php

namespace App\Filament\Resources\GlobalSeoSettings\Pages;

use App\Filament\Resources\GlobalSeoSettings\GlobalSeoSettingResource;
use Filament\Resources\Pages\EditRecord;

class EditGlobalSeoSetting extends EditRecord
{
    protected static string $resource = GlobalSeoSettingResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }
}

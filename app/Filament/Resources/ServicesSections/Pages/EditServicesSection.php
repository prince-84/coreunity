<?php

namespace App\Filament\Resources\ServicesSections\Pages;

use App\Filament\Resources\ServicesSections\ServicesSectionResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditServicesSection extends EditRecord
{
    protected static string $resource = ServicesSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

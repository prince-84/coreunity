<?php

namespace App\Filament\Resources\CrmForms\Pages;

use App\Filament\Resources\CrmForms\CrmFormResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditCrmForm extends EditRecord
{
    protected static string $resource = CrmFormResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

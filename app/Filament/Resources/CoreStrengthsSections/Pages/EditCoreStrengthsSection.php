<?php

namespace App\Filament\Resources\CoreStrengthsSections\Pages;

use App\Filament\Resources\CoreStrengthsSections\CoreStrengthsSectionResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditCoreStrengthsSection extends EditRecord
{
    protected static string $resource = CoreStrengthsSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

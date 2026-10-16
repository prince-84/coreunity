<?php

namespace App\Filament\Resources\FormSubmissions\Pages;

use App\Filament\Resources\CrmForms\CrmFormResource;
use App\Filament\Resources\FormSubmissions\FormSubmissionResource;
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;

class ListFormSubmissions extends ListRecords
{
    protected static string $resource = FormSubmissionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('back_to_forms')
                ->label('← Back to Forms List')
                ->color('gray')
                ->url(CrmFormResource::getUrl('index')),
        ];
    }
}

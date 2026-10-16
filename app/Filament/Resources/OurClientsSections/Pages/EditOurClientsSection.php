<?php

namespace App\Filament\Resources\OurClientsSections\Pages;

use App\Filament\Resources\OurClientsSections\OurClientsSectionResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditOurClientsSection extends EditRecord
{
    protected static string $resource = OurClientsSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('edit', ['record' => $this->record]);
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        if (!empty($data['client_logos']) && is_array($data['client_logos'])) {
            $normalized = [];
            foreach ($data['client_logos'] as $item) {
                if (is_string($item)) {
                    $cleanName = ucwords(str_replace(['_', '-'], ' ', pathinfo($item, PATHINFO_FILENAME)));
                    $img = $item;
                    if (!str_starts_with($img, 'clients/')) {
                        $basename = basename($img);
                        if (\Illuminate\Support\Facades\File::exists(storage_path('app/public/clients/' . $basename))) {
                            $img = 'clients/' . $basename;
                        }
                    }
                    $normalized[] = [
                        'image' => $img,
                        'name' => $cleanName,
                        'url' => null,
                    ];
                } elseif (is_array($item)) {
                    $img = $item['image'] ?? ($item['logo_image'] ?? ($item['logo'] ?? null));
                    if ($img && !str_starts_with($img, 'clients/')) {
                        $basename = basename($img);
                        if (\Illuminate\Support\Facades\File::exists(storage_path('app/public/clients/' . $basename))) {
                            $img = 'clients/' . $basename;
                        }
                    }
                    $normalized[] = [
                        'image' => $img,
                        'name' => $item['name'] ?? ($item['title'] ?? 'Client Partner'),
                        'url' => $item['url'] ?? null,
                    ];
                }
            }
            $data['client_logos'] = $normalized;
        }

        return $data;
    }
}

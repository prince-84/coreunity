<?php

namespace App\Filament\Resources\HeroSections\Pages;

use App\Filament\Resources\HeroSections\HeroSectionResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditHeroSection extends EditRecord
{
    protected static string $resource = HeroSectionResource::class;

    public function getHeading(): string
    {
        return 'Edit Hero Section';
    }

    public function getTitle(): string
    {
        return 'Edit Hero Section';
    }

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        if (!empty($data['media_logos']) && is_array($data['media_logos'])) {
            $normalized = [];
            foreach ($data['media_logos'] as $item) {
                if (is_array($item)) {
                    $img = $item['image'] ?? ($item['logo_image'] ?? ($item['logo'] ?? null));
                    if ($img && !str_starts_with($img, 'hero/logos/')) {
                        $basename = basename($img);
                        if (\Illuminate\Support\Facades\File::exists(storage_path('app/public/hero/logos/' . $basename))) {
                            $img = 'hero/logos/' . $basename;
                        }
                    }

                    $normalized[] = [
                        'image' => $img,
                        'title' => $item['brand_name'] ?? ($item['title'] ?? ($item['name'] ?? 'Press Logo')),
                        'url' => $item['url'] ?? ($item['redirect_url'] ?? null),
                    ];
                }
            }
            $data['media_logos'] = $normalized;
        }

        return $data;
    }
}

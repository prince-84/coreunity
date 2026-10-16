<?php

namespace App\Filament\Resources\OurWorkSections\Pages;

use App\Filament\Resources\OurWorkSections\OurWorkSectionResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditOurWorkSection extends EditRecord
{
    protected static string $resource = OurWorkSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        if (empty($data['cards'])) {
            $cards = [];
            if (!empty($data['card_1_title']) || !empty($data['card_1_stat_number'])) {
                $cards[] = [
                    'title' => $data['card_1_title'] ?? '',
                    'stat_number' => $data['card_1_stat_number'] ?? '',
                    'stat_desc' => $data['card_1_stat_desc'] ?? '',
                    'button_text' => $data['card_1_button_text'] ?? 'View Case Study',
                    'button_link' => $data['card_1_button_link'] ?? '/case-study/website',
                    'image' => $data['card_1_image'] ?? null,
                    'bg_image' => $data['card_1_bg_image'] ?? null,
                ];
            }
            if (!empty($data['card_2_title']) || !empty($data['card_2_stat_number'])) {
                $cards[] = [
                    'title' => $data['card_2_title'] ?? '',
                    'stat_number' => $data['card_2_stat_number'] ?? '',
                    'stat_desc' => $data['card_2_stat_desc'] ?? '',
                    'button_text' => $data['card_2_button_text'] ?? 'View Case Study',
                    'button_link' => $data['card_2_button_link'] ?? '/mobile-app',
                    'image' => $data['card_2_image'] ?? null,
                    'bg_image' => $data['card_2_bg_image'] ?? null,
                ];
            }
            $data['cards'] = $cards;
        }

        return $data;
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        if (!empty($data['cards']) && is_array($data['cards'])) {
            $cardsList = array_values($data['cards']);

            if (isset($cardsList[0])) {
                $data['card_1_title'] = $cardsList[0]['title'] ?? $data['card_1_title'] ?? null;
                $data['card_1_stat_number'] = $cardsList[0]['stat_number'] ?? $data['card_1_stat_number'] ?? null;
                $data['card_1_stat_desc'] = $cardsList[0]['stat_desc'] ?? $data['card_1_stat_desc'] ?? null;
                $data['card_1_button_text'] = $cardsList[0]['button_text'] ?? $data['card_1_button_text'] ?? null;
                $data['card_1_button_link'] = $cardsList[0]['button_link'] ?? $data['card_1_button_link'] ?? null;
                $data['card_1_image'] = $cardsList[0]['image'] ?? $data['card_1_image'] ?? null;
                $data['card_1_bg_image'] = $cardsList[0]['bg_image'] ?? $data['card_1_bg_image'] ?? null;
            }

            if (isset($cardsList[1])) {
                $data['card_2_title'] = $cardsList[1]['title'] ?? $data['card_2_title'] ?? null;
                $data['card_2_stat_number'] = $cardsList[1]['stat_number'] ?? $data['card_2_stat_number'] ?? null;
                $data['card_2_stat_desc'] = $cardsList[1]['stat_desc'] ?? $data['card_2_stat_desc'] ?? null;
                $data['card_2_button_text'] = $cardsList[1]['button_text'] ?? $data['card_2_button_text'] ?? null;
                $data['card_2_button_link'] = $cardsList[1]['button_link'] ?? $data['card_2_button_link'] ?? null;
                $data['card_2_image'] = $cardsList[1]['image'] ?? $data['card_2_image'] ?? null;
                $data['card_2_bg_image'] = $cardsList[1]['bg_image'] ?? $data['card_2_bg_image'] ?? null;
            }
        }

        return $data;
    }
}

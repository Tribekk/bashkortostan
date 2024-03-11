<?php

namespace App\Filament\Resources\SettlementsResource\Pages;

use App\Filament\Resources\SettlementsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSettlements extends ListRecords
{
    protected static string $resource = SettlementsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

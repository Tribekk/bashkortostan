<?php

namespace App\Filament\Resources\DeputiesResource\Pages;

use App\Filament\Resources\DeputiesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDeputies extends ListRecords
{
    protected static string $resource = DeputiesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

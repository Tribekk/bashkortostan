<?php

namespace App\Filament\Resources\GallerysResource\Pages;

use App\Filament\Resources\GallerysResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGallerys extends ListRecords
{
    protected static string $resource = GallerysResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

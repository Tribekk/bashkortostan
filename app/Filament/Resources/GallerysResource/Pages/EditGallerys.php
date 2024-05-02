<?php

namespace App\Filament\Resources\GallerysResource\Pages;

use App\Filament\Resources\GallerysResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGallerys extends EditRecord
{
    protected static string $resource = GallerysResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

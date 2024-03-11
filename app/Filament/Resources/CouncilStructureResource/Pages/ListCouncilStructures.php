<?php

namespace App\Filament\Resources\CouncilStructureResource\Pages;

use App\Filament\Resources\CouncilStructureResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCouncilStructures extends ListRecords
{
    protected static string $resource = CouncilStructureResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

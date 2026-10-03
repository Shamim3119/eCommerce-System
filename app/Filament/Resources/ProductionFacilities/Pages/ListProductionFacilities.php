<?php

namespace App\Filament\Resources\ProductionFacilities\Pages;

use App\Filament\Resources\ProductionFacilities\ProductionFacilityResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListProductionFacilities extends ListRecords
{
    protected static string $resource = ProductionFacilityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

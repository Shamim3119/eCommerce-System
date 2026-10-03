<?php

namespace App\Filament\Resources\ProductionFacilities\Pages;

use App\Filament\Resources\ProductionFacilities\ProductionFacilityResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditProductionFacility extends EditRecord
{
    protected static string $resource = ProductionFacilityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

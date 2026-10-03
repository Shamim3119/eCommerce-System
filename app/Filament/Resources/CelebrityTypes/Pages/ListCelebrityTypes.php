<?php

namespace App\Filament\Resources\CelebrityTypes\Pages;

use App\Filament\Resources\CelebrityTypes\CelebrityTypeResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCelebrityTypes extends ListRecords
{
    protected static string $resource = CelebrityTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\CelebrityTypes\Pages;

use App\Filament\Resources\CelebrityTypes\CelebrityTypeResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditCelebrityType extends EditRecord
{
    protected static string $resource = CelebrityTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\Celebrities\Pages;

use App\Filament\Resources\Celebrities\CelebrityResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditCelebrity extends EditRecord
{
    protected static string $resource = CelebrityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\CompanyOverviews\Pages;

use App\Filament\Resources\CompanyOverviews\CompanyOverviewResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditCompanyOverview extends EditRecord
{
    protected static string $resource = CompanyOverviewResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

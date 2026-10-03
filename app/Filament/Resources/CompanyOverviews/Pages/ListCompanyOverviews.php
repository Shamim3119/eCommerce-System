<?php

namespace App\Filament\Resources\CompanyOverviews\Pages;

use App\Filament\Resources\CompanyOverviews\CompanyOverviewResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCompanyOverviews extends ListRecords
{
    protected static string $resource = CompanyOverviewResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

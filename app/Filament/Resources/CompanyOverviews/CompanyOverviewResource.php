<?php

namespace App\Filament\Resources\CompanyOverviews;

use App\Filament\Resources\CompanyOverviews\Pages\CreateCompanyOverview;
use App\Filament\Resources\CompanyOverviews\Pages\EditCompanyOverview;
use App\Filament\Resources\CompanyOverviews\Pages\ListCompanyOverviews;
use App\Filament\Resources\CompanyOverviews\Schemas\CompanyOverviewForm;
use App\Filament\Resources\CompanyOverviews\Tables\CompanyOverviewsTable;
use App\Models\CompanyOverview;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CompanyOverviewResource extends Resource
{
    protected static ?string $model = CompanyOverview::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedDocumentText;

    protected static ?string $recordTitleAttribute = 'Overview';
    
    protected static bool $shouldRegisterNavigation = false;

    protected static ?int $navigationSort = 6;

   
    protected static ?string $navigationLabel = 'Company Overview';

    protected static ?string $maxContentWidth = 'full';

    public static function form(Schema $schema): Schema
    {
        return CompanyOverviewForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CompanyOverviewsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListCompanyOverviews::route('/'),
            'create' => CreateCompanyOverview::route('/create'),
            'edit' => EditCompanyOverview::route('/{record}/edit'),
        ];
    }
}

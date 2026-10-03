<?php

namespace App\Filament\Resources\ProductionFacilities;

use App\Filament\Resources\ProductionFacilities\Pages\CreateProductionFacility;
use App\Filament\Resources\ProductionFacilities\Pages\EditProductionFacility;
use App\Filament\Resources\ProductionFacilities\Pages\ListProductionFacilities;
use App\Filament\Resources\ProductionFacilities\Schemas\ProductionFacilityForm;
use App\Filament\Resources\ProductionFacilities\Tables\ProductionFacilitiesTable;
use App\Models\ProductionFacility;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ProductionFacilityResource extends Resource
{
    protected static ?string $model = ProductionFacility::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Facility';

    protected static bool $shouldRegisterNavigation = false;
    
    protected static ?int $navigationSort = 7;

     protected static ?string $navigationLabel = 'Production Facility';

    public static function form(Schema $schema): Schema
    {
        return ProductionFacilityForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ProductionFacilitiesTable::configure($table);
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
            'index' => ListProductionFacilities::route('/'),
            'create' => CreateProductionFacility::route('/create'),
            'edit' => EditProductionFacility::route('/{record}/edit'),
        ];
    }
}

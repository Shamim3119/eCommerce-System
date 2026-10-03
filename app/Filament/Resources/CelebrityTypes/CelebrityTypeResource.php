<?php

namespace App\Filament\Resources\CelebrityTypes;

use App\Filament\Resources\CelebrityTypes\Pages\CreateCelebrityType;
use App\Filament\Resources\CelebrityTypes\Pages\EditCelebrityType;
use App\Filament\Resources\CelebrityTypes\Pages\ListCelebrityTypes;
use App\Filament\Resources\CelebrityTypes\Schemas\CelebrityTypeForm;
use App\Filament\Resources\CelebrityTypes\Tables\CelebrityTypeTable;
use App\Models\CelebrityType;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CelebrityTypeResource extends Resource
{
    protected static ?string $model = CelebrityType::class;

    protected static string|\UnitEnum|null $navigationGroup = 'Celebrity';
    protected static ?string $navigationLabel = 'Celebrity Types';
    protected static ?int $navigationSort = 1;

 

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedTag;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return CelebrityTypeForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CelebrityTypeTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListCelebrityTypes::route('/'),
            'create' => CreateCelebrityType::route('/create'),
            'edit' => EditCelebrityType::route('/{record}/edit'),
        ];
    }
}
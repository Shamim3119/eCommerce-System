<?php

namespace App\Filament\Resources\Celebrities;

use App\Filament\Resources\Celebrities\Pages\CreateCelebrity;
use App\Filament\Resources\Celebrities\Pages\EditCelebrity;
use App\Filament\Resources\Celebrities\Pages\ListCelebrities;
use App\Filament\Resources\Celebrities\Schemas\CelebrityForm;
use App\Filament\Resources\Celebrities\Tables\CelebrityTable;
use App\Models\Celebrity;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CelebrityResource extends Resource
{
    protected static ?string $model = Celebrity::class;

    protected static string|\UnitEnum|null $navigationGroup = 'Celebrity';
    protected static ?string $navigationLabel = 'Celebrities';
    protected static ?int $navigationSort = 2;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedStar;

    protected static ?string $recordTitleAttribute = 'name';

    protected static ?string $maxContentWidth = 'full';

    public static function form(Schema $schema): Schema
    {
        return CelebrityForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CelebrityTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListCelebrities::route('/'),
            'create' => CreateCelebrity::route('/create'),
            'edit' => EditCelebrity::route('/{record}/edit'),
        ];
    }
}
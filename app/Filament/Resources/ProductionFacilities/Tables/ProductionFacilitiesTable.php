<?php

namespace App\Filament\Resources\ProductionFacilities\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class ProductionFacilitiesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('id'),

                TextColumn::make('title')
                    ->searchable(),

                TextColumn::make('description')
                    ->limit(150)
                    ->wrap()
                    ->tooltip(fn ($record) => $record->description),

                TextColumn::make('sort_order'),
                
                TextColumn::make('created_at')
                    ->dateTime(),
                //
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}

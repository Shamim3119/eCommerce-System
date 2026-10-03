<?php

namespace App\Filament\Resources\Celebrities\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class CelebrityTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->circular(),

                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('user_id')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('description')
                    ->searchable(),

                TextColumn::make('phone'),

                TextColumn::make('email'),

                // Display dynamic dynamic category name via model relationship
                TextColumn::make('celebrityType.name')
                    ->label('Type')
                    ->badge()
                    ->placeholder('-'),

                TextColumn::make('sort_order')
                    ->sortable(),
            ])
            ->defaultSort('sort_order')
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
<?php

namespace App\Filament\Resources\Navigations\Tables;

use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;

class NavigationsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('sort_order')
                    ->sortable(),

                TextColumn::make('title')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('header'),

                TextColumn::make('description')
                    ->limit(150)
                    ->wrap()
                    ->tooltip(fn ($record) => $record->description),

                IconColumn::make('is_active')
                    ->boolean(),

            ])

            ->defaultSort('sort_order')

            ->recordActions([
                EditAction::make(),
              //  DeleteAction::make(),
            ]);
    }
}
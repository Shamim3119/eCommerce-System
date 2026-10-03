<?php

namespace App\Filament\Resources\Abouts\Tables;

use Filament\Tables\Table;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Actions\EditAction;

class AboutsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('our_vision')
                    ->searchable()
                    ->wrap()
                    ->limit(350),

                TextColumn::make('our_mission')
                    ->searchable()
                    ->wrap()
                    ->limit(350),

                TextColumn::make('our_history')
                    ->searchable()
                    ->wrap()
                    ->limit(350),
                    
 
                TextColumn::make('sort_order')
                    ->numeric()
                    ->sortable(),

                TextColumn::make('updated_at')
                    ->dateTime('d M Y'),

            ])

            ->recordActions([
                EditAction::make(),
            ]);
    }
}
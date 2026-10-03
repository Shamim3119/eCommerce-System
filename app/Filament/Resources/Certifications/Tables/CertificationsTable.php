<?php

namespace App\Filament\Resources\Certifications\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
 
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;


class CertificationsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                
                TextColumn::make('certification_no')
                    ->searchable(),

                TextColumn::make('category')
                    ->searchable(),

                TextColumn::make('issue_date')
                    ->searchable(),

                TextColumn::make('valid_until')
                    ->searchable(),
                
                TextColumn::make('sort_order')
                    ->numeric()
                    ->sortable(),

                ImageColumn::make('image'),
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

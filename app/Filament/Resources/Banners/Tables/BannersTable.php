<?php

namespace App\Filament\Resources\Banners\Tables;

use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;

class BannersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('sl')
                    ->label('SL')
                    ->rowIndex(),

                ImageColumn::make('banner_image')
                    ->label('Image'),

                TextColumn::make('title')
                    ->searchable(),

                TextColumn::make('sub_title'),

             //   TextColumn::make('motto'),

                TextColumn::make('sort_order'),

                TextColumn::make('created_at')
                    ->dateTime('d M Y'),
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ]);
    }
}
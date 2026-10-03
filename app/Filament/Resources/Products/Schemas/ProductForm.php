<?php

namespace App\Filament\Resources\Products\Schemas;
 
use Filament\Schemas\Components\Section;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

            Section::make('Navigations')
                    ->schema([
            
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),

                Select::make('category_id')
                    ->relationship('category', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),

                Select::make('unit_id')
                    ->relationship('unit', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),

                Textarea::make('description')
                    ->rows(4),
                    

                    
                TextInput::make('sort_order')
                    ->numeric()
                    ->required()
                    ->default(0),

                TextInput::make('price')
                    ->numeric()
                    ->required()
                    ->default(0),


                FileUpload::make('image')
                    ->disk('public')
                    ->directory('products')
                    ->visibility('public')
                    ->image()
                    ->imageResizeMode('cover')


                //   ->imageCropAspectRatio('6:7')
                //  ->imageResizeTargetWidth('600')
                //  ->imageResizeTargetHeight('700')

                ->maxSize(512),

                ])
                ->columns(2)
                ->columnSpanFull(),


            ]);
    }
}

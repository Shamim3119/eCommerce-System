<?php

namespace App\Filament\Resources\ProductionFacilities\Schemas;


use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;

use Filament\Forms\Form;
use Filament\Forms\Components\Repeater;

use Filament\Forms\Components\FileUpload;
use AmidEsfahani\FilamentTinyEditor\TinyEditor;

class ProductionFacilityForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Production Facility')
                    ->schema([

                        TextInput::make('title')
                            ->disabled()
                            ->dehydrated(false),

                        TextInput::make('description')
                            ->required(),

                        TextInput::make('sort_order')
                            ->label('Sort Order')
                            ->numeric()
                            ->integer()
                            ->default(0),

                                                    // TinyEditor with full profile includes the HTML source-code button
                        TinyEditor::make('details')
                            ->label('Details')
                            ->profile('full')
                            ->columnSpanFull()
                            ->required(),



                            // Inside your schema components array:
                            Repeater::make('images')
                                ->label('Company Images & Titles')
                                ->schema([
                                    FileUpload::make('image')
                                        ->image()
                                        ->required()
                                        ->directory('company-overviews')
                                        ->columnSpanFull(),

                                    TextInput::make('image_title')
                                        ->label('Image Title')
                                        ->maxLength(255),
                                ])
                                ->columns(1)
                                ->columnSpanFull()
                                ->reorderable()
                                ->addActionLabel('Add Another Image'),

                    ])
                    ->columns(1)
                    ->columnSpanFull(),

            ]);
    }
}

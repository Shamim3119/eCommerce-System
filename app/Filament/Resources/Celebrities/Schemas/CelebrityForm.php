<?php

namespace App\Filament\Resources\Celebrities\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;

class CelebrityForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Celebrity Information')
                    ->schema([

                        TextInput::make('name')
                            ->required(),
                        
                        TextInput::make('user_id')
                            ->required(),

                        TextInput::make('description')
                            ->columnSpanFull(),

                     //   TextInput::make('designation')
                     //       ->required(),

                        TextInput::make('phone'),

                        TextInput::make('email')
                            ->email(),

                            
  

                        TextInput::make('sort_order')
                            ->numeric()
                            ->required()
                            ->default(0),

                        Select::make('celebrity_type_id')
                            ->label('Celebrity Type')
                            ->relationship('celebrityType', 'name')
                            ->searchable()
                            ->preload()
                            ->required(),

                        FileUpload::make('image')
                            ->image()
                            ->directory('celebrity')
                            ->required(),

                    ])
                    ->columns(2)
                    ->columnSpanFull(),

            ]);
    }
}
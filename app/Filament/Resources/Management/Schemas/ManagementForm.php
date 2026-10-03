<?php

namespace App\Filament\Resources\Management\Schemas;

use Filament\Schemas\Schema;

 
use Filament\Schemas\Components\Section;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;

class ManagementForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Management Information')
                    ->schema([

                        TextInput::make('name')
                            ->required(),

                        TextInput::make('designation')
                            ->required(),

                        TextInput::make('phone'),

                        TextInput::make('email')
                            ->email(),

                        Textarea::make('description')
                            ->columnSpanFull(),

                        TextInput::make('sort_order')
                            ->numeric()
                            ->required()
                            ->default(0),

                        FileUpload::make('image')
                            ->image()
                            ->directory('management')
                            ->required(),

                    ])
                    ->columns(2)
                    ->columnSpanFull(),

            ]);
    }
}

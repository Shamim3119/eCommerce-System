<?php

namespace App\Filament\Resources\Navigations\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Textarea;



class NavigationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Navigations')
                    ->schema([

                    TextInput::make('title')
                        ->required()
                        ->maxLength(255),

                    TextInput::make('slug')
                        ->required()
                        ->unique(ignoreRecord: true),

                    TextInput::make('header')
                        ->required()
                        ->maxLength(255),
        
                    Textarea::make('description')
                        ->maxLength(255),

    
                    TextInput::make('url')
                        ->placeholder('/about'),

                    TextInput::make('icon')
                        ->placeholder('heroicon-o-home'),

                    TextInput::make('sort_order')
                        ->numeric()
                        ->default(0),

                    Toggle::make('is_active')
                        ->default(true),
                
                ])
                ->columns(2)
                ->columnSpanFull(),

            ]);
    }
}
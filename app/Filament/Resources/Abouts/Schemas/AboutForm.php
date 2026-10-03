<?php

 
namespace App\Filament\Resources\Abouts\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use AmidEsfahani\FilamentTinyEditor\TinyEditor;
use Filament\Forms\Components\Textarea;

class AboutForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('About Information')
                    ->schema([

 
                        Textarea::make('our_vision')
                            ->required(),

                        Textarea::make('our_mission')
                            ->required(),

                        Textarea::make('our_history')
                            ->required(),

                        TextInput::make('sort_order')
                            ->numeric()
                            ->required()
                            ->default(0),

/*
                        // TinyEditor with full profile includes the HTML source-code button
                        TinyEditor::make('content')
                            ->label('Details')
                            ->profile('full')
                            ->columnSpanFull()
                            ->required(),
 
*/
                 
 
                            

                        ])

                        
                        ->columns(1)
                        ->columnSpanFull(),

            ]);
    }
}
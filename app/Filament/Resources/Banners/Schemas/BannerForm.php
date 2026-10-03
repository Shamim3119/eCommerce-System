<?php

namespace App\Filament\Resources\Banners\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
 
use Filament\Schemas\Components\Section;

class BannerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([

        Section::make('Navigations')
                    ->schema([

                TextInput::make('title')
                    ->required(),

                TextInput::make('sub_title'),

                Textarea::make('description'),

                FileUpload::make('banner_image')
                    ->disk('public')
                    ->directory('banners')
                    ->visibility('public')
                    ->image()
                    ->imageResizeMode('cover')
                    ->maxSize(1024),
                    // ->imageCropAspectRatio('16:9')
                  //  ->imageResizeTargetWidth('1920')
                  //  ->imageResizeTargetHeight('1080'),

                  //  TextInput::make('motto'),


                    TextInput::make('sort_order')
                        ->label('Sort Order')
                        ->numeric()
                        ->integer()
                        ->default(0),

            ])
            ->columns(2)
            ->columnSpanFull(),

        ]);
    }
}
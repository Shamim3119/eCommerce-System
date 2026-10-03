<?php

namespace App\Filament\Resources\WebsiteSettings\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
 

class WebsiteSettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

            Section::make('Website Settings')
                    ->schema([

                   TextInput::make('company_name')
                        ->required(),

                    TextInput::make('business_type'),

                    TextInput::make('motto'),

                    TextInput::make('tagline'),

                    FileUpload::make('logo')
                        ->image()
                        ->directory('website'),

                    FileUpload::make('favicon')
                        ->image()
                        ->directory('website'),

                    TextInput::make('email')
                        ->email(),

                    TextInput::make('phone'),

                    Textarea::make('address'),

          

                    TextInput::make('facebook'),

                    TextInput::make('linkedin'),

                    TextInput::make('instagram'),

                    TextInput::make('youtube'),
                    
                    TextInput::make('location'),

                    TextInput::make('copyright'),

                ])
                ->columns(2)
                ->columnSpanFull(),
            ]);
    }
}

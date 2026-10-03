<?php

namespace App\Filament\Resources\Certifications\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;

class CertificationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Certification Information')
                    ->schema([

                        TextInput::make('certification_no')
                            ->label('Certification No')
                            ->required(),

                        TextInput::make('category')
                            ->required(),

                        TextInput::make('issue_date')
                            ->label('Issue Date')
                            ->required(),

                        TextInput::make('valid_until')
                            ->label('Valid Until'),

                        TextInput::make('sort_order')
                            ->numeric()
                            ->required()
                            ->default(0),

                        FileUpload::make('image')
                            ->image()
                            ->directory('certifications')
                            ->required(),

                    ])
                    ->columns(2)
                    ->columnSpanFull(),

            ]);
    }
}
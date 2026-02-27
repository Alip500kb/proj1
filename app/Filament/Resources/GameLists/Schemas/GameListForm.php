<?php

namespace App\Filament\Resources\GameLists\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

use function Laravel\Prompts\select;

class GameListForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('id')
                    ->numeric()
                    ->required(),
                TextInput::make('gamename')
                    ->required()
                    ->placeholder('Make The Game Name'),
                Select::make('genre')
                    ->options([
                        'Action' => 'Action',
                        'Adventure' => 'Adventure',
                        'RPG' => 'RPG',
                        'Simulation' => 'Simulation',
                        'Open World' => 'Open World'
                    ])
                    -> native(false)
                    ->required(),
                TextInput::make('desc'),
                TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->step(100),
                TextInput::make('version')
                    ->required(),
                DateTimePicker::make('uploaded_at')
                    ->required()
            ]);
    }
}

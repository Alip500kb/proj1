<?php

namespace App\Filament\Resources\Listers\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Illuminate\Validation\Rules\Numeric;

class ListerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('id')
                    ->numeric(),
                TextInput::make('game_name'),
                TextInput::make('price')
                    ->numeric()
                    ->step(10000),
                // TextInput::make('Genres')
                //     ->datalist([
                //         'Action', 'Adventure', 'RPG', 'Simulation', 'Open World'
                //     ])

            ]);
    }
}

<?php

namespace App\Filament\Resources\Administrators\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Hash;
use NunoMaduro\Collision\Adapters\Phpunit\State;

class AdministratorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('id')
                    ->required(),
                TextInput::make('username')
                    ->required(),
                TextInput::make('password')
                    ->required()
                    ->dehydrateStateUsing(fn (string $state): string => Hash::make($state)),
                DateTimePicker::make('last_login_at'),
                DateTimePicker::make('created_at'),
                DateTimePicker::make('updated_at')
            ]);
    }
}

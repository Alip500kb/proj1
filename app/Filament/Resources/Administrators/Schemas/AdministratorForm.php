<?php

namespace App\Filament\Resources\Administrators\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

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
                    ->required(),
                DateTimePicker::make('last_login_at'),
                DateTimePicker::make('created_at'),
                DateTimePicker::make('updated_at')
            ]);
    }
}

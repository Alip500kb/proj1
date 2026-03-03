<?php

namespace App\Filament\Resources\Pemains\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Hash;

class PemainForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('id')
                    ->numeric()
                    ->required(),
                TextInput::make('username')
                ->required(),
                TextInput::make('password')
                ->password()
                ->dehydrateStateUsing(fn (string $state): string => Hash::make($state) )
                ->required(),
                DateTimePicker::make('created_at'),
                DateTimePicker::make('updated_at'),
                DateTimePicker::make('last_login_at'),
                DateTimePicker::make('deleted_at'),
                TextInput::make('delete_reason')
            ]);
    }
}

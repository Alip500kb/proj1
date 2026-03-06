<?php

namespace App\Filament\Resources\GameLists\Schemas;

use App\Models\category;
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
                    ->unique()
                    ->required(),
                TextInput::make('gamename')
                    ->required()
                    ->placeholder('Make The Game Name'),
                Select::make('genre')
                    ->label('genre')
                    ->options(category::pluck('category_name', 'category_name'))
                    // ->relationship('category', 'category_name') // relasi langsung ke model category
                    // -> native(false)
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

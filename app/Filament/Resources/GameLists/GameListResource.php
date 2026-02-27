<?php

namespace App\Filament\Resources\GameLists;

use App\Filament\Resources\GameLists\Pages\CreateGameList;
use App\Filament\Resources\GameLists\Pages\EditGameList;
use App\Filament\Resources\GameLists\Pages\ListGameLists;
use App\Filament\Resources\GameLists\Schemas\GameListForm;
use App\Filament\Resources\GameLists\Tables\GameListsTable;
use App\Models\GameList;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class GameListResource extends Resource
{
    protected static ?string $model = GameList::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::RocketLaunch;

    public static string|UnitEnum|null $navigationGroup = 'Manage';

    public static function form(Schema $schema): Schema
    {
        return GameListForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return GameListsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListGameLists::route('/'),
            'create' => CreateGameList::route('/create'),
            'edit' => EditGameList::route('/{record}/edit'),
        ];
    }
}

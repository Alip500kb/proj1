<?php

namespace App\Filament\Resources\Pemains;

use App\Filament\Resources\Pemains\Pages\CreatePemain;
use App\Filament\Resources\Pemains\Pages\EditPemain;
use App\Filament\Resources\Pemains\Pages\ListPemains;
use App\Filament\Resources\Pemains\Schemas\PemainForm;
use App\Filament\Resources\Pemains\Tables\PemainsTable;
use App\Models\Pemain;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class PemainResource extends Resource
{
    protected static ?string $model = Pemain::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::User;

    protected static string|UnitEnum|null $navigationGroup = 'Manage';
    public static function form(Schema $schema): Schema
    {
        return PemainForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PemainsTable::configure($table);
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
            'index' => ListPemains::route('/'),
            'create' => CreatePemain::route('/create'),
            'edit' => EditPemain::route('/{record}/edit'),
        ];
    }
}

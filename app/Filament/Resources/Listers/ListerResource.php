<?php

namespace App\Filament\Resources\Listers;

use App\Filament\Resources\Listers\Pages\CreateLister;
use App\Filament\Resources\Listers\Pages\EditLister;
use App\Filament\Resources\Listers\Pages\ListListers;
use App\Filament\Resources\Listers\Schemas\ListerForm;
use App\Filament\Resources\Listers\Tables\ListersTable;
use App\Models\Lister;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Contracts\Support\Htmlable;
use UnitEnum;

class ListerResource extends Resource
{
    protected static ?string $model = Lister::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static string|UnitEnum|null $navigationGroup = 'testing';

    public static function form(Schema $schema): Schema
    {
        return ListerForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ListersTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function getNavigationBadgeTooltip(): string|Htmlable|null
    {
        return 'lieur hideung';
    }

    public static function getPages(): array
    {
        return [
            'index' => ListListers::route('/'),
            'create' => CreateLister::route('/create'),
            'edit' => EditLister::route('/{record}/edit'),
        ];
    }
}

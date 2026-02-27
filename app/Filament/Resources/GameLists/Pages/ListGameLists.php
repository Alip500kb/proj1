<?php

namespace App\Filament\Resources\GameLists\Pages;

use App\Filament\Resources\GameLists\GameListResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListGameLists extends ListRecords
{
    protected static string $resource = GameListResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\Listers\Pages;

use App\Filament\Resources\Listers\ListerResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListListers extends ListRecords
{
    protected static string $resource = ListerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

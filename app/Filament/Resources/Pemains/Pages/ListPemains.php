<?php

namespace App\Filament\Resources\Pemains\Pages;

use App\Filament\Resources\Pemains\PemainResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPemains extends ListRecords
{
    protected static string $resource = PemainResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

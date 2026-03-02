<?php

namespace App\Filament\Resources\Pemains\Pages;

use App\Filament\Resources\Pemains\PemainResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPemain extends EditRecord
{
    protected static string $resource = PemainResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

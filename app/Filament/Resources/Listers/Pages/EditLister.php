<?php

namespace App\Filament\Resources\Listers\Pages;

use App\Filament\Resources\Listers\ListerResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditLister extends EditRecord
{
    protected static string $resource = ListerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

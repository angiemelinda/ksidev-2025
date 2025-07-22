<?php

namespace App\Filament\Admin\Resources\GajisResource\Pages;

use App\Filament\Admin\Resources\GajisResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGajis extends EditRecord
{
    protected static string $resource = GajisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

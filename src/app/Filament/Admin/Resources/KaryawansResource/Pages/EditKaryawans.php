<?php

namespace App\Filament\Admin\Resources\KaryawansResource\Pages;

use App\Filament\Admin\Resources\KaryawansResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKaryawans extends EditRecord
{
    protected static string $resource = KaryawansResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

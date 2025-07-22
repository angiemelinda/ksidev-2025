<?php

namespace App\Filament\Admin\Resources\KaryawansResource\Pages;

use App\Filament\Admin\Resources\KaryawansResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKaryawans extends ListRecords
{
    protected static string $resource = KaryawansResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

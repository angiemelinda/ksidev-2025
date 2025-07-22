<?php

namespace App\Filament\Admin\Resources\GajisResource\Pages;

use App\Filament\Admin\Resources\GajisResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGajis extends ListRecords
{
    protected static string $resource = GajisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

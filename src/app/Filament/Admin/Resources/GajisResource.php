<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\GajisResource\Pages;
use App\Filament\Admin\Resources\GajisResource\RelationManagers;
use App\Models\Gajis;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GajisResource extends Resource
{
    protected static ?string $model = Gajis::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('karyawan_id')
                    ->label('Karyawan')
                    ->relationship('karyawan', 'nama')
                    ->required(),
                Forms\Components\TextInput::make('jumlah')
                    ->label('Jumlah Gaji')
                    ->numeric()
                    ->required(),
                Forms\Components\TextInput::make('periode')
                    ->label('Periode')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListGajis::route('/'),
            'create' => Pages\CreateGajis::route('/create'),
            'edit' => Pages\EditGajis::route('/{record}/edit'),
        ];
    }
}

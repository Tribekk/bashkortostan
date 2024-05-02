<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GallerysResource\Pages;
use App\Filament\Resources\GallerysResource\RelationManagers;
use App\Models\Gallerys;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GallerysResource extends Resource
{
    protected static ?string $model = Gallerys::class;

    protected static ?string $label= 'Галерея';

    protected static ?string $pluralModelLabel = 'Галерея';

    protected static ?string $navigationGroup = 'Пресс-центр';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
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
            'index' => Pages\ListGallerys::route('/'),
            'create' => Pages\CreateGallerys::route('/create'),
            'edit' => Pages\EditGallerys::route('/{record}/edit'),
        ];
    }
}

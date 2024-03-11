<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PhonesResource\Pages;
use App\Filament\Resources\PhonesResource\RelationManagers;
use App\Models\Phones;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PhonesResource extends Resource
{
    protected static ?string $model = Phones::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Муниципальный район';

    protected static ?string $navigationLabel = 'Телефоны района';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Добавление номера')->schema([
                    Forms\Components\Group::make()->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Название')
                            ->required()
                            ->Live(true)
                            ->unique(),
                        Forms\Components\TextInput::make('number')
                            ->label('Номер')
                            ->required()
                            ->Live(true)
                            ->unique(),
                    ])->columns(2)
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Название')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('number')
                    ->label('Номер телефона'),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Созданно')
                    ->date()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Обновленно')
                    ->date()
                    ->sortable()
                    ->toggleable()
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
            'index' => Pages\ListPhones::route('/'),
            'create' => Pages\CreatePhones::route('/create'),
            'edit' => Pages\EditPhones::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SettlementsResource\Pages;
use App\Filament\Resources\SettlementsResource\RelationManagers;
use App\Models\Settlements;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SettlementsResource extends Resource
{
    protected static ?string $model = Settlements::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Муниципальный район';

    protected static ?string $navigationLabel = 'Поселения';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Новое поселение или район')->schema([
                    Forms\Components\Group::make()->schema([
                        Forms\Components\TextInput::make('location')
                            ->label('Местонахождения')
                            ->required()
                            ->Live(true)
                            ->unique(),
                        Forms\Components\TextInput::make('number')
                            ->label('Номер телефона')
                            ->required(),
                        Forms\Components\TextInput::make('email')
                            ->label('Эл. почта')
                            ->required(),
                        Forms\Components\TextInput::make('site')
                            ->label('Сайт района')
                            ->required(),
                        Forms\Components\TextInput::make('glava')
                            ->label('Глава района')
                            ->required(),
                        Forms\Components\TextInput::make('name')
                            ->label('Название района')
                            ->required(),
                    ])->columns(2)
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('location')
                    ->label('Местонахождения'),
                Tables\Columns\TextColumn::make('number')
                    ->label('Номер телефона'),
                Tables\Columns\TextColumn::make('email')
                    ->label('Эл. почта'),
                Tables\Columns\TextColumn::make('site')
                    ->label('Сайт района'),
                Tables\Columns\TextColumn::make('glava')
                    ->label('Глава района'),
                Tables\Columns\TextColumn::make('name')
                    ->label('Название района'),
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
            'index' => Pages\ListSettlements::route('/'),
            'create' => Pages\CreateSettlements::route('/create'),
            'edit' => Pages\EditSettlements::route('/{record}/edit'),
        ];
    }
}

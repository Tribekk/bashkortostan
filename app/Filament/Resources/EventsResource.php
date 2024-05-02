<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventsResource\Pages;
use App\Filament\Resources\EventsResource\RelationManagers;
use App\Models\Events;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EventsResource extends Resource
{
    protected static ?string $model = Events::class;

    protected static ?string $label= 'События';

    protected static ?string $pluralModelLabel = 'События';

    protected static ?string $navigationGroup = 'Пресс-центр';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Параметры события')->schema([
                    Forms\Components\Group::make()->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Название')
                            ->required()
                            ->Live(true),
                        Forms\Components\FileUpload::make('img')
                            ->label('Фотография')
                            ->image()
                            ->imageEditor()
                            ->required(),
                        Forms\Components\RichEditor::make('text')
                            ->label('Содержание')
                            ->required()
                    ])->columns(2)
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('img')
                    ->label('Фотография'),
                Tables\Columns\TextColumn::make('name')
                    ->label('Название')
                    ->limit(25),
                Tables\Columns\TextColumn::make('text')
                    ->label('Содержание')
                    ->limit(25)
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
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvents::route('/create'),
            'edit' => Pages\EditEvents::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DeputiesResource\Pages;
use App\Filament\Resources\DeputiesResource\RelationManagers;
use App\Models\Deputies;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use PHPUnit\Metadata\Group;

class DeputiesResource extends Resource
{
    protected static ?string $model = Deputies::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Совет';

    protected static ?string $modelLabel = 'Депутаты';

    protected static ?string $navigationLabel = 'Депутаты';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Данные депутата')->schema([
                    Forms\Components\Group::make()->schema([
                        Forms\Components\TextInput::make('FIO')
                            ->label('ФИО')
                            ->required()
                            ->Live(true)
                            ->unique(),
                        Forms\Components\TextInput::make('rating')
                            ->label('Рэйтинг депутата')
                            ->required()
                            ->numeric()
                            ->maxValue(10)
                            ->minValue(1),
                        Forms\Components\TextInput::make('partia')
                            ->label('Партия')
                            ->required(),
                        Forms\Components\TextInput::make('information')
                            ->label('Контактная информация')
                            ->required(),
                    ])->columns(2)
                ]),
                Forms\Components\Section::make('Фотография депутата')->schema([
                    Forms\Components\Group::make()->schema([
                        Forms\Components\FileUpload::make('photo')
                            ->label('Фото')
                            ->required()
                            ->preserveFilenames()
                            ->image()
                            ->imageEditor()
                    ])
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('photo')
                ->label('Фотография'),
                Tables\Columns\TextColumn::make('FIO')
                    ->label('ФИО'),
                Tables\Columns\TextColumn::make('rating')
                    ->label('Рэйтинг'),
                Tables\Columns\TextColumn::make('partia')
                    ->label('Партия'),
                Tables\Columns\TextColumn::make('information')
                    ->label('Контактная информация'),
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
            'index' => Pages\ListDeputies::route('/'),
            'create' => Pages\CreateDeputies::route('/create'),
            'edit' => Pages\EditDeputies::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StructureResource\Pages;
use App\Filament\Resources\StructureResource\RelationManagers;
use App\Models\Structure;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StructureResource extends Resource
{
    protected static ?string $model = Structure::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Администраця';

    protected static ?string $navigationLabel = 'Структура';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Структура админисрации')->schema([
                    Forms\Components\Group::make()->schema([
                        Forms\Components\TextInput::make('FIO')
                            ->label('ФИО')
                            ->required()
                            ->Live(true)
                            ->unique(),
                        Forms\Components\TextInput::make('subdivision')
                            ->label('Подраздиление')
                            ->required(),
                        Forms\Components\TextInput::make('job_title')
                            ->label('Должность')
                            ->required(),
                    ])->columns(2)
                ]),
                Forms\Components\Section::make('Контактная информация')->schema([
                    Forms\Components\Group::make()->schema([
                        Forms\Components\TextInput::make('number')
                            ->label('Номер телефона')
                            ->live(onBlur: true),
                        Forms\Components\TextInput::make('email')
                            ->label('Почта')
                            ->live(onBlur: true),
                        Forms\Components\TextInput::make('reception')
                            ->label('График приёма')
                            ->required(),
                    ])
                ])->collapsed()->columns(2),
                Forms\Components\Section::make('Фотография представителя администрации')->schema([
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
                Tables\Columns\TextColumn::make('subdivision')
                    ->label('Подраздиление'),
                Tables\Columns\TextColumn::make('job_title')
                    ->label('Должность'),
                Tables\Columns\TextColumn::make('email')
                    ->label('Эл. почта'),
                Tables\Columns\TextColumn::make('number')
                    ->label('Номер телефона'),
                Tables\Columns\TextColumn::make('reception')
                    ->label('График приёма'),
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
            'index' => Pages\ListStructures::route('/'),
            'create' => Pages\CreateStructure::route('/create'),
            'edit' => Pages\EditStructure::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CouncilStructureResource\Pages;
use App\Filament\Resources\CouncilStructureResource\RelationManagers;
use App\Models\CouncilStructure;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CouncilStructureResource extends Resource
{
    protected static ?string $model = CouncilStructure::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Совет';


    protected static ?string $navigationLabel = 'Структура';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Структура совета')->schema([
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
                        Forms\Components\TextInput::make('information')
                            ->label('Контактная информация')
                            ->required()
                            ->disabled()
                            ->dehydrated()
                            ->default('Не указано'),
                    ])->columns(2)
                ]),
                Forms\Components\Section::make('Контактная информация')->schema([
                    Forms\Components\Group::make()->schema([
                        Forms\Components\TextInput::make('phone')
                        ->label('Номер телефона')
                            ->live(onBlur: true)
                        ->afterStateUpdated(function (string $operation, $state, Forms\Set $set){
                            if ($operation!=='create'){
                                return;
                            }

                            $set('information', 'Указана');
                        }),
                        Forms\Components\TextInput::make('mail')
                        ->label('Почта')
                            ->live(onBlur: true)
                            ->afterStateUpdated(function (string $operation, $state, Forms\Set $set){
                                if ($operation!=='create'){
                                    return;
                                }

                                $set('information', 'Указана');
                            })
                    ])
                ])->collapsed()->columns(2),
                Forms\Components\Section::make('Фотография представителя совета')->schema([
                    Forms\Components\Group::make()->schema([
                        Forms\Components\FileUpload::make('photo')
                            ->label('Фото')
                            ->required()
                            ->preserveFilenames()
                            ->image()
                            ->imageEditor()
                    ])
                ])
            ])->columns(2);
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
            'index' => Pages\ListCouncilStructures::route('/'),
            'create' => Pages\CreateCouncilStructure::route('/create'),
            'edit' => Pages\EditCouncilStructure::route('/{record}/edit'),
        ];
    }
}

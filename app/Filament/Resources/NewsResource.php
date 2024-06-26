<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsResource\Pages;
use App\Filament\Resources\NewsResource\RelationManagers;
use App\Models\News;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class NewsResource extends Resource
{
    protected static ?string $model = News::class;

    protected static ?string $label= 'Новости';

    protected static ?string $pluralModelLabel = 'Новости';

    protected static ?string $navigationGroup = 'Пресс-центр';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Параметры новости')->schema([
                    Forms\Components\Group::make()->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Название')
                            ->required()
                            ->Live(true)
                            ->unique(),
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
            'index' => Pages\ListNews::route('/'),
            'create' => Pages\CreateNews::route('/create'),
            'edit' => Pages\EditNews::route('/{record}/edit'),
        ];
    }
}

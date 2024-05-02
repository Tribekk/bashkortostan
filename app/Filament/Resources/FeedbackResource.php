<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FeedbackResource\Pages;
use App\Filament\Resources\FeedbackResource\RelationManagers;
use App\Models\Feedback;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FeedbackResource extends Resource
{
    protected static ?string $model = Feedback::class;

    protected static ?string $label= 'Обратная связь';

    protected static ?string $pluralModelLabel = 'Обратная связь';

    protected static ?string $navigationGroup = 'Пресс-центр';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title'),
                Forms\Components\TextInput::make('destination'),
                Forms\Components\RichEditor::make('body'),
                Forms\Components\FileUpload::make('files')
                ->multiple(),
                Forms\Components\TextInput::make('FIO'),
                Forms\Components\TextInput::make('email'),
                Forms\Components\Toggle::make('isVisible')
                    ->onColor('success')
                    ->offColor('danger'),
                Forms\Components\RichEditor::make('message')

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('files'),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('destination'),
                Tables\Columns\TextColumn::make('body')
                ->limit(15),
                Tables\Columns\TextColumn::make('FIO'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\ToggleColumn::make('isVisible')
                    ->onColor('success')
                    ->offColor('danger'),
                Tables\Columns\TextColumn::make('message')
                ->limit(15)
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
            'index' => Pages\ListFeedback::route('/'),
            'create' => Pages\CreateFeedback::route('/create'),
            'edit' => Pages\EditFeedback::route('/{record}/edit'),
        ];
    }
}

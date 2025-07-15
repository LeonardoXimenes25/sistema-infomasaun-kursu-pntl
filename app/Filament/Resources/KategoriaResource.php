<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\Kategoria;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\KategoriaResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\KategoriaResource\RelationManagers;

class KategoriaResource extends Resource
{
    protected static ?string $model = Kategoria::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                 TextInput::make('kodigu') // ← ubah dari Textarea ke TextInput
            ->label('Kodigu')
            ->maxLength(50)
            ->helperText('Kode singkat, mis. RL, RLUR, dll.'),

                  TextInput::make('naran')
            ->label('Naran Kategoria')
            ->required()
            ->maxLength(255)
            ->unique(ignorable: fn ($record) => $record),

       
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable()->label('Nu. '),
                TextColumn::make('kodigu')->label('Kodigu')->searchable()->sortable(),
                TextColumn::make('naran')->label('Naran')->searchable(),
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
            'index' => Pages\ListKategorias::route('/'),
            'create' => Pages\CreateKategoria::route('/create'),
            'edit' => Pages\EditKategoria::route('/{record}/edit'),
        ];
    }
}

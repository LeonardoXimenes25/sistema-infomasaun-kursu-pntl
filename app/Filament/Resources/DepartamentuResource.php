<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\Departamentu;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\DepartamentuResource\Pages;
use App\Filament\Resources\DepartamentuResource\RelationManagers;

class DepartamentuResource extends Resource
{
    protected static ?string $model = Departamentu::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Polisia';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                 TextInput::make('kodigu')
                    ->label('Kódigu')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(50),

                TextInput::make('naran')
                    ->label('Naran Fundus')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kodigu')->label('Kódigu')->searchable()->sortable(),
                TextColumn::make('naran')->label('Departamentu')->searchable()->sortable(),
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
            'index' => Pages\ListDepartamentus::route('/'),
            'create' => Pages\CreateDepartamentu::route('/create'),
            'edit' => Pages\EditDepartamentu::route('/{record}/edit'),
        ];
    }
}

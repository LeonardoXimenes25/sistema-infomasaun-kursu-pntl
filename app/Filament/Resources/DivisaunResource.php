<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Divisaun;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\DivisaunResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\DivisaunResource\RelationManagers;

class DivisaunResource extends Resource
{
    protected static ?string $model = Divisaun::class;

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
                TextColumn::make('naran')->label('Tipu Kursu')->searchable()->sortable(),
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
            'index' => Pages\ListDivisauns::route('/'),
            'create' => Pages\CreateDivisaun::route('/create'),
            'edit' => Pages\EditDivisaun::route('/{record}/edit'),
        ];
    }
}

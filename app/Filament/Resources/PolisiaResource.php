<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Polisia;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\PolisiaResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PolisiaResource\RelationManagers;

class PolisiaResource extends Resource
{
    protected static ?string $model = Polisia::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

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
                    ->label('Naran')
                    ->required()
                    ->maxLength(255),

                Select::make('sexu')
                    ->label('Sexu')
                    ->options([
                        'M' => 'Mane',
                        'F' => 'Feto',
                    ])
                    ->required(),

                Select::make('unidade_id')
                    ->label('Unidade')
                    ->relationship('unidade', 'naran')
                    ->searchable()
                    ->nullable()
                    ->preload(),

                Select::make('departamentu_id')
                    ->label('Departamentu')
                    ->relationship('departamentu', 'naran')
                    ->searchable()
                    ->nullable()
                    ->preload(),

                Select::make('diviza_id')
                    ->label('Divizaun')
                    ->relationship('diviza', 'naran')
                    ->searchable()
                    ->nullable()
                    ->preload(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kodigu')->label('Kódigu')->sortable()->searchable(),
                TextColumn::make('naran')->label('Naran')->sortable()->searchable(),
                TextColumn::make('sexu')->label('Sexu')->sortable(),
                TextColumn::make('unidade.naran')->label('Unidade')->sortable(),
                TextColumn::make('departamentu.naran')->label('Departamentu')->sortable(),
                TextColumn::make('diviza.naran')->label('Divizaun')->sortable(),
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
            'index' => Pages\ListPolisias::route('/'),
            'create' => Pages\CreatePolisia::route('/create'),
            'edit' => Pages\EditPolisia::route('/{record}/edit'),
        ];
    }
}

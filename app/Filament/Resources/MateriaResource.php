<?php

namespace App\Filament\Resources;

use App\Models\Materia;
use App\Models\Kategoria;
use App\Models\Tipukursu;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Tables\Columns\TextColumn;
use App\Filament\Resources\MateriaResource\Pages;

class MateriaResource extends Resource
{
    protected static ?string $model            = Materia::class;
    protected static ?string $navigationIcon   = 'heroicon-o-book-open';
    protected static ?string $navigationGroup  = 'Master Data';
    protected static ?string $modelLabel       = 'Materia';
    protected static ?string $pluralModelLabel = 'Materias';

    /* ---------- FORM ---------- */
    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('kodigu')
                ->label('Kodigu')
                ->required()
                ->unique(ignoreRecord: true)
                ->maxLength(50),

            TextInput::make('naran')
                ->label('Naran Materia')
                ->required()
                ->maxLength(255),

            Select::make('kategoria_id')
                ->label('Kategoria')
                ->options(Kategoria::orderBy('naran')->pluck('naran', 'id'))
                ->required()
                ->reactive()
                ->afterStateUpdated(fn (Set $set) => $set('tipu_kursu_id', null)),

            Select::make('tipu_kursu_id')
                ->label('Tipu Kursu')
                ->required()
                ->options(fn (Get $get) => 
                    Tipukursu::where('kategoria_id', $get('kategoria_id'))
                        ->orderBy('naran')
                        ->pluck('naran', 'id')
                ),
        ]);
    }

    /* ---------- TABLE ---------- */
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kodigu')->label('Kodigu')->searchable()->sortable(),
                TextColumn::make('naran')->label('Naran Materia')->searchable()->sortable(),
                TextColumn::make('kategoria.naran')->label('Kategoria')->sortable()->searchable(),
                TextColumn::make('tipu.naran')->label('Tipu Kursu')->sortable()->searchable(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    /* ---------- PAGES ---------- */
    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListMaterias::route('/'),
            'create' => Pages\CreateMateria::route('/create'),
            'edit'   => Pages\EditMateria::route('/{record}/edit'),
        ];
    }
}

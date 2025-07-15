<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Forms\Form;
use App\Models\Kategoria;
use App\Models\FatinKursu;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;  // ← ganti import
use App\Filament\Resources\FatinKursuResource\Pages;

class FatinKursuResource extends Resource
{
    protected static ?string $model = FatinKursu::class;

    protected static ?string $navigationGroup = 'Master Data';
    protected static ?string $navigationIcon  = 'heroicon-o-map';

    /* ---------- FORM ---------- */
    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('kodigu')
                ->label('Kódigu')
                ->required()
                ->unique(ignoreRecord: true)
                ->maxLength(50),

            TextInput::make('naran')
                ->label('Naran Fatin')
                ->required()
                ->maxLength(255),

            Select::make('kategoria_id')                // ← nama kolom konsisten
                ->label('Kategoria Fatin')
                ->options(Kategoria::orderBy('naran')->pluck('naran', 'id'))
                ->required()
                ->searchable(),
        ]);
    }

    /* ---------- TABLE ---------- */
    public static function table(Table $table): Table
    {
        return $table->columns([
                TextColumn::make('kodigu')->label('Kódigu')->sortable()->searchable(),
                TextColumn::make('naran')->label('Naran Fatin')->sortable()->searchable(),
                TextColumn::make('kategoria.naran')->label('Kategoria')->sortable()->searchable(),
        ])
        ->actions([ Tables\Actions\EditAction::make() ])
        ->bulkActions([ Tables\Actions\DeleteBulkAction::make() ]);
    }

    /* ---------- ROUTES ---------- */
    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListFatinKursus::route('/'),
            'create' => Pages\CreateFatinKursu::route('/create'),
            'edit'   => Pages\EditFatinKursu::route('/{record}/edit'),
        ];
    }
}

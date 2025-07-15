<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\TipuKursu;
use App\Models\Kategoria;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use App\Filament\Resources\TipuKursuResource\Pages;
use Illuminate\Database\Eloquent\Builder;

class TipuKursuResource extends Resource
{
    protected static ?string $model = TipuKursu::class;

    public static function getNavigationGroup(): ?string
    {
        return 'Master Data';
    }

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $modelLabel = 'Tipu Kursu';
    protected static ?string $pluralModelLabel = 'Tipu Kursu';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('kodigu')
                    ->label('Kódigu')
                    ->unique(ignoreRecord: true)
                    ->required()
                    ->maxLength(10),

                TextInput::make('naran')
                    ->label('Tipu Kursu')
                    ->required()
                    ->maxLength(255),

              Select::make('kategoria_id')
    ->label('Kategoria')
    ->options(\App\Models\Kategoria::orderBy('naran')->pluck('naran', 'id')->toArray())
    ->required()
    ->searchable(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kodigu')->label('Kódigu')->searchable()->sortable(),
                TextColumn::make('naran')->label('Tipu Kursu')->searchable()->sortable(),
                TextColumn::make('kategoria.naran')->label('Kategoria')->searchable()->sortable(),
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
            'index' => Pages\ListTipuKursus::route('/'),
            'create' => Pages\CreateTipuKursu::route('/create'),
            'edit' => Pages\EditTipuKursu::route('/{record}/edit'),
        ];
    }
}

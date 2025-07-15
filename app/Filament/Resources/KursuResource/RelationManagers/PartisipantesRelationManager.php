<?php

namespace App\Filament\Resources\KursuResource\RelationManagers;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Hidden;
use Filament\Resources\RelationManagers\RelationManager;
use App\Models\Polisia;

class PartisipantesRelationManager extends RelationManager
{
    protected static string $relationship = 'partisipantes';
    protected static ?string $title       = 'Partisipantes';

    public function form(Form $form): Form
    {
        return $form->schema([
            Select::make('polisia_id')
                ->label('Naran (NRP – Naran)')
                ->placeholder('Pilih / cari Polisia…')
                ->searchable(['minLength' => 0])
                ->preload()
                ->options(function () {
                    // Ambil data Polisia, pluck label dari accessor 'label'
                    return Polisia::orderBy('naran')
                        ->limit(50)
                        ->get()
                        ->pluck('label', 'id')
                        ->toArray();
                })
                ->getSearchResultsUsing(function (?string $query = null) {
                    $queryBuilder = Polisia::query();

                    if ($query) {
                        $queryBuilder->where('kodigu', 'like', "%{$query}%")
                                     ->orWhere('naran', 'like', "%{$query}%");
                    }

                    return $queryBuilder->orderBy('naran')
                        ->limit(50)
                        ->get()
                        ->pluck('label', 'id')
                        ->toArray();
                })
                ->getOptionLabelUsing(function ($value) {
                    $polisia = Polisia::find($value);
                    return $polisia?->label ?? '-';
                })
                ->reactive() // Penting, supaya bisa trigger afterStateUpdated
                ->afterStateUpdated(function (callable $set, $state) {
                    $polisia = Polisia::find($state);
                    $set('sexu', $polisia?->sexu);
                })
                ->required(),

            Hidden::make('sexu')
                ->required(),
        ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('polisia.kodigu')->label('NRP')->sortable()->searchable(),
                TextColumn::make('polisia.naran')->label('Naran')->sortable()->searchable(),
                TextColumn::make('sexu')->label('Sexu')->sortable(),
                TextColumn::make('polisia.unidade.naran')->label('Unidade')->toggleable(),
                TextColumn::make('polisia.departamentu.naran')->label('Departamentu')->toggleable(),
                TextColumn::make('polisia.diviza.naran')->label('Divizaun')->toggleable(),
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
}

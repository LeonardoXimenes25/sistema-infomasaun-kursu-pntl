<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Kursu;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\Partisipante;
use Filament\Resources\Resource;
use Filament\Tables\Actions\Action;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use App\Filament\Resources\PartisipanteResource\Pages;

class PartisipanteResource extends Resource
{
    protected static ?string $model = Partisipante::class;

     public static function getNavigationGroup(): ?string
    {
        return 'Partisipante';
    }

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $modelLabel = 'Rai Laran';
    protected static ?string $pluralModelLabel = 'Rai Laran';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('naran')
                    ->label('Naran Kompletu')
                    ->required()
                    ->maxLength(255),

                Select::make('diviza')
                    ->label('Diviza')
                    ->options(Partisipante::divizaOptions())
                    ->placeholder('Hili Diviza')
                    ->required(),

                Select::make('unidade')
                    ->label('Unidade')
                    ->options(Partisipante::unidadeOptions())
                    ->placeholder('Hili Unidade')
                    ->required(),

                Select::make('kursu_id')
                    ->label('Kursu')
                    ->relationship('kursu', 'naran_kursu')
                    ->placeholder('Hili Kursu')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('naran')->label('Naran Kompletu')->sortable()->searchable(),
                TextColumn::make('diviza')->label('Diviza')->sortable()->searchable(),
                TextColumn::make('unidade')->label('Unidade')->sortable()->searchable(),
                TextColumn::make('kursu.naran_kursu')->label('Kursu')->sortable()->searchable(),
            ])
              ->headerActions([
            Action::make('Export PDF')
                ->label('Export PDF')
                ->icon('heroicon-o-document-arrow-down')
                ->url(route('partisipante.report'))
                ->openUrlInNewTab()
              ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListPartisipantes::route('/'),
            'create' => Pages\CreatePartisipante::route('/create'),
            'edit' => Pages\EditPartisipante::route('/{record}/edit'),
        ];
    }
}

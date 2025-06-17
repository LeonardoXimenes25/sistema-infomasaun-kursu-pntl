<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use App\Models\PartisipanteRaiLiur;
use Filament\Tables\Actions\Action;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PartisipanteRaiLiurResource\Pages;
use App\Filament\Resources\PartisipanteRaiLiurResource\RelationManagers;

class PartisipanteRaiLiurResource extends Resource
{
    protected static ?string $model = PartisipanteRaiLiur::class;

    public static function getNavigationGroup(): ?string
    {
        return 'Partisipante';
    }

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $modelLabel = 'Rai Liur';
    protected static ?string $pluralModelLabel = 'Rai Liur';

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
                    ->options(PartisipanteRaiLiur::divizaOptions())
                    ->placeholder('Hili Diviza')
                    ->required(),

                    Select::make('unidade')
                    ->label('Unidade')
                    ->options(PartisipanteRaiLiur::unidadeOptions())
                    ->placeholder('Hili Unidade')
                    ->required(),

                    Select::make('departamentu')
                    ->label('Departamentu')
                    ->options(PartisipanteRaiLiur::departamentuOptions())
                    ->placeholder('Hili Departamentu')
                    ->required(),

                Select::make('kursurailiur_id')
                    ->label('Kursu Rai Liur')
                    ->relationship('KursuRaiLiur', 'naran_kursu')
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
                TextColumn::make('departamentu')->label('Departamentu')->sortable()->searchable(),
                TextColumn::make('KursuRaiLiur.naran_kursu')->label('Kursu')->sortable()->searchable(),
            ])
            ->headerActions([
    Action::make('Export PDF')
        ->label('Export PDF')
        ->icon('heroicon-o-document-arrow-down')
        ->url(route('partisipanterailiur.report'))
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
            'index' => Pages\ListPartisipanteRaiLiurs::route('/'),
            'create' => Pages\CreatePartisipanteRaiLiur::route('/create'),
            'edit' => Pages\EditPartisipanteRaiLiur::route('/{record}/edit'),
        ];
    }
}

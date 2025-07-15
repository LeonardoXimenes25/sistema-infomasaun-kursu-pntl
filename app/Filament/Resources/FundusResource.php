<?php

namespace App\Filament\Resources;

use App\Models\Fundus;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use App\Filament\Resources\FundusResource\Pages;



class FundusResource extends Resource
{
    protected static ?string $model = Fundus::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office';
    protected static ?string $navigationGroup = 'Master Data';
    protected static ?string $modelLabel = 'Fundus';
    protected static ?string $pluralModelLabel = 'Fundus';

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
                TextColumn::make('id')->label('No')->sortable(),
                TextColumn::make('kodigu')->label('Kódigu')->sortable()->searchable(),
                TextColumn::make('naran')->label('Naran Fundus')->sortable()->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFundus::route('/'),
            'create' => Pages\CreateFundus::route('/create'),
            'edit' => Pages\EditFundus::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Kursu;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\KursuResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\KursuResource\RelationManagers;

class KursuResource extends Resource
{
    protected static ?string $model = Kursu::class;

     public static function getNavigationGroup(): ?string
    {
        return 'Kursu';
    }

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $modelLabel = 'Rai Laran';
    protected static ?string $pluralModelLabel = 'Rai Laran';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('naran_kursu')
                            ->label('Naran Kursu')
                            ->required(),

                TextInput::make('tipu_kursu')
                            ->label('Tipu Kursu')
                            ->required(),

                TextInput::make('fatin_kursu')
                            ->label('Fatin Kursu')
                            ->required(),

                DatePicker::make('data_hahu')
                            ->label('Data Hahu')
                            ->required(),

                DatePicker::make('data_remata')
                            ->label('Data remata')
                            ->required(),

                TextInput::make('fundus')
                            ->label('Fundus')
                            ->required(),

                            TextInput::make('feto')
    ->numeric()
    ->reactive()
    ->debounce(500)
    ->afterStateUpdated(function ($state, callable $set, callable $get) {
        if (is_numeric($state) && is_numeric($get('mane'))) {
            $set('total', (int) $state + (int) $get('mane'));
        }
    }),

TextInput::make('mane')
    ->numeric()
    ->reactive()
    ->debounce(500)
    ->afterStateUpdated(function ($state, callable $set, callable $get) {
        if (is_numeric($state) && is_numeric($get('feto'))) {
            $set('total', (int) $state + (int) $get('feto'));
        }
    }),

TextInput::make('total')
    ->numeric()
    ->readOnly(),

                            
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->label('No. ')->sortable()->searchable(),
                TextColumn::make('naran_kursu')->label('Naran Kursu')->sortable()->searchable(),
                TextColumn::make('tipu_kursu')->label('Tipu Kursu')->sortable()->searchable(),
                TextColumn::make('fatin_kursu')->label('Fatin Kursu')->sortable()->searchable(),
                TextColumn::make('data_hahu')->label('Data Hahu')->date('d-m-Y')->sortable()->searchable(),
                TextColumn::make('data_remata')->label('Data Remata')->date('d-m-Y')->sortable()->searchable(),
                TextColumn::make('fundus')->label('Fundus')->sortable()->searchable(),
                TextColumn::make('feto')->label('Feto')->sortable()->searchable(),
                TextColumn::make('mane')->label('Mane')->sortable()->searchable(),
                TextColumn::make('total')->label('Total')->sortable()->searchable(),
            ])
            ->headerActions([
            Action::make('Export PDF')
                ->label('Export PDF')
                ->icon('heroicon-o-document-arrow-down')
                ->url(route('kursu.report'))
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
            'index' => Pages\ListKursus::route('/'),
            'create' => Pages\CreateKursu::route('/create'),
            'edit' => Pages\EditKursu::route('/{record}/edit'),
        ];
    }
}

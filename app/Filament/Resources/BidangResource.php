<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BidangResource\Pages;
use App\Filament\Resources\BidangResource\RelationManagers;
use App\Models\Bidang;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BidangResource extends Resource
{
    protected static ?string $model = Bidang::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('opd_id')
                    ->relationship(name: 'opd', titleAttribute: 'opd')
                    ->searchable(['opd'])
                    ->optionsLimit(10)
                    ->preload()

                    ->required(),
                Forms\Components\TextInput::make('bidang')
                    ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('opd.opd')
                    ->searchable(isIndividual: true)
                    ->sortable()
                    ->label('OPD'),
                TextColumn::make('bidang')
                    ->searchable(isIndividual: true)
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('opd')
                    ->relationship(name: 'opd', titleAttribute: 'opd')
                    ->searchable(['opd'])
                    ->optionsLimit(10)
                    ->preload()
                    ->label('OPD'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->recordUrl(false);
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
            'index' => Pages\ListBidangs::route('/'),
            'create' => Pages\CreateBidang::route('/create'),
            'edit' => Pages\EditBidang::route('/{record}/edit'),
        ];
    }
}

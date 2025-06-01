<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InfoResource\Pages;
use App\Filament\Resources\InfoResource\RelationManagers;
use App\Models\Info;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InfoResource extends Resource
{
    protected static ?string $model = Info::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('projects_count')
                    ->label('Projects Count')
                    ->required()
                    ->numeric()
                    ->default(0),
                
                Forms\Components\TextInput::make('customers_count')
                    ->label('Customers Count')
                    ->required()
                    ->numeric()
                    ->default(0),
                
                Forms\Components\TextInput::make('tons_per_month')
                    ->label('Tons Per Month')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                
                Tables\Columns\TextColumn::make('projects_count')
                    ->label('Projects Count')
                    ->sortable()
                    ->searchable(),
                
                Tables\Columns\TextColumn::make('customers_count')
                    ->label('Customers Count')
                    ->sortable()
                    ->searchable(),
                
                Tables\Columns\TextColumn::make('tons_per_month')
                    ->label('Tons Per Month')
                    ->sortable()
                    ->searchable(),
                
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created At')
                    ->dateTime()
                    ->sortable()
                    ->searchable(),
            ])->filters([
            ])->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->filters([
                
            ])
            ->actions([
                Tables\Actions\EditAction::make(),

                              ])
            ->bulkActions([
               
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function canCreate(): bool
{
    return \App\Models\Info::count() === 0;
}


    public static function getPages(): array
    {
        return [
            'index' => Pages\ViewInfo::route('/'), 
            'create' => Pages\CreateInfo::route('/create'),
            'edit' => Pages\EditInfo::route('/{record}/edit'),
        ];
    }
}

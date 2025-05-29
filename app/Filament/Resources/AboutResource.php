<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutResource\Pages;
use App\Filament\Resources\AboutResource\RelationManagers;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use App\Models\About;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\IconColumn;

class AboutResource extends Resource
{
    protected static ?string $model = About::class;
    protected static ?string $navigationLabel = 'About Us';



protected static ?string $navigationIcon = 'heroicon-o-information-circle';
    public static function form(Form $form): Form
    {
               return $form->schema([
            TextInput::make('title_en')
                ->required()
                ->maxLength(255),

            Textarea::make('description_en')
                ->required()
                ->rows(5),
            TextInput::make('title_ar')
                ->required()
                ->maxLength(255),
            Textarea::make('description_ar')
                ->required()
                ->rows(5),
            Toggle::make('is_active')
            ->label('Active')
            ->default(false)
            ->helperText('Only one about section can be active at a time'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title_en')
                    ->sortable()
                    ->searchable(),
                 TextColumn::make('description_en')
                    ->limit(50)
                    ->searchable(),
                TextColumn::make('title_ar')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('description_ar')
                    ->limit(50)
                    ->searchable(),
                IconColumn::make('is_active')
                    ->boolean()
                    ->label('Active')
                    ->sortable(),

            ])

            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListAbouts::route('/'),
            'create' => Pages\CreateAbout::route('/create'),
            'edit' => Pages\EditAbout::route('/{record}/edit'),
            'view' => Pages\ViewAbout::route('/{record}'),
        ];
    }


    // public static function getNavigationBadge(): ?string
    // {
    //     return static::getModel()::count();
    // }


}

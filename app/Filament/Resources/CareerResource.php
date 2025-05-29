<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CareerResource\Pages;
use App\Filament\Resources\CareerResource\RelationManagers;
use App\Models\Career;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;

class CareerResource extends Resource
{
    protected static ?string $model = Career::class;
    protected static ?string $navigationLabel = 'Careers';

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    public static function form(Form $form): Form
    {
               return $form->schema([
            TextInput::make('job_title_en')
                ->required()
                ->maxLength(255),

            Textarea::make('job_description_en')
                ->required()
                ->rows(5),
            TextInput::make('job_title_ar')
                ->required()
                ->maxLength(255),
            Textarea::make('job_description_ar')
                ->required()
                ->rows(5),
            Forms\Components\Toggle::make('is_active')
                ->label('Active')
                ->default(false)
            ]);
    }
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('job_title_en')
                    ->sortable()
                    ->searchable(),
                 TextColumn::make('job_description_en')
                    ->limit(50)
                    ->searchable(),
                TextColumn::make('job_title_ar')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('job_description_ar')
                    ->limit(50)
                    ->searchable(),
                TextColumn::make('is_active')
                    ->label('Active')
                    ->boolean(),

                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),             ])
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
            'index' => Pages\ListCareers::route('/'),
            'create' => Pages\CreateCareer::route('/create'),
            'edit' => Pages\EditCareer::route('/{record}/edit'),
            'view' => Pages\ViewCareer::route('/{record}'),
        ];
    }


    // public static function getNavigationBadge(): ?string
    // {
    //     return static::getModel()::count();
    // }
}

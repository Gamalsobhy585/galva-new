<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsResource\Pages;
use App\Filament\Resources\NewsResource\RelationManagers;
use App\Models\News;
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
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;


class NewsResource extends Resource
{
    protected static ?string $model = News::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';
    protected static ?string $navigationLabel = 'News';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                 TextInput::make('title')
                ->required()
                ->maxLength(255),

            Textarea::make('description')
                ->required()
                ->rows(5),

            FileUpload::make('image')
                ->label('News Image')
                ->directory('news')           
                ->visibility('public')          
                ->image()                         
                ->imagePreviewHeight('200')       
                ->enableOpen()                   
                ->preserveFilenames()             
                ->getUploadedFileNameForStorageUsing(function ($file) {
                    return (string) str()->uuid() . '.' . $file->getClientOriginalExtension();
                })
                ->required(false)
                ->columnSpanFull(),

                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->sortable()
                    ->searchable(),



                TextColumn::make('description')
                    ->limit(50)
                    ->searchable(),

                ImageColumn::make('image')
                    ->getStateUsing(fn ($record) => asset('storage/' . $record->image))
                    ->height(60)
                    ->width(60)
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
            'index' => Pages\ListNews::route('/'),
            'create' => Pages\CreateNews::route('/create'),
            'edit' => Pages\EditNews::route('/{record}/edit'),
            'view' => Pages\ViewNews::route('/{record}'),
        ];
    }
}

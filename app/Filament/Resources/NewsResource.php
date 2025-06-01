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
                 TextInput::make('title_en')
                ->required()
                ->maxLength(255),


            TextInput::make('title_ar')
                ->required()
                ->maxLength(255),
            Textarea::make('description_en')
                ->required()
                ->rows(5),
            Textarea::make('description_ar')
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
                ->acceptedFileTypes(['image/jpeg', 'image/jpg', 'image/png', 'image/gif', 'image/webp'])
                ->required(false)
                ->columnSpanFull(),

                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title_en')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('title_ar')
                    ->sortable()
                    ->searchable(),



                TextColumn::make('description_en')
                    ->limit(50)
                    ->searchable(),
                TextColumn::make('description_ar')
                    ->limit(50)
                    ->searchable()
                    ->sortable(),

                ImageColumn::make('image')
                    ->getStateUsing(fn ($record) => asset('storage/news/' . $record->image))
                    ->height(60)
                    ->width(60),


                
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

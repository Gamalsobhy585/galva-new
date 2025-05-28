<?php

namespace App\Filament\Resources;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use App\Models\Service;
use App\Filament\Resources\ServiceResource\Pages;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $navigationIcon = 'heroicon-o-wrench-screwdriver';

    protected static ?string $navigationLabel = 'Services';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('title')
                ->required()
                ->maxLength(255),

            Textarea::make('description')
                ->required()
                ->rows(5),

            FileUpload::make('image')
                ->label('Service Image')
                ->directory('services')           
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

            TextInput::make('price')
                ->numeric()
                ->prefix('$')
                ->nullable(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('price')
                    ->sortable()
                    ->searchable()
                    ->money('usd', true),

                TextColumn::make('description')
                    ->limit(50),

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
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
            'view' => Pages\ViewService::route('/{record}'),
        ];
    }
}

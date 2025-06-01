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
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use Symfony\Component\HttpFoundation\File\File;


class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $navigationIcon = 'heroicon-o-wrench-screwdriver';

    protected static ?string $navigationLabel = 'Services';

    public static function form(Form $form): Form
    {
        return $form->schema([
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
                ->label('Service Image')
                ->directory('services')           
                ->visibility('public')          
                ->image()                         
                ->imagePreviewHeight('200')       
                ->enableOpen()                   
                ->preserveFilenames()    
                ->acceptedFileTypes(['image/jpeg', 'image/jpg', 'image/png', 'image/gif', 'image/webp'])
         
                ->getUploadedFileNameForStorageUsing(function ($file) {
                    return (string) str()->uuid() . '.' . $file->getClientOriginalExtension();
                })
                ->required(false)
                ->columnSpanFull(),

            TextInput::make('price')
                ->numeric()
                ->prefix('$')
                ->nullable(),
            Forms\Components\Select::make('currency_id')
                ->label('Currency')
                ->relationship('currency', 'name')
                ->required()
                ->searchable()
                ->preload()
                ,
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

                TextColumn::make('price')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('description_en')
                    ->limit(50)
                    ->searchable(),
                TextColumn::make('description_ar')
                    ->limit(50)
                    ->searchable(),

                ImageColumn::make('image')
                    ->getStateUsing(fn ($record) => asset('storage/services' . $record->image))
                    ->height(60)
                    ->width(60),
                TextColumn::make('currency.name')
                    ->label('Currency')
                    ->searchable(),

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

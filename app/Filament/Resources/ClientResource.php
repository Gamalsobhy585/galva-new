<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ClientResource\Pages;
use App\Filament\Resources\ClientResource\RelationManagers;
use App\Models\Client;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Http\UploadedFile;
use Symfony\Component\HttpFoundation\File\File;



class ClientResource extends Resource
{
    protected static ?string $model = Client::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name_en')
                ->required()
                ->maxLength(255),
                TextInput::make('name_ar')
                ->required()
                ->maxLength(255),
                FileUpload::make('image')
                    ->label('Client Image')
                    ->directory('clients')
                    ->visibility('public')
                    ->image()
                    ->imagePreviewHeight('200')
                    ->enableOpen()
                    ->preserveFilenames(false)
                    ->saveUploadedFileUsing(function (UploadedFile $file, $get, $set) {
                        // Generate unique filename
                        $filename = str()->uuid() . '.webp';
                        $path = 'clients/' . $filename;
                        
                        // Convert to WebP
                        $webpImage = Image::make($file)->encode('webp', 85);
                        
                        // Store the WebP image
                        Storage::disk('public')->put($path, $webpImage);
                        
                        return $filename; // Return just the filename, not the full path
                    })
                    ->required(false)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                
                TextColumn::make('name_en')
                    ->label('Name (EN)')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('name_ar')
                    ->label('Name (AR)')
                    ->searchable()
                    ->sortable(),
                ImageColumn::make('image')
                    ->getStateUsing(fn ($record) => asset('storage/' . $record->image))
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListClients::route('/'),
            'create' => Pages\CreateClient::route('/create'),
            'edit' => Pages\EditClient::route('/{record}/edit'),
            'view' => Pages\ViewClient::route('/{record}'),

        ];
    }
}

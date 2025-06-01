<?php
namespace App\Filament\Resources\NewsResource\Pages;

use App\Filament\Resources\NewsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\ViewField;

class EditNews extends EditRecord
{
    protected static string $resource = NewsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    public function form(Form $form): Form
    {
        return $form->schema([
            Section::make('News Information')
                ->schema([
                    TextInput::make('title_en')
                        ->label('Title (English)')
                        ->required(),
                    
                    Textarea::make('description_en')
                        ->label('Description (English)')
                        ->required()
                        ->columnSpanFull(),
                    
                    TextInput::make('title_ar')
                        ->label('Title (Arabic)')
                        ->required(),
                    
                    Textarea::make('description_ar')
                        ->label('Description (Arabic)')
                        ->required()
                        ->columnSpanFull(),
                    
                    TextInput::make('price')
                        ->label('Price')
                        ->numeric()
                        ->required(),
                    
                    ViewField::make('current_image')
                        ->label('Current Image')
                        ->view('filament.components.current-image', [
                            'getImageUrl' => function ($record) {
                                return $record && $record->image 
                                    ? asset('storage/news/' . $record->image) 
                                    : null;
                            }
                        ])
                        ->visible(fn ($record) => $record && $record->image),
                    
                    FileUpload::make('image')
                        ->label('Image')
                        ->image()
                        ->directory('news')
                        ->disk('public')
                        ->imageResizeMode('cover')
                        ->imageCropAspectRatio('16:9')
                        ->imageResizeTargetWidth('1920')
                        ->imageResizeTargetHeight('1080')
                        ->nullable(),
                ])
        ]);
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        if (empty($data['image']) && $this->record->image) {
            $data['image'] = $this->record->image;
        }
        
        return $data;
    }
}
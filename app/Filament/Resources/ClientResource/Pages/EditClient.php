<?php
namespace App\Filament\Resources\ClientResource\Pages;

use App\Filament\Resources\ClientResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\ViewField;

class EditClient extends EditRecord
{
    protected static string $resource = ClientResource::class;

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
            Section::make('Client Information')
                ->schema([
                    TextInput::make('name_en')
                        ->label('Name (English)')
                        ->required(),
                    
                    TextInput::make('name_ar')
                        ->label('Name (Arabic)')
                        ->required(),
                    
                    // Show current image if exists
                    ViewField::make('current_logo')
                        ->label('Current Logo')
                        ->view('filament.components.current-image', [
                            'getImageUrl' => function ($record) {
                                return $record && $record->logo 
                                    ? asset('storage/clients/' . $record->logo) 
                                    : null;
                            }
                        ])
                        ->visible(fn ($record) => $record && $record->logo),
                    
                    FileUpload::make('logo')
                        ->label('Logo')
                        ->image()
                        ->directory('clients')
                        ->disk('public')
                        ->imageResizeMode('contain')
                        ->imageCropAspectRatio('16:9')
                        ->imageResizeTargetWidth('1920')
                        ->imageResizeTargetHeight('1080')
                        ->nullable(),
                ])
        ]);
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        // If no new logo is uploaded, keep the existing one
        if (empty($data['logo']) && $this->record->logo) {
            $data['logo'] = $this->record->logo;
        }
        
        return $data;
    }
}
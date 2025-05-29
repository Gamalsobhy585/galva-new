<?php

namespace App\Filament\Resources\ProfileResource\Pages;

use App\Filament\Resources\ProfileResource;
use Filament\Resources\Pages\Page;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password as ValidationPassword;
use Rawilk\FilamentPasswordInput\Password as PasswordInput;

class ManageProfile extends Page implements HasForms
{
    use InteractsWithForms;

    protected static string $resource = ProfileResource::class;
    protected static string $view = 'filament.pages.manage-profile';
    protected static ?string $title = 'Update Profile';

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill();
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Update Password')
                    ->description('Change your account password')
                    ->schema([
                        PasswordInput::make('current_password')
                            ->label('Current Password')
                            ->required()
                            ->rules(['current_password'])
                            ->autocomplete('current-password'),
                            
                        PasswordInput::make('password')
                            ->label('New Password')
                            ->required()
                            ->rule(ValidationPassword::default())
                            ->same('password_confirmation')
                            ->autocomplete('new-password'),
                            
                        PasswordInput::make('password_confirmation')
                            ->label('Confirm New Password')
                            ->required()
                            ->autocomplete('new-password'),
                    ])
                    ->columns(1)
            ])
            ->statePath('data');
    }

    public function updatePassword(): void
    {
        $data = $this->form->getState();
        
        if (!Hash::check($data['current_password'], Auth::user()->password)) {
            Notification::make()
                ->title('Current password is incorrect.')
                ->danger()
                ->send();
            return;
        }

        Auth::user()->update([
            'password' => Hash::make($data['password'])
        ]);

        $this->form->fill();

        Notification::make()
            ->title('Password updated successfully.')
            ->success()
            ->send();
    }

    protected function getHeaderActions(): array
    {
        return [
            Action::make('updatePassword')
                ->label('Update Password')
                ->action('updatePassword')
                ->color('primary'),
        ];
    }
}
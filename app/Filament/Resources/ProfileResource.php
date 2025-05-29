<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProfileResource\Pages;
use Filament\Resources\Resource;
use App\Models\User;

class ProfileResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-circle';
    
    protected static ?string $navigationLabel = 'Profile';
    
    protected static ?string $slug = 'profile';

    // Hide from navigation since we're adding it to user menu
    protected static bool $shouldRegisterNavigation = false;

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageProfile::route('/'),
        ];
    }
}
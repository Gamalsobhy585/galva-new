<?php
namespace App\Filament\Resources\ContactResource\Pages;

use App\Filament\Resources\ContactResource;
use Filament\Resources\Pages\ViewRecord;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Infolist;

class ViewContact extends ViewRecord
{
    protected static string $resource = ContactResource::class;

    public function infolist(Infolist $infolist): Infolist
    {
        return $infolist->schema([
            
            TextEntry::make('name')
                ->label('Name'),
            TextEntry::make('email')
                ->label('Email'),
            TextEntry::make('phone')
                ->label('Phone'),
            TextEntry::make('message')
                ->label('Message'),

        ]);
    }
}

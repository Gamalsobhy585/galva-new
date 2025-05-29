<?php
namespace App\Filament\Resources\ClientResource\Pages;

use App\Filament\Resources\ClientResource;
use Filament\Resources\Pages\ViewRecord;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Infolist;

class ViewClient extends ViewRecord
{
    protected static string $resource = ClientResource::class;

    public function infolist(Infolist $infolist): Infolist
    {
        return $infolist->schema([
            TextEntry::make('name_en')
                ->label('Name (English)'),
            TextEntry::make('name_ar')
                ->label('Name (Arabic)'),
            ImageEntry::make('image')
                ->getStateUsing(fn ($record) => asset('storage/' . $record->image))
                ->height(200)
                ->label('Client Image'),
          
                
        ]);
    }
}

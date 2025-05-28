<?php
namespace App\Filament\Resources\ServiceResource\Pages;

use App\Filament\Resources\ServiceResource;
use Filament\Resources\Pages\ViewRecord;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Infolist;

class ViewService extends ViewRecord
{
    protected static string $resource = ServiceResource::class;

    public function infolist(Infolist $infolist): Infolist
    {
        return $infolist->schema([
            TextEntry::make('title'),
            TextEntry::make('description'),
            TextEntry::make('price')->prefix('$'),
            ImageEntry::make('image')
                ->getStateUsing(fn ($record) => asset('storage/' . $record->image))
                ->height(200),
        ]);
    }
}

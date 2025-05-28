<?php
namespace App\Filament\Resources\NewsResource\Pages;

use App\Filament\Resources\NewsResource;
use Filament\Resources\Pages\ViewRecord;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Infolist;

class ViewNews extends ViewRecord
{
    protected static string $resource = NewsResource::class;

    public function infolist(Infolist $infolist): Infolist
    {
        return $infolist->schema([
            TextEntry::make('title'),
            TextEntry::make('description'),
            ImageEntry::make('image')
                ->getStateUsing(fn ($record) => asset('storage/' . $record->image))
                ->height(200),
        ]);
    }
}

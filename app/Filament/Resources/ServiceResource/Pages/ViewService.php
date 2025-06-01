<?php
namespace App\Filament\Resources\ServiceResource\Pages;

use App\Filament\Resources\ServiceResource;
use Filament\Resources\Pages\ViewRecord;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Infolist;

class ViewService extends ViewRecord
{
    protected static string $resource = ServiceResource::class;

    public function infolist(Infolist $infolist): Infolist
    {
        return $infolist->schema([
            Section::make('Service Information')
                ->schema([
                    TextEntry::make('title_en')
                        ->label('Title (English)'),
                    
                    TextEntry::make('description_en')
                        ->label('Description (English)')
                        ->html()
                        ->columnSpanFull(),
                    
                    TextEntry::make('title_ar')
                        ->label('Title (Arabic)'),
                    
                    TextEntry::make('description_ar')
                        ->label('Description (Arabic)')
                        ->html()
                        ->columnSpanFull(),
                    
                    TextEntry::make('price')
                        ->label('Price')
                        ->formatStateUsing(fn ($state) => number_format($state, 2)),
                    
                    TextEntry::make('currency.code')
                        ->label('Currency'),
                    
                    ImageEntry::make('image')
                        ->getStateUsing(fn ($record) => asset('storage/services/' . $record->image))
                        ->height(300)
                        ->label('Service Image')
                        ->columnSpanFull(),
                ])->columns(2)
        ]);
    }
}
<?php
namespace App\Filament\Resources\NewsResource\Pages;

use App\Filament\Resources\NewsResource;
use Filament\Resources\Pages\ViewRecord;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Infolist;

class ViewNews extends ViewRecord
{
    protected static string $resource = NewsResource::class;

    public function infolist(Infolist $infolist): Infolist
    {
        return $infolist->schema([
            Section::make('News Information')
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
                    
   
                    ImageEntry::make('image')
                        ->getStateUsing(fn ($record) => asset('storage/news/' . $record->image))
                        ->height(100)
                        ->label('News Image')
                        ->columnSpanFull(),
                ])->columns(2)
        ]);
    }
}
<?php

namespace App\Filament\Resources\InfoResource\Pages;

use App\Filament\Resources\InfoResource;
use App\Models\Info;
use Filament\Actions;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Pages\Page;

class ViewInfo extends Page
{
    protected static string $resource = InfoResource::class;
    protected static string $view = 'filament.pages.view-info';

    public ?Info $record;

    public function mount(): void
    {
        $this->record = Info::first();
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->visible(Info::count() === 0),
            
          
        ];
    }

    public function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->record($this->record)
            ->schema([
                Section::make('Company Statistics')
                    ->schema([
                        TextEntry::make('projects_count')
                            ->label('Projects Completed')
                            ->numeric(),
                        TextEntry::make('customers_count')
                            ->label('Happy Customers')
                            ->numeric(),
                        TextEntry::make('tons_per_month')
                            ->label('Monthly Production (Tons)')
                            ->numeric(),
                    ])->columns(3)
            ]);
    }
}
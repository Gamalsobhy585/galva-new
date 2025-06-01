<?php

namespace App\Filament\Widgets;

use App\Models\Service;
use App\Models\Career;
use App\Models\Contact;
use App\Models\Client;
use App\Models\News;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Services', Service::count())
                ->description('Our professional service offerings')
                ->descriptionIcon('heroicon-s-wrench-screwdriver')
                ->chart([7, 3, 5, 8, 10]) // Sample trend data
                ->color('sky'),
                
            Stat::make('Job Openings', Career::count())
                ->description('Available career opportunities')
                ->descriptionIcon('heroicon-s-briefcase')
                ->chart([2, 5, 3, 6, 4]) // Sample trend data
                ->color('amber'),
                
            Stat::make('Customer Inquiries', Contact::count())
                ->description('New messages requiring response')
                ->descriptionIcon('heroicon-s-chat-bubble-left-ellipsis')
                ->chart([10, 15, 12, 18, 20]) // Sample trend data
                ->color('emerald'),
                
            Stat::make('News Publications', News::count())
                ->description('Latest company news & updates')
                ->descriptionIcon('heroicon-s-newspaper')
                ->chart([5, 8, 6, 9, 12]) // Sample trend data
                ->color('fuchsia'),
                Stat::make('Our Clients',Client::count())
                ->description('Number of clients we serve')
                ->descriptionIcon('heroicon-s-users')
                ->chart([3, 4, 5, 6, 7]) // Sample trend data
                ->color('purple'),
        ];

    }
}
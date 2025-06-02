<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Interfaces\IContact;
use App\Repositories\Implementations\ContactRepository;
use App\Services\Interfaces\IContactService;
use App\Services\Implementations\ContactService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
               $this->app->bind(IContact::class, ContactRepository::class);
               $this->app->bind(IContactService::class, ContactService::class);


    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}

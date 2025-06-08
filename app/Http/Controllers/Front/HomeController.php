<?php

namespace App\Http\Controllers\Front;
use App\Models\Client;
use App\Models\About;
use App\Models\Service;
use App\Http\Controllers\Controller;
use App\Models\Info;
use Illuminate\Support\Facades\Cache;


class HomeController extends Controller
{
    public function homepageIndex()
    {
        $clients = Cache::remember('homepage_clients', 3600, fn() => Client::limit(20)->get());
        $about = Cache::remember('homepage_about', 3600, fn() => About::where('is_active', true)->first());
        $info = Cache::remember('homepage_info', 3600, fn() => Info::latest()->first());
        $services = Cache::remember('homepage_services', 3600, fn() => Service::limit(10)->get());

        return view('frontend.home.index', compact('clients', 'about', 'info', 'services'));
    }

    public function show($id)
    {
        $services = Service::all();
        $service = Service::with('currency')->findOrFail($id);
        return view('frontend.home.service', compact('service','services'));
    }


    
}




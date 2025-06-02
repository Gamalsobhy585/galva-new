<?php

namespace App\Http\Controllers\Front;
use App\Models\Client;
use App\Models\About;
use App\Models\Service;
use App\Http\Controllers\Controller;

use App\Models\Info;

class HomeController extends Controller
{
    public function homepageIndex()
    {
        $clients = Client::all();
        $about = About::where('is_active', true)->first();
        $info = Info::latest()->first();
        $services = Service::all();

        return view('frontend.home.index', compact('clients', 'about', 'info', 'services'));
    }
}




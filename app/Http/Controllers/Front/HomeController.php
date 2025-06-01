<?php

namespace App\Http\Controllers\Front;
use App\Models\Client;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{

     public function homepageIndex()
    {
        $clients = Client::all();
        return view('frontend.home.index', compact('clients'));
    }

}



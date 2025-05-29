<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    public function homepageIndex()
    {
//        dd('dddd');
        return view('frontend.home.index');
    }

}



<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocaleMiddleware
{
    public function handle($request, Closure $next)
    {
        $locale = $request->get('lang', Session::get('locale', config('app.locale')));
        
        App::setLocale($locale);
        Session::put('locale', $locale);
        
        return $next($request);
    }
}
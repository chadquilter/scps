<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Localization
{

    protected $app;

    public function __construct(Application $app, Request $request, Session $session)
    {
        if(Session::has('lang'))
        {
            $lang = $session->get('lang');
            $app->setLocale($lang);
        }
    }

    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        return $next($request);
    }
}

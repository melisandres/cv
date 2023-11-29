<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Retrieve the locale from the session or use the default
        $locale = Session::get('locale', config('app.locale'));

        // Check if the locale is provided in the request
        $newLocale = $request->input('locale', null);

        // If provided, update the session and use the new locale
        if ($newLocale && in_array($newLocale, ['en', 'fr'])) {
            $locale = $newLocale;
            Session::put('locale', $locale);
        }

        // Set the application locale
        App::setLocale($locale);

        return $next($request);
    }
}

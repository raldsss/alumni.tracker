<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PreventBackAfterLogout
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check() && $request->is('logout')) {
            // Add session flash message
            session()->flash('logout', 'You have been logged out.');

            return $next($request);
        }

        return $next($request)->header('Cache-Control', 'no-cache, no-store, max-age=0, must-revalidate');
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Symfony\Component\HttpFoundation\Response;

class DashboardRedirect
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $guards = empty($guards) ? [null] : $guards;
        $user = Auth::user();
        // foreach ($guards as $guard) {
        if ($user && $user()->role === 'admin') {
            return redirect('admin/dashboard');
        }
        // }
        return $next($request);
    }
}

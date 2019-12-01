<?php
namespace App\Http\Middleware;
use Closure;

class Admin
{
    /**
     * https://laravel.sillo.org/cours-laravel-6-la-securite/
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = $request->user();
        if ($user && $user->role === 'admin') {
            return $next($request);
        }
        return redirect()->route('home');
    }
}
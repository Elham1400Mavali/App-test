<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {

        if (!Auth::check() || Auth::user()->role !== $role) {
            return redirect('home'); // ریدایرکت به صفحه اصلی اگر کاربر لاگین نکرده یا نقش مورد نظر را ندارد
        }

        return $next($request);
    }
}

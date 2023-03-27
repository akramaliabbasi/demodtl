<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Illuminate\Support\Facades\Auth;

class RandomUserMiddleware
{
    public function handle($request, Closure $next)
    {
        if (!Auth::check()) {
            $user = factory(User::class)->create();
            Auth::login($user);
        }

        return $next($request);
    }
}

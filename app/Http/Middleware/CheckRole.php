<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->user() === null) {
            return redirect('/');
        }
        $actions = $request->route()->getAction();
        $roles = isset($actions['roles']) ? $actions['roles'] : null;

        if ($request->user()->hasAnyRole($roles)) {
            return $next($request);
        }

        session()->put('PopSuccess', 'ليس لديك صلاحيات استخدام هذه الصفحة وقد تم تحويلك تلقائياً');
        return redirect('/home');
    }
}
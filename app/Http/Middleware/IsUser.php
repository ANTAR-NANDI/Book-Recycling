<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->session()->get('userrole') != 'user' && $request->session()->get('userrole') != 'admin') { // if userid is not set in session
            return redirect()->to('/');
        } else if ($request->session()->get('userrole') == 'admin') { // if userid is not set in session
            return redirect()->to('admin/home');
        }
        return $next($request);
    }
}

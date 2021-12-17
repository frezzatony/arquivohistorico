<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckIsAdmin
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
        $user = Auth::user();
        
        $arrUserGroups = [];
        foreach($user->groups as $group){
            $arrUserGroups[] = $group->id;
        }
        
        //group 1 => Admin
        if(!in_array(1,$arrUserGroups)){
            return redirect('logout');    
        }
        
        view()->share('isAdmin', TRUE);
        return $next($request);
        
        
        
    }
}

<?php

namespace App\Http\Middleware;

use App\Models\info;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    public function handle($request, Closure $next, ...$roles)
    {   
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        // Get the authenticated user
        $user = Auth::user();
        
        // Get the user's role from the infos table
        $info = info::where('ID_USER', $user->id)->first();
        
        
        // Check if the user has the required role
        if ($info && in_array($info->ROLE, $roles)) {
            return $next($request);
        }
        
        // If the user does not have the required role, redirect to login
        return redirect()->route('login');
    }
}

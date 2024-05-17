<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\info;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        $user = Auth::user();

        $userInfo = info::where('ID_USER', $user->id)->first();

        if ($userInfo) {
            // Check the user's role
            if ($userInfo->ROLE === 'Admin') {
                return redirect()->route('showservices');
            } elseif ($userInfo->ROLE === 'agent ONEE') {
                return redirect()->intended(RouteServiceProvider::HOME);
            }
        }
    
        // Default redirection if user's role is not Admin or agent ONEE
        return redirect()->route('login')->with('error', 'Invalid role');
    }

    

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}

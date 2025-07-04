<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Role;
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
         if (Auth::check() && Auth::user()->hasRole('user'))
          {
            return view('frontend.auth.login-frontend');
          } 
        else
          {
            return view('backend.auth.login-backend');
          }
        
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        /**
         * @var \App\Models\User $user
         */
        $user = Auth::user();

        if ($user->hasRole('user')) {
            return redirect()->route('/');
        }else{
             return redirect()->route('dashboard');
        }
         if ($user->hasRole('admin')) {
            return redirect()->route('dashboard');
        }else{
            return redirect()->route('/');
        }
        



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

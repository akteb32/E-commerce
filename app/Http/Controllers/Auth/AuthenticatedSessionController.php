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
    return view('frontend.auth.login-frontend');
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

    if ($user->hasRole('admin')) {
      return redirect()->route('dashbord.admin'); 
    } else {
      return redirect()->route('/');
    }
  }


  public function showUserLoginForm(): View
  {
    return view('frontend.auth.login-frontend');
  }

  public function showAdminLoginForm(): View
  {
    return view('backend.auth.login-backend');
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

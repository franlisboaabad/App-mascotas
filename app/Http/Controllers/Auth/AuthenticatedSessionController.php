<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
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
        // return view('acceso');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();
        // Obtén el usuario autenticado
        $user = $request->user();

        // Verifica si el usuario tiene el rol "admin"
        if ($user->hasRole('Admin')) {
            return redirect()->route('dashboard'); // Redirige al dashboard para los administradores
        } elseif ($user->hasRole('Writer')) {
            return redirect()->route('panel'); // Redirige a la página principal para los escritores
        } else {
            // Si el usuario no tiene un rol específico, redirige a una ruta predeterminada
            return redirect()->intended(RouteServiceProvider::HOME);
        }
        // return redirect()->intended(RouteServiceProvider::HOME);
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

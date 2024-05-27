<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class PageController extends Controller
{
    //

    public function home()
    {
        $mascotas = Mascota::get()->where('estado',1);
        return view('page.home', compact('mascotas'));
    }

    //registro desde la web
    public function PageRegister()
    {
        return view('page.register');
    }


    public function register(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Asigna el rol "invitado" al usuario
        $role = Role::where('name', 'writer')->first();
        if ($role) {
            $user->roles()->attach($role);
        }


        event(new Registered($user));

        Auth::login($user);



        // return redirect(RouteServiceProvider::HOME);
        return view('page.home');
    }
}

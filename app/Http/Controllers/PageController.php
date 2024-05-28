<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use App\Models\ReportCaso;
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
    public function pageregister()
    {
        return view('page.register');
    }

    public function acceso()
    {
        return view('page.acceso');
    }

    public function reportarcaso()
    {
        return view('page.reportarcaso');
    }

    public function panel($id)
    {
        $user = User::find($id);
        $casos_reportados = ReportCaso::get()->where('user_id', $user->id );

        return view('page.panel', compact('casos_reportados'));
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
        return view('page.panel');
    }

    public function registrarcaso(Request $request)
    {
        $request->validate([
            'nombres' => ['required', 'string', 'max:255'],
            'tipo_animal' => ['required', 'string', 'max:255'],
            'descripcion_del_caso' => ['required', 'string', 'max:255'],
            'contacto' => ['required', 'string', 'max:255'],
        ]);

        ReportCaso::create($request->all());

        return back()->with('success', 'Se registro correctamente el caso.');
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('home'); // Redirige a la página de inicio de sesión
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MascotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mascotas = Mascota::get()->where('estado', 1);

        return view('admin.mascotas.index', compact('mascotas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mascotas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'nombre' => 'required|string|max:255',
            'especie' => 'required|string|max:255',
            'raza' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255',
            'edad' => 'required|integer|min:0',

        ]);

        $mascota = Mascota::create($request->all());

        if ($request->file('imagen')) {
            $mascota->imagen = $request->file('imagen')->store('mascotas', 'public');
            $mascota->save();
        }

        return back()->with('success', 'Se registro la mascota correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function show(Mascota $mascota)
    {
        return view('admin.mascotas.show',compact('mascota'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function edit(Mascota $mascota)
    {
        return view('admin.mascotas.edit',compact('mascota'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mascota $mascota)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'especie' => 'required|string|max:255',
            'raza' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255',
            'edad' => 'required|integer|min:0',

        ]);

        $mascota->update($request->all());

        if ($request->file('imagen')) {
            // Elimina la imagen anterior si existe
            Storage::disk('public')->delete($mascota->imagen);

            // Almacena la nueva imagen
            $mascota->imagen = $request->file('imagen')->store('mascotas', 'public');
        }

        $mascota->save();

        return back()->with('success', 'Se actualizó la mascota correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mascota $mascota)
    {
        $mascota->update(['estado'=>0]);
        return back()->with('success', 'Mascota dado de baja.');
    }
}

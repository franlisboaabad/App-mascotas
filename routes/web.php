<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MascotaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InvitadoController;
use App\Http\Controllers\ReportCasoController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



//rutas pages registro
// Mostrar formulario de registro
Route::get('/registro', [PageController::class,'pageregister'])->name('pageregistro');
// Procesar el formulario de registro
Route::post('/registro', [PageController::class,'register'])->name('registro');

//Acceso
Route::get('/acceso', [PageController::class,'acceso'])->name('acceso');
Route::get('/panel-usuario/{id}', [PageController::class,'panel'])->name('panel');
Route::get('/logout', [PageController::class, 'logout'])->name('logout');

//Pages
// Route::get('/',[PageController::class, 'home'])->name('home');
// Route::get('reportar-caso',[PageController::class,'reportarcaso'])->name('reportarcaso');
// Route::post('registrar-caso',[PageController::class,'registrarcaso'])->name('registrarcaso');
Route::group(['prefix' => '/'], function () {
    Route::get('/', [PageController::class, 'home'])->name('home');
    Route::get('reportar', [PageController::class, 'reportarcaso'])->name('reportarcaso');
    Route::post('registrar', [PageController::class, 'registrarcaso'])->name('registrarcaso');
});




// Route::get('/invitados/registrar/{invitadoId}', [InvitadoController::class, 'registrar'])->name('invitados.registrar');
// Route::get('/invitados/validar-qr/{codigo}', [InvitadoController::class, 'validarQR'])->name('invitados.validar-qr');
// Route::get('invitados/generar-pdf/{invitado}', [InvitadoController::class, 'generarPDF'])->name('invitados.generarPDF');


//app-mascotas
Route::resource('mascotas', MascotaController::class)->middleware('auth');
Route::resource('usuarios',UserController::class)->middleware('auth');
Route::resource('invitados', InvitadoController::class)->middleware('auth');
Route::resource('roles', RoleController::class)->middleware('auth');
Route::resource('reportes', ReportCasoController::class)->middleware('auth');

Route::get('/url', function () {
    return view('url');
});

require __DIR__.'/auth.php';

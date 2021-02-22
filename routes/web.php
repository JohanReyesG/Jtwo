<?php

use App\Notifications\ContactNotification;
use Illuminate\Http\Request;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Notification ;

use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');
Route::post('contact', function (Request $request) {
    $request->validate([
        'nombre' => 'required|regex:/^[\pL\s\-]+$/u',
        'correo' => 'required|email',
        'telefono' => 'required',
        'mensaje' => 'required|max:400',

    ]);
    Notification::route('mail', 'jtwoweb.tk@gmail.com')->notify(new ContactNotification($request));
    return $request;
});

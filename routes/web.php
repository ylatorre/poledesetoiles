<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/', [Controller::class, 'Accueil'])->name('Accueil');
Route::get('contact', [Controller::class, 'Contact'])->name('Contact');
Route::get('Planetarium', [Controller::class, 'Planetarium'])->name('Planetarium');
Route::get('ExpoPermanante', [Controller::class, 'ExpoPermanante'])->name('ExpoPermanante');
Route::get('Calendrier', [Controller::class, 'Calendrier'])->name('Calendrier');

//Route pour les boutons carte celeste dans accueil
Route::get('CarteCeleste', [Controller::class, 'CarteCeleste'])->name('CarteCeleste');
Route::get('CarteCeleste2', [Controller::class, 'CarteCeleste2'])->name('CarteCeleste2');
Route::get('CarteCeleste3', [Controller::class, 'CarteCeleste3'])->name('CarteCeleste3');
Route::get('CarteCeleste4', [Controller::class, 'CarteCeleste4'])->name('CarteCeleste4');
Route::get('CarteCeleste5', [Controller::class, 'CarteCeleste5'])->name('CarteCeleste5');




require __DIR__.'/auth.php';


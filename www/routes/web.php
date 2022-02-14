<?php

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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/contact', [App\Http\Controllers\ContactController::class,'index'])->name('contact.index');
//Route::post('/form-contact', [App\Http\Controllers\ContactController::class,'form'])->name('contact.form');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home.form');
Route::get('/heroes/{id}', [App\Http\Controllers\HeroController::class,'index'])->name('hero.index');

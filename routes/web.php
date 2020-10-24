<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\portfoliocontroller;
use App\Http\Controllers\mensajescontrolador;

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



Route::view('/','home')->name('home');
Route::view('about','about')->name('about');
Route::get('projects',[portfoliocontroller::class,'index'])->name('projects');
Route::get('projects/{id}',[portfoliocontroller::class,'show'])->name('projects.show');

Route::view('contact','contact')->name('contact');

Route::post('contact', [mensajescontrolador::class,'store']);



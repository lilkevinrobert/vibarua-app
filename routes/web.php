<?php

use App\Http\Controllers\MawasilianoController;
use App\Http\Controllers\NyumbaniController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaziController;

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



Route::view('disclaimer','disclaimer');

Route::get('/mawasiliano/{id}',[MawasilianoController::class,'edit'])->middleware('auth');


Route::get('mwajiri', [KaziController::class,'index']);
Route::post('mwajiri', [KaziController::class,'store']);
Route::get('kazi', [KaziController::class,'kazi']);
Route::get('/',[NyumbaniController::class,'home']);
Route::post('logout',[NyumbaniController::class,'logout']);
Route::get('/tafuta',[KaziController::class,'search'])->name('web.search');


Auth::routes();

//Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

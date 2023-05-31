<?php

use App\Http\Controllers\kategoria;
use App\Http\Controllers\teszt;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});
Route::get('/tesztek',[teszt::class,'index']);
Route::get('/tesztek/{id}',[teszt::class,'show']);
Route::get('/kategoria',[kategoria::class,'index']);

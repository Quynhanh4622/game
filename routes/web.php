<?php

use App\Http\Controllers\ApartmentsController;
use App\Http\Controllers\ChampionController;
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
Route::get('/create',[ChampionController::class,'create']);
Route::post('/create',[ChampionController::class,'store']);
Route::get('/list',[ChampionController::class,'index']);
Route::get('/edit/{id}',[ChampionController::class,'edit']);
Route::post('/edit/{id}',[ChampionController::class,'update']);
Route::get('/delete/{id}',[ChampionController::class,'destroy']);

Route::get('/games/form',[\App\Http\Controllers\GameController::class,'create']);
Route::post('/games/form',[\App\Http\Controllers\GameController::class,'create']);

Route::get('/apartments/create',[ApartmentsController::class,'create']);
Route::post('/apartments/create',[ApartmentsController::class,'store']);
Route::get('/apartments/list',[ChampionController::class,'index']);
Route::get('/apartments/edit/{id}',[ChampionController::class,'edit']);
Route::post('/apartments/edit/{id}',[ChampionController::class,'update']);
Route::get('/apartments/destroy/{id}',[ChampionController::class,'destroy']);


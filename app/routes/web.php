<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\MerkController;

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
    return view('layouts.master');
})->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    //Management Obat
    Route::get('/obat', [ObatController::class, 'index']);
    Route::post('/obat', [ObatController::class, 'store']);    
    Route::get('/obat/form', [ObatController::class, 'create']);
    Route::get('/obat/edit/{id}', [ObatController::class, 'edit']);
    Route::put('/obat/{id}', [ObatController::class, 'update']);
    Route::delete('/obat/{id}', [ObatController::class, 'destroy']);


    Route::get('/merk', [MerkController::class, 'index']);
    Route::post('/merk', [MerkController::class, 'store']);    
    Route::get('/merk/form', [MerkController::class, 'create']);
    Route::get('/merk/edit/{id}', [MerkController::class, 'edit']);
    Route::put('/merk/{id}', [MerkController::class, 'update']);
    Route::delete('/merk/{id}', [MerkController::class, 'destroy']);
});
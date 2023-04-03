<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\MasukController;
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

Route::get('/', function(){
    return view('pages/Home');
});
Route::get('/pages', function(){
    return view('sign');
});

Route::get('/pages', [MasukController::class, 'index']);
Route::post('/pages/sign', [MasukController::class, 'sign']);   
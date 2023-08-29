<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IntranetController;
use App\Http\Controllers\UserController;


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
    return view('welcome');
});

Route::get('home', function(){
    return view ('home');
});

Route::get('intranet', function(){
    return view('intranet');
});

Route::get('resultat', function(){
    return view('resultat');
});

Route::get('nouveau', function () {
    return view('newUser');
});

Route::get('/testIntra', [UserController::class, 'index']);
Route::post('/testIntra', [IntranetController::class, 'update'])->name('update.dates');

Route::post('/users', [UserController::class, 'createUser']);   
Route::put('/users/{id}/update-password', [UserController::class, 'updatePassword']);
Route::delete('/testIntra/delete/{id}', [UserController::class, 'deleteUser']);
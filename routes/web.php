<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

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



Route::group(['middleware' => ['isLoggedIn']], function () {
    Route::get('/app', function () { return view('app'); });
});

Route::get('/',[CustomAuthController::class,'login'])->middleware('alreadyLoggedIn');
Route::post('/login-user',[CustomAuthController::class,'loginUser'])->name('login-user');
Route::get('/logout',[CustomAuthController::class,'logout'])->name('logout');


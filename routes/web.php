<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\abc;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::get('redirect', 'Auth\SocialController@redirect');
// Route::get('callback', 'Auth\SocialController@callback');
// Route::get('/redirect', [App\Http\Controllers\Auth\SocialController::class, 'redirect'])->name('redirect');
Route::get('/redirect', [SocialController::class, 'redirect']);
Route::get('/callback/{pr}', [SocialController::class, 'callback']);

// Route::get('/redirect', [abc::class, 'red']);


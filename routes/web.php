<?php

use App\Http\Controllers\Auth\GoogleSocialiteController;
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
Route::post('auth/callback', [GoogleSocialiteController::class, 'handleCallback'])->name("auth/callback");

Route::get('/', function () {
    return view('welcome');
});

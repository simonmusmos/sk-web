<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

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
    return view('includes.welcome');
})->name('home');

Route::get('/register', function () {
    return view('includes.registration');
})->name('registration.index');

Route::post('/register', [MemberController::class, 'create'])->name('registration.process');

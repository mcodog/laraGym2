<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ProgramController;

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
})->name('welcome');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::view('/people', 'admin.people.index');
Route::view('/session', 'admin.session.index');
Route::view('/analytics', 'admin.analytics');
Route::view('/datatables', 'admin.datatables.index');
Route::view('/membership', 'admin.membership.index');

Route::view('/login', 'auth.login')->name('login');
Route::view('/register', 'auth.register')->name('register');

Route::view('/membership', 'client.membership')->name('membership');
Route::get('/profile/{id}', [AccountController::class, 'display'])->name('profile');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');


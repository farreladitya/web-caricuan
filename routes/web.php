<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RegisterController;

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

Route::get('/home', function () {
    return view('home');
});
Route::get('/userhome', function () {
    return view('userhome');
});
Route::get('/pmf', function () {
    return view('pmf');
});
Route::get('/applist', function () {
    return view('applist');
});
Route::get('/findjob', function () {
    return view('findjob');
});
Route::get('/inputapplist', function () {
    return view('inputapplist');
});
// Register and Login
Route::get('/register', function () {
    return view('register');
});
//Skill Up
Route::get('/skillup', function () {
    return view('skillup');
});
Route::post('/save', [RegisterController::class, 'store']);

Auth::routes();

Route::middleware('role:admin')->get('/applist', [App\Http\Controllers\ApplistController::class, 'index'])->name('applist');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


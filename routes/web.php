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
Route::get('/pmf2', function () {
    return view('planmyfuture.pmf');
});
Route::post('/pmf', [App\Http\Controllers\PMFController::class, 'storeValue']);


// Applist
Route::get('/applist', [App\Http\Controllers\ApplistController::class, 'index']);
Route::get('/applist/tambah',  [App\Http\Controllers\ApplistController::class, 'tambah']);
Route::post('/applist/store',  [App\Http\Controllers\ApplistController::class, 'store']);


Route::get('/findjob', [App\Http\Controllers\FindJobController::class, 'index']);
Route::get('/inputapplist', 'InputApplistController@inputapplist');

// Register and Login
Route::get('/register', function () {
    return view('register');
});
//Skill Up
Route::post('/save', [RegisterController::class, 'store']);

Auth::routes();

Route::get('/skillup', [App\Http\Controllers\SkillupController::class, 'index'])->name('skillup');
Route::get('/findjob', [App\Http\Controllers\FindJobController::class, 'index'])->name('findjob');
Route::get('/findjob/detail/{id}', [App\Http\Controllers\FindJobController::class, 'detail'])->name('detailfindjob');
Route::middleware('role:admin')->get('/applist', [App\Http\Controllers\ApplistController::class, 'index'])->name('applist');
Route::middleware('role:admin')->get('/inputapplist', [App\Http\Controllers\ApplistController::class, 'tambah'])->name('inputapplist');
Route::middleware('role:admin')->get('/applist/detail/{id}', [App\Http\Controllers\ApplistController::class, 'detail'])->name('detailapplist');
Route::middleware('role:admin')->get('/applist/edit/{id}', [App\Http\Controllers\ApplistController::class, 'edit'])->name('editapplist');
Route::middleware('role:admin')->post('/applist/update', [App\Http\Controllers\ApplistController::class, 'update'])->name('editapplist');
Route::middleware('role:admin')->get('//applist/hapus/{id}', [App\Http\Controllers\ApplistController::class, 'hapus'])->name('detailapplist');
Route::middleware('role:admin')->get('//applist/view', [App\Http\Controllers\ApplistController::class, 'view'])->name('viewapplist');
Route::middleware('role:admin')->post('/applist/detail/{id}','ApplistController@store');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


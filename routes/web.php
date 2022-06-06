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

// Home RAIHANDA
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});
Route::get('/userhome', function () {
    return view('userhome');
});

//Upload File Raihanda
// Route::get('/findjob', 'FindJobController@upload');
// Route::post('/findjob/proses', 'FindJobController@proses_upload');

Route::get('/uploadfindjob', [App\Http\Controllers\FindJobController::class, 'upload']);
Route::post('/uploadfindjob/proses', [App\Http\Controllers\FindJobController::class, 'proses_upload']);
Route::get('/uploadfindjob/hapus/{id}', [App\Http\Controllers\FindJobController::class, 'hapus']);


// Register and Login RAIHANDA
Route::get('/register', function () {
    return view('register');
});

// Plan My Future FIRDA
Route::get('/pmf2', function () {
    return view('planmyfuture.pmf');
});
Route::get('/startpmf', function () {
    return view('planmyfuture.startpmf');
});
Route::post('/pmf', [App\Http\Controllers\PMFController::class, 'storeValue']);


// // Applist FARREL
Route::get('/applist', [App\Http\Controllers\ApplistController::class, 'index']);
Route::get('/applist/tambah',  [App\Http\Controllers\ApplistController::class, 'tambah']);
Route::post('/applist/store',  [App\Http\Controllers\ApplistController::class, 'store']);
// Skillup Aida
Route::get('/skillup', [App\Http\Controllers\SkillupController::class, 'index']);
Route::get('/skillup/tambah',  [App\Http\Controllers\SkillupController::class, 'tambah']);
Route::post('/skillup/store',  [App\Http\Controllers\SkillupController::class, 'store']);


Route::get('/findjob', [App\Http\Controllers\FindJobController::class, 'index']);
Route::get('/inputapplist', 'InputApplistController@inputapplist');


//Skill Up AIDA
Route::post('/save', [RegisterController::class, 'store']);

Auth::routes();


Route::middleware('role:admin')->get('/skillup/edit/{id}', [App\Http\Controllers\SkillupController::class, 'edit'])->name('editskillup');
Route::middleware('role:admin')->post('/skillup/update', [App\Http\Controllers\SkillupController::class, 'update'])->name('editskillup');
Route::get('/skillup', [App\Http\Controllers\SkillupController::class, 'index'])->name('skillup');
Route::middleware('role:admin')->get('/skillup/hapus/{id}', [App\Http\Controllers\SkillupController::class, 'hapus'])->name('detailskillup');
Route::middleware('role:admin')->get('/skillup/view', [App\Http\Controllers\SkillupController::class, 'view'])->name('viewskillup');
Route::middleware('role:admin')->post('/skillup/detail/{id}','SkillupController@store');

//findjob FEBINA
Route::get('/findjob', [App\Http\Controllers\FindJobController::class, 'index'])->name('findjob');
Route::get('/findjob/detail/{id}', [App\Http\Controllers\FindJobController::class, 'detail'])->name('detailfindjob');



// Applist FARREL
Route::middleware('role:company')->get('/applist', [App\Http\Controllers\ApplistController::class, 'index'])->name('applist');
Route::middleware('role:company')->get('/inputapplist', [App\Http\Controllers\ApplistController::class, 'tambah'])->name('inputapplist');
Route::middleware('role:company')->get('/applist/detail/{id}', [App\Http\Controllers\ApplistController::class, 'detail'])->name('detailapplist');
Route::middleware('role:company')->get('/applist/edit/{id}', [App\Http\Controllers\ApplistController::class, 'edit'])->name('editapplist');
Route::middleware('role:company')->post('/applist/update', [App\Http\Controllers\ApplistController::class, 'update'])->name('editapplist');
Route::middleware('role:company')->get('//applist/hapus/{id}', [App\Http\Controllers\ApplistController::class, 'hapus'])->name('detailapplist');
Route::middleware('role:company')->get('/applist/view', [App\Http\Controllers\ApplistController::class, 'view'])->name('viewapplist');
Route::middleware('role:company')->post('/applist/detail/{id}','ApplistController@store');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


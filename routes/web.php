<?php

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
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/list', [UserController::class, 'index'])->name('user.index');

Route::get('/add', [UserController::class, 'create'])->middleware('checklevel:admin');

Route::post('/savelist', [UserController::class, 'store']);

Route::get('/list/{id}', [UserController::class, 'detail']);

Route::get('/delete/{id}', [UserController::class, 'delete']);

Route::view('/nyoba', 'nyoba.login');

Route::resource('jurusan', JurusanController::class);

Route::group(['middleware' => ['auth', 'checklevel:admin,siswa']], function () {
    route::get('/home', [HomeController::class, 'index'])->name('home');
});

Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');


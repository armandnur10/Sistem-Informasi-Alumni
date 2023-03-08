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
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/list', [ProfileController::class, 'index']);

Route::get('/add', [ProfileController::class, 'create'])->middleware('checklevel:admin');

Route::post('/savelist', 'ProfileController@store');

Route::get('/list/{id}', 'ProfileController@detail');

Route::get('/delete/{id}', 'ProfileController@delete');

Route::view('/nyoba', 'nyoba.login');

Route::group(['middleware' => ['auth', 'checklevel:admin,siswa']], function () {
    route::get('/home', [HomeController::class, 'index'])->name('home');
});


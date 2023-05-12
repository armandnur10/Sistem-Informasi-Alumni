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
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboards');

Route::get('/list', [UserController::class, 'index'])->name('user.index');

Route::get('/add', [UserController::class, 'create'])->middleware('checklevel:admin');

Route::post('/savelist', [UserController::class, 'store']);

Route::get('/list/{id}', [UserController::class, 'detail']);

Route::get('/delete/{id}', [UserController::class, 'delete']);

Route::get('/siswa', [UserController::class, 'siswa'])->name('siswa')->middleware('checklevel:siswa');

Route::get('/export', [UserController::class, 'userexport'])->name('userexport');

Route::post('/import', [UserController::class, 'userimport'])->name('userimport');

Route::resource('jurusan', JurusanController::class)->middleware('checklevel:admin');
Route::resource('user', UserController::class)->middleware('checklevel:admin');

Route::get('nyoba', function(){
    return view('widget.nyoba');
});

Route::group(['middleware' => ['auth', 'checklevel:admin,siswa']], function () {
    route::get('/home', [HomeController::class, 'index'])->name('home');
});


Route::resource('/profile', ProfileController::class);


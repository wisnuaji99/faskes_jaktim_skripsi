<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::resource('/rumahsakit',App\Http\Controllers\RumahSakitController::class);
Route::resource('/kecamatan',App\Http\Controllers\KecamatanController::class);
Route::resource('/kelurahan',App\Http\Controllers\KelurahanController::class);
Route::resource('/kepemilikan',App\Http\Controllers\KepemilikanController::class);
Route::resource('/jenislayanan',App\Http\Controllers\JenisLayananController::class);
Route::resource('/klinik',App\Http\Controllers\KlinikController::class);
Route::resource('/tempattidur',App\Http\Controllers\tempattidurController::class);

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('admin')->group(function () {

    Route::group(['middleware' => 'auth'], function(){

        //dashboard
        Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard.index');
        //permissions
        Route::resource('/permission', App\Http\Controllers\Admin\PermissionController::class, ['except' => ['show', 'create', 'edit', 'update', 'delete'] ,'as' => 'admin']);
        //roles
        Route::resource('/role', App\Http\Controllers\Admin\RoleController::class, ['except' => ['show'] ,'as' => 'admin']);
        //users
        Route::resource('/user', App\Http\Controllers\Admin\UserController::class, ['except' => ['show'] ,'as' => 'admin']);
    });

});

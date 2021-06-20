<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ClientController;
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

require __DIR__ . '/auth.php';
Route::get('/', function () {
	return view('welcome');
});

Route::middleware(['auth'])->group(function () {

	Route::resource('clients', ClientController::class);
	Route::resource('users', UserController::class);
	Route::resource('roles', RoleController::class);
	Route::resource('permissions', PermissionController::class);

	// Route::get('roles', [RoleController::class, 'index']);



	Route::get('/dashboard', function () {
		return view('dashboard');
	})->name('dashboard');
});

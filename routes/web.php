<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\PrestationController;
use App\Http\Controllers\Admin\RealisationController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;

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

Route::get('/', [HomeController::class, 'home']);



/*
|--------------------------------------------------------------------------
| Admin routes
|--------------------------------------------------------------------------
*/
Route::match(['GET', 'POST'], '/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware('auth:web')->prefix('admin')->as('admin.')->group(function () {
    Route::match(['GET', 'POST'], '/', [AdminHomeController::class, 'home'])->name('home');
    Route::resource('prestations', PrestationController::class)->except('show');
    Route::resource('realisations', RealisationController::class)->except('show');
    Route::resource('images', ImageController::class)->except('show', 'update');
    Route::patch('/images/{image}/change-status', [ImageController::class, 'changeStatus'])->name('images.changeStatus');
});
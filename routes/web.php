<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\CarpenterController;
use App\Http\Controllers\ShippingController;
use App\Http\Controllers\TownshipController;
use App\Http\Controllers\CarpenterOrderController;
use App\Http\Controllers\OrderConfirmController;

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

/*Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});*/

Route::resource('/category', CategoryController::class);
Route::resource('/item', ItemController::class);
Route::resource('/carpenter', CarpenterController::class);
Route::resource('/carpenterorder', CarpenterOrderController::class);
Route::resource('/shipping', ShippingController::class);
Route::resource('/township', TownshipController::class);
Route::resource('/orderconfirm', OrderConfirmController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

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
use App\Http\Controllers\OrderDetailController;

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\DynamicPDFController;

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
Route::resource('/item',ItemController::class)->middleware('auth');
Route::resource('/category',CategoryController::class)->middleware('auth');

Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');
Route::get('detail/{id}', [FrontendController::class, 'detail'])->name('frontend.detail');
Route::get('cart',[FrontendController::class, 'cart'])->name('frontend.cart');
Route::get('product',[FrontendController::class, 'product'])->name('frontend.product');
Route::get('contact',[FrontendController::class, 'contact'])->name('frontend.contact');
Route::get('about',[FrontendController::class, 'about'])->name('frontend.about');
Route::post('/storeorder',[FrontendController::class, 'storeorder'])->name('/storeorder');
Route::get('ordersuccess',[FrontendController::class, 'ordersuccess'])->name('frontend.ordersuccess');
Route::get('invoice', [FrontendController::class, 'invoice'])->name('frontend.invoice');
Route::get('purchase', [FrontendController::class, 'purchase'])->name('frontend.purchase');
Route::get('purchasedetail/{id}', [FrontendController::class, 'purchasedetail'])->name('frontend.purchasedetail');

Route::get('login',[AuthController::class, 'loginform'])->name('login');
Route::post('login',[AuthController::class, 'login']);
Route::get('register',[AuthController::class, 'registerForm'])->name('register');
Route::post('register',[AuthController::class, 'register']);

Route::get('dynamic_pdf', 'App\Http\Controllers\DynamicPDFController@index');
Route::get('/dynamic_pdf/pdf', 'App\Http\Controllers\DynamicPDFController@pdf');

// Route::get('/purchasedetail/pdf', 'App\Http\Controllers\DynamicPDFController@purchasedetailpdf');


// Route::get('/dynamic_pdf/{id}', 'App\Http\Controllers\DynamicPDFController@index');


/*Backend*/

Route::resource('/category', CategoryController::class);
Route::resource('/item', ItemController::class);
Route::resource('/carpenter', CarpenterController::class);
Route::resource('/carpenterorder', CarpenterOrderController::class);
Route::resource('/shipping', ShippingController::class);
Route::resource('/township', TownshipController::class);
Route::resource('/orderconfirm', OrderConfirmController::class);
Route::resource('/orderlist', OrderDetailController::class);





Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

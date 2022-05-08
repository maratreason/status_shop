<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\OffersController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::middleware(['auth'])->group(function() {
    Route::group([
        'prefix' => 'admin',
    ], function() {
        Route::group(['middleware' => 'is_admin'], function() {
            Route::get('/home', [OrderController::class, 'index'])->name('home');

            Route::get('/orders', [OrderController::class, 'index'])->name('orders.home');
            Route::get('/orders/{order}', [OrderController::class, 'show'])->name('orders.show');
        });

        Route::resource('categories', CategoryController::class);
        Route::resource('products', ProductController::class);
    });
});

Route::group([
    'prefix' => 'basket'
], function() {
    Route::post('/add/{id}', [BasketController::class, 'basketAdd'])->name('basket-add');
    Route::get('/', [BasketController::class, 'basket'])->name('basket');
    Route::post('/confirm', [BasketController::class, 'basketConfirm'])->name('basket-confirm');
    Route::post('/remove/{id}', [BasketController::class, 'basketRemove'])->name('basket-remove');
});

Route::get('/logout', [LoginController::class, 'logout'])->name('get-logout');

Route::get('/offers', [OffersController::class, 'index'])->name('offers');
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/team', [TeamController::class, 'index'])->name('team');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/catalog', [CatalogController::class, 'index'])->name('catalog');
Route::get('/catalog/{category?}/{product?}', [CatalogController::class, 'show'])->name('product');

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/{categoryAlias?}', [IndexController::class, 'index'])->name('category-home');

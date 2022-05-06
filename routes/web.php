<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\OffersController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TeamController;
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

Route::get('/', [IndexController::class, 'index'])->name('home');
// Route::get('/{category}', [IndexController::class, 'category'])->name('home');
Route::get('/offers', [OffersController::class, 'index'])->name('offers');
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/catalog', [CatalogController::class, 'index'])->name('catalog');
Route::get('/team', [TeamController::class, 'index'])->name('team');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

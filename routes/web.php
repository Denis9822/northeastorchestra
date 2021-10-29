<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ReviewsController;
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


Route::get('/', [CategoryController::class, 'categories'])->name('category.index');
Route::get('/categories/{name}', [CategoryController::class, 'categoriesId'])->name('category.id');
Route::get('/categories/{name}/{name2}', [CategoryController::class, 'categoriesChild'])->name('category.child');
Route::get('/best-{name}', [ReviewsController::class, 'reviews'])->name('reviews.index');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SitemapXmlController;
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
Route::get('/sitemap.xml', [SitemapXmlController::class,'index'])->name('sitemap.xml');
Route::get('/sitemap/sitemap-page.xml', [SitemapXmlController::class,'sitemap_page'])->name('sitemap.xml.page');
Route::get('/sitemap/sitemap-category.xml', [SitemapXmlController::class,'sitemap_category'])->name('sitemap.xml.category');
Route::get('/sitemap/sitemap-artists.xml', [SitemapXmlController::class,'sitemap_artists'])->name('sitemap.xml.artists');
Route::get('/sitemap/sitemap-reviews-{id}.xml', [SitemapXmlController::class,'sitemap_reviews'])->name('sitemap.xml.reviews');
Route::get('/sitemap/sitemap-brand-{id}.xml', [SitemapXmlController::class,'sitemap_brand'])->name('sitemap.xml.brand');

Route::get('/', [MainController::class, 'index'])->name('index');

Route::get('/artists', [ArtistController::class, 'blog'])->name('blog');

Route::get('/brand', [BrandController::class, 'brand'])->name('brand');
Route::get('/brand/{name}', [BrandController::class, 'brand_name'])->name('brand.name');

Route::get('/contact', [ServiceController::class, 'contact'])->name('contact');
Route::get('/about-us', [ServiceController::class, 'about_us'])->name('about_us');
Route::get('/privacy-policy', [ServiceController::class, 'privacy_policy'])->name('privacy_policy');
Route::get('/terms-and-conditions', [ServiceController::class, 'terms_and_conditions'])->name('terms_and_conditions');

Route::get('/categories', [CategoryController::class, 'categories'])->name('category.index');
Route::get('/topics-directory/{letter?}', [CategoryController::class, 'category_directory'])->name('category.directory');
Route::get('/categories/{name}', [CategoryController::class, 'categoriesId'])->name('category.id');
Route::get('/categories/{name}/{name2}', [CategoryController::class, 'categoriesChild'])->name('category.child');
Route::get('/{name}/{name2?}', [ReviewsController::class, 'reviews'])->name('reviews.index');



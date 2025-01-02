<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\queryBuilderController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/users',[queryBuilderController::class,'getUsersData']);
Route::get('/profiles',[queryBuilderController::class,'getProfilesData']);
Route::get('/categories',[queryBuilderController::class,'getCategoriesData']);
Route::get('/brands',[queryBuilderController::class,'getBrandsData']);
Route::get('/products',[queryBuilderController::class,'getProductsData']);
Route::get('/product-sliders',[queryBuilderController::class,'getProductSlidersData']);
Route::get('/product-details',[queryBuilderController::class,'getProductDetailsData']);
Route::get('/product-reviews',[queryBuilderController::class,'getProductReviewsData']);
Route::get('/product-wishes',[queryBuilderController::class,'getProductWishesData']);
Route::get('/product-carts',[queryBuilderController::class,'getProductCartsData']);

require __DIR__.'/auth.php';

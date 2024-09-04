<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;


//Home
Route::get('/', [HomeController::class, 'index'])->name('home');

//Product
Route::prefix('category')->group(function () {
    Route::get('food-beverage', [ProductController::class, 'foodBeverage'])->name('category.food_beverage');
    Route::get('beauty-health', [ProductController::class, 'beautyHealth'])->name('category.beauty_health');
    Route::get('home-care', [ProductController::class, 'homeCare'])->name('category.home_care');
    Route::get('baby-kid', [ProductController::class, 'babyKid'])->name('category.baby_kid');
});

//User
Route::get('user/{id}/name/{name}', [UserController::class, 'profile'])->name('user.profile');

//Sales 
Route::get('sales', [SalesController::class, 'index'])->name('sales');

?>


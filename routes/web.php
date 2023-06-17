<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Produt endpoint
Route::get('addProduct',[ProductController::class,'create']) ->name('addProduct');
Route::post('addProduct', [ProductController::class,'store']) ->name('storeProduct');
Route::get('products',[ProductController::class,'show']) ->name('showProduct');
Route::get('edit/{id}', [ProductController::class,'edit'])->name('EditProduct');
Route::post('edit/{id}', [ProductController::class,'update']) ->name('UpdateProduct');
Route::get('delete/{id}', [ProductController::class, 'destroy']) ->name('DeleteProduct');
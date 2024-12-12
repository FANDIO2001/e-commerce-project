<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

route::get('/',[HomeController::class,'home']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::get('admin/dasboard',[HomeController::class,'index'])->middleware(['auth','admin']);
Route::get('view_category',[AdminController::class,'view_category'])->middleware(['auth','admin']);
Route::post('add_category',[AdminController::class,'add_category'])->middleware(['auth','admin']);
Route::get('edit_category/{id}',[AdminController::class,'edit_category'])->middleware(['auth','admin']);
Route::post('update_category/{id}',[AdminController::class,'update_category'])->middleware(['auth','admin']);
Route::get('delete_category/{id}',[AdminController::class,'delete_category'])->middleware(['auth','admin']);

//Admin Manage product...............................................
Route::get('add_product',[AdminController::class,'add_product'])->middleware(['auth','admin']);
Route::post('create_product',[AdminController::class,'create_product'])->middleware(['auth','admin']);
Route::get('product_list',[AdminController::class,'product_list'])->middleware(['auth','admin']);
Route::get('delet_product/{id}',[AdminController::class,'delet_product'])->middleware(['auth','admin']);
Route::get('edite_product/{id}',[AdminController::class,'edite_product'])->middleware(['auth','admin']);
Route::post('update_product/{id}',[AdminController::class,'update_product'])->middleware(['auth','admin']);
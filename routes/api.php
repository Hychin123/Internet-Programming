<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('getProducts', [ProductController::class, 'getProducts']);
Route::post('createProduct', [ProductController::class, 'createProduct']);
Route::get('findProduct/{productId}', [ProductController::class, 'getProduct']);
Route::put('updateProduct/{productId}', [ProductController::class, 'updateProduct']);
Route::delete('deleteProduct/{productId}', [ProductController::class, 'deleteProduct']);


Route::get('getCategories', [CategoryController::class, 'getCategories']);
Route::post('createCategory', [CategoryController::class, 'createCategory']);
Route::get('getCategory/{categoryId}', [CategoryController::class, 'getCategory']);
Route::put('updateCategory/{categoryId}', [CategoryController::class, 'updateCategory']);
Route::delete('deleteCategory/{categoryId}', [CategoryController::class, 'deleteCategory']);
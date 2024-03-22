<?php

use App\Http\Controllers\BranchController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Branch Route
Route::get('/branches', [BranchController::class, 'index']);
Route::post('/branches/add', [BranchController::class, 'store'])->name( 'add_new_branch' );

//Categories Route
Route::post('/categories/add', [CategoryController::class, 'store'] )->name('add_category');

//Products Route
Route::post('/products/add', [ProductController::class, 'store'])->name( 'add_product' );


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



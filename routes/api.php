<?php

use App\Http\Controllers\Api\AddressesApiController;
use App\Http\Controllers\Api\CategoryApiController;
use App\Http\Controllers\Api\OrdersApiController;
use App\Http\Controllers\Api\ProductsApiController;
use App\Http\Controllers\Api\ReviewsApiController;
use App\Http\Controllers\Api\RoleApiController;
use App\Http\Controllers\Api\UsersApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Api Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Api routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('/roles')->group(function (){
    Route::get('/', [RoleApiController::class, 'index'])->name('api.role.index');
    Route::get('/{id}', [RoleApiController::class, 'show'])->name('api.role.read');
    Route::post('/', [RoleApiController::class, 'store'])->name('api.role.create');
    Route::put('/{id}', [RoleApiController::class, 'update'])->name('api.role.update');
    Route::delete('/{id}', [RoleApiController::class, 'destroy'])->name('api.role.delete');
});

Route::prefix('/categories')->group(function (){
    Route::get('/', [CategoryApiController::class, 'index'])->name('api.categories.index');
    Route::get('/{id}', [CategoryApiController::class, 'show'])->name('api.categories.read');
    Route::post('/', [CategoryApiController::class, 'store'])->name('api.categories.create');
    Route::put('/{id}', [CategoryApiController::class, 'update'])->name('api.categories.update');
    Route::delete('/{id}', [CategoryApiController::class, 'destroy'])->name('api.categories.delete');
});

Route::prefix('/products')->group(function (){
    Route::get('/', [ProductsApiController::class, 'index'])->name('api.products.index');
    Route::get('/{id}', [ProductsApiController::class, 'show'])->name('api.products.read');
    Route::post('/', [ProductsApiController::class, 'store'])->name('api.products.create');
    Route::put('/{id}', [ProductsApiController::class, 'update'])->name('api.products.update');
    Route::delete('/{id}', [ProductsApiController::class, 'destroy'])->name('api.products.delete');
});

Route::prefix('/reviews')->group(function (){
    Route::get('/', [ReviewsApiController::class, 'index'])->name('api.reviews.index');
    Route::get('/{id}', [ReviewsApiController::class, 'show'])->name('api.reviews.read');
    Route::post('/', [ReviewsApiController::class, 'store'])->name('api.reviews.create');
    Route::put('/{id}', [ReviewsApiController::class, 'update'])->name('api.reviews.update');
    Route::delete('/{id}', [ReviewsApiController::class, 'destroy'])->name('api.reviews.delete');
});

Route::prefix('/users')->group(function (){
    Route::get('/', [UsersApiController::class, 'index'])->name('api.users.index');
    Route::get('/{id}', [UsersApiController::class, 'show'])->name('api.users.read');
    Route::post('/', [UsersApiController::class, 'store'])->name('api.users.create');
    Route::put('/{id}', [UsersApiController::class, 'update'])->name('api.users.update');
    Route::delete('/{id}', [UsersApiController::class, 'destroy'])->name('api.users.delete');
});

Route::prefix('/addresses')->group(function (){
    Route::get('/', [AddressesApiController::class, 'index'])->name('api.addresses.index');
    Route::get('/{id}', [AddressesApiController::class, 'show'])->name('api.addresses.read');
    Route::post('/', [AddressesApiController::class, 'store'])->name('api.addresses.create');
    Route::put('/{id}', [AddressesApiController::class, 'update'])->name('api.addresses.update');
    Route::delete('/{id}', [AddressesApiController::class, 'destroy'])->name('api.addresses.delete');
});

Route::prefix('/orders')->group(function (){
    Route::get('/', [OrdersApiController::class, 'index'])->name('api.orders.index');
    Route::get('/{id}', [OrdersApiController::class, 'show'])->name('api.orders.read');
    Route::post('/', [OrdersApiController::class, 'store'])->name('api.orders.create');
    Route::put('/{id}', [OrdersApiController::class, 'update'])->name('api.orders.update');
    Route::delete('/{id}', [OrdersApiController::class, 'destroy'])->name('api.orders.delete');
});

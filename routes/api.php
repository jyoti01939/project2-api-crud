<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');
Route::get('create',[ProductController::class,'index'])->name('create.product');
Route::post('create',[ProductController::class,'create'])->name('create.product');
Route::get('edit/{id}',[ProductController::class,'edit'])->name('edit.product');
Route::post('edit/{id}',[ProductController::class,'update'])->name('edit.product');
Route::get('delete/{id}',[ProductController::class,'delete'])->name('delete.product');

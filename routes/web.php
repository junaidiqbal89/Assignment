<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;

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



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


//////////////////////product
Route::get('products',[ProductController::class,'index']);
Route::get('add-product',[ProductController::class,'create']);
Route::post('store-product',[ProductController::class,'store']);
Route::get('edit-product/{id}',[ProductController::class,'edit']);
Route::put('update-product/{id}',[ProductController::class,'update']);
Route::get('delete-product/{id}',[ProductController::class,'destroy']);









// Route::prefix('admin')->group(function()
// {
//  Route::get('/login',[AdminController::class,'Index'])->name('login_form');

//  Route::post('/login/owner',[AdminController::class,'Login'])->name('admin.login');

//  Route::get('/dashboard',[AdminController::class,'Dashboard'])->name('admin.dashboard')->middleware('admin');

// });

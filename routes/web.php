<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\UsersController;

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
/* 
Route::get('/', function () {
           return view('store.pages.homepage');

}); */

Route::get('/', [PageController::class, 'homepage']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
<<<<<<< HEAD
=======


Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function () {
    Route::resource('/users', UsersController::class)->except(['show', 'create', 'store']);
});
>>>>>>> 87948fce5f9c4f6d44d4681f31667d97b4a0dbc7

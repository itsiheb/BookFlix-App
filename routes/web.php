<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [
    App\Http\Controllers\HomeController::class,
    'index',
])->name('home');
Route::resource(
    'categories',
    ('App\Http\Controllers\CategoryController')::class
);
Route::resource('demandes', ('App\Http\Controllers\DemandeController')::class);
Route::resource('books', ('App\Http\Controllers\BookController')::class);
Route::resource('histories', ('App\Http\Controllers\HistoryController')::class);
Route::resource('statistics', ('App\Http\Controllers\StatController')::class);

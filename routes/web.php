<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;


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
    return view('default');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/items/create', function () {
    return view('create');
});

Route::get('/items', function () {
    return view('items');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/items/search', [ItemController::class, 'search'])->name('items.search');
Route::get('/items/{item}', [ItemController::class, 'show'])->name('items.show');

Route::get('/Leenmarkt','App\Http\Controllers\ItemController@leenmarkt')->name('items.leenmarkt');

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/items', 'App\Http\Controllers\ItemController@index')->name('items.index');
Route::get('/items/create', 'App\Http\Controllers\ItemController@create')->name('items.create');
Route::post('/items', 'App\Http\Controllers\ItemController@store')->name('items.store');
Route::get('/items/{item}/edit', 'App\Http\Controllers\ItemController@edit')->name('items.edit');
Route::put('/items/{item}', 'App\Http\Controllers\ItemController@update')->name('items.update');
Route::delete('/items/{item}', 'App\Http\Controllers\ItemController@destroy')->name('items.destroy');
Route::post('/items/upload-image', [ItemController::class, 'uploadImage'])->name('items.uploadImage');


require __DIR__.'/auth.php';

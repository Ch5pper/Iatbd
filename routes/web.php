<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ReviewController;


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

Route::get('/Geleend', function () {
    return view('Geleend');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/products', function () {
    return view('products');
});

Route::post('/items/leen/{item}', function ($item) {
    return view('geleend', compact('item'));
})->name('items.leen');


Route::get('/items/search', [ItemController::class, 'search'])->name('items.search');
Route::get('/items/{item}', [ItemController::class, 'show'])->name('items.show');

Route::get('/Leenmarkt','App\Http\Controllers\ItemController@leenmarkt')->name('items.leenmarkt');

Route::post('/items/{item}/leen', 'App\Http\Controllers\ItemController@leen')->name('items.leen');

Route::post('/reviews', 'ReviewController@store')->name('reviews.store');
Route::get('/items/{id}/lend', [ItemController::class, 'lend']);

Route::get('/products/{product}/share', 'ProductController@share')->name('products.share');
Route::post('/products/{product}/share', 'ProductController@shareProduct')->name('products.shareProduct');

Route::post('/comments', [ReviewController::class, 'store'])->name('comments.store');

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

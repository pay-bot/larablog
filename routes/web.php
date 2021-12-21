<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\FileUploadController;

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

Route::get('/', [App\Http\Controllers\PublicController::class, 'index'])->name('index');

Route::get('/upload', [App\Http\Controllers\FileUploadController::class, 'showUploadForm'])->name('upload');
Route::post('/upload', [App\Http\Controllers\FileUploadController::class, 'storeUploads'])->name('upload');

Route::get('/post/show/{post}', [App\Http\Controllers\PublicController::class, 'show'])->name('post.show');
Route::get('/category/show/{category}', [App\Http\Controllers\PublicController::class, 'category'])->name('category.show');


Auth::routes();
Route::view('welcome', 'welcome');

Route::view('cek-rabun-jauh', 'rabun-jauh.index');
Route::get('cek-cartridge', [App\Http\Controllers\HomeController::class, 'cartridge'])->name('cartridge');
Route::view('cek-belom-tau', 'rabun-senja.index');

// Route::post('pilih-penyakit', 'CheckController@Index')->name('check.penyakit');
Route::post('pilih-penyakit', [App\Http\Controllers\CheckController::class, 'index'])->name('check.penyakit');

// , [App\Http\Controllers\PostController::class, 'store'])->name('post.store');

Route::post('check.rabun-jauh', 'CheckController@CekRabunJauh')->name('check.rabun-jauh');
Route::post('check.rabun-dekat', [App\Http\Controllers\CheckController::class, 'CekRabunDekat'])->name('check.rabun-dekat');
Route::post('check.rabun-senja', 'CheckController@CekRabunSenja')->name('check.rabun-senja');






Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(attributes: ['middleware' => 'auth'], routes: function () {
    Route::get('/post', [App\Http\Controllers\PostController::class, 'index'])->name('post');
    Route::get('/post/create', [App\Http\Controllers\PostController::class, 'create'])->name('post.create');

    Route::post('/post/store', [App\Http\Controllers\PostController::class, 'store'])->name('post.store');

    Route::get('/post/edit/{post}', [App\Http\Controllers\PostController::class, 'edit'])->name('post.edit');

    Route::patch('/post/update/{post}', [App\Http\Controllers\PostController::class, 'update'])->name('post.update');

    Route::delete('/post/destroy/{post}', [App\Http\Controllers\PostController::class, 'destroy'])->name('post.destroy');
});

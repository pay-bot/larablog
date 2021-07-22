<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PublicController;

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
// Route::post('/upload', [App\Http\Controllers\FileUploadController::classstoreUploads');

Route::get('/post/show/{post}', [App\Http\Controllers\PublicController::class, 'show'])->name('post.show');
Route::get('/category/show/{category}', [App\Http\Controllers\PublicController::class, 'category'])->name('category.show');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(attributes: ['middleware' => 'auth'], routes: function () {
    Route::get('/post', [App\Http\Controllers\PostController::class, 'index'])->name('post');
    Route::get('/post/create', [App\Http\Controllers\PostController::class, 'create'])->name('post.create');

    Route::post('/post/store', [App\Http\Controllers\PostController::class, 'store'])->name('post.store');

    Route::get('/post/edit/{post}', [App\Http\Controllers\PostController::class, 'edit'])->name('post.edit');

    Route::patch('/post/update/{post}', [App\Http\Controllers\PostController::class, 'update'])->name('post.update');

    Route::delete('/post/destroy/{post}', [App\Http\Controllers\PostController::class, 'destroy'])->name('post.destroy');
});

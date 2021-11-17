<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\KategoriController;


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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');

//admin Ruote
Route::group(['prefix'=>'admin', 'middleware'=>['auth', 'role:admin']], function (){
    Route::get('/', function (){
        return view('admin.index');
    });
    Route::resource('author', AuthorController::class);
    Route::resource('books', BookController::class);
    Route::resource('wisata', WisataController::class);
    Route::resource('destinasi', DestinasiController::class);
    Route::resource('kategori', KategoriController::class);

});

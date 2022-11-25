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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[App\Http\Controllers\LandingPageController::class,'index']);
Route::get('about',[App\Http\Controllers\AboutController::class,'about']);
Route::get('privacy-policy',[App\Http\Controllers\AboutController::class,'privacy_policy']);
Route::get('contact-us',[App\Http\Controllers\AboutController::class,'contact']);
Route::get('details/{judul}/{id}',[App\Http\Controllers\LandingPageController::class,'show']);


Auth::routes(['register'=>false]);

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('home/create', [App\Http\Controllers\HomeController::class, 'create'])->name('home.create');
Route::get('home/{id}', [App\Http\Controllers\HomeController::class, 'edit'])->name('home.edit');
Route::get('home/{id}/delete', [App\Http\Controllers\HomeController::class, 'destroy'])->name('home.delete');
Route::post('home/{id}', [App\Http\Controllers\HomeController::class, 'update'])->name('home.update');
Route::post('home', [App\Http\Controllers\HomeController::class, 'store'])->name('home.post');

Route::get('mediasosial', [App\Http\Controllers\MediaSosialController::class, 'index'])->name('mediasosial');
Route::post('mediasosial', [App\Http\Controllers\MediaSosialController::class, 'store'])->name('mediasosial.post');


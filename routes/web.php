<?php

use App\Http\Controllers\addpostcontro;
use App\Http\Controllers\admincontro;
use App\Http\Controllers\articlecontro;
use App\Http\Controllers\paniercontro;
use App\Http\Controllers\postcontro;
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



Auth::routes();



Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/',[articlecontro::class,'index']);
Route::get('/home',[articlecontro::class,'index'])->name('home');


Route::get('/post/{id}',[postcontro::class,'index']);
Route::get('panier',[paniercontro::class,'index'])->name('panier');






Route::get('admin',[admincontro::class,'index'])->name('admin_index');

Route::post('add/post',[addpostcontro::class,'store'])->name('postadd');

Route::post('panier/add',[paniercontro::class,'add'])->name('panier_add');


Route::get('page/add/post',[addpostcontro::class,'index'])->name('add/page/post');

Route::post('recuper/id',[admincontro::class,'subrime'])->name('recuper_id');



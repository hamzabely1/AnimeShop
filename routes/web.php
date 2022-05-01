<?php

use App\Http\Controllers\addpostcontro;
use App\Http\Controllers\admincontro;
use App\Http\Controllers\articlecontro;
use App\Http\Controllers\cate;
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
Route::get('panier',[paniercontro::class,'index'])->middleware('auth')->name('panier');






Route::get('admin',[admincontro::class,'index'])->middleware('auth')->name('admin_index');

Route::post('add/post',[addpostcontro::class,'store'])->middleware('auth')->name('postadd');

Route::post('panier/add',[paniercontro::class,'add'])->middleware('auth')->name('panier_add');


Route::get('page/add/post',[addpostcontro::class,'index'])->name('add/page/post');

Route::post('recuper/id',[admincontro::class,'subrime'])->name('recuper_id');






Route::get('/cate/one',[cate::class,'one_piece'])->name('view_cate_one_piece');

Route::get('/cate/attack',[cate::class,'attack'])->name('view_cate_attack');

Route::get('/cate/dragon',[cate::class,'dragon'])->name('view_cate_dragon');

Route::get('/cate/naruto',[cate::class,'naruto'])->name('view_cate_naruto');





Route::get('/subrime',[paniercontro::class,'subrime'])->middleware('auth')->name('subrime_artciles');



Route::get('deled/panier',[paniercontro::class,'deledtous'])->middleware('auth')->name('deledtous');


Route::get('panier/com',[paniercontro::class,'prix']);





Route::get('route/info',[cate::class,'info'])->name('info');

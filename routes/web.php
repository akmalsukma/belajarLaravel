<?php

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

Route::get('/portfolio',function(){
    return view('portfolio');
});

Route::get('/artikel/{judul}',function($judul){
    return "Artikel ini Berjudul : $judul";
});

Route::get('/artikel/{judul}/{kategori}',function($judul,$kategori){
    return "Artikel ini Berjudul : $judul <br> Kategori : $kategori";
});

Route::get('/user/{id_user}',function($id_user){
    return "ID user : $id_user";
})->where('id_user','[A-Z]{3}[1-9]+');

Route::fallback(function (){
    return "Halaman yang anda tuju tidak ada";
});

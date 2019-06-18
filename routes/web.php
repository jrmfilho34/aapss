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
    return view('site');
});

Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/admin', 'AdminController@index')->name('admin');

Route::middleware('auth')->namespace('Admin')->group(function(){
    
    Route::resource('artigos','ArtigosController');
    Route::resource('usuarios','UsuarioController');
    Route::resource('autores','AutoresController');
});

Route::prefix('Site')->namespace('Site')->group(function(){
    
    Route::resource('Site','ArtigosController');
});

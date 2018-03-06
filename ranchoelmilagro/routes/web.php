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

Route::get('/','indexController@index');
Route::get('/index','indexController@index');
Route::get('/panelapp','panelController@panelapp');
Route::get('/login','loginController@login');
Route::get('/panel','panelwebController@panelweb');
Route::get('/perfil','perfilController@perfil');





Route::group(['prefix'=>'admin','as'=>'admin.'],function(){
 Route::get('/','panelwebController@panelweb');
 Route::get('/login','loginController@login');
 Route::get('/loginapp','loginappController@indexapp');
 Route::get('/usuarios','usuariosController@index');
 
 Route::resource('usuarios','usuariosController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

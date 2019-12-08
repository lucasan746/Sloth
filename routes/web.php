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
Route::get('user/','userController@listaUser');

Auth::routes();
Route::get('preguntas', function () {
    return view('faq');
});
Route::get('/home', 'HomeController@listaPost')->name('home');

Route::get('publicacion/',function(){
  return view('posteos');
});

Route::post('publicacion/','postController@agregarPost');
Route::get('perfil/{id}','userController@seguir');
Route::post('follow','seguirController@seguir');
Route::post('unfollow','seguirController@dejarSeguir');
Route::get('users', 'userController@search')->name('usuarios');

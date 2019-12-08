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
Route::get('/home', 'HomeController@listaPost')->name('home')->middleware('auth');

Route::get('publicacion/',function(){
  return view('posteos');
})->middleware('auth');

Route::post('publicacion/','postController@agregarPost')->name('posteo')->middleware('auth');
Route::get('perfil/{id}','userController@seguir')->middleware('auth');
Route::post('follow','seguirController@seguir')->middleware('auth');
Route::post('unfollow','seguirController@dejarSeguir')->middleware('auth');
Route::get('users', 'userController@search')->name('usuarios')->middleware('auth');

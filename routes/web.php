<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('user/','userController@listaUser');

Auth::routes();
Route::get('preguntas', function () {
    return view('faq');
})->name('preguntas');
Route::get('/home', 'HomeController@listaPost')->name('home')->middleware('auth');

Route::get('publicacion/',function(){
  return view('posteos');
})->middleware('auth');

Route::post('publicacion/','postController@agregarPost')->middleware('auth');
Route::get('perfil/{id}','userController@seguir')->middleware('auth')->name('perfil');
Route::post('follow','seguirController@seguir')->middleware('auth');
Route::post('unfollow','seguirController@dejarSeguir')->middleware('auth');
Route::get('users', 'userController@search')->name('usuarios')->middleware('auth');
Route::post('eliminar','postController@borrarPost')->middleware('auth');
Route::resource('posteo', 'PosteoController');

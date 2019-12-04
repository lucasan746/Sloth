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

Route::get('index', function () {
    return view('welcome');
});
Route::get('user/','userController@listaUser');

Auth::routes();
<<<<<<< HEAD

Route::get('/home', 'HomeController@listaPost')->name('home');
=======
Route::get('preguntas', function () {
    return view('faq');
});
Route::get('/home', 'HomeController@index')->name('home');
>>>>>>> e3d47c75b7220c766ed9b03ecd514712e102fe90
Route::get('publicacion/',function(){
  return view('posteos');
});
Route::post('publicacion/','postController@agregarPost');

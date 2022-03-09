<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Post;

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

//Rutes principals

Route::get('/','HomeController@index')->name('home'); 

Route::resources([
    'posts'=>'PostController',
    'users'=>'UserController',
    'comments'=>'CommentsController'
]);


//VISTA PERFIL USUARI
Route::post('/profile','ProfileController@index')->name('profile');

Route::get('/admin','ProfileController@index')->name('admin')->middleware(['auth','role:admin']);

//CREAR ELS POSTS
Route::get('/store','PostController@store')->name('posts.store');

//VISTA EDITAR POSTS
Route::get('posts/edit/{post}','PostController@edit')->name('posts.edit');

//ACTUALITZAR EL POST
//Route::get('posts/{id}/update','PostController@update')->name('posts.update');

//ELIMINAR ELS POSTS
Route::delete('/destroy/{post}', 'PostController@destroy')->name('posts.destroy');

Auth::routes();







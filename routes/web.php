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



Auth::routes();

Route::get('/', 'HomeController@index')->name('welcome');


// ADMIN

Route::get('/admin/articles/','ArticleController@adminAll');


//articles
Route::get('/admin/articles/create','ArticleController@create');
Route::post('/admin/articles/','ArticleController@store');
Route::get('/admin/articles/delete/{id}','ArticleController@destroy')->name('articledelete');
Route::get('/admin/articles/{id}/edit','ArticleController@edit');
Route::post('/admin/articles/{id}/edit','ArticleController@update');



// cats

Route::get('/admin/categories/','CategoryController@adminAll')->name('catsadmin');
Route::get('/admin/categories/create','CategoryController@create');
Route::get('/admin/categories/edit/{id}','CategoryController@edit')->name('catedit');
Route::get('/admin/categories/delete/{id}','CategoryController@destroy')->name('catdelete');

Route::post('/admin/categories/','CategoryController@store')->name('catstore');


Route::get('/admin',function() {
   return view('admin.home');
})->middleware('isAdmin');
;

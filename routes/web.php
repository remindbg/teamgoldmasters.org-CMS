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
Route::get('/articles/{id}','ArticleController@show');
Route::get('/cat/{id}','CategoryController@show');


// ADMIN

Route::get('/admin/articles/','ArticleController@adminAll');


//articles
Route::get('/admin/articles/create','ArticleController@create');
Route::post('/admin/articles/','ArticleController@store');
Route::get('/admin/articles/delete/{id}','ArticleController@destroy')->name('articledelete');
Route::get('/admin/articles/{id}/edit','ArticleController@edit');
Route::post('/admin/articles/{id}/edit','ArticleController@update');


// members
Route::get('/admin/members','MembersController@index'); // all admin members
Route::get('/admin/members/create','MembersController@create'); // add new member ( view )
Route::post('/admin/members','MembersController@store')->name('createmember'); // store new member
Route::get('/admin/members/{id}/edit','MembersController@edit');
Route::post('/admin/members/{id}/edit','MembersController@update');
Route::get('/admin/members/delete/{id}','MembersController@destroy')->name('memberdelete');



// Users
Route::get('/admin/users','UserController@index');
Route::get('/admin/users/{id}/makeadmin','UserController@makeAdmin');



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


// Other Pages
Route::get('/members/','MembersController@frontindex');


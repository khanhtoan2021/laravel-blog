<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Authenticate;

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
Route::get('/about', function () {
    return view('about',['name'=>'xin chao ban Khanh Toan']);
});
Route::get('/news', 'NewsController@index');
Route::get('/admins/home', 'AdminsController@home');
Route::get('/admins', 'AdminsController@listAll')->middleware('AdminRole');
Route::get('/admins/register', 'AdminsController@addForm');
Route::post('/admins/register', 'AdminsController@add');
Route::get('/admins/delete/{id}', 'AdminsController@delete');
Route::get('/admins/editForm/{id}', 'AdminsController@editForm');
Route::post('/admins/update/{id}', 'AdminsController@update');
Route::get('/admins/login', 'AdminsController@loginForm');
Route::post('/admins/login', 'AdminsController@login');
Route::get('/admins/logout', 'AdminsController@logout');

Route::get('/news/index', 'NewsController@index')->middleware('MemberRole');
Route::get('/news/getproduct', 'NewsController@getproduct')->middleware('MemberRole');


Route::get('/admins/admin', 'AdminsController@adminPage')->middleware('AdminRole');
Route::get('/admins/member', 'AdminsController@member')->middleware('MemberRole');

Route::get('/users/login', 'UsersController@getLogin');
Route::post('/users/login', 'UsersController@postLogin');
Route::get('/users/logout', 'UsersController@logout');
Route::post('/users/register', 'UsersController@register');


Route::get('/posts/home', 'PostsController@index')->name('homePage');
Route::get('/posts/listAll', 'PostsController@listAll')->name('posts.listAll');
Route::get('/posts/addPost', 'PostsController@getPostForm');
Route::get('/posts/detail/{id}', 'PostsController@detail');
Route::post('/posts/addPost', 'PostsController@addPost');
Route::post('/posts/uploadImages', 'PostsController@uploadImages');

Route::post('/posts/myAjax', 'PostsController@myAjax');
Route::get('/posts/getproduct', 'PostsController@getproduct');


Route::get('/posts/queryPost', 'PostsController@queryPost');
Route::get('/posts/getHelper', 'PostsController@getHelper');





Route::get('/test', 'AdminsController@test');
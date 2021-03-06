<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/admins', 'AdminsController@listAll');
Route::get('/admins/register', 'AdminsController@addForm');
Route::post('/admins/register', 'AdminsController@add');
Route::get('/admins/delete/{id}', 'AdminsController@delete');
Route::get('/admins/editForm/{id}', 'AdminsController@editForm');
Route::post('/admins/update/{id}', 'AdminsController@update');
Route::get('/admins/login', 'AdminsController@loginForm');
Route::post('/admins/login', 'AdminsController@login');






Route::get('/test', 'AdminsController@test');
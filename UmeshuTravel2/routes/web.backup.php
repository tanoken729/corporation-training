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

// Route::get('/', function () {
//     return view('welcome');
// });

//s田野
Route::get('user', 'UserController@index');

Route::get('user/find', 'UserController@find');
Route::post('user/find', 'UserController@search');

Route::get('user/add', 'UserController@add');

Route::post('user/add2', 'UserController@add2');

Route::post('user/add3', 'UserController@create');
// Route::post('User/add3', 'UserController@add3');

//e田野

//s近藤
//ログアウト用
Route::get('/logout', 'UserController@logout');

Route::get('reservation', 'ReservationController@index')->middleware('auth');

Route::get('reservation/show', 'ReservationController@show')->middleware('auth');

Route::get('reservation/find', 'ReservationController@find')->middleware('auth');
Route::post('reservation/find', 'ReservationController@search');

Route::get('reservation/add', 'ReservationController@add')->middleware('auth');
Route::post('reservation/add', 'ReservationController@create');

Route::get('reservation/edit', 'ReservationController@edit')->middleware('auth');
Route::post('reservation/edit_confirm', 'ReservationController@edit_confirm');
Route::post('reservation/edit_complete', 'ReservationController@update');

Route::get('reservation/del', 'ReservationController@delete')->middleware('auth');
Route::post('reservation/del', 'ReservationController@remove');

//以下管理者ページ用
Route::get('reservation/index_admin', 'ReservationController@index_admin')->middleware('auth');

Route::get('reservation/show_admin', 'ReservationController@show_admin')->middleware('auth');

Route::get('reservation/edit_admin', 'ReservationController@edit_admin')->middleware('auth');
Route::post('reservation/edit_confirm_admin', 'ReservationController@edit_confirm_admin');
Route::post('reservation/edit_complete_admin', 'ReservationController@update_admin');

Route::get('reservation/del_admin', 'ReservationController@delete_admin')->middleware('auth');
Route::post('reservation/del_admin', 'ReservationController@remove_admin');



//e近藤

Route::get('/', 'InnController@index');
Route::post('/', 'InnController@post');


Route::get('inn/find', 'InnController@find');
Route::post('inn/find', 'InnController@search');

Route::get('inn/add', 'InnController@add');
Route::post('inn/add', 'InnController@create');

Route::get('inn/edit', 'InnController@edit');
Route::post('inn/edit', 'InnController@update');

Route::get('inn/del', 'InnController@delete');
Route::post('inn/del', 'InnController@remove');


Route::get('plan', 'PlanController@index');

Route::get('plan/find', 'PlanController@find');
Route::post('plan/find', 'PlanController@search');

Route::get('plan/add', 'PlanController@add');
Route::post('plan/add', 'PlanController@create');

Route::get('plan/edit', 'PlanController@edit');
Route::post('plan/edit', 'PlanController@update');

Route::get('plan/del', 'PlanController@delete');
Route::post('plan/del', 'PlanController@remove');




Route::get('hello', 'HelloController@index');
Route::post('hello', 'HelloController@post');

Route::get('hello/add', 'HelloController@add');
Route::post('hello/add', 'HelloController@create');

Route::get('hello/edit', 'HelloController@edit');
Route::post('hello/edit', 'HelloController@update');

Route::get('hello/del', 'HelloController@del');
Route::post('hello/del', 'HelloController@remove');

Route::get('hello/show', 'HelloController@show');

Route::get('hello/session', 'HelloController@ses_get');
Route::post('hello/session', 'HelloController@ses_put');

Route::get('learning', 'learningController@index');
Route::post('learning', 'learningController@post');

Route::get('learning/add', 'learningController@add');
Route::post('learning/add', 'learningController@create');

Route::get('learning/edit', 'learningController@edit');
Route::post('learning/edit', 'learningController@update');

Route::get('learning/del', 'learningController@del');
Route::post('learning/del', 'learningController@remove');

Route::get('learning/show', 'learningController@show');


Route::get('person', 'PersonController@index');

Route::get('person/find', 'PersonController@find');
Route::post('person/find', 'PersonController@search');

Route::get('person/add', 'PersonController@add');
Route::post('person/add', 'PersonController@create');

Route::get('person/edit', 'PersonController@edit');
Route::post('person/edit', 'PersonController@update');

Route::get('person/del', 'PersonController@delete');
Route::post('person/del', 'PersonController@remove');


Route::get('course', 'CourseController@index');

Route::get('course/find', 'CourseController@find');
Route::post('course/find', 'CourseController@search');

Route::get('course/add', 'CourseController@add');
Route::post('course/add', 'CourseController@create');

Route::get('course/edit', 'CourseController@edit');
Route::post('course/edit', 'CourseController@update');

Route::get('course/del', 'CourseController@delete');
Route::post('course/del', 'CourseController@remove');


Route::get('board', 'BoardController@index');

Route::get('board/add', 'BoardController@add');
Route::post('board/add', 'BoardController@create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

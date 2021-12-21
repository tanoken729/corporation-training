<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


//土井5/21 1400
Route::get('inn/test/', function () {
    return view('inn.test');
});
Route::get('/', 'InnController@index');
Route::get('inn/find', 'InnController@find');
Route::get('inn/show/', 'InnController@show');
Route::get('reservation/add/', 'ReservationController@add')->middleware('auth');
Route::post('reservation/add/', 'ReservationController@add')->middleware('auth');
//Route::get('reservation/add/', 'ReservationController@add');
Route::post('reservation/commit/', 'ReservationController@commit')->middleware('auth');
Route::get('user/find/', 'UserController@find')->middleware('auth');
//Route::post('user/find/', 'UserController@find');
Route::post('user/edit_admin', 'UserController@edit_admin')->middleware('auth');
Route::get('user/show_admin', 'UserController@show_admin')->middleware('auth');
Route::get('user/del_admin', 'UserController@remove')->middleware('auth');
Route::post('user/del_admin', 'UserController@remove')->middleware('auth');
//土井5/21 1400

// 田野5/21 1530
Route::get('user/add', 'UserController@add');
Route::post('user/add2', 'UserController@add2');
Route::post('user/add3', 'UserController@create');
Route::get('user/edit', 'UserController@edit')->middleware('auth');
Route::post('user/edit', 'UserController@update')->middleware('auth');
Route::post('user/edit2', 'UserController@edit2')->middleware('auth');
Route::get('user/show', 'UserController@show')->middleware('auth');


Route::get('user/del', 'UserController@delete')->middleware('auth');
Route::post('user/del', 'UserController@remove')->middleware('auth'); //これを同時にやりたい　DBにpostして削除
Route::get('user/del2', 'UserController@delete2')->middleware('auth'); //これを同時にやりたい　退会完了画面
// 田野5/21 1530

//近藤5/23 1200
//以下ログアウト用
Route::get('/logout', 'UserController@logout');
Route::get('reservation', 'ReservationController@index')->middleware('auth');
Route::get('reservation/show', 'ReservationController@show'); //->middleware('auth');
Route::get('reservation/find', 'ReservationController@find'); //->middleware('auth');
Route::post('reservation/find', 'ReservationController@search');
// Route::get('reservation/add', 'ReservationController@add'); //->middleware('auth');
// Route::post('reservation/add', 'ReservationController@create');
Route::get('reservation/edit', 'ReservationController@edit'); //->middleware('auth');
Route::post('reservation/edit_confirm', 'ReservationController@edit_confirm');
Route::post('reservation/edit_complete', 'ReservationController@update');
Route::get('reservation/del', 'ReservationController@delete'); //->middleware('auth');
Route::post('reservation/del', 'ReservationController@remove');
//以下管理者ページ用
Route::get('reservation/index_admin', 'ReservationController@index_admin')->middleware('auth'); //->middleware('auth');
Route::get('reservation/show_admin', 'ReservationController@show_admin'); //->middleware('auth');
Route::get('reservation/edit_admin', 'ReservationController@edit_admin'); //->middleware('auth');
Route::post('reservation/edit_confirm_admin', 'ReservationController@edit_confirm_admin');
Route::post('reservation/edit_complete_admin', 'ReservationController@update_admin');
Route::get('reservation/del_admin', 'ReservationController@delete_admin'); //->middleware('auth');
Route::post('reservation/del_admin', 'ReservationController@remove_admin');
//近藤5/23 1200

//黄5/21 1500
Route::get('admin', 'AdminController@index')->middleware('auth');
Route::get('inn/find_admin', 'InnController@find1');
Route::get('inn/show_admin', 'InnController@search1');
Route::get('inn/add', 'InnController@add');
//Route::post('inn/add_complete', 'InnController@create')
Route::get('inn/add_confirm', 'InnController@confirm');;
Route::post('inn/add_confirm', 'InnController@create');
Route::get('inn/update', 'InnController@edit');
Route::get('inn/update_confirm', 'InnController@confirm1');
Route::post('inn/update_confirm', 'InnController@update');
Route::get('inn/del', 'InnController@delete');
Route::post('inn/del', 'InnController@remove');

Route::get('inn/inn_info', 'InnController@info');

Route::get('plan/add', 'PlanController@add');
Route::post('plan/add_confirm', 'PlanController@confirm');
Route::post('plan/add_confirm2', 'PlanController@create');

Route::get('plan/update', 'PlanController@edit'); //更新
Route::post('plan/update_confirm', 'PlanController@confirm1');
Route::post('plan/update_confirm2', 'PlanController@update');

Route::get('plan/del', 'PlanController@delete');
Route::post('plan/del2', 'PlanController@remove');
//黄5/21 1500

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//エラーページ用ルート
Route::get('error', function () {
    return view('error');
});

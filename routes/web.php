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

//Route::get('/', function () {
    //return view('welcome');
//});

Auth::routes();

Route::redirect('/','/login');

Route::get('/home', 'HomeController@index');

Route::get('/account', 'AccountController@index')->name('account');
Route::get('/account/changenick/{newnick}', 'AccountController@changenick')->name('changenick');
Route::get('/home/addfriend/{fid}','HomeController@addfriend');
Route::get('/home/deletefriend/{fid}/{uid}','HomeController@deletefriend');
Route::get('/home/acceptfriend/{fid}/{uid}','HomeController@acceptfriend');
Route::get('/game/{slot}','GameController@index');
Route::get('/lobby','LobbyController@index');
Route::get('/avatar','AccountController@avatar');
Route::get('/changeavatar/{num}','AccountController@changeavatar');
Route::get('/continue/{num}/{slot}','GameController@cont');
Route::get('/end','GameController@end');
Route::get('lang/{locale}','LanguageController'); 
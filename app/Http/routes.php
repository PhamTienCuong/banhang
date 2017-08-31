<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
  return view('welcome');
});
Route::get('index', [
  'as' => 'trang chủ',
  'uses' => 'PageController@getIndex'
]);

Route::get('loai-san-pham',['as'=>'loaisanpham','uses'=>'PageController@getLoaiSP']);
Route::get('chi-tiet-san-pham',['as'=>'chitietsanpham','uses'=>'PageController@getChitiet']);
Route::get('lien-he',['as'=>'lienhe','uses'=>'PageController@getLienHe']);
Route::get('gioi-thieu',['as'=>'gioithieu','uses'=>'PageController@getGioiThieu']);
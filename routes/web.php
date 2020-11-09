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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home', 'HomeController@store')->name('store.table');
Route::post('/home/del', 'HomeController@del')->name('del.table');
Route::post('/home/modif', 'HomeController@rename')->name('rename.table');





Route::get('/profil', 'ProfilController@profil')->name('profil');
Route::post('/profil', 'ProfilController@rename')->name('rename.user');




Route::get('/table/{tableid}', 'TableController@table')->name('table');


Route::post('/table/{tableid}', 'TableController@storeli')->name('store.li');
Route::post('/table/del/{id_table}', 'TableController@delli')->name('del.li');
Route::post('/table/modif/{id_table}', 'TableController@renameli')->name('rename.li');

Route::post('/table/card', 'TableController@storecard')->name('store.card');
Route::post('/table/del/card', 'TableController@delcard')->name('del.card');
Route::post('/table/modif/card', 'TableController@renamecard')->name('rename.card');

Route::post('/table/com', 'TableController@storecom')->name('store.com');
Route::post('/table/del/com', 'TableController@delcom')->name('del.com');
Route::post('/table/modif/com', 'TableController@renamecom')->name('rename.com');

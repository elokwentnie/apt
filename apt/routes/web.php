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

Route::post('apteczka/','ApteczkaController@index')->name('apteczka');
Route::post('stworzapteczke', 'ApteczkaController@stworzapteczke')->name('stworzapteczke');
Route::post(('wybierzapteczke'), 'ApteczkaController@wybierzapteczke')->name('wybierzapteczke');
Route::match('apteczka/panelutylizacji', 'ApteczkaController@panelutylizacji')->name('panelutylizacji');
Route::get(('listalekow').'/{id}', 'ApteczkaController@listalekow')->name('listalekow');
Route::post('apteczka/dodajlek', 'ApteczkaController@dodajlek')->name('dodajlek');
Route::match('apteczka/twojaapteczka', 'ApteczkaController@twojaapteczka')->name('twojaapteczka');
Route::post('apteczka/utylizujlek', 'ApteczkaController@utylizujlek')->name('utylizujlek');
Route::post('apteczka/zazyjlek', 'ApteczkaController@zazyjlek')->name('zazyjlek');


Route::get('/home', 'HomeController@index');


Auth::routes();



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

Route::get('apteczka/','Apteczka@index')->name('apteczka');
Route::post('apteczka/stworzapteczke', 'Apteczka@stworzapteczke')->name('stworzapteczke');
Route::post('apteczka/wybierzapteczke', 'Apteczka@wybierzapteczke')->name('wybierzapteczke');
Route::match('apteczka/panelutylizacji', 'Apteczka@panelutylizacji')->name('panelutylizacji');
Route::match('apteczka/listalekow', 'Apteczka@listalekow')->name('listalekow');
Route::post('apteczka/dodajlek', 'Apteczka@dodajlek')->name('dodajlek');
Route::match('apteczka/twojaapteczka', 'Apteczka@twojaapteczka')->name('twojaapteczka');
Route::post('apteczka/utylizujlek', 'Apteczka@utylizujlek')->name('utylizujlek');
Route::post('apteczka/zazyjlek', 'Apteczka@zazyjlek')->name('zazyjlek');







Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


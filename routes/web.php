<?php

use Illuminate\Support\Facades\Auth;
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
    return view('formats.index');
})->name('home');

Route::get('loader', function(){
    return view('formats.partials.loader');
});

Route::get('view/f2', 'FormatsController@f2')->name('v.f2'); //listo
Route::get('download/format/f2', 'FormatsController@downloadf2')->name('d.f2'); //listo
Route::get('form/f2', 'FormatsController@form2')->name('form.f2')->middleware('auth'); //listo
Route::get('form/filled/f2', 'FormatsController@dataf2')->name('filledf2');
Route::post('form/store/f2', 'FormatsController@store')->name('form.store');
Route::get('filled/download/f2', 'FormatsController@filledf2')->name('filled.f2')->middleware('auth');

Route::get('search',  'FormatsController@search')->name('search');

Route::get('view/f4', 'FormatsController@f4')->name('v.f4');
Route::get('download/format/f4', 'FormatsController@downloadf4')->name('d.f4');
Route::get('form/f4', 'FormatsController@form4')->name('form.f4')->middleware('auth');
Route::get('form/filled/f4', 'FormatsController@dataf4')->name('filledf4');
Route::post('form/store/f4', 'FormatsController@storef4')->name('form.storef4');
Route::get('filled/download/f4', 'FormatsController@filledf4')->name('filled.f4')->middleware('auth');


Route::get('view/f7', 'FormatsController@f7')->name('v.f7');
Route::get('download/format/f7', 'FormatsController@downloadf7')->name('d.f7');
Route::get('form/f7', 'FormatsController@form7')->name('form.f7')->middleware('auth');
Route::get('form/filled/f7', 'FormatsController@dataf7')->name('filledf7');
Route::post('form/store/f7', 'FormatsController@storef7')->name('form.storef7');
Route::get('filled/download/f7', 'FormatsController@filledf7')->name('filled.f7')->middleware('auth');


Auth::routes();
Route::get('/homeindex', 'HomeController@index')->name('home.index');

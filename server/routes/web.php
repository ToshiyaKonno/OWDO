<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LifeHackController;
use App\Http\Controllers\YakusokuController;
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
Route::get('/', 'HomeController@home');

Route::get('checklist','CheckListController@show');
Route::get('/download', 'CheckListController@download');


Route::resource('lifehack', 'LifeHackController');

// リソースを使用しない場合
// Route::get('/items','ItemController@index');
// Route::get('/items/create', 'ItemController@new');
// Route::post('/items','ItemController@store');
// Route::get('/items/{id}','ItemController@show');
// Route::get('/items/{id}/edit','ItemController@show');
// Route::get('/items/{id}/edit','ItemController@edit');
// Route::patch('/items/{id}','ItemController@update');

// Route::delete('/items/{id}','ItemController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=> 'auth'], function () {
    Route::resource('yakusoku','YakusokuController',['except' => ['index']]);
});

Route::resource('yakusoku','YakusokuController',['only'=>['index']]);

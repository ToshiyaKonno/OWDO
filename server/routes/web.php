<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LifeHackController;
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
Route::get('/', 'HomeController@home');

Route::get('lifehack/', 'LifeHackController@index');
Route::get('checklist','CheckListController@show');
Route::get('/download', 'CheckListController@download');

//-------------------jpegの表示--------------
// Route::get('/pdf', function () {
//     $pdf = app('dompdf.wrapper');
//     $pdf->loadView('server/storage/app/public/checklist/checklist.pdf', ['foo' => 'bar']);

//     return $pdf->stream('checklist.pdf');
// });
//-------------------------------------------------

Route::resource('lifehack', 'LifeHackController');
// リソースを使用しない場合
// Route::get('/items','ItemController@index');
// Route::get('/items/create', 'ItemController@new');
// Route::post('/items','ItemController@store');
// Route::get('/items/{id}','ItemController@show');
// Route::get('/items/{id}/edit','ItemController@show');
// Route::get('/items/{id}/edit','ItemController@edit');
// Route::patch('/items/{id}','ItemController@update');
// Route::delete('/items/{id}','ItemController@destroy')
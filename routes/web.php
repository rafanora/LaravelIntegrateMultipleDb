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

// Route::get('/', function () {
//     return view('panel');
// });

Route::get('/', 'PanelController@index');
Route::get('/integrate', 'PanelController@integrate');

Route::get('/deletetwo', 'PanelController@deletetwo');
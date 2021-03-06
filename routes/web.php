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
    return view('welcome', ['title' => 'Belajar Laravel']);
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/main', function() {
    return view('main');
});


Route::get('edulevels', 'EdulevelController@data');
Route::get('edulevels/add', 'EdulevelController@add');
Route::post('edulevels', 'EdulevelController@addProcess');
Route::get('edulevels/edit/{id}', 'EdulevelController@edit');
Route::patch('edulevels/{id}', 'EdulevelController@editProcess');
Route::delete('edulevels/{id}', 'EdulevelController@delete');

Route::get('programs', 'ProgramController@data');



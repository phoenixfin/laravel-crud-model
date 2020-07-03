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

Route::get('/question', 'QuestionController@index');
Route::get('/question/create', 'QuestionController@create');
Route::post('/question', 'QuestionController@post' );

Route::get('/answer', 'AnswerController@index');
Route::get('/answer/create', 'AnswerController@create');
Route::post('/answer', 'AnswerController@post' );
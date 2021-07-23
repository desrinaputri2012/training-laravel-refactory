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


// Route::get('/index', 'PagesController@home');
// Route::get('/oddeven', 'PagesController@oddeven');
// Route::get('/grade', 'PagesController@grade');
// Route::get('/palindrome', 'PagesController@palindrome');
// Route::get('/censored', 'PagesController@censored');
// Route::get('/pingpongtuing', 'PagesController@pingpongtuing');
// Route::get('/bubblesort', 'PagesController@bubblesort');

Route::get('/oddevenbubblesort', 'PagesController@oddevenbubblesort');
Route::get('/leapyear', 'PagesController@leapyear');
Route::get('/variousnumbers', 'PagesController@variousnumbers');
Route::get('/fibonaccinumbers', 'PagesController@fibonaccinumbers');
Route::get('/countwords', 'PagesController@countwords');

Route::get('/json', 'PagesController@json');
Route::get('/date', 'PagesController@date');

Route::get('/registration_form', 'PagesController@registration_form');
Route::get('/verify_user', 'PagesController@verify_user');
Route::get('/string_validation', 'PagesController@string_validation');
Route::get('/date_count', 'PagesController@date_count');
Route::get('/generate_username', 'PagesController@generate_username');
Route::get('/form_login', 'PagesController@form_login');
Route::get('/films', 'PagesController@films');
Route::get('/count_viewers', 'PagesController@count_viewers');


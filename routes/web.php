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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'HomeController@index')->name('home');

Route::get('/topic', 'HomeController@topic')->name('topic');
Route::get('/snippet', 'HomeController@snippet')->name('snippet');
Route::get('/tech', 'HomeController@tech')->name('tech');
Route::get('/code', 'HomeController@code')->name('code');
Route::get('/term', 'HomeController@term')->name('term');

Route::resource('/techquestions', 'TechQuestionController');
Route::resource('/snippets', 'SnippetController');
Route::resource('/terms', 'TermController');

Route::get('/snippets/create2/{id}', 'SnippetController@create2')->name('snippets.create2');

Route::resource('/topics', 'TopicController');
Route::post('/topics/find', 'TopicController@find')->name('topics.find');
Route::post('/terms/find', 'TermController@find')->name('terms.find');

Route::post('/techquestions/find', 'TechQuestionController@find')->name('techquestions.find');
<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', 'App\Http\Controllers\DiaryController@index')->name('diaries.index');
Route::get('/diaries/create', 'App\Http\Controllers\DiaryController@showCreateForm')->name('diaries.create');
Route::post('/diaries/create', 'App\Http\Controllers\DiaryController@create');
Route::get('/diaries/{id}/edit', 'App\Http\Controllers\DiaryController@showEditForm')->name('diaries.edit');
Route::post('/diaries/{id}/edit', 'App\Http\Controllers\DiaryController@edit');
Route::get('/diaries/{id}/delete', 'App\Http\Controllers\DiaryController@delete')->name('diaries.delete');
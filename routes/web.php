<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\ToDoController@index');
Route::get('/create-page', 'App\Http\Controllers\ToDoController@createPage');
Route::post('/create', 'App\Http\Controllers\ToDoController@create');
Route::get('/edit-page/{id}', 'App\Http\Controllers\ToDoController@editPage');
Route::post('/edit', 'App\Http\Controllers\ToDoController@edit');

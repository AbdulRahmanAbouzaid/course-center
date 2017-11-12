<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function () {
    return "hello";
});


Route::get('/students', 'studentsController@view');
Route::get('/students/store', 'studentsController@store');
Route::get('/students/update/{student}/{newName}', 'studentsController@update');
Route::get('/students/delete/{student}', 'studentsController@delete');


Route::get('/courses', 'coursesController@view');
Route::get('/courses/store', 'coursesController@store');
Route::get('/courses/add-student/{course}', 'coursesController@addStudent');
Route::get('/courses/update/{course}/{newName}', 'coursesController@update');
Route::get('/courses/delete/{course}', 'coursesController@delete');


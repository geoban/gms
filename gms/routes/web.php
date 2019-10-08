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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/subjects', 'SubjectsController@main');
Route::get('/subjects/add', 'SubjectsController@add');
Route::post('subjects/store', 'SubjectsController@store');

Route::get('/strands', 'StrandsController@main');
Route::get('/strands/add', 'StrandsController@add');
Route::post('/strands/store', 'StrandsController@store');

Route::get('/teachers', 'TeachersController@main');
Route::get('/teachers/add', 'TeachersController@add');
Route::post('/teachers/store', 'TeachersController@store');

Route::get('/sections', 'SectionsController@main');
Route::get('/sections/add', 'SectionsController@add');
Route::post('/sections/store', 'SectionsController@store');

Route::get('/subjectstrand', 'SubjectStrandsController@main');
Route::get('/subjectstrand/add', 'SubjectStrandsController@add');
Route::post('/subjectstrand/store', 'SubjectStrandsController@store');



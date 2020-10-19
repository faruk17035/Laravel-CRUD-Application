<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/students','StudentController@index')->name('student.index');
Route::post('/new_student','StudentController@store')->name('student.store');
Route::get('/edit/student/{id}','StudentController@edit')->name('student.edit');
Route::post('/update/student','StudentController@update')->name('student.update');
//Route::post('/delete/student/{id}','StudentController@delete')->name('student.delete');
//post kore kivabe delete kore sir shikhte bolse. Delete method e ase laravel e
Route::get('/delete/student/{id}','StudentController@delete')->name('student.delete');
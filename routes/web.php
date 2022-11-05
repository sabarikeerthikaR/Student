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
Route::get('/contact','App\Http\Controllers\StudentController@contact');
Route::get('/main', 'App\Http\Controllers\StudentController@index');
Route::post('/main/checklogin', 'App\Http\Controllers\StudentController@checklogin');
Route::get('main/successlogin', 'App\Http\Controllers\StudentController@successlogin');
Route::get('main/logout', 'App\Http\Controllers\StudentController@logout');
Route::get('/register', 'App\Http\Controllers\StudentController@register');

Route::post('/registerdata', 'App\Http\Controllers\StudentController@registerData');
Route::get('/student', 'App\Http\Controllers\StudentController@student')->name('student');
Route::get('/department', 'App\Http\Controllers\StudentController@department');
Route::get('/studentlist', 'App\Http\Controllers\StudentController@studentlist');
Route::get('/addstudent', 'App\Http\Controllers\StudentController@addstudent');
Route::get('/adddepartment', 'App\Http\Controllers\StudentController@adddepartment');
Route::post('/studentdata', 'App\Http\Controllers\StudentController@studentdata');
Route::post('/departmentdata', 'App\Http\Controllers\StudentController@departmentdata');
Route::get('/studentshow', 'App\Http\Controllers\StudentController@studentshow')->name('studentshow');
Route::post('/studentedit', 'App\Http\Controllers\StudentController@studentedit')->name('studentedit');;
Route::get('/departmentshow', 'App\Http\Controllers\StudentController@departmentshow')->name('departmentshow');
Route::post('/departmentedit', 'App\Http\Controllers\StudentController@departmentedit')->name('departmentedit');
Route::get('/studentdelete', 'App\Http\Controllers\StudentController@studentdelete')->name('studentdelete');

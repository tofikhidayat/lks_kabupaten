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

Route::get('/', 'PageController@index');


Auth::routes();

Route::post('login/auth','Auth\LoginController@postLogin')->name('login.toauth');

Route::get('/home', 'HomeController@index')->name('home')->middleware(['auth','verified']);


Route::prefix('/admin')->name('admin.')->group(function() {
    Route::get('/','AdminController@index')->name('index');
    Route::get('/teacher','AdminController@teacher')->name('teacher');
    Route::get('/teacher/create','AdminController@teacherCreate')->name('teacher.create');
    Route::post('/teacher/create','AdminController@teacherStore')->name('teacher.store');
    Route::post('/teacher/update','AdminController@teacherUpdate')->name('teacher.update');
    Route::get('/teacher/edit/{id}','AdminController@teacherEdit')->name('teacher.edit');
    Route::get('/teacher/delete/{id}','AdminController@teacherDelete')->name('teacher.delete');

    Route::get('/student','AdminController@student')->name('student');
    Route::get('/student/create','AdminController@studentCreate')->name('student.create');
    Route::post('/student','AdminController@studentStore')->name('student.store');
    Route::get('/student/edit/{id}','AdminController@studentEdit')->name('student.edit');
    Route::post('/student/update','AdminController@studentUpdate')->name('student.update');
    Route::get('/student/delete/{id}','AdminController@studentDelete')->name('student.delete');

});



Route::prefix('/teacher')->name('teacher.')->group(function() {
    Route::get('/','TeacherController@index')->name('index');
    Route::get('/student','TeacherController@student')->name('student');
    Route::get('/study','TeacherController@study')->name('study');
    Route::get('/study/create','TeacherController@studyCreate')->name('study.create');
    Route::get('/study/create/{id}','TeacherController@studyMake')->name('study.make');
    Route::post('/study/create/','TeacherController@studyStore')->name('study.store');

    Route::prefix('/value')->name('value.')->group(function() {
        Route::get('/','TeacherController@value')->name('index');
        Route::get('/create','TeacherController@valueCreate')->name('create');
        Route::post('/create','TeacherController@valueStore')->name('store');
    });
});

Route::prefix('/student')->group(function() {
    Route::get('/','StudentController@index')->name('student.index');
    Route::get('/value','StudentController@value')->name('student.value');
});



Route::get('/studies/{id}','PageController@viewStudy')->name('study.view');

Route::get('/student/{id}', 'PageController@viewStudent')->name('student.view');
Route::get('/studies/data/{id}','PageController@studyViewer')->name('study.review');

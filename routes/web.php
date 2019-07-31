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

Auth::routes();
Route::get('/admin', 'HomeController@index')->name('home');
Route::get('/testhome', 'HomeController@test')->name('testhome');
Route::get('/test', 'TestController@index')->name('home');
Route::get('/admin/employees', 'EmployeesController@index')->name('list_employee');
Route::get('/admin/attendence', 'AttendenceController@index')->name('list_attendence');
Route::get('/admin/leaves', 'LeavesController@index')->name('list_leave');
Route::get('/admin/setting', 'SettingController@index')->name('list_setting');
Route::resource('/admin/registers', 'Admin\RegistersController',['as'=>'admin']);
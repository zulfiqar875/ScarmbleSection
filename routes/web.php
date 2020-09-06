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
    return view('Demo');
});
Route::get('/adminpanel', function () {
    return view('AdminPanel');
});
Route::get('/login', function () {
    return view('Login');
});
Route::get('/portal', function () {
    return view('Portal');
});

Route::get('/php','StudentController@php');

Route::post('/register','StudentController@Register');
Route::post('/Auth','StudentController@Login');
Route::post('/uploadAsg','StudentController@uploadAsg');
Route::post('/uploadCou','StudentController@uploadCou');

Route::get('/Download/{File}','StudentController@download');
Route::post('/Assignment/upload/{filenamae}','StudentController@uploadAsgStd');

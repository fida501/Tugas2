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


Route::get('test123', function(){
    return view('test123');
});

//Closure
Route::get('/testclosure', function(){
    return "closure work !!";
})->name('closure');

//route name
Route::get('/testname', function(){
    return route('closure');
});

//Parameter
Route::get('/closure/{id}', function($id){
    return $id;
});

//Controller
Route::get('/testcontroller', "TestController@show"); 

//Resource

Route::resource('siswa', "SiswaController");


//home
Route::get('/home', function(){ 
    return view('home');
});

//about
Route::get('/about', function(){
    return view('about');
});
//table
Route::get('/table', function(){
    return view('table');
});
//Register
Route::get('/register','SiswaController@create');
Route::post('/register','SiswaController@store');
//table
Route::get('/table', 'SiswaController@show')->name('showSiswa');
//edit
Route::get('/data/{id}/edit', 'SiswaController@edit')->name('editSiswa');
//update
Route::post('/data/{id}/update', 'SiswaController@update')->name('updateSiswa');
//delete
Route::get('/data/{id}/delete', 'SiswaController@destroy')->name('deleteSiswa');
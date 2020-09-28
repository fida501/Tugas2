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

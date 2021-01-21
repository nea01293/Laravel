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
Route::any("/minho",function (){
    return view("minho");
});
Route::get('user/{name?}', function ($name="asd") {
    echo $name."asd";
})->where('name', '[A-Za-z]+');

<?php

use Illuminate\Support\Facades\Route;


Route::get('/','IndexController@index');

Route::any("minho/{aa?}/{bb?}/{cc?}",function ($aa,$bb,$cc){

    return view("minho")->with(compact('aa','bb','cc'));
});
Route::any("test",function (){
    $asdf_array = ["0","1","2","3","4","5"];
//    $asdf_array=[];
    return view("test")->with(compact('asdf_array'));
});
Route::get('user/{name?}', function ($name="asd") {
    echo $name."asd";
})->where('name', '[A-Za-z]+');

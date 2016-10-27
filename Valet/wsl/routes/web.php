<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('about', function (){

    return view ('about');
});


Route::get('main', function (){

    return view ('main');

});


Route::get('template', function (){

    return view ('template');

});


Route::get('test', function (){

    $type = App\Type::find(1);

    return $type;

});

Route::get('types/{id}', function ($id){

    $type = App\Type::find($id);

    return view ('main',['type'=>$type]);

});


Auth::routes();

Route::get('/home', 'HomeController@index');

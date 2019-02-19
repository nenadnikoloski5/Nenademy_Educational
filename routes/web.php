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
    return view('index');
})->name('/');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get("/pick", 'HomeController@pickOne')->name('/pick');

Route::get("/settings", function(){

    return view('settings');
});


Route::post('/changePassword', 'HomeController@changePassword');


Route::get("/math", 'HomeController@math')->name('/math');

Route::get("/math/{courseNum}", 'HomeController@mathCourse');


route::get("/math/display/iframe/{courseNum}", 'HomeController@mathIframe');


Route::post("/mathSuccess", 'HomeController@mathSuccess')->name('/mathSuccess');


Route::get("/notEnoughpoints", function(){
    return view('notEnoughPoints');
})->name('/notEnoughPoints');


Route::get("/programming", 'HomeController@programming')->name('/programming');


Route::get("/prog/{courseNum}", 'HomeController@progCourse');


route::get("/prog/display/iframe/{courseNum}", 'HomeController@progIframe');

Route::post("/progSuccess1", 'HomeController@progSuccess1')->name('/progSuccess1');
Route::post("/progSuccess2", 'HomeController@progSuccess2')->name('/progSuccess2');
Route::post("/progSuccess3", 'HomeController@progSuccess3')->name('/progSuccess3');
Route::post("/progSuccess4", 'HomeController@progSuccess4')->name('/progSuccess4');
Route::post("/progSuccess5", 'HomeController@progSuccess5')->name('/progSuccess5');
Route::post("/progSuccess6", 'HomeController@progSuccess6')->name('/progSuccess6');
Route::post("/progSuccess7", 'HomeController@progSuccess7')->name('/progSuccess7');
Route::post("/progSuccess8", 'HomeController@progSuccess8')->name('/progSuccess8');


Route::get("/youDidIt", function(){

    return view("youDidIt");
})->name('/youDidIt');



Route::get('/leaderboard', 'HomeController@leaderboard')->name("/leaderboard");

Route::get("/contact", function(){
    return view("contact");
})->name("/contact");
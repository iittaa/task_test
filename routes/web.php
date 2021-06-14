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

Route::get("tests/test", "TestController@index");

// RESTfulな書き方
// Route::resource('contacts', "ContactFormController")->only([
//     "index", "show"
// ]);
// Route::resource('contacts', "ContactFormController");



// prefixはフォルダを指定する middlewareは認証されていたら表示する
Route::group(["prefix" => "contact", "middleware" => "auth"], function(){
    Route::get("index", "ContactFormController@index")->name("contact.index");
    Route::get("create", "ContactFormController@create")->name("contact.create");
    Route::post("store", "ContactFormController@store")->name("contact.store");
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

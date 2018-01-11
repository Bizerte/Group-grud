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
    return view("groupe.groupe");
});

// route group
//GET
Route::get('/group',"groupController@index")->name('group');
Route::get("Show_blade_update/{id}","groupController@showFormUpdate");
Route::get("Show_blade_delete/{id}","groupController@showFormDelete");
Route::get('show_blade_add',"groupController@showFormAdd");
//post
Route::post('saveUpdateGroup',"groupController@saveUpdateGroup")->name("saveUpdateGroup");
Route::post('saveDeleteGroup/{id}',"groupController@saveDeleteGroup")->name("saveDeleteGroup");
Route::post('add_group',"groupController@add_group")->name("add_group");
Route::post('check_group','groupController@check_group')->name("check_group");

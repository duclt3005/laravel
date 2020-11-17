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


Route::group(['prefix' => 'task', 'as'=> 'task' , 'middleware'=>'authMid'], function () {
    Route::get('', 'TaskController@index');
    Route::get('/complete/{id}', 'TaskController@updateStatus')->name('complete');
    Route::get('/edit/{id}', 'TaskController@editTask')->name('.edit');
    Route::post('/post/{id}', 'TaskController@editTaskDone')->name('.done');
    Route::post('/add', 'TaskController@addTask')->name('.add');
    Route::delete('/delete/{id}','TaskController@delete')->name('.delete');
});
Route::group(['prefix'=>'auth', 'as'=>'auth'], function(){
    Route::get('login', function(){
        return view('login');
    })->name('.login');
    Route::post('login', 'AuthController@login');
    Route::get('signin', function(){
        return view('signin');
    });
    Route::get('logout', 'AuthController@logout');
    Route::post('signin', 'AuthController@signin');
});
Route::get('/avatar', 'AvatarController@index');
Route::post('/avatar', 'AvatarController@upload')->name('postAvatar');
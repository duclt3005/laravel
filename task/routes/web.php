<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::view('/', 'home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user', 'UserController@show');

Route::get('/diem', function(){
    echo 'Ban da co diem';
})->middleware('loi')->name('diem');
Route::get('/loi', function(){
    echo 'Ban chua co diem';
})->name('loi');
Route::get('nhapdiem', function(){
    return view('nhapdiem');
})->name('nhapdiem');


Route::get('dangnhap', function(){
    return view('dangnhap');
})->name('dangnhap');
Route::post('loginform', 'UserController@login')->name('login');

Route::get('logout', 'UserController@logout');

Route::get('news', 'NewsController@index');
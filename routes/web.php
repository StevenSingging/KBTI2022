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
    return view('login');
})->name('login');

//User
Route::group(['middleware' => ['auth','cekrole:User']],function(){
    Route::get('/user', '\App\Http\Controllers\UserController@index')->name('user');
 
});
Route::get('/user/pendaftaran', '\App\Http\Controllers\UserController@pendaftaran')->name('pendaftaran');
Route::post('/user/simpanpendaftaran', '\App\Http\Controllers\UserController@simpanpendaftaran')->name('simpanpendaftaran');
Route::get('/user/pembayaran/{id}', '\App\Http\Controllers\UserController@viewpembayaran')->name('viewpembayaran');
Route::post('/user/simpanbukti/{id}', '\App\Http\Controllers\UserController@simpanbukti')->name('simpanbukti');

Route::group(['middleware' => ['auth','cekrole:Admin']],function(){
    Route::get('/adminregis', '\App\Http\Controllers\AdminController@index')->name('admin');
 
});
Route::get('/adminregis/konfirmasi', '\App\Http\Controllers\AdminController@konfirmasi')->name('konfirmasi');
Route::get('/adminregis/verifikasi/{id}','\App\Http\Controllers\AdminController@verifikasi')->name('verifikasi');
Route::get('/adminregis/tolak/{id}','\App\Http\Controllers\AdminController@tolak')->name('tolak');

Route::get('/logout','\App\Http\Controllers\LoginController@logout')->name('logout');
Route::post('/postlogin','\App\Http\Controllers\LoginController@postlogin')->name('postlogin');
Route::get('/register','\App\Http\Controllers\RegisterController@index')->name('register');
Route::post('/simpanregister','\App\Http\Controllers\RegisterController@simpanregistrasi')->name('simpanregistrasi');
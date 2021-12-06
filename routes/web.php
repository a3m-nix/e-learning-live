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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('siswa/beranda', 'SiswaController@index')->name('siswa.beranda');
Route::get('guru/beranda', 'GuruController@index')->name('guru.beranda');
Route::get('admin/beranda', 'AdminController@index')->name('admin.beranda');

Route::resource('admin/user', 'UserController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

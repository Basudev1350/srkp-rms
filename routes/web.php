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

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard','SystemController@dashboard')->name('dashboard');
Route::get('/raw-materials','SystemController@rawMaterials');
Route::get('/product-assembly','SystemController@productAssembly');
Route::get('/product-wise-report','SystemController@productwiseReport');
Route::get('/menu-wise-report','SystemController@menuwiseReport');
<?php
use Illuminate\Support\Facades\Route;

#ADMIN ROUTES
Route::group(['prefix' => 'admin'], function () 
{
    Route::get('/login', 'Admin\Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Admin\Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/dashboard', 'Admin\AdminSystemController@adminDashboard')->name('admin.dashboard');

    #Password Reset
    Route::get('/password/reset', 'Admin\Auth\AdminForgotPasswordController@showForgotForm');
    #admin logout
    Route::get('/logout', 'Admin\Auth\AdminLoginController@logout')->name('admin.logout');
 });

#USER ROUTES
Route::group(['middleware' => ['auth']], function ()
{  
    Route::get('/dashboard','SystemController@userDashboard')->name('dashboard');
});


Route::get('/', function ()
{
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
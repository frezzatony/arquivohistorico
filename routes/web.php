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



Route::namespace('App\Http\Controllers')->group(function() {
    Route::middleware(['auth'])->group(function () {
        Route::get('/','MainController@index')->name('dashboard');
        Route::get('/arquivos','MainController@index')->name('arquivos.show');
        Route::get('/usuarios','MainController@index')->name('usuarios.show');
    });
});



Route::namespace('App\Http\Controllers\Auth')->group(function(){
    
    Route::middleware(['guest'])->group(function(){
        
        Route::get('/login','AuthController@show')->name('login');

        Route::post('/login','AuthController@login')->name('login');
        
        Route::group(['as'=>'auth.'], function(){
            Route::get('/esqueci-a-senha','AuthController@forgotPassWordShow')->name('forgot-password.show');
            Route::post('/esqueci-a-senha','AuthController@forgotPassWord')->name('forgot-password');
        });   
    });
    
    Route::get('/logout','AuthController@logout')->name('logout');
    
});

Route::namespace('App\Http\Controllers')->group(function(){
    
    Route::middleware(['guest'])->group(function(){
        Route::group(['as'=>'register.'], function(){
             Route::get('/registrar-se','RegistrationController@index')->name('show');
             Route::post('/registrar-se','RegistrationController@store')->name('store');           
        });
    });
    
});

Route::namespace('App\Http\Controllers\Collection')->group(function() {
    Route::middleware(['auth','checkIsAdmin'])->group(function () {
        
        Route::get('/colecoes','MainController@index')->name('colecoes.show');
        
    });
});

Route::namespace('App\Http\Controllers\File')->group(function() {
    Route::middleware(['auth','checkIsAdmin'])->group(function () {
        
        Route::get('/arquivos','MainController@index')->name('arquivos.show');
        
    });
});


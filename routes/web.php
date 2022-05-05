<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


 Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard','App\Http\Controllers\Admin\frontendController@index');

    Route::get('categories','App\Http\Controllers\Admin\CategoryController@index');
    Route::get('add-category','App\Http\Controllers\Admin\CategoryController@add');
    Route::post('insert-category','App\Http\Controllers\Admin\CategoryController@insert');
    Route::get('edit-category/{id}' , [CategoryController::class ,'edit']);
    Route::put('update-category/{id}',[CategoryController::class , 'update']);
    Route::get('delete-category/{id}', [CategoryController::class , 'destroy']);
     });
 

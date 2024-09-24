<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });




Route::middleware('guest')->controller(AuthController::class)->group(function(){
    Route::get('login/','login')->name('login');
    Route::post('login/','loginProcess')->name('login_process');
});

Route::middleware('auth')->group(function(){
    Route::controller(DashboardController::class)->group(function(){
        Route::get('/','index')->name('dashboard');
    });
    Route::controller(TaskController::class)->prefix('task')->group(function(){
        Route::get('/','index')->name('task');
        Route::get('list','list')->name('task.list');
        Route::get('add','addTask')->name('task.add');
        Route::get('edit/{task}','edit')->name('task.edit');
        Route::get('view/{task}','view')->name('task.view');  //to view task details
        Route::post('update/{task}','update')->name('task.update'); 
        Route::post('store','store')->name('task.store');
        Route::get('delete/{task}','delete')->name('task.delete');
        Route::post('complete/{task}','completeTask')->name('task.complete');
        Route::get('uncomplete/{task}','uncompleteTask')->name('task.uncomplete');
    });
    Route::get('logout',[AuthController::class,'logout'])->name('logout');
});
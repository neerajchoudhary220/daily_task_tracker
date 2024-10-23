<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SavingMoneyController;
use App\Http\Controllers\TaskCategoryController;
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
    //DASHBOARD ROUTES
    Route::controller(DashboardController::class)->group(function(){
        Route::get('/','index')->name('dashboard');
    });

    //TASK ROUTES
    Route::controller(TaskController::class)->prefix('task')->group(function(){
        Route::get('/','index')->name('task');
        Route::get('list','list')->name('task.list');
        Route::get('add/{id?}','addTask')->name('task.add');
        Route::get('view/{task}','view')->name('task.view');  //to view task details
        Route::get('delete/{task}','delete')->name('task.delete');
        Route::post('complete/{task}','completeTask')->name('task.complete');
        Route::get('uncomplete/{task}','uncompleteTask')->name('task.uncomplete');
        Route::get("run-python",'runPythonScript')->name('task.run-python');
    });

    //TASK CATEGORY ROUTES
    Route::controller(TaskCategoryController::class)->prefix('task-category')->group(function(){
        Route::get('/','index')->name('task-category');
        Route::get('add/{id?}','add')->name('task-category.add');  //to add task category
        Route::get('list','list')->name('task-category.list');  //to list all task categories
        Route::get('delete/{taskCategory}','delete')->name('task-category.delete');
    });
    
    Route::get('logout',[AuthController::class,'logout'])->name('logout');


    Route::controller(SavingMoneyController::class)->prefix('saving')->group(function(){
        Route::get('/','index')->name('saving-money');
    });
});
<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Auth;
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
    if(request('user') == null){
        return view('home');
    }else{
        if(request('user') == 'farah'){
            return view('estore.home');
        }else if(request('user') == 'bashar'){
            return view('estore.estore');
        }else{
            return view('home');
        }
    }
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('project/managments/')->group(function () {
    Route::resource('categories', CategoryController::class);
    Route::resource('projects', ProjectController::class);
    Route::post('projects_update/{id}', [ProjectController::class, 'update']);
    Route::resource('tasks', TaskController::class);
    Route::post('tasks_update/{id}', [TaskController::class, 'update']);

});
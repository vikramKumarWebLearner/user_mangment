<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\UserDetailController;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\RegisterController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::controller(FrontendController::class)->group(function() {
    Route::get('/home/user', 'index')->name('user');
    Route::get('/admin_login', 'login')->name('admin_login');
    
});

Route::middleware(['auth'])->group(function () {
    Route::get('/profile',[UserDetailController::class, 'index']);
    Route::post('/profile',[UserDetailController::class, 'update']);
    Route::get('/user-password',[UserDetailController::class, 'changePassword']);
    Route::put('/user-password-update',[UserDetailController::class, 'updatePassword']);
});


Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    
    Route::get('/dashboard', [DashboardController::class, 'index'])->name("userlist");
    Route::controller(UserController::class)->group(function () {
        Route::get('/users','index');
        Route::get('/user/create', 'create');
        Route::post('/user','store');
        Route::get('/user/{user_id}/edit', 'edit')->whereNumber('user_id');
        Route::put('/user/{user_id}','update')->whereNumber('user_id');
        Route::any('/user/{user_id}/delete','delete');

        Route::get("user/login/{id?}",'loginUser');
    });
        
});


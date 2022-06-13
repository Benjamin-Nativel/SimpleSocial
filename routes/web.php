<?php

use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
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

Route::get('/test',function(){
    return view('test');
});

Route::get('users',[UserController::class,'getUsers'])->name('users');
Route::post('users/{id}',[UserController::class,'update'])->whereNumber('id')->name('update');
Route::get('user/{id}',[UserController::class,'showUser'])->whereNumber('id');

route::get('/test2',function(){
    return view('test2');
});

Route::get('roles',[RoleController::class,'getRoles'])->name('roles');

Route::get('role/{id}',[RoleController::class,'showRole'])->whereNumber('id');

Route::post('roles/{id}',[RoleController::class,'update'])->whereNumber('id')->name('update');
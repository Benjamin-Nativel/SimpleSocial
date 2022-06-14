<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
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


*/Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile',function(){
    return view('profile');
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
 



Route::get('/login', function () {
    return view('login');
});
Route::get('/register', [AuthController::class, 'getRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/login', [AuthController::class, 'getLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login')->middleware('auth:ADMIN');


Route::get('/suggestion', [PostController::class, 'getAllUser'])->name('suggestion');

Route::get('/comment',function(){
    return view('comment');
}); 

Route::post('/comment', [CommentairesController::class,'add']);



// Route::get('/welcome'),[]

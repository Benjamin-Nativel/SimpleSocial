<?php


use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentairesController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\User_amisController;
use App\Http\Controllers\interestController;
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

Route::get('/interets', function () {
    return view('interets');
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




Route::get('/login', function () {
    return view('login');
});
Route::get('/register', [AuthController::class, 'getRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/login', [AuthController::class, 'getLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login');


Route::get('/suggestion', [PostController::class, 'getAllUser'])->name('suggestion');

Route::get('/comment',function(){
    return view('comment');
}); 

Route::post('/comment', [CommentairesController::class,'add']);

Route::get('/amis',[User_amisController::class, 'showamis'])->name('amis');
Route::post('/amis/store',[User_amiscontroller::class, 'storeamis'])->name('amis.store');


Route::get('interets', [interestController::class, 'getAll'] );

Route::get('read/{id}', [interestController::class, 'show']) ->wherenumber('id')->name('read');

Route::get('addinteret', function () {return view('addinteret');});
Route::post('/addinteret', [InterestController::class, 'add']) ->wherenumber('id')->name('store');



Route::delete('interets/{interet}', [InterestController::class, 'delete'])->name('delete');












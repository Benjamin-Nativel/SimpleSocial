<?php

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
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/interets', function () {
    return view('interets');
});


Route::get('/test',function(){
    return view('test');
});

Route::get('interets', [interestController::class, 'getAll'] );

Route::get('read/{id}', [interestController::class, 'show']) ->wherenumber('id')->name('read');

Route::get('addinteret', function () {return view('addinteret');});
Route::post('/addinteret', [InterestController::class, 'add']) ->wherenumber('id')->name('store');



Route::delete('interets/{interet}', [InterestController::class, 'delete'])->name('delete');












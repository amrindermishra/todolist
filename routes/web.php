<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\UserController;

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

Route::get('/view',[UserController::class,'webView']);#for form view
Route::post('/send',[UserController::class,'data_save']); #data save in Sql
Route::get('/listview',[UserController::class,'list_view']);#for data view in web
Route::get('/dlduser/{id}',[UserController::class,'dld_todo']);
Route::get('/view-editing/{id}',[UserController::class,'show']);
Route::post('/edit',[UserController::class,'edit_todo']);

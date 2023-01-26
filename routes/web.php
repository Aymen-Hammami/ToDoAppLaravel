<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\TodoListController;

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

Route::get('/',[TodoListController::class,'index'], function () {
    return view('welcome');
});
Route::post('/saveItem',[TodoListController::class,'saveItem'], function () {
})->name('saveItem');
Route::post('/markComplete/{id}',[TodoListController::class,'markComplete'], function () {
})->name('markComplete');

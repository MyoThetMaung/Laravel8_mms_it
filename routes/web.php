<?php

use App\Http\Controllers\TestController;
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

Route::get('/', function () {
    return view('welcome');
});
*/

Route::view('','welcome')->name('index');                                                         //directly call view folder

Route::get('test',[TestController::class,'myTest'])->name('test');

Route::get('sum/{x}/{y}',[TestController::class,'sumFun'])->name('sum','12','11');

Route::get('show_name/{name}',[TestController::class,'showName'])->name('show_name','saimon');

Route::get('register',[TestController::class,'register'])->name('register');

Route::post('save_info',[TestController::class,'store'])->name('save_information');
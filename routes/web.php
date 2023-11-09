<?php

use Illuminate\Support\Facades\Route as Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FileXMLController;
use App\Http\Controllers\ImgConverterController;

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
    return view('index', ['name' => $_SERVER['REMOTE_ADDR']]);
});

Route::get('/cv', function () {
    return view('home', ['name' => $_SERVER['REMOTE_ADDR']]);
});

Route::get('/home', function () {
    return view('home');
});

Route::resource('contact', ContactController::class);


Route::resource('/file', FileXMLController::class);


Route::resource('/imgConvert', ImgConverterController::class);

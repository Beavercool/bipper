<?php

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

Route::get('/', 'maincontroller@home');

Route::get('/about', 'maincontroller@about');

Route::get('/review', 'maincontroller@review');

//Route::get('/user/{id}/{name}', function ($id, $name) {
 //   return 'ID: '.$id.'. Name: '.$name;
//});
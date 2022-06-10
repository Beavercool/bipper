<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;
Route::get('/', [MainController::class, 'home']);
Route::get('/about', [MainController::class, 'about']);
Route::get('/review', [MainController::class, 'review']);
Route::post('/review/check', [MainController::class, 'review_check']);
Route::get('/contacts', [MainController::class, 'contacts']);
Route::get('/pricing', [MainController::class, 'pricing']);
//Route::get('/user/{id}/{name}', function ($id, $name) {
 //   return 'ID: '.$id.'. Name: '.$name;
//});
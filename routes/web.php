<?php
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'home']);
Route::get('/about', [MainController::class, 'about']);
Route::get('/review', [MainController::class, 'review']);
Route::post('/review/check', [MainController::class, 'review_check']);
Route::get('/contacts', [MainController::class, 'contacts']);
Route::get('/pricing', [MainController::class, 'pricing']);
Route::post('/contactform', [MainController::class, 'contactform']);
//Route::get('/user/{id}/{name}', function ($id, $name) {
 //   return 'ID: '.$id.'. Name: '.$name;
//});
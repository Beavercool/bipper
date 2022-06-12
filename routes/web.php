<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ZipController;

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
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get("/zip-form",[ZipController::class,"zipUploadForm"]);
Route::post("/extract-zip",[ZipController::class,"extractUploadedZip"]);
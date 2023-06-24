<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Models\Foodpost;
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
    return view('home');
});

Route::post('/signup', [UserController::class, 'signup']);
Route::post('/login',[UserController::class,'login']);
Route::post('/logout',[UserController::class,'logout']);
Route::post('/profile',[UserController::class,'profile']);



Route::get('/signup',[UserController::class,'signup']);
Route::get('/login',[UserController::class,'login']);



//foodpost
Route::get('/addfood',[UserController::class,'createpost']);
Route::post('/addfood',[PostController::class,'createpost']);
Route::post('/food',[UserController::class,'food']);
Route::get('/food', function (){
   $posts = Foodpost::all();
    return view('food', ['post'=>$posts]);
});



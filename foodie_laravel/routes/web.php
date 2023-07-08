<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Models\Foodpost;
use App\Models\User;
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
    
    // $posts = Foodpost::where('user_id', auth()->id())->latest()->get();
    $posts = Foodpost::all();
    return view('home',['posts'=>$posts]);
});



Route::post('/signup', [UserController::class, 'signup']);
Route::post('/login',[UserController::class,'login']);
Route::post('/logout',[UserController::class,'logout']);
Route::post('/profile',[UserController::class,'profile']);

Route::post('/addfood',[PostController::class,'createpost']);


Route::get('/signup',function(){
    return view('signup');
});
Route::get('/login',function(){
    return view('login');
});

Route::get('/addfood',function(){
    return view('addfood');
});



// // Route::get('/profile',function(){
// //     $posts = Foodpost::where('id', auth()->id())->latest()->get();
// //     return view('profile', ['post'=>$posts]);
// });

Route::get('/profile', function(){
    $user = User::where('id', auth()->id())->latest()->get();
    return view('profile', ['user'=>$user]);
});


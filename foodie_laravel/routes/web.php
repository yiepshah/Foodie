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

    $posts = Foodpost::all();
    return view('home',['posts'=>$posts]);
});



Route::post('/signup', [UserController::class, 'signup']);
Route::post('/login',[UserController::class,'login']);

Route::post('/profile',[UserController::class,'profile']);
Route::get('/logout',[UserController::class,'logout']);

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

// Route::get('/editpost',function(){
//     return view('editpost');
// });

Route::get('/edit-food/{post}',function($post_id){
    $post = Foodpost::where('id', $post_id)->latest()->first();
    return view('edit-food', ['post'=>$post]);
});

Route::get('/profile', function(){
    $user = User::where('id', auth()->id())->latest()->first();
    $posts = Foodpost::where('user_id', auth()->id())->latest()->get();
    return view('profile', ['user'=>$user, 'posts'=>$posts]);
});


// Route::get('/profile', function(){
//     $posts = Foodpost::where('id', auth()->id())->latest()->get();
//     return view('profile', ['post'=>$posts]);
// });
//get untuk show item dlm bentuk array ataupun multiple
//guna first 
Route::get('/editpost', function(){
    $user = User::where('id', auth()->id())->latest()->first();
    return view('editpost', ['user'=>$user]);
}); 

Route::put('/editpost/{user}',[UserController::class, 'UpdateProfile']);

Route::delete('/delete-post/{post}',[PostController::class, 'deletePost']);

Route::put('/edit-food/{post}',[PostController::class, 'UpdateFoodpost']);
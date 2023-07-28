<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Foodpost;


class PostController extends Controller
{   
    public function deletePost(Foodpost $post){
        if (auth()->user()->id === $post['user_id']){
            $post->delete();
        }
        return redirect('profile');
    }

    public function UpdateFoodpost(Foodpost $post, Request $request) {
        $foodpostdata = $request->validate([
            'foodname' => 'required',
            'foodsender' => 'required',
            'foodprice' => 'required',
            'phonenumber' => 'required',
            'foodimage'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048'

        ]);
        $imagePath = $request->file('foodimage')->store('images', 'public');
        $foodpostdata['foodname'] = strip_tags($foodpostdata['foodname']);
        $foodpostdata['foodsender'] = strip_tags($foodpostdata['foodsender']);
        $foodpostdata['foodprice'] = strip_tags($foodpostdata['foodprice']);
        $foodpostdata['phonenumber'] = strip_tags($foodpostdata['phonenumber']);
        $foodpostdata['foodimage'] = $imagePath;
        
        $post->update($foodpostdata);
        return redirect('/profile');
    }

    public function createPost(Request $request){
        $signupdata = $request->validate([
            'foodsender'=>'required',
            'foodname'=>'required',
            'foodprice'=>'required',
            'phonenumber'=>'required',
            'foodimage'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $imagePath = $request->file('foodimage')->store('images', 'public');
        $signupdata['foodsender'] = strip_tags($signupdata['foodsender']);
        $signupdata['foodname'] = strip_tags($signupdata['foodname']);
        $signupdata['foodprice'] = strip_tags($signupdata['foodprice']);
        $signupdata['phonenumber'] = strip_tags($signupdata['phonenumber']);
        $signupdata['foodimage'] = $imagePath;
        $signupdata['user_id'] = auth()->id();
        // php artisan make:migration remove_foodimage_from_foodposts
        // dd($signupdata['foodimage']);
        Foodpost::create($signupdata);
        return redirect('/');
    }
}

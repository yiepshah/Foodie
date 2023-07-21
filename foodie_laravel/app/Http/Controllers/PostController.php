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
            'phonenumber' => 'required'

        ]);
        $foodpostdata['foodname'] = strip_tags($foodpostdata['foodname']);
        $foodpostdata['foodsender'] = strip_tags($foodpostdata['foodsender']);
        $foodpostdata['foodprice'] = strip_tags($foodpostdata['foodprice']);
        $foodpostdata['phonenumber'] = strip_tags($foodpostdata['phonenumber']);

        
        $post->update($foodpostdata);
        return redirect('/profile');
    }

    public function createPost(Request $request){
        $signupdata = $request->validate([
            'foodsender'=>'required',
            'foodname'=>'required',
            'foodprice'=>'required',
            'phonenumber'=>'required'

        ]);

        $signupdata['foodsender'] = strip_tags($signupdata['foodsender']);
        $signupdata['foodname'] = strip_tags($signupdata['foodname']);
        $signupdata['foodprice'] = strip_tags($signupdata['foodprice']);
        $signupdata['phonenumber'] = strip_tags($signupdata['phonenumber']);
        $signupdata['user_id'] = auth()->id();

        Foodpost::create($signupdata);
        return view('home');
    }
}

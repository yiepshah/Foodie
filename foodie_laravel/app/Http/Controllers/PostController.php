<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Foodpost;

class PostController extends Controller
{
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

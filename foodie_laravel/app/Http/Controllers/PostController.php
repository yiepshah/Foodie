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
            'foodimage'=>'required',
            'phonenumber'=>'required'

        ]);

        $signupdata['foodsender'] = strip_tags($signupdata['foodsender']);
        $signupdata['foodname'] = strip_tags($signupdata['foodname']);
        $signupdata['foodprice'] = strip_tags($signupdata['foodprice']);
        $signupdata['foodimage'] = strip_tags($signupdata['foodimage']);
        $signupdata['phonenumber'] = strip_tags($signupdata['phonenumber']);
        $signupdata['user_id'] = auth()->id();

        Foodpost::create($signupdata);
        return view('food',['data' => $signupdata]);
    }
}

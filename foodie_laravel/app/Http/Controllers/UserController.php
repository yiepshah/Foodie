<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{  
  
    public function login(Request $request){
        $signupdata = $request->validate([

            'loginemail'=>'required',
            'loginpassword'=>'required'
        ]);
        
        if (auth()->attempt(['email'=> $signupdata['loginemail'], 'password'=>$signupdata['loginpassword']])) {
            $request->session()->regenerate();
            return view('addfood');
        }
        return redirect('/');
        echo 'not succesfull';
    } 

    public function logout(){
        auth()->logout();
        return redirect('/');
    }

    public function signup(Request $request){
        $signupdata = $request->validate([
            'name' => ['required', 'min:6'],
            'email' => ['required', 'email', Rule::unique('users','email')],
            'password' => ['required','min:5']
        ]);

        $signupdata['password']= bcrypt($signupdata['password']);
        $user = User::create($signupdata);
        auth()->login($user);
        return view('login');
    }

    public function UpdateProfile(User $user, Request $request){
        $incomingData = $request->validate([
            'name' => 'required',
            'email' => 'required'
        ]);

        $incomingData['name'] = strip_tags($incomingData['name']);
        $incomingData['email'] = strip_tags($incomingData['email']);

        
        $user->update($incomingData);
        return redirect('/profile');
    }
   
}

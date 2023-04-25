<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
// use App\Providers\RouteServiceProvider;
// use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Session;

class AuthController extends Controller
{
    public function loginform(){
        return view("auth.login");
    }

    public function login(Request $request){
        $request->validate(['email' => ['required', 'email'], 'password' => ['required']]);
        
        $details = $request->only('email', 'password');
        $user = User::where('email', $details["email"])->get()->first();
        
        //dd($user["password"], Hash::make($details["password"]));

        if(Hash::check($details["password"], $user["password"])){
            //$details["password"] = $user["password"];
            if(Auth::attempt($details) == true){
                
                return redirect()->intended('reflectedssti');
            }
        }
        
        return back();
    }

    public function signout(){
        Session::flush();
        Auth::logout();

        return redirect()->intended("reflectedssti");
    }
}

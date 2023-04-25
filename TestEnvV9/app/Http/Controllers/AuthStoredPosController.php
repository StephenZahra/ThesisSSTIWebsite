<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Auth;
use App\Models\user;

class AuthStoredPosController extends Controller
{
    public function authstoredpos(Request $request){

        return view("authstoredposterior.authstoredpos");
    }

    public function authstoredposStore(Request $request){
        if(!empty($request->input("name"))) //check if a message was inputted
        {
            $user = Auth::user();
            $user->name = $request["name"];
            $user->save();

            return view("authstoredposterior.authstoredpos");
        }
    }
}

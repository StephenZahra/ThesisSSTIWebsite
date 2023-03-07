<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;

class ReflectedController extends Controller
{
    public function reflectedssti(Request $request){
        return view("reflectedssti");
    }

    public function reflect(Request $request){
        if(!empty($request->input("name"))) //check if a name was inputted
        {
            $message = "Hello ". $request->input("name") . " !";
            
            $render = Blade::render($message);
            return view("reflectedssti", ["message" => $render]);
        }
        //return view("reflected");
       return view("reflectedssti");
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;

class ReflectedController extends Controller
{
    public function reflect(Request $request){
        if(!empty($request->input("name"))) //check if a name was inputted
        {
            $message = "Hello ". $request->input("name") . " !";
            
            return Blade::render($message);
        }
        return view("reflected");
       
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;

class BlindPosController extends Controller
{
    public function blindpos(Request $request){
        if(!empty($request->input("message"))) //check if a message was inputted
        {
            //$message = "Hello ". $request->input("name") . " !";
            
            //return Blade::render($message);
        }
        return view("blindpos");
       
    }
}

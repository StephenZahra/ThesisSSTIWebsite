<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;
use App\Models\BlindPos;
use Illuminate\Support\Facades\Auth;

class BlindPosController extends Controller
{
    public function blindpos(Request $request){

        return view("blindposterior.blindpos");
    }

    public function blindposStore(Request $request){
        if(!empty($request->input("message"))) //check if a message was inputted
        {
            $blindPos = new BlindPos();
            $blindPos->log = $request->input("message");
            $blindPos->save();
            
            return view("blindposterior.blindpos");
        }
    }

    public function blindposAdmin(Request $request){
        if(Auth::check() == false){
            return back();
        }
        
        $logs = BlindPos::get()->all();
        $message = "";

        foreach($logs as $log){
            $message.= "<p>".$log->log."</p>";
        }
        
        return Blade::render($message);
    }
}

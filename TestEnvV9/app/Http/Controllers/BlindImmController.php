<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Auth;
use App\Models\BlindImm;

class BlindImmController extends Controller
{
    public function blindimm(Request $request){

        return view("blindimmediate.blindimm");
    }

    public function blindimmStore(Request $request){
        if(!empty($request->input("message"))) //check if a message was inputted
        {
            $blindImm = new BlindImm();
            $blindImm->log = Blade::render($request->input("message"));
            $blindImm->save();
            
            return view("blindimmediate.blindimm");
        }
    }

    public function blindimmAdmin(Request $request){
        if(Auth::check() == false){
            return back();
        }

        $logs = BlindImm::get()->all();
        $message = "";

        foreach($logs as $log){
            $message.= "<p>".$log->log."</p>";
        }
        
        return Blade::render($message);
    }
}

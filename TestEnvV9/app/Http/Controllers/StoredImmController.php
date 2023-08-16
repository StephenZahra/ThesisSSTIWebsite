<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;
use App\Mail\SSTIMail;
use Mail;

class StoredImmController extends Controller
{
    public function storeimm(Request $request){

        return view("storedimmediate.storedimm");
    }

    public function send(Request $request){
        if(!empty($request->input("message"))){
            $view = Blade::render($request->input("message"));
            
            Mail::to('email_address_goes_here')->send(new SSTIMail($view));
        }

        return view("storedimmediate.storedimm");
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;

class BlindImmController extends Controller
{
    public function blindimm(Request $request){

        return view("blindimmediate.blindimm");       
    }
}

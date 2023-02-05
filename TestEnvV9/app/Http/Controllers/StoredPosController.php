<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;
use App\Models\StoredPos;

class StoredPosController extends Controller
{
    public function storepos(Request $request){ // Return the stored posterior injection view
        return view("storedposterior.storedpos");
    }

    public function store(Request $request){ // Save data to database
        if(!empty($request->input("message"))) // Check if a message was inputted
        {
            $storedPos = new StoredPos();
            $storedPos->data = $request->input("message");
            $storedPos->save();
        }
        return view("storedposterior.storedpos");
    }

    public function comments(Request $request){
        $comments = StoredPos::get()->all();
        $message = "";

        foreach($comments as $comment){
            $message.= "<p>".$comment->data."</p>";
        }

        return Blade::render($message);
    }
}

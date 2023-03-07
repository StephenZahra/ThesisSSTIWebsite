<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReflectedController;
use App\Http\Controllers\StoredPosController;
use App\Http\Controllers\StoredImmController;
use App\Http\Controllers\BlindPosController;
use App\Http\Controllers\BlindImmController;


Route::match(['get'], '/', [ReflectedController::class, 'reflectedssti'], function(Request $request){
    return redirect()->route('reflectedssti');
});

// Reflected SSTI Route (also the default route that is used as landing page)
Route::match(['get'], 'reflectedssti', [ReflectedController::class, 'reflectedssti'], function (Request $request) {
    
})->name('reflectedssti');

Route::match(['post'], 'reflected', [ReflectedController::class, 'reflect'], function (Request $request) {
    return redirect()->route("reflectedssti")->with(["name"]);
})->name('reflected');


// Stored SSTI with Posterior Injection and Rendering Route
Route::match(['get'], 'storedpos', [StoredPosController::class, 'storepos'], function (Request $request) {
    return redirect->route("storedpos");
})->name('storedpos');

    // Route that saves Stored Pos to database
    Route::match(['post'], 'store', [StoredPosController::class, 'store'], function(Request $request){
        return redirect->route("storedpos");
    })->name('storeStoredPos');

    // Route to view saved data using the above route
    Route::match(['get'], 'comments', [StoredPosController::class, 'comments'], function(Request $request){
        return redirect->route("comments");
    })->name('comments');



// Stored SSTI with Immediate Injection and Rendering Route
Route::match(['get', 'post'], 'storedimm', [StoredImmController::class, 'storeimm'], function (Request $request) {
    return back()->with(["message"]);
})->name('storedimm');



// Blind SSTI with Posterior Injection and Rendering Route
Route::match(['get', 'post'], 'blindpos', [BlindPosController::class, 'blindpos'], function (Request $request) {
    return back()->with(["name"]);
})->name('blindpos');



// Blind SSTI with Immediate Injection and Rendering Route
Route::match(['get', 'post'], 'blindimm', [BlindImmController::class, 'blindimm'], function (Request $request) {
    return back()->with(["name"]);
})->name('blindimm');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReflectedController;
use App\Http\Controllers\StoredPosController;
use App\Http\Controllers\StoredImmController;
use App\Http\Controllers\BlindPosController;
use App\Http\Controllers\BlindImmController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\AuthStoredPosController;

// Default entry point route which redirects to reflected SSTI page
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
    Route::match(['get'], 'storedimm', [StoredImmController::class, 'storeimm'], function (Request $request) {
        
    })->name('storedimm');

    Route::match(['post'], 'send', [StoredImmController::class, 'send'], function (Request $request) {
        return back()->with(["message"]);
    })->name('send');



// Blind SSTI related routes

    // Login Page
    Route::match(['get'], 'loginform', [AuthController::class, 'loginform'], function (Request $request){

    })->name('loginform');

    // Login POST
    Route::match(['post'], 'login', [AuthController::class, 'login'], function (Request $request){

    })->name('login');

    // Signout Page
    Route::match(['get'], 'signout', [AuthController::class, 'signout'], function (Request $request){

    })->name('signout');


    
    // Blind SSTI with Posterior Injection and Rendering Routes
    Route::match(['get'], 'blindpos', [BlindPosController::class, 'blindpos'], function (Request $request) {
        
    })->name('blindpos');

    Route::match(['post'], 'blindposStore', [BlindPosController::class, 'blindposStore'], function (Request $request) {
        
    })->name('blindposStore');

    Route::match(['get'], 'blindposAdmin', [BlindPosController::class, 'blindposAdmin'], function (Request $request) {
        
    })->name('blindposAdmin');



    // Blind SSTI with Immediate Injection and Rendering Routes
    Route::match(['get'], 'blindimm', [BlindImmController::class, 'blindimm'], function (Request $request) {
        
    })->name('blindimm');

    Route::match(['post'], 'blindimmStore', [BlindImmController::class, 'blindimmStore'], function (Request $request) {
        
    })->name('blindimmStore');

    Route::match(['get'], 'blindimmAdmin', [BlindImmController::class, 'blindimmAdmin'], function (Request $request) {
        
    })->name('blindimmAdmin');


    // Authenticated Stored Posterior Injection and Rendering SSTI
    Route::match(['get'], 'authstoredpos', [AuthStoredPosController::class, 'authstoredpos'], function (Request $request) {
        
    })->name('authstoredpos');

    Route::match(['post'], 'authstoredposStore', [AuthStoredPosController::class, 'authstoredposStore'], function (Request $request) {
        
    })->name('authstoredposStore');

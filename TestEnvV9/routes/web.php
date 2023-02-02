<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReflectedController;
use App\Http\Controllers\StoredPosController;
use App\Http\Controllers\StoredImmController;
use App\Http\Controllers\BlindPosController;
use App\Http\Controllers\BlindImmController;



// Reflected SSTI Route
Route::match(['get', 'post'], 'reflected', [ReflectedController::class, 'reflect'], function (Request $request) {
    return back()->with(["name"]);
})->name('reflected');

// Stored SSTI with Posterior Injection and Rendering Route
Route::match(['get', 'post'], 'storedpos', [StoredPosController::class, 'storepos'], function (Request $request) {
    return back()->with(["name"]);
})->name('storedpos');

// Stored SSTI with Immediate Injection and Rendering Route
Route::match(['get', 'post'], 'storedimm', [StoredImmController::class, 'storeimm'], function (Request $request) {
    return back()->with(["name"]);
})->name('storedimm');

// Blind SSTI with Posterior Injection and Rendering Route
Route::match(['get', 'post'], 'blindpos', [BlindPosController::class, 'blindpos'], function (Request $request) {
    return back()->with(["name"]);
})->name('blindpos');

// Blind SSTI with Immediate Injection and Rendering Route
Route::match(['get', 'post'], 'blindimm', [BlindImmController::class, 'blindimm'], function (Request $request) {
    return back()->with(["name"]);
})->name('blindimm');
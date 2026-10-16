<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/hero', function () {
    return \App\Models\HeroSection::latest()->first() ?: response()->json(['message' => 'No hero section found'], 404);
});

Route::get('/services-section', function () {
    return \App\Models\ServicesSection::latest()->first() ?: response()->json(['message' => 'No services section found'], 404);
});

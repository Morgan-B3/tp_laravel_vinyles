<?php

use App\Models\Vinyl;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $vinyls = Vinyl::all();
    return view('home', ['vinyls' => $vinyls]);
});

Route::get('/vinyls/{id}', function ($id) {
    $vinyl =  Vinyl::findOrFail($id);
    return view('vinyls', ['vinyl' => $vinyl]);
});

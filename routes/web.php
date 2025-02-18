<?php

use App\Models\Vinyle;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $vinyles = Vinyle::getAllVinyles();
    return view('home', ['vinyles' => $vinyles]);
});

Route::get('/vinyles/{id}', function ($id) {
    $vinyle =  Vinyle::find($id);
    return view('vinyles', ['vinyle' => $vinyle]);
});

<?php

use App\Models\Genre;
use App\Models\Vinyl;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $vinyls = Vinyl::with('artist')->paginate(10);
    $genres = Genre::all();
    return view('home', [
        'vinyls' => $vinyls,
        'genres' => $genres,
    ]);
});

Route::get('/genre={id}', function ($id) {
    $vinyls = Genre::findOrFail($id)->vinyls()->with('artist')->paginate(10);
    $genres = Genre::all();
    $selectedGenre = Genre::findOrFail($id);
    return view('home', [
        'vinyls' => $vinyls,
        'genres' => $genres,
        'selectedGenre' => $selectedGenre
    ]);
});

Route::get('/artist={id}', function ($id) {
    $vinyls = Vinyl::where('artist_id', $id)->with('artist')->paginate(10);
    $genres = Genre::all();
    $selectedArtist = Vinyl::findOrFail($id)->artist;
    return view('home', [
        'vinyls' => $vinyls,
        'genres' => $genres,
        'selectedArtist' => $selectedArtist
    ]);
});


Route::get('/vinyls/{id}', function ($id) {
    $vinyl =  Vinyl::findOrFail($id);
    return view('vinyls', ['vinyl' => $vinyl]);
});

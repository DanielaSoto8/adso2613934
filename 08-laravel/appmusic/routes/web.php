<?php

use App\Http\Controllers\SongController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;





Route::get('/', function () {
    return view('welcome');
});

Route::get('catalogue', function () {
    return view('catalogue');
});

Route::get('view-artist', function () {
    return view('view-artist');
});

Route::get('my-profile', function () {
    return view('my-profile');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resources([
        'users' => UserController::class,
        'songs' => SongController::class,
        'artists' => ArtistController::class,

    ]);
});

//search
Route::post('users/search', [UserController::class, 'search']);
Route::post('songs/search', [SongController::class, 'search'])->name('songs.search');
Route::post('artists/search', [ArtistController::class, 'search'])->name('artists.search');


//Exports
Route::get('export/users/pdf', [UserController::class, 'pdf']);
Route::get('export/users/excel', [UserController::class, 'excel']);

//Route::get('/users', [UserController::class, 'index']);

//Route::get('songs/{song}', [SongController::class, 'show']);
//Route::get('users/{user}', [UserController::class, 'show']);


// Rutas para exportar artistas a PDF y Excel
Route::get('export/artists/pdf', [ArtistController::class, 'pdf']);
Route::get('export/artists/excel', [ArtistController::class, 'excel']);


require __DIR__.'/auth.php';





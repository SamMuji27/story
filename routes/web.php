<?php

use App\Http\Controllers\PostController;
use App\Models\Story;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "about",
        "active" => "about"
    ]);
});

Route::get('/stories', [PostController::class, 'index']);

Route::get('/stories/{story:slug}', function (Story $story) {
    return view('single', [
        "title" => "Single",
        "stories" => $story
    ]);
});

Route::get('/author/{user:username}', function (User $user) {
    return view('stories', [
        "title" => "Story by " . $user->name,
        "stories" => $user->story
    ]);
});

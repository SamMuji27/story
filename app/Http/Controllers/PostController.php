<?php

namespace App\Http\Controllers;

use App\Models\Story;
// use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('stories', [
            "active" => "stories",
            "title" => "All Story",
            "stories" => Story::latest()->get()
        ]);
    }
}

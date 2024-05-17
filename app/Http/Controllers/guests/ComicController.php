<?php

namespace App\Http\Controllers\guests;

use App\Models\Comic;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index()
    {
        $comics = Comic::all();
        return view('guests.welcome', compact('comics'));
    }


    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('guests.show', compact('comic'));
    }
}

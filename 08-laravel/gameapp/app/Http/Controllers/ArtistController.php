<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$users = Category::all();
        $artists = Artist::paginate(20);
        return view('artists.index')->with('artists', $artists);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Artist $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artist $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artist $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artist $user)
    {
        //
    }
}

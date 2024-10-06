<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Song;
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
    $cats = Song::all();
    return view ('artists.create')->with('cats', $cats);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->hasFile('photo')) {
            $photo =time() . '.'.$request->photo->extension();
            $request->photo->move(public_path('images'), $photo);
        }

        $artist = new artist;
        $artist->document = $request->document;
        $artist->fullname = $request->fullname;
        $artist->gender = $request->gender;
        $artist->birthdate = $request->birthdate;
        $artist->photo = $photo;
        $artist->phone = $request->phone;
        $artist->email = $request->email;
        $artist->password = bcrypt($request->password);
       

        if ($artist->save()) {
            return redirect('artists')->with('message', 'The artist: '. $artist->fullname. 'was successfully added');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Artist $artist)
    {
        return view(view: 'artists.show')->with('artist', $artist);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artist $artist)
    {
        return view(view: 'artists.edit')->with('artist', $artist);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artist $artist)
    {
        if ($request->hasFile('photo')) {
            if($request->hasFile('photo')) {
                $photo =time() . '.'.$request->photo->extension();
                $request->photo->move(public_path('images'), $photo);
            }
        } else {
            $photo = $request->originphoto;
        }

            $artist->document = $request->document;
            $artist->fullname = $request->fullname;
            $artist->gender = $request->gender;
            $artist->birthdate = $request->birthdate;
            $artist->photo = $photo;
            $artist->phone = $request->phone;
            $artist->email = $request->email;

        if ($artist->save()) {
            return redirect('artists')->with('message', 'The artist: '. $artist->fullname. 'was successfully updated!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artist $artist)
    {
        if($artist->delete()) {
            return redirect('artists')->with('message', 'The artist:'. $artist->fullname . 'was successfully deleted!');
        }
    }
    public function search(Request $request){
        $users = Artist::names($request->q)->paginate(20);
        return view('artists.search')->with('artists', $artists);
    }

    public function pdf() {
        $users = Artist::all();
        $pdf = PDF::loadView('artists.pdf', compact('artists'));
        return $pdf->download('allartists.pdf');
    }
    public function excel() {
        return Excel::download(new ArtistExport, 'allartists.xlsx');
    }
}


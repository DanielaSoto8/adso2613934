<?php

namespace App\Http\Controllers;

use App\Http\Requests\SongRequest;
use App\Models\song;
use Illuminate\Http\Request;
use App\Models\Artist;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$users = song::all();
        $songs = song::paginate(3);
        return view('songs.index')->with('songs', $songs);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $artists = Artist::all();
        return view('songs.create',['artists' => $artists]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SongRequest $request)
    {
        //
        if($request->hasFile('photo')) {
            $photo =time() . '.'.$request->photo->extension();
            $request->photo->move(public_path('images'), $photo);
        }

        $song = new Song;
        $song->ano_publicacion = $request->ano_publicacion;
        $song->nombre_cancion = $request->nombre_cancion;
        $song->artista = $request->artist_id;
        $song->genero = $request->genero;
        $song->photo = $photo;
           

        if ($song->save()) {
            return redirect('songs')->with('message', 'The song: '. $song->nombre_cancion. 'was successfully added');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Song $song)
    {
        return view('songs.show')->with('song', $song);
    }

    




    /**
     * Show the form for editing the specified resource.
     */
    public function edit(song $song)
    {
        return view('songs.edit')->with('song', $song);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, song $song)
    {
        if ($request->hasFile('photo')) {
            if($request->hasFile('photo')) {
                $photo =time() . '.'.$request->photo->extension();
                $request->photo->move(public_path('images'), $photo);
            }
        } else {
            $photo = $request->originphoto;
        }

            $song->ano_publicacion = $request->ano_publicacion;
            $song->nombre_cancion = $request->nombre_cancion;
            $song->artista = $request->artista;
            $song->genero = $request->genero;
            $song->photo = $photo;
            

        if ($song->save()) {
            return redirect('songs')->with('message', 'The song: '. $song->nombre_cancion. 'was successfully updated!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(song $song)
    {
        if($song->delete()) {
                return redirect('songs')->with('message', 'The song:'. $song->nombre_cancion . 'was successfully deleted!');
        
        }
    }

    public function search(Request $request){
        $songs = song::names($request->q)->paginate(3);
        return view('songs.search')->with('songs', $songs);
    }





  

    public function pdf() {
        $songs = Song::all();
        $pdf = PDF::loadView('songs.pdf', compact('songs'));
        return $pdf->download('allsongs.pdf');
    }
    public function excel() {
        return Excel::download(new SongsExport, 'allsongs.xlsx');
    }

}

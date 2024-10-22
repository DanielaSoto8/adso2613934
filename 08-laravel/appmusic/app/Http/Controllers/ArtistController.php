<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;
use App\Http\Requests\ArtistRequest;
use PDF;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ArtistsExport;

class ArtistController extends Controller
{
    /**
     * Muestra una lista de los recursos.
     */
    public function index()
    {
        // Pagina los artistas, 20 por página
        $artists = Artist::paginate(20);
        // Retorna la vista 'artists.index' con los artistas paginados
        return view('artists.index')->with('artists', $artists);
    }

    /**
     * Muestra el formulario para crear un nuevo recurso.
     */
    public function create()
    {
        // Obtiene todos los artistas
        $artists = Artist::all();
        // Retorna la vista 'artists.create' con todos los artistas
        return view('artists.create')->with('artists', $artists);
    }

    /**
     * Almacena un recurso recién creado en el almacenamiento.
     */
    public function store(ArtistRequest $request)
    {
        // Verifica si se ha subido una foto
        if ($request->hasFile('photo')) {
            // Genera un nombre único para la foto y la mueve a la carpeta 'images'
            $photo = time() . '.' . $request->photo->extension();
            $request->photo->move(public_path('images'), $photo);
        } else {
            $photo = null;
        }

        // Crea un nuevo artista y asigna los valores del request
        $artist = new Artist;
        $artist->document = $request->document;
        $artist->fullname = $request->fullname;
        $artist->gender = $request->gender;
        $artist->birthdate = $request->birthdate;
        $artist->photo = $photo;
        $artist->phone = $request->phone;
        $artist->email = $request->email;
        $artist->password = bcrypt($request->password);

        // Guarda el artista y redirige con un mensaje de éxito
        if ($artist->save()) {
            return redirect('artists')->with('message', 'The artist: ' . $artist->fullname . ' was successfully added');
        }
    }

    /**
     * Muestra el recurso especificado.
     */
    public function show(Artist $artist)
    {
        // Retorna la vista 'artists.show' con el artista especificado
        return view('artists.show')->with('artist', $artist);
    }

    /**
     * Muestra el formulario para editar el recurso especificado.
     */
    public function edit(Artist $artist)
    {
        // Retorna la vista 'artists.edit' con el artista especificado
        return view('artists.edit')->with('artist', $artist);
    }

    /**
     * Actualiza el recurso especificado en el almacenamiento.
     */
    public function update(Request $request, Artist $artist)
    {
        // Verifica si se ha subido una nueva foto
        if ($request->hasFile('photo')) {
            // Genera un nombre único para la foto y la mueve a la carpeta 'images'
            $photo = time() . '.' . $request->photo->extension();
            $request->photo->move(public_path('images'), $photo);
        } else {
            // Si no se sube una nueva foto, usa la foto original
            $photo = $request->originphoto;
        }

        // Asigna los valores del request al artista
        $artist->document = $request->document;
        $artist->fullname = $request->fullname;
        $artist->gender = $request->gender;
        $artist->birthdate = $request->birthdate;
        $artist->photo = $photo;
        $artist->phone = $request->phone;
        $artist->email = $request->email;

        // Guarda el artista y redirige con un mensaje de éxito
        if ($artist->save()) {
            return redirect('artists')->with('message', 'The artist: ' . $artist->fullname . ' was successfully updated!');
        }
    }

    /**
     * Elimina el recurso especificado del almacenamiento.
     */
    public function destroy(Artist $artist)
    {
        // Elimina el artista y redirige con un mensaje de éxito
        if ($artist->delete()) {
            return redirect('artists')->with('message', 'The artist: ' . $artist->fullname . ' was successfully deleted!');
        }
    }

    /**
     * Busca artistas según el término de búsqueda.
     */
    public function search(Request $request)
    {
        // Busca artistas por nombre y pagina los resultados
        $artists = Artist::names($request->q)->paginate(20);
        // Retorna la vista 'artists.search' con los resultados de la búsqueda
        return view('artists.search')->with('artists', $artists);
    }

    /**
     * Exporta la lista de artistas a un archivo PDF.
     */
    public function pdf()
    {
        // Obtiene todos los artistas
        $artists = Artist::all();
        // Genera un PDF con la vista 'artists.pdf' y los datos de los artistas
        $pdf = PDF::loadView('artists.pdf', compact('artists'));
        // Descarga el PDF generado
        return $pdf->download('allartists.pdf');
    }

    /**
     * Exporta la lista de artistas a un archivo Excel.
     */
    public function excel()
    {
        return Excel::download(new ArtistsExport, 'allartists.xlsx');
    }
}
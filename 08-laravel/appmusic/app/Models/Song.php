<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'ano_publicacion',
        'nombre_cancion',
        'artista',
        'genero',
        'photo'
        
        
    ];
    public function scopeNames($songs, $query)
{
    if (trim($query)) {
        $songs->where(function($songs) use ($query) {
            $songs->where('nombre_cancion', 'LIKE', "%$query%")
                  ->orWhere('artista', 'LIKE', "%$query%");
                 
        })->distinct(); // Asegura que los resultados sean únicos
    }
}
}






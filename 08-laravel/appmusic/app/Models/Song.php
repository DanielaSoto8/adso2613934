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
    //Relationship: Artist belongs to user
    public function user()
    {
        return $this->belongsTo('app\Models\Song');
    }
      //Relationship: Artist belongs to category
    public function song()
    {
        return $this->belongsTo('app\Models\Song');
    }
      //Relationship: Artist belongs to collection
    public function collection()
    {
        return $this->belongsTo('app\Models\Collection');
    }

}



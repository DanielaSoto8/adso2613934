<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Song;

class SongSeeder extends Seeder
{


    public function run(): void
    {
        Song::create([
            'ano_publicacion' => 'Nintendo Switch',
            'nombre_cancion' => 'Nintendo',
            'artista' => 'Shakira',
            'genero' => 'Rock',

        ]);

        $cat = new Song();
        $cat->ano_publicacion = 'Xbox One';
        $cat->artista = 'Microsoft  ';
        $cat->genero = '2020-11-29';
       
        $cat->save();

        $cat = new Song();
        $cat->ano_publicacion = 'Xbox One X ';
        $cat->artista = 'Microsoft M';
        $cat->genero = '2020-11-29';
        
        $cat->save();

        $cat = new Song();
        $cat->ano_publicacion = 'Xbox One S';
        $cat->artista = 'Microsoft ';
        $cat->genero = '2020-11-29';
        $cat->save();
    }
}

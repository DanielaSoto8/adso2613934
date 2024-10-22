<?php
// app/Exports/ArtistsExport.php

namespace App\Exports;

use App\Models\Artist;
use Maatwebsite\Excel\Concerns\FromCollection;

class ArtistsExport implements FromCollection
{
    /**
     * Retorna una colección de todos los artistas.
     */
    public function collection()
    {
        return Artist::all();
    }
}
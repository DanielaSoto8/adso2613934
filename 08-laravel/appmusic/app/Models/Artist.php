<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'document',
        'fullname',
        'gender',
        'birthdate',
        'photo',
        'phone',
        'email',
        
    ];
    //Relationship: Category has many artists

    public function scopeNames($artists, $query)
    {
        if (trim($query)) {
            $artists->where(function($artists) use ($query) {
                $artists->where('fullname', 'LIKE', "%$query%")
                      ->orWhere('document', 'LIKE', "%$query%");
                     
            })->distinct(); // Asegura que los resultados sean únicos
        }
    }
}

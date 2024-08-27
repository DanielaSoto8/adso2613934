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
        'name',
        'image',
        'manufacturer',
        'releasedate',
        'description',
        
    ];
    //Relationship: Category has many artists
    public function artists()
    {
        return $this->hasMany('app\Models\Artist');
    }
}

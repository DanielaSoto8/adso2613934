<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Collection extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'artist_id',
        'user_id',
        
    ];
    //Relationship: Collection belongs to user
    public function user()
    {
        return $this->belongsTo('app\Models\User');
    }
     //Relationship: Collection belongs to Artist
    public function artist()
    {
        return $this->belongsTo('app\Models\Artist');
    }
}
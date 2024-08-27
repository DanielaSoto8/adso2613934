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
        'title',
        'image',
        'developer',
        'releasedate',
        'category_id',
        'user_id',
        'price',
        'genre',
        'slider',
        'description',
        
    ];
    //Relationship: Artist belongs to user
    public function user()
    {
        return $this->belongsTo('app\Models\User');
    }
      //Relationship: Artist belongs to category
    public function category()
    {
        return $this->belongsTo('app\Models\Category');
    }
      //Relationship: Artist belongs to collection
    public function collection()
    {
        return $this->belongsTo('app\Models\Collection');
    }

}



<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{
    use  HasFactory, Notifiable;

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
        'password',
        'role'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    //Relationship : User has many games
    public function games() {
        return $this->hasMany('App\Models\Game');
    }

    //Relationship : User has many collections
    public function collections() {
        return $this->hasMany('App\Models\Collection');
    }

    public function scopeNames($users, $query)
    {
        if (trim($query)) {
            $users->where('fullname', 'LIKE' , "%$query%")
                ->orwhere('email', 'LIKE' , "%$query%")
                ->orwhere('document', 'LIKE' , "%$query%");
        }
    }
}


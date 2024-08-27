<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\artist;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $artist= new artist();
       $artist->title = 'Mario Oddyssey';
       $artist->developer = 'Nintendo';
       $artist->releasedate = '2013-11-21';
       $artist->category_id = 1;
       $artist->user_id = 1;
       $artist->price = 59 ;
       $artist->genre = '3D Adventure';
       $artist->description = 'This is a Mario. It is awesome.';
       $artist->save();

       $artist= new artist();
       $artist->title = 'Halo Infinity';
       $artist->developer = '343 Indutsry';
       $artist->releasedate = '2021-12-08';
       $artist->category_id = 3;
       $artist->user_id = 1;
       $artist->price = 60 ;
       $artist->genre = 'RPG';
       $artist->description = 'This is a Mario. It is awesome.';
       $artist->save();

       $artist= new artist();
       $artist->title = 'God of War';
       $artist->developer = 'Santa Monica ';
       $artist->releasedate = '2013-11-21';
       $artist->category_id = 4;
       $artist->user_id = 1;
       $artist->price = 59 ;
       $artist->genre = '3D Adventure';
       $artist->description = 'This is a Mario. It is awesome.';
       $artist->save();
    }
}

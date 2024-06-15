<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Game;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $game= new Game();
       $game->title = 'Mario Oddyssey';
       $game->developer = 'Nintendo';
       $game->releasedate = '2013-11-21';
       $game->category_id = 1;
       $game->user_id = 1;
       $game->price = 59 ;
       $game->genre = '3D Adventure';
       $game->description = 'This is a Mario. It is awesome.';
       $game->save();

       $game= new Game();
       $game->title = 'Halo Infinity';
       $game->developer = '343 Indutsry';
       $game->releasedate = '2021-12-08';
       $game->category_id = 3;
       $game->user_id = 1;
       $game->price = 60 ;
       $game->genre = 'RPG';
       $game->description = 'This is a Mario. It is awesome.';
       $game->save();

       $game= new Game();
       $game->title = 'God of War';
       $game->developer = 'Santa Monica ';
       $game->releasedate = '2013-11-21';
       $game->category_id = 4;
       $game->user_id = 1;
       $game->price = 59 ;
       $game->genre = '3D Adventure';
       $game->description = 'This is a Mario. It is awesome.';
       $game->save();
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{

    
    public function run(): void
    {
        Category::create([
            'name' => 'Nintendo Switch',
        'manufacturer' => 'Nintendo',
        'releasedate' => '2017-03-03',
            'description' => 'This is a Nintendo Switch. It is awesome.',
    ]);

    $cat=new Category();
    $cat->name='Xbox One';
    $cat->manufacturer='Microsoft  ';
    $cat->releasedate='2020-11-29';
    $cat->description='This is an Xbox One. It is awesome.';
    $cat->save();

    $cat=new Category();
    $cat->name='Xbox One X ';
    $cat->manufacturer='Microsoft M';
    $cat->releasedate='2020-11-29';
    $cat->description='This is an Xbox One. It is awesome.';
    $cat->save();

    $cat=new Category();
    $cat->name='Xbox One S' ;
    $cat->manufacturer='Microsoft ';
    $cat->releasedate='2020-11-29';
    $cat->description='This is an Xbox One. It is awesome.';
    $cat->save();
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Using ORM eloquent

        $user = new User;
        $user->document=75000001;
        $user->fullname='John Wick';
        $user->gender='Male';    
        $user->birthdate='1988-10-07'; 
        $user->phone='310000001';  
        $user->email='johnwick@gmail.com';  
        $user->password= bcrypt('admin'); 
        $user->role='Administrator'; 
        $user->save();

        $user = new User;
        $user->document=75000002;
        $user->fullname='Daniela Valencia Soto';
        $user->gender='Female';    
        $user->birthdate='1994-12-30'; 
        $user->phone='310000001';  
        $user->email='danyvalenciasoto@gmail.com';  
        $user->password= bcrypt('admin'); 
        $user->role='Administrator'; 
        $user->save();

        //using DB Array
        DB::table('users')->insert([
            'document' => 75000003,
            'fullname' => 'Camilo Soto',
            'gender' => 'Female',
            'birthdate' => '1988-10-07',
            'phone' => '310000001',
            'email' => 'camilok@gmail.com',
            'password' => bcrypt('admin'),
            'role' => 'customer',
        ]);

    }
}

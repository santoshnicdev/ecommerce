<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
<<<<<<< HEAD
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
=======
use Illuminate\Support\Facades\Hash;
use App\Models\User;
>>>>>>> 9767e8cac331908db070d25adb1a4561e8cd917d

class create_user extends Seeder
{
    public function run()
    {
<<<<<<< HEAD
        //
        DB::table("user")->insert([
            "name"=> "Sam",
            "email"=> "sam@gmail.com",  
            "password"=> Hash::make("123")
        ]);

=======
        $user = User::create([
            "name"=> "Vijay",
            "email"=> "vijay@gmail.com",
            "password"=> Hash::make("123")
            ]);
            
>>>>>>> 9767e8cac331908db070d25adb1a4561e8cd917d
    }
    
}

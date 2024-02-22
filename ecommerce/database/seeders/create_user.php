<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class create_user extends Seeder
{
    public function run()
    {
        $user = User::create([
            "name"=> "Vijay",
            "email"=> "vijay@gmail.com",
            "password"=> Hash::make("123")
            ]);
            
    }
    
}

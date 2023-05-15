<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;                                // import User model

use Illuminate\Support\Facades\Hash;                // import Hash 

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin' ,
            'email' => 'admin@gmail.com' ,
            'role' => 'admin' ,
            'password' => Hash::make('superuser')
        ]);
    }
}

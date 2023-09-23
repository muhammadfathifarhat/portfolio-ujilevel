<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name'=>'Muhammad Fathi Farhat',
            'username'=>'fathi16',
            'password'=>'fathi16',
            'email'=>'mfathifarhat72@gmail.com',
            'photo'=>'profile-1.jpg',
        ]);
    }
}

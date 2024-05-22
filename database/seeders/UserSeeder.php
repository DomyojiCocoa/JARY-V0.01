<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
<<<<<<< HEAD
=======
use App\Models\User;
>>>>>>> yeison

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
<<<<<<< HEAD
=======
        User::create([
            'name' => 'cocoa',
            'email' => 'cocoa@gmail.com',
            'password' => '1043637234'
        ]);
        User::factory()->count(30)->create();
>>>>>>> yeison
    }
}

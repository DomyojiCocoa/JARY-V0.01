<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name' => 'cocoa',
            'email' => 'cocoa@gmail.com',
            'password' => '1043637234'
        ])->assignRole('Administrador');
        User::factory(30)->create()->each(function ($user) {
            $user->assignRole('Usuario');
        });
    }
}

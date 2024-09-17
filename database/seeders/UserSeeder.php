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
            'name' => 'Cocoa',
            'email' => 'cocoa@gmail.com',
            'password' => '1043637234'
        ])->assignRole('Administrador');
        User::create([
            'name' => 'Yeison',
            'email' => 'yeison@gmail.com',
            'password' => '124'
        ])->assignRole('Administrador');
        User::create([
            'name' => 'Rafa',
            'email' => 'rafa@gmail.com',
            'password' => '123'
        ])->assignRole('Administrador');
        User::create([
            'name' => 'Jesusma',
            'email' => 'jesusma@gmail.com',
            'password' => '123'
        ])->assignRole('Administrador');
        User::factory(10)->create()->each(function ($user) {
            $user->assignRole('Usuario');
        });
    }
}

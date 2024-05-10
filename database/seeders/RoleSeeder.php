<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rol1 = Role::create(['name' => 'Administrador']);
        $rol2 = Role::create(['name' => 'Usuario']);
        
        Permission::create(['name' => 'CRUDsites'])->syncRoles($rol1);
        Permission::create(['name' => 'CRUDusers'])->syncRoles($rol1);
    }
}

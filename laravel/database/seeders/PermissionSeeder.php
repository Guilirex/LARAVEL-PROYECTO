<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Crear rols
        $adminRole = Role::create(['name' => 'admin']);
        $authorRole = Role::create(['name' => 'author']);
        $editorRole = Role::create(['name' => 'editor']);

        //Crear permisos
        Permission::create(['name' => 'files.*']);
        Permission::create(['name' => 'files.list']);
        Permission::create(['name' => 'files.create']);
        Permission::create(['name' => 'files.update']);
        Permission::create(['name' => 'files.read']);
        Permission::create(['name' => 'files.delete']);

        Permission::create(['name' => 'posts.*']);
        Permission::create(['name' => 'posts.list']);
        Permission::create(['name' => 'posts.create']);
        Permission::create(['name' => 'posts.update']);
        Permission::create(['name' => 'posts.read']);
        Permission::create(['name' => 'posts.delete']);

        Permission::create(['name' => 'places.*']);
        Permission::create(['name' => 'places.list']);
        Permission::create(['name' => 'places.create']);
        Permission::create(['name' => 'places.update']);
        Permission::create(['name' => 'places.read']);
        Permission::create(['name' => 'places.delete']);
        
        //Assignar permisos
        $adminRole->givePermissionTo(['places.*','files.*','posts.*']);
        $authorRole->givePermissionTo(['places.*','posts.*']);  
        $editorRole->givePermissionTo(['places.read','places.list','posts.read', 'posts.list', 'files.list', 'files.read']);
        
        //Assignar rol “admin” a l’usuari/a administrador/a ja creat a BD
        $name  = config('admin.name');
        $admin = User::where('name', $name)->first();
        $admin->assignRole('admin');
    }

}

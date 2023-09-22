<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $rolAdministrador= Role::create(['name'=>'Administrador']);
     
      Permission::create(['name'=>'Administrador'])->syncRoles($rolAdministrador);
      
    $user= new User;
    $user->name='Administrador';
    $user->email='admin@gmail.com';
    $user->password= bcrypt('12345678');
    $user->assignRole($rolAdministrador);
    $user->save();
    }





}

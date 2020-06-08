<?php

use Illuminate\Database\Seeder;

use App\User;
use Caffeinated\Shinobi\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Admin';
        $user->lastname = 'Pruebas';
        $user->tel = 59303056;
        $user->email = 'admin@admin.com';
        $user->password = '123456';
        $user->save();

        Role::create([
            'name' => 'Administrador del sistema',
            'slug' => 'admin',
            'description' => 'Usuario administrador',
            'special' => 'all-access'
        ]);

        $role = Role::create([
            'name' => 'Usuario',
            'slug' => 'user',
            'description' => 'Usuario Normal'
        ]);

        $role->permissions()->sync([11, 12, 13, 14, 15]);

        $user->roles()->attach(1);
    }
}

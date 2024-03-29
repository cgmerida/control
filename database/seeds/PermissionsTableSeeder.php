<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // PERMISOS DE USUARIOS
        Permission::create([
            'name' => 'Listar Usuarios',
            'slug' => 'users.index',
            'description' => 'Permite listar todos los usuarios del sistema'
        ]);
        
        Permission::create([
            'name' => 'Crear Usuarios',
            'slug' => 'users.create',
            'description' => 'Permite crear usuarios en el sistema'
        ]);
        
        Permission::create([
            'name' => 'Ver Usuario',
            'slug' => 'users.show',
            'description' => 'Permite ver la información de un usuario'
        ]);
        
        Permission::create([
            'name' => 'Editar Usuario',
            'slug' => 'users.edit',
            'description' => 'Permite editar usuarios en el sistema'
        ]);
        
        Permission::create([
            'name' => 'Eliminar Usuario',
            'slug' => 'users.destroy',
            'description' => 'Permite eliminar usuarios en el sistema'
        ]);


        // PERMISOS DE ROLES
        
        Permission::create([
            'name' => 'Listar Roles',
            'slug' => 'roles.index',
            'description' => 'Permite listar todos los roles del sistema'
        ]);
        
        Permission::create([
            'name' => 'Crear Roles',
            'slug' => 'roles.create',
            'description' => 'Permite crear roles en el sistema'
        ]);
        
        Permission::create([
            'name' => 'Ver Rol',
            'slug' => 'roles.show',
            'description' => 'Permite ver la información de un usuario'
        ]);
        
        Permission::create([
            'name' => 'Editar Rol',
            'slug' => 'roles.edit',
            'description' => 'Permite editar roles en el sistema'
        ]);
        
        Permission::create([
            'name' => 'Eliminar Rol',
            'slug' => 'roles.destroy',
            'description' => 'Permite eliminar roles en el sistema'
        ]);



        // PERMISOS PARA EDITAR PERSONAS

        Permission::create([
            'name' => 'Listar Personas',
            'slug' => 'families.index',
            'description' => 'Permite listar todos los personas del sistema'
        ]);
        
        Permission::create([
            'name' => 'Crear Personas',
            'slug' => 'families.create',
            'description' => 'Permite crear personas en el sistema'
        ]);
        
        Permission::create([
            'name' => 'Ver Persona',
            'slug' => 'families.show',
            'description' => 'Permite ver la información de un usuario'
        ]);
        
        Permission::create([
            'name' => 'Editar Persona',
            'slug' => 'families.edit',
            'description' => 'Permite editar personas en el sistema'
        ]);
        
        Permission::create([
            'name' => 'Eliminar Persona',
            'slug' => 'families.destroy',
            'description' => 'Permite eliminar personas en el sistema'
        ]);
    }
}

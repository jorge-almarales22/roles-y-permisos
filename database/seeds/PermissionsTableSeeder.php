<?php

use Caffeinated\Shinobi\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //users
        Permission::create([
        	'name' => 'navegar usaurios',
        	'slug' => 'users.index',
        	'description' => 'Lista y navega todos los usaurios del sistema',
        ]);
        Permission::create([
        	'name' => 'ver detalle de usuario',
        	'slug' => 'users.show',
        	'description' => 'ver en detalle cada usuario del sistema',
        ]);
        Permission::create([
        	'name' => 'edicion de usuarios',
        	'slug' => 'users.edit',
        	'description' => 'editar cualquier dato de un usuario del sistema',
        ]);
        Permission::create([
        	'name' => 'eliminar usuarios',
        	'slug' => 'users.destroy',
        	'description' => 'eliminar cualquier usuario del sistema',
        ]);

        //Roles
        Permission::create([
        	'name' => 'navegar roles',
        	'slug' => 'roles.index',
        	'description' => 'Lista y navega todos los roles del sistema',
        ]);
        Permission::create([
        	'name' => 'ver detalle de rol',
        	'slug' => 'roles.show',
        	'description' => 'ver en detalle cada rol del sistema',
        ]);
        Permission::create([
        	'name' => 'creacion de roles',
        	'slug' => 'roles.create',
        	'description' => 'crear cualquier dato de un rol del sistema',
        ]);
        Permission::create([
        	'name' => 'edicion de roles',
        	'slug' => 'roles.edit',
        	'description' => 'editar cualquier dato de un rol del sistema',
        ]);
        Permission::create([
        	'name' => 'eliminar rol',
        	'slug' => 'roles.destroy',
        	'description' => 'eliminar cualquier rol del sistema',
        ]);

        //Products.......................................................
         Permission::create([
        	'name' => 'navegar productos',
        	'slug' => 'products.index',
        	'description' => 'Lista y navega todos los productos del sistema',
        ]);
        Permission::create([
        	'name' => 'ver detalle de producto',
        	'slug' => 'products.show',
        	'description' => 'ver en detalle cada producto del sistema',
        ]);
        Permission::create([
        	'name' => 'creacion de productos',
        	'slug' => 'products.create',
        	'description' => 'crear cualquier dato de un producto del sistema',
        ]);
        Permission::create([
        	'name' => 'edicion de productos',
        	'slug' => 'products.edit',
        	'description' => 'editar cualquier dato de un producto del sistema',
        ]);
        Permission::create([
        	'name' => 'eliminar producto',
        	'slug' => 'products.destroy',
        	'description' => 'eliminar cualquier producto del sistema',
        ]);
    }
}

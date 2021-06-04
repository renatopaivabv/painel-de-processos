<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Permission;


class PermissionSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {

        $roles = config('accesscontrollist')['roles'];

        $acl_permissions = [];
        foreach($roles as $k => $permissions){
            foreach($permissions['permissions'] as $name => $display_name)
                if(!in_array($name, array_column($acl_permissions, 'name')))
                    $acl_permissions[] =
                        ['name' => $name, 'display_name' => $display_name];
        }

        $permissions_db = Permission::all()->map(function($p){
            return ['name' => $p->name, 'display_name' => $p->display_name];
        })->toArray();

        foreach($acl_permissions as $p){
            if(!in_array($p['name'], array_column($permissions_db, 'name')))
                Permission::factory()->create(
                    ['name'=> $p['name'], 'display_name' => $p['display_name']]
                );
        }
    }
}

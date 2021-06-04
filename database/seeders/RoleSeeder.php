<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $roles = config('accesscontrollist')['roles'];

        $roles_db = Role::all()->map(function($p){
            return $p->name;
        })->toArray();

        foreach($roles as $role => $array){
            if(!in_array($role, $roles_db)){
                $data = $roles[$role]['data'];
                //Criar Papel no banco
                $newRole = Role::factory()->create([
                    'name'=> $role,
                    'display_name'=> $data['display_name'],
                    'description' => $data['description']
                ]);
                //Definir permissões desse papel no banco
                foreach($roles[$role]['permissions'] as $k => $v){
                    if($p = Permission::where('name', $k)->first()){
                        $newRole->permissions()->attach($p);
                    }
                }
            }else{
                echo $role . " já inluído" . PHP_EOL;
            }

        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Permission;

class RoleSeeder extends Seeder
{
    private $descriptions =[
        'admin' => 'Administrador do sistema',
        'chief' => 'Diretor da unidade',
        'manager' => 'Coordenador',
        'user' => 'Usuário com menores permissões',
    ];
    private $roles = [
    'admin' => [
        'user-create',
        'user-show',
        'user-edit',
        'user-destroy',
        'role-create',
        'role-show',
        'role-edit',
        'role-destroy',
        'permission-create',
        'permission-show',
        'permission-edit',
        'permission-destroy',
        'unity-create',
        'unity-show',
        'unity-edit',
        'unity-destroy'
    ],
    'chief' =>[
        'unity-show',
        'unity-edit',
        'coordination-create',
        'coordination-show',
        'coordination-edit',
        'coordination-destroy'
    ],
    'manager' => [
        'coordination-show',
        'coordination-edit',
        'category-create',
        'category-show',
        'category-edit',
        'category-destroy',
        'process-create',
        'process-show',
        'process-edit',
        'process-destroy'
    ],
    'user' => [
        'category-show',
        'category-edit',
        'process-show',
        'process-edit',
    ]
];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->roles as $role => $permissions){
            $newRole = Role::factory()->create([
                'name'=> $role,
                'display_name'=> ucfirst($role),
                'description' => $this->descriptions[$role]
            ]);

            foreach($permissions as $permission){
                if($p = Permission::where('name', $permission)->first()){
                    $newRole->permissions()->attach($p);
                }
            }
        }
    }
}

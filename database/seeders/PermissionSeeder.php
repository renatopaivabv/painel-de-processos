<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionSeeder extends Seeder
{
    private $permissions = [
        'user-create' => 'Criar Usuário',
        'user-show' => 'Listar Usuários',
        'user-edit' => 'Editar Usuário',
        'user-destroy' => 'Excluir Usuário',
        'role-create' => 'Criar Regra',
        'role-show' => 'Listar Regras',
        'role-edit' => 'Editar Regra',
        'role-destroy' => 'Excluir Regra',
        'permission-create' => 'Criar Permissão',
        'permission-show' => 'Listar Permissões',
        'permission-edit' => 'Editar Permissão',
        'permission-destroy' => 'Excluir Permissão',
        'unity-create' => 'Criar Unidade',
        'unity-show' => 'Listar Unidades',
        'unity-edit' => 'Editar Unidade',
        'unity-destroy' => 'Excluir Unidade',
        'coordination-create' => 'Criar Coordenação',
        'coordination-show' => 'Listar Coordenações',
        'coordination-edit' => 'Editar Coordenação',
        'coordination-destroy' => 'Excluir Coordenação',
        'category-create' => 'Criar Categoria',
        'category-show' => 'Listar Categorias',
        'category-edit' => 'Editar Categoria',
        'category-destroy' => 'Excluir Categoria',
        'process-create' => 'Criar Processo',
        'process-show' => 'Listar Processos',
        'process-edit' => 'Editar Processo',
        'process-destroy' => 'Excluir Processo'
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        foreach($this->permissions as $k => $v){
            Permission::factory()->create(['name'=> $k, 'display_name' => $v]);
        }
    }
}

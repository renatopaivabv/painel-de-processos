<?php

return [
    'roles' => [
        'admin' => [
            'data' => [
                'display_name' => 'Administrador',
                'description' => 'Administrador do sistema'
            ],
            'permissions' => [
                'user.index' => 'Listar Usuários',
                'user.create' => 'Criar Usuário',
                'user.edit' => 'Editar Usuário',
                'user.destroy' => 'Excluir Usuário',
                'role.index' => 'Listar Regras',
                'role.create' => 'Criar Regra',
                'role.edit' => 'Editar Regra',
                'role.destroy' => 'Excluir Regra',
                'permission.index' => 'Listar Permissões',
                'permission.create' => 'Criar Permissão',
                'permission.edit' => 'Editar Permissão',
                'permission.destroy' => 'Excluir Permissão',
                'unity.index' => 'Listar Unidades',
                'unity.create' => 'Criar Unidade',
                'unity.edit' => 'Editar Unidade',
                'unity.destroy' => 'Excluir Unidade'
            ]
        ],
        'chief' =>[
            'data' => [
                'display_name' => 'Pró-Reitor',
                'description' => 'Pró-Reitor ou gerente do setor'
            ],
            'permissions' => [
                'unity.index' => 'Listar Unidades',
                'unity.edit' => 'Editar Unidade',
                'coordination.index' => 'Listar Coordenações',
                'coordination.create' => 'Criar Coordenação',
                'coordination.edit' => 'Editar Coordenação',
                'coordination.destroy' => 'Excluir Coordenação'
            ],
        ],
        'manager' => [
            'data' => [
                'display_name' => 'Coordenador',
                'description' => 'Coordenador ou gerente da seção'
            ],
            'permissions' => [
                'coordination.index' => 'Listar Coordenações',
                'coordination.edit' => 'Editar Coordenação',
                'category.index' => 'Listar Categorias',
                'category.create' => 'Criar Categoria',
                'category.edit' => 'Editar Categoria',
                'category.destroy' => 'Excluir Categoria',
                'process.index' => 'Listar Processos',
                'process.create' => 'Criar Processo',
                'process.edit' => 'Editar Processo',
                'process.destroy' => 'Excluir Processo'
            ],
        ],
        'user' => [
            'data' => [
                'display_name' => 'Usuário comum',
                'description' => 'Usuário comum do sistema'
            ],
            'permissions' => [
                'category.index' => 'Listar Categorias',
                'category.edit' => 'Editar Categoria',
                'process.index' => 'Listar Processos',
                'process.edit' => 'Editar Processo',
            ]
        ]
    ]
];

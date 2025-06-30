<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    public function run(): void
    {
        // Permissões que os usuários COMUNS terão acesso
        $permissions = [
            'acessar produtos',
            'acessar categorias',
            'acessar marcas',
        ];

        // Criar permissões com guard web
        foreach ($permissions as $permission) {
            Permission::firstOrCreate([
                'name' => $permission,
                'guard_name' => 'web',
            ]);
        }

        // Criar papéis (roles)
        $admin = Role::firstOrCreate([
            'name' => 'admin',
            'guard_name' => 'web',
        ]);

        $comum = Role::firstOrCreate([
            'name' => 'comum',
            'guard_name' => 'web',
        ]);

        // Atribuir permissões ao perfil "comum"
        $comum->syncPermissions($permissions);
    }
}
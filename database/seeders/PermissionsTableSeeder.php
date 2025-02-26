<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // permission for users
        Permission::create(['name' => 'users index', 'guard_name' => 'web']);
        Permission::create(['name' => 'users create', 'guard_name' => 'web']);
        Permission::create(['name' => 'users edit', 'guard_name' => 'web']);
        Permission::create(['name' => 'users delete', 'guard_name' => 'web']);

        // permission for roles
        Permission::create(['name' => 'roles index', 'guard_name' => 'web']);
        Permission::create(['name' => 'roles create', 'guard_name' => 'web']);
        Permission::create(['name' => 'roles edit', 'guard_name' => 'web']);
        Permission::create(['name' => 'roles delete', 'guard_name' => 'web']);

         // permission for permissions
         Permission::create(['name' => 'permissions index', 'guard_name' => 'web']);
         Permission::create(['name' => 'permissions create', 'guard_name' => 'web']);
         Permission::create(['name' => 'permissions edit', 'guard_name' => 'web']);
         Permission::create(['name' => 'permissions delete', 'guard_name' => 'web']);

         // permission for posts
         Permission::create(['name' => 'posts index', 'guard_name' => 'web']);
         Permission::create(['name' => 'posts create', 'guard_name' => 'web']);
         Permission::create(['name' => 'posts edit', 'guard_name' => 'web']);
         Permission::create(['name' => 'posts delete', 'guard_name' => 'web']);
    }
}

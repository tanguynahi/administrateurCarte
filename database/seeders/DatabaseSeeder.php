<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\AdminSeeder;
use Illuminate\Support\Facades\DB;
use Database\Seeders\roles\RoleSeeder;
use Database\Seeders\permissions\PermissionSeeder;
use Database\Seeders\assign_permissions_to_role\AssignPermissionsToAdmin;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // DB::table('permissions')->delete();
        // DB::table('roles')->delete();
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([


            //create roles
            RoleSeeder::class,

            //create permission
            PermissionSeeder::class,

            //assign permission to admin role
            AssignPermissionsToAdmin::class,

            AdminSeeder::class
        ]);
    }
}

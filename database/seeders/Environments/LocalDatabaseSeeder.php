<?php

namespace Database\Seeders\Environments;

use Illuminate\Database\Seeder;

class LocalDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            \Database\Seeders\Management\RoleSeeder::class,
            \Database\Seeders\Management\UserSeeder::class,
            \Database\Seeders\Management\PermissionSeeder::class,
        ]);
    }
}

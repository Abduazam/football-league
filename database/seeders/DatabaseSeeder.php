<?php

namespace Database\Seeders;

use Database\Seeders\Environments\LocalDatabaseSeeder;
use Database\Seeders\Environments\ProductionDatabaseSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        if (app()->environment('local')) {
            $this->call(LocalDatabaseSeeder::class);
        } else {
            $this->call(ProductionDatabaseSeeder::class);
        }
    }
}

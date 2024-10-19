<?php

namespace Database\Seeders\Management;

use App\Contracts\Enums\Role\RoleEnum;
use App\Models\Role\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (RoleEnum::arrayable() as $role) {
            Role::query()->create([
                'name' => $role,
            ]);
        }
    }
}

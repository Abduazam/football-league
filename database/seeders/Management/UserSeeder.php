<?php

namespace Database\Seeders\Management;

use App\Contracts\Enums\Role\RoleEnum;
use App\Models\Role\Role;
use App\Models\User\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Role::query()->where('name', RoleEnum::ADMIN->value)->first();

        User::query()->create([
            'role_id' => $admin->id,
            'name' => 'Administrator',
            'email' => 'admin@example.com',
            'password' => 'password',
        ]);
    }
}

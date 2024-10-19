<?php

namespace Database\Seeders\Management;

use App\Contracts\Enums\Role\RoleEnum;
use App\Models\Permission\Permission;
use App\Models\Role\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Role::query()->where('name', RoleEnum::ADMIN->value)->first();

        $routes = collect(Route::getRoutes());

        $routes->each(function ($route) use ($admin) {
            $name = $route->getName();
            if ($name && Str::startsWith($name, 'dashboard.')) {
                $permission = Permission::query()->create(['name' => $name]);

                $admin->permissions()->attach($permission->id);
            }
        });
    }
}

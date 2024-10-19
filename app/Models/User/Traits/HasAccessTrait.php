<?php

namespace App\Models\User\Traits;

trait HasAccessTrait
{
    /**
     * Checks does user have provided role.
     *
     * @param string $name
     * @return bool
     */
    public function hasRole(string $name): bool
    {
        return $this->role->name === $name;
    }

    /**
     * Checks does user have provided permissions.
     *
     * @param string $name
     * @return bool
     */
    public function hasPermission(string $name): bool
    {
        $permissions = $this->role->permissions->pluck('name')->flip()->toArray();

        return isset($permissions[$name]);
    }
}

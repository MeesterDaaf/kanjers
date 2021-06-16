<?php

namespace App\Models;

use Spatie\Permission\Exceptions\GuardDoesNotMatch;
use Spatie\Permission\Models\Role as SpatieRole;

class Role extends SpatieRole
{
    public function hasPermit($permission): bool
    {
        if (config('permission.enable_wildcard_permission', false)) {
            return $this->hasWildcardPermission($permission, $this->getDefaultGuardName());
        }

        $permissionClass = $this->getPermissionClass();

        if (is_string($permission)) {
            $permission = $permissionClass->findByName($permission, $this->getDefaultGuardName());
        }

        if (is_int($permission)) {
            $permission = $permissionClass->findById($permission, $this->getDefaultGuardName());
        }

        if (!$this->getGuardNames()->contains($permission->guard_name)) {
            throw GuardDoesNotMatch::create($permission->guard_name, $this->getGuardNames());
        }

        ray($this->permissions->contains('id', $permission->id));
        return $this->permissions->contains('id', $permission->id);
    }
}

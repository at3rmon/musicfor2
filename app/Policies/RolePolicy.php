<?php

namespace App\Policies;

use App\Helpers\RoleEnum;
use App\Models\Role;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RolePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  User  $user
     * @return bool
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  User  $user
     * @param  Role  $role
     * @return bool
     */
    public function view(User $user, Role $role): bool
    {
        return $user->role->id === RoleEnum::SUPERADMIN;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  User  $user
     * @return bool
     */
    public function create(User $user): bool
    {
        return $user->role->id === RoleEnum::SUPERADMIN;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  User  $user
     * @param  Role  $role
     * @return bool
     */
    public function update(User $user, Role $role): bool
    {
        return $user->role->id === RoleEnum::SUPERADMIN;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  User  $user
     * @param  Role  $role
     * @return bool
     */
    public function delete(User $user, Role $role): bool
    {
        return $user->role->id === RoleEnum::SUPERADMIN;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  User  $user
     * @param  Role  $role
     * @return bool
     */
    public function restore(User $user, Role $role): bool
    {
        return $user->role->id === RoleEnum::SUPERADMIN;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  User  $user
     * @param  Role  $role
     * @return bool
     */
    public function forceDelete(User $user, Role $role): bool
    {
        return $user->role->id === RoleEnum::SUPERADMIN;
    }
}

<?php

namespace App\Policies;

use App\Helpers\RoleEnum;
use App\Models\Department;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DepartmentPolicy
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
     * @param  Department  $department
     * @return bool
     */
    public function view(User $user, Department $department): bool
    {
        return in_array($department->id, $user->departments()->allRelatedIds()->toArray())
            || $user->role->id === RoleEnum::SUPERADMIN
            || $user->role->id === RoleEnum::ADMIN
            || $user->role->id === RoleEnum::TEACHER;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  User  $user
     * @return bool
     */
    public function create(User $user): bool
    {
        return $user->role->id === RoleEnum::SUPERADMIN
            || $user->role->id === RoleEnum::ADMIN;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  User  $user
     * @param  Department  $department
     * @return bool
     */
    public function update(User $user, Department $department): bool
    {
        return $user->role->id === RoleEnum::SUPERADMIN
            || $user->role->id === RoleEnum::ADMIN
            || ($user->role->id === RoleEnum::TEACHER && in_array($department->id,
                $user->departments()->allRelatedIds()->toArray()));
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  User  $user
     * @param  Department  $department
     * @return bool
     */
    public function delete(User $user, Department $department): bool
    {
        return $user->role->id === RoleEnum::SUPERADMIN;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  User  $user
     * @param  Department  $department
     * @return bool
     */
    public function restore(User $user, Department $department): bool
    {
        return $user->role->id === RoleEnum::SUPERADMIN;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  User  $user
     * @param  Department  $department
     * @return bool
     */
    public function forceDelete(User $user, Department $department): bool
    {
        return $user->role->id === RoleEnum::SUPERADMIN;
    }
}

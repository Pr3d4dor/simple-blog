<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Category;
use Illuminate\Auth\Access\HandlesAuthorization;

class CategoryPolicy
{
    use HandlesAuthorization;

    public function create(User $user)
    {
        return $user->is_admin;
    }

    public function update(User $user, Category $category)
    {
        return $user->is_admin;
    }

    public function delete(User $user, Category $category)
    {
        return $user->is_admin;
    }
}

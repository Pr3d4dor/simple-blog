<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Post;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    public function view(User $user, Post $post)
    {
        return $user->getKey() === $post->user->getKey() || $user->is_admin;
    }

    public function update(User $user, Post $post)
    {
        return $user->getKey() === $post->user->getKey() || $user->is_admin;
    }

    public function delete(User $user, Post $post)
    {
        return $user->getKey() === $post->user->getKey() || $user->is_admin;
    }
}

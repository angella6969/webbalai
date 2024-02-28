<?php

namespace App\Policies;

<<<<<<< HEAD
use App\Models\Sejarah;
use App\Models\User;
use Illuminate\Auth\Access\Response;
=======
use Illuminate\Auth\Access\Response;
use App\Models\Sejarah;
use App\Models\User;
>>>>>>> 835f221c4bd9aa36a40ae3cf2e8249a9934a2b29

class SejarahPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Sejarah $sejarah): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Sejarah $sejarah): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Sejarah $sejarah): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Sejarah $sejarah): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Sejarah $sejarah): bool
    {
        //
    }
}

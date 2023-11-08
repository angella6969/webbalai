<?php

namespace App\Policies;

use App\Models\Daftar_informasi_publik;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class DaftarInformasiPublikPolicy
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
    public function view(User $user, Daftar_informasi_publik $daftarInformasiPublik): bool
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
    public function update(User $user, Daftar_informasi_publik $daftarInformasiPublik): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Daftar_informasi_publik $daftarInformasiPublik): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Daftar_informasi_publik $daftarInformasiPublik): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Daftar_informasi_publik $daftarInformasiPublik): bool
    {
        //
    }
}

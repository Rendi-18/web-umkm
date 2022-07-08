<?php

namespace App\Policies;

use App\Models\ProductKoperasi;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductKoperasiPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ProductKoperasi  $productKoperasi
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, ProductKoperasi $productKoperasi)
    {
        return $user->id == $productKoperasi->koperasi->user_id;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ProductKoperasi  $productKoperasi
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, ProductKoperasi $productKoperasi)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ProductKoperasi  $productKoperasi
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, ProductKoperasi $productKoperasi)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ProductKoperasi  $productKoperasi
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, ProductKoperasi $productKoperasi)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ProductKoperasi  $productKoperasi
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, ProductKoperasi $productKoperasi)
    {
        //
    }
}

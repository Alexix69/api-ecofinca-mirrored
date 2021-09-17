<?php

namespace App\Policies;

use App\Models\Delivery;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DeliveryPolicy
{
    use HandlesAuthorization;


//    public function before(User $user, $ability)
//    {
//        if ($user->isGranted(User::ROLE_SUPERADMIN)) {
//            return true;
//        }
//    }

    /**
     * Determine whether the user can view any models.
     *
     * @param User $user
     * @return mixed
     */
    // SLO GARANTIZA QUE SE TENGA UNA SESEIÓN
    public function viewAny(User $user)
    {
        return $user->isGranted(User::ROLE_FARM) || $user->isGranted(User::ROLE_COLLECTION_CENTER);
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param User $user
     * @param  \App\Models\Delivery  $delivery
     * @return mixed
     */
    public function view(User $user, Delivery $delivery)
    {
        // SOLO PUEDE VER LAS QUE LE PERTENECEN (ID)
        return ($user->isGranted(User::ROLE_FARM) && $delivery->user_id === $user->id)
            || ($user->isGranted(User::ROLE_COLLECTION_CENTER) && $delivery->for_user_id === $user->id);
    }

    /**
     * Determine whether the user can create models.
     *
     * @param User $user
     * @return mixed
     */
    //FUNCIONA
    public function create(User $user)
    {
        return $user->isGranted(User::ROLE_FARM);
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param User $user
     * @param  \App\Models\Delivery  $delivery
     * @return mixed
     */
    //PUEDE ACTUALKZAR SOLO EL DUEÑO DE FINCA QUE CREO LA ENTREGA
    public function update(User $user, Delivery $delivery)
    {
        return $user->isGranted(User::ROLE_FARM) && $user->id === $delivery->user_id;
    }

    // CREAR OTRO METODO PARA CONDICIONAR LA ACTUALIZACION DE CADA ROL DE USAURIO

    public function updateOfCollectionCenter(User $user, Delivery $delivery)
    {
        return $user->isGranted(User::ROLE_COLLECTION_CENTER) && $user->id === $delivery->for_user_id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param User $user
     * @param  \App\Models\Delivery  $delivery
     * @return mixed
     */
//    public function delete(User $user, Delivery $delivery)
//    {
//        return $user->isGranted(User::ROLE_USER);
//    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param User $user
     * @param  \App\Models\Delivery  $delivery
     * @return mixed
     */
    public function restore(User $user, Delivery $delivery)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param User $user
     * @param  \App\Models\Delivery  $delivery
     * @return mixed
     */
    public function forceDelete(User $user, Delivery $delivery)
    {
        //
    }
}

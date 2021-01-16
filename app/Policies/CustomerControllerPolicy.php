<?php

namespace App\Policies;

use \App\Models\CustomerController;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CustomerControllerPolicy
{
    use HandlesAuthorization;

    /**
     * @param User $user
     * @return bool
     */
    public function before(User $user)
    {
        //return true if user has super power
    }

        /**
     * @param User $user
     * @return bool
     */
    public function index(User $user)
    {
        return true;
    }
    /**
     * Determine whether the user can view the CustomerController.
     *
     * @param  User  $user
     * @param  CustomerController  $customerController
     * @return mixed
     */
    public function view(User $user, CustomerController  $customerController)
    {
        return true;
    }
    /**
     * Determine whether the user can create CustomerController.
     *
     * @param  User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }
    /**
     * Determine whether the user can update the CustomerController.
     *
     * @param User $user
     * @param  CustomerController  $customerController
     * @return mixed
     */
    public function update(User $user, CustomerController  $customerController)
    {
        return true;
    }
    /**
     * Determine whether the user can delete the CustomerController.
     *
     * @param User  $user
     * @param  CustomerController  $customerController
     * @return mixed
     */
    public function delete(User $user, CustomerController  $customerController)
    {
        return true;
    }

}

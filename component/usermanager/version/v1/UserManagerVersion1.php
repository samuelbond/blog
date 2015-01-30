<?php
/**
 * Created by PhpStorm.
 * User: samuel
 * Date: 30/01/15
 * Time: 17:53
 */

namespace component\usermanager\version\v1;


use component\usermanager\User;
use component\usermanager\UserManager;
use component\usermanager\UserManagerInterface;

class UserManagerVersion1 extends UserManager implements UserManagerInterface {

    public function loginUser(User $user)
    {
        // TODO: Implement loginUser() method.
    }

    public function isUserLoggedIn(User $user)
    {
        // TODO: Implement isUserLoggedIn() method.
    }

    public function isUserAllowedToPerformAction($action, User $user)
    {
        // TODO: Implement isUserAllowedToPerformAction() method.
    }

    public function logOutUser(User $user)
    {
        // TODO: Implement logOutUser() method.
    }

    public function getUser(User $user)
    {
        // TODO: Implement getUser() method.
    }

    public function getAllUsers()
    {
        // TODO: Implement getAllUsers() method.
    }

    public function createNewUser(User $user)
    {
        // TODO: Implement createNewUser() method.
    }

    public function editUser(User $user)
    {
        // TODO: Implement editUser() method.
    }


} 
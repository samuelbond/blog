<?php
/**
 * Created by PhpStorm.
 * User: samuel
 * Date: 30/01/15
 * Time: 17:48
 */

namespace component\usermanager;


interface UserManagerInterface {

    public function loginUser(User $user);

    public function isUserLoggedIn(User $user);

    public function isUserAllowedToPerformAction($action, User $user);

    public function logOutUser(User $user);

    public function getUser(User $user);

    public function getAllUsers();

    public function createNewUser(User $user);

    public function editUser(User $user);

} 
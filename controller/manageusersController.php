<?php
/**
 * Created by PhpStorm.
 * User: samuel
 * Date: 01/02/15
 * Time: 17:43
 */

namespace controller;


use application\BaseController;
use component\usermanager\User;
use component\usermanager\UserManager;
use component\usermanager\UserManagerInjector;

class manageusersController extends BaseController{

    public function index()
    {
        $currentAction = "MANAGE_USER";
        $this->setPageTitle("Manage Users");
        $injector = new UserManagerInjector();
        $userManager = (new UserManager())->getInstance($injector);
        if($userManager->isUserLoggedIn())
        {
            $user = new User();
            $user->setUserId($userManager->getCurrentSessionUserId());
            $profile = $userManager->getUser($user);


            if($userManager->isUserAllowedToPerformAction($currentAction, $profile) === false)
            {
                $this->actionIsNotAllowed();
                $this->registry->template->loadView("content");
                return;
            }
            else
            {

            }

            if(is_null($profile->getProfilePicture()))
            {
                $profile->useDefaultProfilePicture();
            }
            $this->registry->template->profile = $profile;
            $this->registry->template->loadView("manageusers");
            return;
        }

        header("Location: signin?profile=false");
    }
} 
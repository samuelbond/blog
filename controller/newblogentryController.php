<?php
/**
 * Created by PhpStorm.
 * User: samuel
 * Date: 02/02/15
 * Time: 16:10
 */

namespace controller;


use application\BaseController;
use component\usermanager\User;
use component\usermanager\UserManager;
use component\usermanager\UserManagerInjector;

class newblogentryController extends BaseController{

    public function index()
    {
        $currentAction = "CREATE_BLOG";
        $this->setPageTitle("Create New Blog Entry");
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


            $this->registry->template->profile = $profile;
            $this->registry->template->loadView("newblogentry");
            return;
        }

        header("Location: signin?profile=false");
    }
} 
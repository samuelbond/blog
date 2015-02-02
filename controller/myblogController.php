<?php
/**
 * Created by PhpStorm.
 * User: samuel
 * Date: 02/02/15
 * Time: 11:57
 */

namespace controller;


use application\BaseController;
use component\blog\Blog;
use component\blog\BlogCategory;
use component\blog\BlogInjector;
use component\usermanager\User;
use component\usermanager\UserManager;
use component\usermanager\UserManagerInjector;

class myblogController extends BaseController{

    public function index()
    {
        $currentAction = "MANAGE_BLOG";
        $this->setPageTitle("My Blog");
        $injector = new UserManagerInjector();
        $userManager = (new UserManager())->getInstance($injector);
        if($userManager->isUserLoggedIn())
        {
            $user = new User();
            $user->setUserId($userManager->getCurrentSessionUserId());
            $profile = $userManager->getUser($user);
            $blogInjector = new BlogInjector();
            $blog = (new Blog())->getInstance($blogInjector);

            if($this->isPOSTRequest())
            {
                if(isset($_POST['new_category']))
                {
                    $currentAction = "MANAGE_ALL_BLOG";
                }
            }

            if($userManager->isUserAllowedToPerformAction($currentAction, $profile) === false)
            {
                $this->actionIsNotAllowed();
                $this->registry->template->loadView("content");
                return;
            }

            if($this->isPOSTRequest())
            {
                if(isset($_POST['new_category']))
                {
                    $category = $_POST['new_category'];
                    $newCategory = new BlogCategory();
                    $newCategory->setCategory($category);

                    if($blog->createNewCategory($newCategory))
                    {
                        $this->registry->template->success = "The New Category was successfully created";
                    }
                    else
                    {
                        $this->registry->template->error = "There was an error while trying to create the new category";
                    }
                }
            }

            $this->registry->template->profile = $profile;
            $this->registry->template->loadView("myblog");
            return;
        }

        header("Location: signin?profile=false");
    }
} 
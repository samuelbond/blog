<?php
/**
 * Created by PhpStorm.
 * User: samuel
 * Date: 03/02/15
 * Time: 22:39
 */

namespace controller;


use application\BaseController;
use component\blog\Blog;
use component\blog\BlogEntry;
use component\blog\BlogInjector;
use component\usermanager\User;
use component\usermanager\UserManager;
use component\usermanager\UserManagerInjector;

class blogController extends BaseController{

    public function index()
    {

    }

    public function entry($id)
    {
        $blogInjector = new BlogInjector();
        $blog = (new Blog())->getInstance($blogInjector);
        $blogEntry = new BlogEntry();
        $blogEntry->setEntryId($id);
        $this->registry->template->categories = $blog->getAllCategories();
        $this->registry->template->entry = $blog->getBlogEntryWithEntryId($blogEntry);
        $this->registry->template->reader = $this;
        $this->registry->template->loadView("entry");
        return true;
    }

    public function getUserDetail($userId)
    {
        $injector = new UserManagerInjector();
        $userManager = (new UserManager())->getInstance($injector);
        $user = new User();
        $user->setUserId($userId);

        $result = $userManager->getUser($user);

        if(is_null($result->getProfilePicture()))
        {
            $result->useDefaultProfilePicture();
        }

        return $result;
    }
} 
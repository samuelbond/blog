<?php
/**
 * Created by PhpStorm.
 * User: samuel
 * Date: 03/02/15
 * Time: 14:44
 */

namespace controller;


use application\BaseController;
use application\Paginator;
use application\Template;
use component\blog\Blog;
use component\blog\BlogEntry;
use component\blog\BlogInjector;
use component\usermanager\User;
use component\usermanager\UserManager;
use component\usermanager\UserManagerInjector;

class publishblogController extends BaseController{

    use Paginator;
    public function index()
    {
        $currentAction = "MANAGE_ALL_BLOG";
        $this->setPageTitle("Manage Unpublished Blog Entries");
        $injector = new UserManagerInjector();
        $userManager = (new UserManager())->getInstance($injector);
        if($userManager->isUserLoggedIn())
        {
            $user = new User();
            $user->setUserId($userManager->getCurrentSessionUserId());
            $profile = $userManager->getUser($user);
            $blogInjector = new BlogInjector();
            $blog = (new Blog())->getInstance($blogInjector);


            if($userManager->isUserAllowedToPerformAction($currentAction, $profile) === false)
            {
                $this->actionIsNotAllowed();
                $this->registry->template->loadView("content");
                return false;
            }

            if(isset($_GET['publish']))
            {

                $entryId = $_GET['publish'];
                $entry = new BlogEntry();
                $entry->setId($entryId);

                  if($blog->publishBlogEntry($entry))
                    {
                        $this->registry->template->success = "Blog entry has been published successfully";
                    }
                    else
                    {
                        $this->registry->template->error = "Failed to publish blog entry";
                    }

            }

            if(isset($_GET['remove']))
            {

                $entryId = $_GET['remove'];
                $entry = new BlogEntry();
                $entry->setId($entryId);

                if($blog->publishBlogEntry($entry))
                {
                    $this->registry->template->success = "Blog entry has been removed successfully";
                }
                else
                {
                    $this->registry->template->error = "Failed to remove blog entry";
                }

            }


            $allAlerts = $blog->getAllBlogEntryAwaitingPublish();
            $currentPage = ((isset($_GET['page'])) ? $_GET['page'] : 1);
            $this->registry->template->alerts = $this->pagination($allAlerts, $currentPage);
            $this->registry->template->totalPages = $this->getNumberOfTotalPages();
            $this->registry->template->currentPage = $currentPage;
            $this->registry->template->profile = $profile;
            $this->registry->template->publishBlog = $this;
            $this->registry->template->loadView("alerts");
            return true;
        }

        header("Location: signin?profile=false");
        return false;
    }

    public function getUserDetail($userId)
    {
        $injector = new UserManagerInjector();
        $userManager = (new UserManager())->getInstance($injector);
        $user = new User();
        $user->setUserId($userId);

        $result = $userManager->getUser($user);
        $u = array("name" => $result->getFullName(), "email" => $result->getEmail());

        return $u;
    }
} 
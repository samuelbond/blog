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
            $idEntry = 0;
            $selectedBlog = null;
            if(isset($_GET['publish']))
            {
                $idEntry = $_GET['publish'];
                $blogEntry = new BlogEntry();
                $blogEntry->setId($idEntry);
                $selectedBlog = $blog->getBlogEntry($blogEntry);
            }

            //Template::dump($profile);
            if(isset($_GET['publish']) && !is_object($selectedBlog))
            {
                $this->registry->template->error = "Failed to get the requested blog entry, please check your details and try again";
                $this->registry->template->loadView("content");
                return false;
            }

            if($userManager->isUserAllowedToPerformAction($currentAction, $profile) === false ||( isset($_GET['publish']) && $idEntry === 0 || is_object($selectedBlog) && intval($profile->getUserId()) !== intval($selectedBlog->getEntryAuthor())))
            {
                $this->actionIsNotAllowed();
                $this->registry->template->loadView("content");
                return false;
            }

            if($this->isPOSTRequest())
            {
                $title = $_POST['edit_title'];
                $entry = $_POST['edit_entry'];
                $entryId = $_POST['blog_entry'];
                $newEntry = new BlogEntry();
                $newEntry->setEntryAuthor($profile->getUserId());
                $newEntry->setEntry($entry);
                $newEntry->setEntryTitle($title);
                $newEntry->setId($entryId);

                if(isset($_POST['edit_title']) && isset($_POST['edit_entry']))
                {
                    if($blog->editBlogEntry($newEntry))
                    {
                        $this->registry->template->success = "Your blog entry has been updated successfully";
                    }
                    else
                    {
                        $this->registry->template->error = "Failed to update your blog entry";
                    }

                    $selectedBlog = $blog->getBlogEntry($newEntry);
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
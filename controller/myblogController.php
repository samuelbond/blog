<?php
/**
 * Created by PhpStorm.
 * User: samuel
 * Date: 02/02/15
 * Time: 11:57
 */

namespace controller;


use application\BaseController;
use application\Paginator;
use application\Template;
use component\blog\Blog;
use component\blog\BlogCategory;
use component\blog\BlogEntry;
use component\blog\BlogInjector;
use component\usermanager\User;
use component\usermanager\UserManager;
use component\usermanager\UserManagerInjector;

class myblogController extends BaseController{

    use Paginator;
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

            $idEntry = 0;
            $selectedBlog = null;
            if(isset($_GET['publish']))
            {
                $idEntry = $_GET['publish'];
                $blogEntry = new BlogEntry();
                $blogEntry->setId($idEntry);
                $selectedBlog = $blog->getBlogEntry($blogEntry);
            }

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

            if(isset($_GET['publish']))
            {
                $publish = $_GET['publish'];
                $publishRequest = new BlogEntry();
                $publishRequest->setId($publish);

                if($blog->createANewPublishRequest($publishRequest))
                {
                    $this->registry->template->success = "Your publish request has been submitted, your entry will be reviewed by the editor ";
                }
                else
                {
                    $this->registry->template->error = "Could not create a publish request for your blog entry";
                }
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


            $myblog = $blog->getAuthorsBlogEntries($user->getUserId());;
            $currentPage = ((isset($_GET['page'])) ? $_GET['page'] : 1);
            $this->registry->template->myblog = $this->pagination($myblog, $currentPage);
            $this->registry->template->totalPages = $this->getNumberOfTotalPages();
            $this->registry->template->currentPage = $currentPage;
            $this->registry->template->profile = $profile;
            $this->registry->template->loadView("myblog");
            return true;
        }

        header("Location: signin?profile=false");
        return false;
    }
} 
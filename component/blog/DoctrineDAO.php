<?php
/**
 * Created by PhpStorm.
 * User: samuel
 * Date: 02/02/15
 * Time: 12:07
 */

namespace component\blog;


use component\blog\BlogEntry;
use model\entities\BlogEntryCategory;

class DoctrineDAO extends BlogDAO{

    /**
     * @var \Doctrine\ORM\EntityManager
     */
    private $entityManager;

    private $currentEntity;

    /**
     * Creates a new blog entry
     * @param BlogEntry $blogEntry
     * @return bool
     */
    public function insertNewBlogEntry(BlogEntry $blogEntry)
    {
        $newBlogEntry = new \model\entities\BlogEntry();
        $newBlogEntry->setEntryId($this->randomAlphaNumericGenerator(10));
        $newBlogEntry->setEntryTitle($blogEntry->getEntryTitle());
        $category = new BlogCategory();
        $category->setCategoryId($blogEntry->getEntryCategory());
        $this->getEntryCategory($category);
        $newBlogEntry->setEntryCategory($this->currentEntity);
        $newBlogEntry->setEntry($blogEntry->getEntry());
        $newBlogEntry->setEntryAuthor($blogEntry->getEntryAuthor());
        $newBlogEntry->setEntryCover($blogEntry->getEntryCover());
        $newBlogEntry->setDateCreated(new \DateTime());

        try
        {

            $this->entityManager->persist($newBlogEntry);
            $this->entityManager->flush();
            return true;
        }catch (\Exception $ex)
        {
            return false;
        }
    }

    /**
     * Searches for blog entries based on members which are set
     * @param BlogEntry $blogEntry
     * @return array
     */
    public function findBlogEntry(BlogEntry $blogEntry)
    {
        // TODO: Implement findBlogEntry() method.
    }

    /**
     * Gets a blog entry
     * @param $blogEntryId
     * @return BlogEntry|null
     */
    public function getBlogEntry($blogEntryId)
    {
        // TODO: Implement getBlogEntry() method.
    }

    /**
     * Modifies a given blog entry
     * @param BlogEntry $blogEntry
     * @return bool
     */
    public function modifyBlogEntry(BlogEntry $blogEntry)
    {
        // TODO: Implement modifyBlogEntry() method.
    }

    /**
     * Adds a comment for a given blog entry
     * @param BlogEntry $blogEntry
     * @param BlogComment $blogComment
     * @return mixed
     */
    public function addCommentForBlogEntry(BlogEntry $blogEntry, BlogComment $blogComment)
    {
        // TODO: Implement addCommentForBlogEntry() method.
    }

    /**
     * Gets all blog entries
     * @return array
     */
    public function getAllBlogEntry()
    {
        // TODO: Implement getAllBlogEntry() method.
    }

    /**
     * Gets all blog entries in a given category
     * @param $entryCategory
     * @return array
     */
    public function getEntryInCategory($entryCategory)
    {
        // TODO: Implement getEntryInCategory() method.
    }

    /**
     * Delete a given blog entry
     * @param BlogEntry $blogEntry
     * @return bool
     */
    public function deleteBlogEntry(BlogEntry $blogEntry)
    {
        // TODO: Implement deleteBlogEntry() method.
    }

    /**
     * Publish a comment so it can be visible
     * @param BlogComment $blogComment
     * @return bool
     */
    public function publishBlogEntryComment(BlogComment $blogComment)
    {
        // TODO: Implement publishBlogEntryComment() method.
    }

    /**
     * Publish a given blog entry
     * @param BlogEntry $blogEntry
     * @return bool
     */
    public function publishBlogEntry(BlogEntry $blogEntry)
    {
        // TODO: Implement publishBlogEntry() method.
    }


    /**
     * @param mixed $entityManager
     */
    public function setEntityManager($entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * Gets a category
     * @param BlogCategory $category
     * @return BlogCategory
     */
    public function getEntryCategory(BlogCategory $category)
    {
       try
       {
           $obj = $this->entityManager->find("model\\entities\\BlogEntryCategory", $category->getCategoryId());
           $category = null;
           $category = new BlogCategory();
           $category->setCategory($obj->getCategory());
           $category->setCategoryId($obj->getId());
           $this->currentEntity = $obj;
           return $category;
       }catch (\Exception $ex)
       {
           return null;
       }
    }


    public function randomAlphaNumericGenerator($length)
    {
        srand ((double) microtime() * 10000000);
        $input = array ("A", "B", "C", "D", "E","F","G","H","I","J","K","L","M","N","O","P","Q",
            "R","S","T","U","V","W","X","Y","Z");
        $random_generator="";
        for($i=1;$i<$length+1;$i++)
        {
            if(rand(1,2) == 1)
            {
                $rand_index = array_rand($input);
                $random_generator .=$input[$rand_index];
            }
            else
            {
                $random_generator .=rand(1,10);
            }
        }
        return $random_generator;
    }

} 